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
        Schema::create('conflicts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('start_year');
            $table->integer('end_year');
            $table->boolean('unit_participated')->default(0);
            $table->boolean('bobcat_casualties')->default(0);
            $table->boolean('bobcat_recipients')->default(0);
            $table->boolean('member_participated')->default(0);
            $table->timestamps();

            $table->bigInteger('parent_id')
              ->unsigned()
              ->nullable()
              ->default(null);
            $table->foreign('parent_id')
              ->references('id')
              ->on('conflicts')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conflicts');
    }
};
