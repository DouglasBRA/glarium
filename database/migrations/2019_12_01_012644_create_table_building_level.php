<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTableBuildingLevel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_level', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('building_id');
            $table->integer('level');
            $table->integer('wood');
            $table->integer('wine');
            $table->integer('marble');
            $table->integer('glass');
            $table->integer('sulfur');
            $table->integer('time');

            $table->foreign('building_id')->references('id')->on('building');
        });

        DB::table('building_level')->insert(
            array(
                array('building_id' => 1,'level'=> 1,'wood' => 120,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 1,'level'=> 2,'wood' => 158,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 1,'level'=> 3,'wood' => 335,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 1,'level'=> 4,'wood' => 623,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 1,'level'=> 5,'wood' => 923,'wine' => 0,'marble'=> 285,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 1,'level'=> 6,'wood' => 1390,'wine' => 0,'marble'=> 551,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 1,'level'=> 7,'wood' => 2015,'wine' => 0,'marble'=> 936,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 1,'level'=> 8,'wood' => 2706,'wine' => 0,'marble'=> 1411,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 1,'level'=> 9,'wood' => 3661,'wine' => 0,'marble'=> 2091,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 2,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 2,'level'=> 1,'wood' => 64,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 8),
                array('building_id' => 2,'level'=> 2,'wood' => 68,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 2,'level'=> 3,'wood' => 115,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 2,'level'=> 4,'wood' => 263,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 2,'level'=> 5,'wood' => 382,'wine' => 0,'marble'=> 0,'glass'=> 225,'sulfur'=> 0,'time' => 5),
                array('building_id' => 2,'level'=> 6,'wood' => 626,'wine' => 0,'marble'=> 0,'glass'=> 428,'sulfur'=> 0,'time' => 5),
                array('building_id' => 2,'level'=> 7,'wood' => 982,'wine' => 0,'marble'=> 0,'glass'=> 744,'sulfur'=> 0,'time' => 5),
                array('building_id' => 2,'level'=> 8,'wood' => 1330,'wine' => 0,'marble'=> 0,'glass'=> 1089,'sulfur'=> 0,'time' => 5),
                array('building_id' => 2,'level'=> 9,'wood' => 2004,'wine' => 0,'marble'=> 0,'glass'=> 1748,'sulfur'=> 0,'time' => 5),
                array('building_id' => 3,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 3,'level'=> 1,'wood' => 160,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 3,'level'=> 2,'wood' => 288,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 3,'level'=> 3,'wood' => 442,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 3,'level'=> 4,'wood' => 626,'wine' => 0,'marble'=> 96,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 3,'level'=> 5,'wood' => 847,'wine' => 0,'marble'=> 211,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 3,'level'=> 6,'wood' => 1113,'wine' => 0,'marble'=> 349,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 3,'level'=> 7,'wood' => 1431,'wine' => 0,'marble'=> 515,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 3,'level'=> 8,'wood' => 1813,'wine' => 0,'marble'=> 714,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 3,'level'=> 9,'wood' => 2272,'wine' => 0,'marble'=> 953,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 4,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 4,'level'=> 1,'wood' => 49,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 4,'level'=> 2,'wood' => 114,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 4,'level'=> 3,'wood' => 195,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 4,'level'=> 4,'wood' => 296,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 4,'level'=> 5,'wood' => 420,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 4,'level'=> 6,'wood' => 574,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 4,'level'=> 7,'wood' => 766,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 4,'level'=> 8,'wood' => 1003,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 4,'level'=> 9,'wood' => 1297,'wine' => 0,'marble'=> 953,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 5,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 5,'level'=> 1,'wood' => 101,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 5,'level'=> 2,'wood' => 222,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 5,'level'=> 3,'wood' => 367,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 5,'level'=> 4,'wood' => 541,'wine' => 0,'marble'=> 94,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 5,'level'=> 5,'wood' => 750,'wine' => 0,'marble'=> 122,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 5,'level'=> 6,'wood' => 1001,'wine' => 0,'marble'=> 158,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 5,'level'=> 7,'wood' => 1302,'wine' => 0,'marble'=> 206,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 5,'level'=> 8,'wood' => 1663,'wine' => 0,'marble'=> 267,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 5,'level'=> 9,'wood' => 2097,'wine' => 0,'marble'=> 953,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 6,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 6,'level'=> 1,'wood' => 63,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 6,'level'=> 2,'wood' => 122,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 6,'level'=> 3,'wood' => 192,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 6,'level'=> 4,'wood' => 274,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 6,'level'=> 5,'wood' => 372,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 6,'level'=> 6,'wood' => 486,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 6,'level'=> 7,'wood' => 620,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 6,'level'=> 8,'wood' => 777,'wine' => 0,'marble'=> 359,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 6,'level'=> 9,'wood' => 962,'wine' => 0,'marble'=> 444,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 7,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 7,'level'=> 1,'wood' => 119,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 7,'level'=> 2,'wood' => 188,'wine' => 0,'marble'=> 35,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 7,'level'=> 3,'wood' => 269,'wine' => 0,'marble'=> 96,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 7,'level'=> 4,'wood' => 362,'wine' => 0,'marble'=> 167,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 7,'level'=> 5,'wood' => 471,'wine' => 0,'marble'=> 249,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 7,'level'=> 6,'wood' => 597,'wine' => 0,'marble'=> 345,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 7,'level'=> 7,'wood' => 742,'wine' => 0,'marble'=> 455,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 7,'level'=> 8,'wood' => 912,'wine' => 0,'marble'=> 584,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 7,'level'=> 9,'wood' => 1108,'wine' => 0,'marble'=> 733,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 8,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 8,'level'=> 1,'wood' => 273,'wine' => 0,'marble'=> 135,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 8,'level'=> 2,'wood' => 353,'wine' => 0,'marble'=> 212,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 8,'level'=> 3,'wood' => 445,'wine' => 0,'marble'=> 302,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 8,'level'=> 4,'wood' => 551,'wine' => 0,'marble'=> 405,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 8,'level'=> 5,'wood' => 673,'wine' => 0,'marble'=> 526,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 8,'level'=> 6,'wood' => 813,'wine' => 0,'marble'=> 665,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 8,'level'=> 7,'wood' => 974,'wine' => 0,'marble'=> 827,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 8,'level'=> 8,'wood' => 1159,'wine' => 0,'marble'=> 1015,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 8,'level'=> 9,'wood' => 1373,'wine' => 0,'marble'=> 1233,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 9,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 9,'level'=> 1,'wood' => 339,'wine' => 0,'marble'=> 123,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 9,'level'=> 2,'wood' => 423,'wine' => 0,'marble'=> 198,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 9,'level'=> 3,'wood' => 520,'wine' => 0,'marble'=> 285,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 9,'level'=> 4,'wood' => 631,'wine' => 0,'marble'=> 387,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 9,'level'=> 5,'wood' => 758,'wine' => 0,'marble'=> 504,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 9,'level'=> 6,'wood' => 905,'wine' => 0,'marble'=> 640,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 9,'level'=> 7,'wood' => 1074,'wine' => 0,'marble'=> 798,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 9,'level'=> 8,'wood' => 1269,'wine' => 0,'marble'=> 981,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 9,'level'=> 9,'wood' => 1492,'wine' => 0,'marble'=> 1194,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 10,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 10,'level'=> 1,'wood' => 185,'wine' => 0,'marble'=> 106,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 10,'level'=> 2,'wood' => 291,'wine' => 0,'marble'=> 160,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 10,'level'=> 3,'wood' => 413,'wine' => 0,'marble'=> 222,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 10,'level'=> 4,'wood' => 555,'wine' => 0,'marble'=> 295,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 10,'level'=> 5,'wood' => 720,'wine' => 0,'marble'=> 379,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 10,'level'=> 6,'wood' => 911,'wine' => 0,'marble'=> 475,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 10,'level'=> 7,'wood' => 1133,'wine' => 0,'marble'=> 587,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 10,'level'=> 8,'wood' => 1390,'wine' => 0,'marble'=> 716,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 10,'level'=> 9,'wood' => 1686,'wine' => 0,'marble'=> 865,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 11,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 11,'level'=> 1,'wood' => 250,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 11,'level'=> 2,'wood' => 430,'wine' => 0,'marble'=> 104,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 11,'level'=> 3,'wood' => 664,'wine' => 0,'marble'=> 237,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 11,'level'=> 4,'wood' => 968,'wine' => 0,'marble'=> 410,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 11,'level'=> 5,'wood' => 1364,'wine' => 0,'marble'=> 635,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 11,'level'=> 6,'wood' => 1878,'wine' => 0,'marble'=> 928,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 11,'level'=> 7,'wood' => 2546,'wine' => 0,'marble'=> 1309,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 11,'level'=> 8,'wood' => 3415,'wine' => 0,'marble'=> 1803,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 11,'level'=> 9,'wood' => 4544,'wine' => 0,'marble'=> 2446,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 12,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 12,'level'=> 1,'wood' => 274,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 12,'level'=> 2,'wood' => 467,'wine' => 0,'marble'=> 116,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 12,'level'=> 3,'wood' => 718,'wine' => 0,'marble'=> 255,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 12,'level'=> 4,'wood' => 1045,'wine' => 0,'marble'=> 436,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 12,'level'=> 5,'wood' => 1469,'wine' => 0,'marble'=> 671,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 12,'level'=> 6,'wood' => 2021,'wine' => 0,'marble'=> 977,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 12,'level'=> 7,'wood' => 2738,'wine' => 0,'marble'=> 1375,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 12,'level'=> 8,'wood' => 3671,'wine' => 0,'marble'=> 1892,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 12,'level'=> 9,'wood' => 4883,'wine' => 0,'marble'=> 2564,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 13,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 13,'level'=> 1,'wood' => 274,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 13,'level'=> 2,'wood' => 467,'wine' => 0,'marble'=> 116,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 13,'level'=> 3,'wood' => 718,'wine' => 0,'marble'=> 255,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 13,'level'=> 4,'wood' => 1045,'wine' => 0,'marble'=> 436,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 13,'level'=> 5,'wood' => 1469,'wine' => 0,'marble'=> 671,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 13,'level'=> 6,'wood' => 2021,'wine' => 0,'marble'=> 977,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 13,'level'=> 7,'wood' => 2738,'wine' => 0,'marble'=> 1375,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 13,'level'=> 8,'wood' => 3671,'wine' => 0,'marble'=> 1892,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 13,'level'=> 9,'wood' => 4883,'wine' => 0,'marble'=> 2564,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 14,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 14,'level'=> 1,'wood' => 274,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 14,'level'=> 2,'wood' => 467,'wine' => 0,'marble'=> 116,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 14,'level'=> 3,'wood' => 718,'wine' => 0,'marble'=> 255,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 14,'level'=> 4,'wood' => 1045,'wine' => 0,'marble'=> 436,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 14,'level'=> 5,'wood' => 1469,'wine' => 0,'marble'=> 671,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 14,'level'=> 6,'wood' => 2021,'wine' => 0,'marble'=> 977,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 14,'level'=> 7,'wood' => 2738,'wine' => 0,'marble'=> 1375,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 14,'level'=> 8,'wood' => 3671,'wine' => 0,'marble'=> 1892,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 14,'level'=> 9,'wood' => 4883,'wine' => 0,'marble'=> 2564,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 15,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 15,'level'=> 1,'wood' => 274,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 15,'level'=> 2,'wood' => 467,'wine' => 0,'marble'=> 116,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 15,'level'=> 3,'wood' => 718,'wine' => 0,'marble'=> 255,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 15,'level'=> 4,'wood' => 1045,'wine' => 0,'marble'=> 436,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 15,'level'=> 5,'wood' => 1469,'wine' => 0,'marble'=> 671,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 15,'level'=> 6,'wood' => 2021,'wine' => 0,'marble'=> 977,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 15,'level'=> 7,'wood' => 2738,'wine' => 0,'marble'=> 1375,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 15,'level'=> 8,'wood' => 3671,'wine' => 0,'marble'=> 1892,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 15,'level'=> 9,'wood' => 4883,'wine' => 0,'marble'=> 2564,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 16,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 16,'level'=> 1,'wood' => 60,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 16,'level'=> 2,'wood' => 150,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 16,'level'=> 3,'wood' => 274,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 16,'level'=> 4,'wood' => 429,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 16,'level'=> 5,'wood' => 637,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 16,'level'=> 6,'wood' => 894,'wine' => 0,'marble'=> 176,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 16,'level'=> 7,'wood' => 1207,'wine' => 0,'marble'=> 326,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 16,'level'=> 8,'wood' => 1645,'wine' => 0,'marble'=> 540,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 16,'level'=> 9,'wood' => 2106,'wine' => 0,'marble'=> 791,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 17,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 17,'level'=> 1,'wood' => 712,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 17,'level'=> 2,'wood' => 5824,'wine' => 0,'marble'=> 1434,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 17,'level'=> 3,'wood' => 16048,'wine' => 0,'marble'=> 4546,'glass'=> 0,'sulfur'=> 3089,'time' => 5),
                array('building_id' => 17,'level'=> 4,'wood' => 36496,'wine' => 10898,'marble'=> 10770,'glass'=> 0,'sulfur'=> 10301,'time' => 5),
                array('building_id' => 17,'level'=> 5,'wood' => 77392,'wine' => 22110,'marble'=> 23218,'glass'=> 21188,'sulfur'=> 24725,'time' => 5),
                array('building_id' => 17,'level'=> 6,'wood' => 159184,'wine' => 44534,'marble'=> 48114,'glass'=> 42400,'sulfur'=> 53573,'time' => 5),
                array('building_id' => 17,'level'=> 7,'wood' => 322768,'wine' => 89382,'marble'=> 97906,'glass'=> 84824,'sulfur'=> 111269,'time' => 5),
                array('building_id' => 17,'level'=> 8,'wood' => 649936,'wine' => 179078,'marble'=> 197490,'glass'=> 169672,'sulfur'=> 226661,'time' => 5),
                array('building_id' => 17,'level'=> 9,'wood' => 1304272,'wine' => 358470,'marble'=> 396658,'glass'=> 339368,'sulfur'=> 457445,'time' => 5),
                array('building_id' => 18,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 18,'level'=> 1,'wood' => 712,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 18,'level'=> 2,'wood' => 5824,'wine' => 0,'marble'=> 1434,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 18,'level'=> 3,'wood' => 16048,'wine' => 0,'marble'=> 4546,'glass'=> 0,'sulfur'=> 3089,'time' => 5),
                array('building_id' => 18,'level'=> 4,'wood' => 36496,'wine' => 10898,'marble'=> 10770,'glass'=> 0,'sulfur'=> 10301,'time' => 5),
                array('building_id' => 18,'level'=> 5,'wood' => 77392,'wine' => 22110,'marble'=> 23218,'glass'=> 21188,'sulfur'=> 24725,'time' =>5),
                array('building_id' => 18,'level'=> 6,'wood' => 159184,'wine' => 44534,'marble'=> 48114,'glass'=> 42400,'sulfur'=> 53573,'time' => 5),
                array('building_id' => 18,'level'=> 7,'wood' => 322768,'wine' => 89382,'marble'=> 97906,'glass'=> 84824,'sulfur'=> 111269,'time' => 5),
                array('building_id' => 18,'level'=> 8,'wood' => 649936,'wine' => 179078,'marble'=> 197490,'glass'=> 169672,'sulfur'=> 226661,'time' => 5),
                array('building_id' => 18,'level'=> 9,'wood' => 1304272,'wine' => 358470,'marble'=> 396658,'glass'=> 339368,'sulfur'=> 457445,'time' => 5),
                array('building_id' => 19,'level'=> 0,'wood' => 0,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 0),
                array('building_id' => 19,'level'=> 1,'wood' => 274,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 19,'level'=> 2,'wood' => 467,'wine' => 0,'marble'=> 116,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 19,'level'=> 3,'wood' => 718,'wine' => 0,'marble'=> 255,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 19,'level'=> 4,'wood' => 1045,'wine' => 0,'marble'=> 436,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 19,'level'=> 5,'wood' => 1469,'wine' => 0,'marble'=> 671,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 19,'level'=> 6,'wood' => 2021,'wine' => 0,'marble'=> 977,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 19,'level'=> 7,'wood' => 2738,'wine' => 0,'marble'=> 1375,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 19,'level'=> 8,'wood' => 3671,'wine' => 0,'marble'=> 1892,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                array('building_id' => 19,'level'=> 9,'wood' => 4883,'wine' => 0,'marble'=> 2564,'glass'=> 0,'sulfur'=> 0,'time' => 5),
                /*array('building_id' => 20,'level'=> 1,'wood' => 274,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 20),
                array('building_id' => 20,'level'=> 2,'wood' => 467,'wine' => 0,'marble'=> 116,'glass'=> 0,'sulfur'=> 0,'time' => 60),
                array('building_id' => 20,'level'=> 3,'wood' => 718,'wine' => 0,'marble'=> 255,'glass'=> 0,'sulfur'=> 0,'time' => 90),
                array('building_id' => 20,'level'=> 4,'wood' => 1045,'wine' => 0,'marble'=> 436,'glass'=> 0,'sulfur'=> 0,'time' => 120),
                array('building_id' => 20,'level'=> 5,'wood' => 1469,'wine' => 0,'marble'=> 671,'glass'=> 0,'sulfur'=> 0,'time' => 150),
                array('building_id' => 20,'level'=> 6,'wood' => 2021,'wine' => 0,'marble'=> 977,'glass'=> 0,'sulfur'=> 0,'time' => 180),
                array('building_id' => 20,'level'=> 7,'wood' => 2738,'wine' => 0,'marble'=> 1375,'glass'=> 0,'sulfur'=> 0,'time' => 210),
                array('building_id' => 20,'level'=> 8,'wood' => 3671,'wine' => 0,'marble'=> 1892,'glass'=> 0,'sulfur'=> 0,'time' => 240),
                array('building_id' => 20,'level'=> 9,'wood' => 4883,'wine' => 0,'marble'=> 2564,'glass'=> 0,'sulfur'=> 0,'time' => 300),
                array('building_id' => 21,'level'=> 1,'wood' => 274,'wine' => 0,'marble'=> 0,'glass'=> 0,'sulfur'=> 0,'time' => 20),
                array('building_id' => 21,'level'=> 2,'wood' => 467,'wine' => 0,'marble'=> 116,'glass'=> 0,'sulfur'=> 0,'time' => 60),
                array('building_id' => 21,'level'=> 3,'wood' => 718,'wine' => 0,'marble'=> 255,'glass'=> 0,'sulfur'=> 0,'time' => 90),
                array('building_id' => 21,'level'=> 4,'wood' => 1045,'wine' => 0,'marble'=> 436,'glass'=> 0,'sulfur'=> 0,'time' => 120),
                array('building_id' => 21,'level'=> 5,'wood' => 1469,'wine' => 0,'marble'=> 671,'glass'=> 0,'sulfur'=> 0,'time' => 150),
                array('building_id' => 21,'level'=> 6,'wood' => 2021,'wine' => 0,'marble'=> 977,'glass'=> 0,'sulfur'=> 0,'time' => 180),
                array('building_id' => 21,'level'=> 7,'wood' => 2738,'wine' => 0,'marble'=> 1375,'glass'=> 0,'sulfur'=> 0,'time' => 210),
                array('building_id' => 21,'level'=> 8,'wood' => 3671,'wine' => 0,'marble'=> 1892,'glass'=> 0,'sulfur'=> 0,'time' => 240),
                array('building_id' => 21,'level'=> 9,'wood' => 4883,'wine' => 0,'marble'=> 2564,'glass'=> 0,'sulfur'=> 0,'time' => 300),*/
            )
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('building_level');
        Schema::enableForeignKeyConstraints();
    }
}
