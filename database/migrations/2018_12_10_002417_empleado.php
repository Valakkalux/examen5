<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empleado extends Migration
{
    
    public function up()
    {
        
Schema::create('empleados',function (Blueprint $table){
    $table->increments('ide');
    $table->string('nombre',40);

    $table->string('edad',1);

    $table->integer('idcine')->unsigned();
    $table->foreign('idcine')->references('idcine')->on('cines');

    $table->rememberToken();
    $table->timestamps();
  
    });
   
    }

    
    public function down()
     {
       Schema::drop('empleados');
     }
    }
    

    

  
