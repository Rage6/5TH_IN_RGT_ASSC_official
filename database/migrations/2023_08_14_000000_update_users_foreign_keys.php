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
        Schema::table('users', function (Blueprint $table) {
          $table->index('casualty_conflict_id');
          $table->foreign('casualty_conflict_id')
          ->references('id')
          ->on('conflicts')
          ->onUpdate('cascade')
          ->onDelete('cascade');
          $table->index('moh_conflict_id');
          $table->foreign('moh_conflict_id')
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
        Schema::dropIfExists('users');
    }
};
