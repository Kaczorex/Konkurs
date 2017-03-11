<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Transport extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('transports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->string('adress');
            $table->string('mark_vechicle');
            $table->integer('priority')->unsigned;
            $table->integer('time')->unsigned;
            $table->string('comments');
            $table->integer('driver')->unsigned;
            $table->date('date');
            $table->timestamps();
        });

       Schema::table('transports', function (Blueprint $table) {
            $table->foreign('users_id')
                    ->references('id')
                    ->on('users');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('transport');
    }

}
