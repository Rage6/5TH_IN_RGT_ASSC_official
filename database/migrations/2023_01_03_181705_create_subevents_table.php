<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subevents', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->datetime('start_time')->nullable();
            $table->datetime('end_time')->nullable();
            $table->string('iframe_map_src',1000)->nullable();
            $table->string('classes')->nullable();
            $table->string('description',10000)->nullable();
            $table->string('location')->nullable();
            $table->string('image_src')->nullable();
            $table->integer('event_parent_id')->nullable();
            $table->integer('subevent_parent_id')->nullable();
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
        Schema::dropIfExists('subevents');
    }
};
