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
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            // $table->integer('member_id')->nullable();
            $table->boolean('is_member')->default(0);
            // $table->integer('casualty_id')->nullable();
            $table->boolean('is_casualty')->default(0);
            // $table->integer('moh_id')->nullable();
            $table->boolean('is_moh')->default(0);
            $table->foreignId("user_id")->constrained()->onUpdate("cascade")->onDelete("cascade")->nullable();
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
        Schema::dropIfExists('links');
    }
};
