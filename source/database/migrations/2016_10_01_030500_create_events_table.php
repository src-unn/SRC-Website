<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('description');
            $table->string('location', 255)->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->boolean('status');
            $table->string('type', 10);
            $table->integer('created_by')->unsigned();

            $table->softDeletes();
            $table->nullableTimestamps();

            $table->foreign('created_by')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
