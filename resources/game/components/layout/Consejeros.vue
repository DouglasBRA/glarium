<template>
  <div class="marcoSuperior">
    <div class="container">
      <div class="advisor mayor" :class="isActive(onMayor)" :title="$t('advisor.mayor.title')" @click='mayor'>
        <div class="titulo">{{$t('advisor.mayor.name')}}</div>
      </div>
      <div class="advisor general" :class="isActive(onGeneral)" :title="$t('advisor.general.title')" @click='general'>
        <div class="titulo">{{$t('advisor.general.name')}}</div>
      </div>
      <div class="advisor scientist" :class="isActive(onScientist)" :title="$t('advisor.scientist.title')" @click='scientist'>
        <div class="titulo">{{$t('advisor.scientist.name')}}</div>
      </div>
      <div class="advisor diplomat" :class="isActive(onDiplomat)" :title="$t('advisor.diplomat.title')" @click='diplomat'>
        <div class="titulo">{{$t('advisor.diplomat.name')}}</div>
      </div>
      <Notification></Notification>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import $modal from "Stores/modal.js";
import Notification from 'Components/layout/Notification.vue'
import $notification from 'Stores/notification'
import $movement from 'Stores/movement'
import $resources from 'Stores/resources'
import $city from 'Stores/city'
import $store from 'Stores/store'
import $config from 'Stores/config'
import $unit from 'Stores/unit'

export default {
    name: "Consejeros",
    components:{
        Notification
    },
    data(){
        return {
            onMayor:false,
            onGeneral:false,
            onScientist:false,
            onDiplomat:false
        }
    },
    methods:{
        isActive(advisor){
            return advisor ? 'active' : ''
        },
        mayor(){
            this.onMayor = false;
            axios("user/getMayor?page=1").then(res => {
                $modal.commit('openModal',{type:8,info:res.data})
            })
            .catch(err => {
                $notification.commit('show',{advisor:1,type:false,message:err});
            });
        },
        general(){
            this.onGeneral = false;
            $modal.commit('openModal',{type:7,info:{}})
        },
        scientist(){
            $modal.commit('openModal',{type:3,info:{}})
        },
        diplomat(){
            this.onDiplomat = false;
            axios.post("user/getMessages",{
                type:0,
                page:1
            }).then(res => {
                $modal.commit('openModal',{type:5,info:res.data})
            })
            .catch(err => {
                $notification.commit('show',{advisor:4,type:false,message:err});
            });
        },
        advisorsNotification(data){
            switch(data){
                case 'mayor':
                    this.onMayor = true;
                break;
                case 'general':
                    this.onGeneral = true;
                break;
                case 'scientist':
                    this.onScientist = true;
                break;
                case 'diplomat':
                    this.onDiplomat = true;
                break;
            }
        },
        checkMsg(){
            //Verifica si hay mensajes sin leer
            axios('user/unread')
            .then(res =>{
                if(res.data.message>0){
                    //Hay mensajes sin leer
                    this.onDiplomat = true;
                }
                if(res.data.mayor>0){
                    //Hay mensajes sin leer
                    this.onMayor = true;
                }
            })
            .catch(err =>{
                $notification.commit('show',{advisor:1,type:false,message:err});
            })
        },
        movement(data){
            switch(data.status){
                case 1:
                    //Retorno de recursos
                    $resources.commit('addApoint');
                    $resources.commit('addTradeShip',{ships:data.trade_ship});
                break;
                case 2:
                    //Aumento de recursos
                    if(data.city_id==this.city_id){
                        $resources.commit('produceResources',data.resources);
                    }
                break;
                case 3:
                    //Colonizar
                    $city.commit('reloadCities')
                    $resources.commit('addApoint');
                    $resources.commit('addTradeShip',{ships:data.trade_ship});
                    if(this.$route.name=='Island'){
                        if(this.$route.params.island==data.island_id){
                            $store.commit('reloadIslandData');
                        }
                    }
                break;
                case 4:
                    //Retorno de recursos
                    $resources.commit('addApoint');
                    $resources.commit('addTradeShip',{ships:data.trade_ship});
                    if(data.city_id==this.city_id){
                        $resources.commit('produceResources',data.resources);
                    }
                break;
                case 5:
                    //Retorno de colonizacion
                    $resources.commit('addApoint');
                    $resources.commit('addTradeShip',{ships:data.trade_ship});
                    $resources.commit('addGold',{gold:this.cost_gold});
                    if(this.city_id==data.city_from){
                        $resources.commit('produceResources',{wood:this.cost_wood});
                        $resources.commit('increasePopulation',{increasePopulation:this.cost_population})
                    }
                    if(this.$route.name=='Island'){
                        if(this.$route.params.island==data.island_id){
                            $store.commit('reloadIslandData');
                        }
                    }
                break;
            }
        }
    },
    computed:{
        city_id(){
            return $city.state.city_id;
        },
        cost_gold(){
            return $config.state.world.colonize.gold;
        },
        cost_wood(){
            return $config.state.world.colonize.wood;
        },
        cost_population(){
            return $config.state.world.colonize.population;
        },
        movement_length(){
            return $movement.state.movements.length;
        }
    },
    watch:{
        movement_length(newval,olval){
            if(newval>olval){
                this.onGeneral = true;
            }
        }
    },
    beforeMount(){
        $movement.dispatch('updateMovemenet')
        $unit.dispatch('updateUnit')
        this.checkMsg()
    },
    mounted(){
        this.$chUser.bind('advisors', (data) => {
            this.advisorsNotification(data.data)
        });
        this.$chUser.bind('movements', (data) => {
            this.movement(data.data)
        });
    }
};
</script>

<style lang="scss" scoped>
.marcoSuperior {
  z-index: 2;
  position: absolute;
  right: 5px;
}
.container{
  background-image: url('~Img/advisor/container.png');
  height: 130px;
  width: 394px;
  padding: 19px 0 0 16px;
}
.mayor{
  background-image: url('~Img/advisor/mayor.png');
}
.general{
  background-image: url('~Img/advisor/general.png');
}
.scientist{
  background-image: url('~Img/advisor/scientist.png');
}
.diplomat{
  background-image: url('~Img/advisor/diplomat.png');
}
.mayor.active{
  background-image: url('~Img/advisor/mayor_active.png');
}
.general.active{
  background-image: url('~Img/advisor/general_active.png');
}
.scientist.active{
  background-image: url('~Img/advisor/scientist_active.png');
}
.diplomat.active{
  background-image: url('~Img/advisor/diplomat_active.png');
}
.advisor{
  position: relative;
  float: left;
  left: 0;
  top: -1px;
  width: 90px;
  height: 108px;
  cursor: pointer;
}
.titulo{
  position: absolute;
  bottom: 0;
  width: 100%;
  text-align: center;
  font-size: 11px;
  padding: 2px 4px;
}
</style>
