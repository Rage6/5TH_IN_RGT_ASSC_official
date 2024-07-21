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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('spouse_name')->nullable();
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('conflicts')->nullable();
            $table->string('other_conflicts')->nullable();
            $table->string('unit_details')->nullable();
            $table->string('email');
            $table->string('comments')->nullable();
            $table->string('type')->nullable();
            $table->integer('guest_num')->nullable();
            $table->string('guest_names')->nullable();
            $table->date('arrival_date')->nullable();
            $table->string('all_boolean_options')->nullable();
            $table->integer('all_boolean_count')->nullable();
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
        Schema::dropIfExists('applicants');
    }
};
