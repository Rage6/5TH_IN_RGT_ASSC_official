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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('biography')->nullable();
            $table->string('current_img')->nullable();
            $table->string('veteran_img')->nullable();
            $table->string('tombstone_img')->nullable();
            $table->boolean('deceased')->default(0);
            $table->string('mailing_address')->nullable();
            $table->timestamp('expiration_date')->nullable();
            $table->string('rank')->nullable();
            $table->boolean('kia_or_mia')->default(0);
            $table->string('kia_location')->nullable();
            $table->string('injury_type')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('phone_number')->nullable();
            $table->boolean('phone_visible')->default(0);
            $table->boolean('email_visible')->default(0);
            $table->string('spouse')->nullable();
            $table->string('burial_site')->nullable();
            $table->string('kia_location')->nullable();
            $table->int('day_of_death')->nullable();
            $table->int('month_of_death')->nullable();
            $table->int('year_of_death')->nullable();
            $table->text('comments')->nullable();
            $table->string('unit')->nullable();
            $table->string('when_displayed')->nullable();
            $table->boolean('moh_recipient')->default(0);
            $table->int('day_of_moh_action')->nullable();
            $table->int('month_of_moh_action')->nullable();
            $table->int('year_of_moh_action')->nullable();
            $table->string('moh_locaction')->nullable();
            $table->string('moh_rank')->nullable();
            $table->text('citation')->nullable();
            $table->boolean('awarded_posthumously')->default(0);

            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->bigInteger('casualty_conflict_id')->unsigned();
            $table->bigInteger('moh_conflict_id')->unsigned();
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
