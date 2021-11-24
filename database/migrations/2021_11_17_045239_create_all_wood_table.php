<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllWoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_wood', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id');
            $table->string('image')->nullable();
            $table->string('wood_name');
            $table->integer('stock');
            $table->integer('price');
            $table->string('slug');
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
        Schema::dropIfExists('all_wood');
    }
}
