<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Colors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->charset = 'utf8mb4';
                $table->integer('id')->primary();
                $table->ipAddress('name');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
    {
        Schema::drop('colors');
    }

}
