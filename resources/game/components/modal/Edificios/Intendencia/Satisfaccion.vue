<template>
    <div class="my-3">
        <div class="gtitle text-center mb-1">Grado de satisfacción</div>
        <div class="text-justify mb-3">La satisfacción en tu ciudad viene impuesta desde diferentes elementos. Esta gráfica puede ayudarte a identificar problemas y posibilidades.</div>
        <div class="d-flex">
            <div class="flex-4">
                <div>
                    <div class="gtitle text-center mb-1">Bonuses</div>
                    <div class="d-flex">
                        <div class="flex-1 my-auto">Bonus básicos</div>
                        <div class="flex-4 d-flex my-2">
                            <div class="bg bg-base">
                                <img class="image" :src="require('Img/icon/city.png')">
                                <div>+196</div>
                            </div>
                            <div class="bg bg-yellow" v-if='capital==1'>
                                <img class="image" :src="require('Img/icon/crown.png')">
                                <div>+50</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="flex-1 my-auto">Vino</div>
                        <div class="flex-4 d-flex my-2" v-if='tavern!=0'>
                            <div class="bg bg-tavern">
                                <img class="image" :src="require('Img/icon/tavern.png')">
                                <div>+{{tavern}}</div>
                            </div>
                            <div class="bg bg-wine">
                                <img class="image" :src="require('Img/icon/icon_wine.png')">
                                <div>+{{wine_bonus}}</div>
                            </div>
                        </div>
                        <div class="flex-4 my-2" v-else>¡Aún no hay ninguna Taberna en esta ciudad!</div>
                    </div>
                </div>
                <div>
                    <div class="gtitle text-center mt-3 mb-1">Manutención</div>
                    <div class="d-flex">
                        <div class="flex-1 my-auto">Población:</div>
                        <div class="flex-4 my-2">
                            <div class="bg bgred">{{$money(population_now)}}</div>
                        </div>
                    </div>
                    <div class="d-flex" v-if='capital==0'>
                        <div class="flex-1 my-auto">Corrupcion:</div>
                        <div class="flex-4 my-2">
                            <div class="bg bg-corruption">{{$money(corruption)}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 text-center">
                <div>Nivel de satisfacción:</div>
                <div><img :src="require('Img/icon/happy.png')"></div>
                 <div>{{$money((tavern+wine_bonus+196+(capital==1 ? 50 : 0))-corruption)}}</div>
                <div>Feliz</div>
            </div>
        </div>
    </div>
</template>

<script>
import $resources from 'Stores/resources'
import $city from 'Stores/city'
import $config from 'Stores/config'
import $building from 'Stores/building'

export default {
    name:'Satisfaccion',
    computed:{
        is_corruption(){
            return $city.getters.getCorruption;
        },
        population_now(){
            return $resources.state.population.population_now;
        },
        corruption(){
            return $resources.getters.debuff;
        },
        debuff(){
            return this.population_now + this.corruption;
        },
        capital(){
            return $city.state.city.capital;
        },
        tavern(){
            return $building.getters.getBuildingLevel(5) * 12;
        },
        wine_bonus(){
            return ((($resources.state.population.wine*$config.state.world.bonus.tavern)/12))*60;
        },
    }
}
</script>

<style lang="scss" scoped>
    .bg-corruption{
        background-image: url('~Img/icon/bg_red.png');
        width:50%;
    }
    .bgred{
        background-image: url('~Img/icon/bg_red.png');
        width:60%;
    }
    .bg-base{
        background-image: url('~Img/icon/bg_lightviolet.png');
        width:30%;
    }
    .bg-yellow{
        background-image: url('~Img/icon/bg_yellow.png');
        width:15%;
    }
    .bg-tavern{
        background-image: url('~Img/icon/bg_violet.png');
        width:20%;
    }
    .bg-wine{
        background-image: url('~Img/icon/bg_redblue.png');
        width:30%;
    }
    .image{
        position: absolute;
        left: 5px;
    }
    .bg{
        position: relative;
        height:24px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding-right: 10px;
    }
</style>
