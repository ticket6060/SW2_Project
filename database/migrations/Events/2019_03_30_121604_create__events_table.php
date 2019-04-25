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
        Schema::create('_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('EventName');
            $table->integer('price')->length(255);
            $table->date('date');
            $table->time('time');
            $table->string('EventType');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_events');
    }
}
