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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('photo',255);
            $table->string('slug',100);
            $table->date('first_day')->nullable();
            $table->date('last_day')->nullable();
            $table->string('location',255)->nullable();
            $table->string('form_options',10000)->nullable();
            $table->string('primary_image',255)->nullable();
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
        Schema::dropIfExists('events');
    }
};
