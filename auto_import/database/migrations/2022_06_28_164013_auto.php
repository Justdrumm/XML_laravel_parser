<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Auto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->integer('id');
            $table->integer('mark_id')->index()->comment('Марка');
            $table->integer('generation_id')->index()->comment('Поколени');
            $table->integer('year')->comment('Год производства');
            $table->integer('run')->comment('Пробег');
            $table->integer('color_id')->index()->comment('Цвет');
            $table->integer('body_type_id')->index()->comment('Тип кузова');
            $table->integer('engine_type_id')->index()->comment('Тип двигателя');
            $table->integer('transmission_id')->index()->comment('Тип трансмисии');
            $table->integer('gear_types_id')->index()->comment('Тип привода');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('auto');
    }
}
