<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('country');
            $table->decimal('price',8,2);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
