<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('transfer_id');
            $table->bigInteger('transferred_data');
            $table->integer('user_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->string('transfer_resource');
            $table->dateTime('transfer_datetime');
        });

        Schema::table('transfers', function($table){
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('company_id')->references('company_id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfers');
    }
}
