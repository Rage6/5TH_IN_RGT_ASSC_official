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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo')->nullable();
            $table->string('slug');
            $table->string('purpose');
            $table->string('stripe_item')->nullable();
            $table->boolean('adjustable_price')->default(0);
            $table->integer('set_quantity')->nullable();
            $table->float('price',6,2);
            $table->string('description')->nullable();
            $table->boolean('is_donation')->default(0);
            $table->boolean('members_only')->default(0);
            $table->boolean('out_of_stock')->default(0);
            $table->integer('how_long')->nullable();
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
        Schema::dropIfExists('items');
    }
};
