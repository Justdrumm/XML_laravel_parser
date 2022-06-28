<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auto', function (Blueprint $table) {
            $table->foreign('body_type_id')->references('id')->on('body_types')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('color_id')->references('id')->on('colors')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('mark_id')->references('id')->on('marks')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('generation_id')->references('id')->on('generations')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('engine_type_id')->references('id')->on('engine_types')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('transmission_id')->references('id')->on('transmissions')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('gear_types_id')->references('id')->on('gear_types')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
