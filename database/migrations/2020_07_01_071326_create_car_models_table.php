<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->id();
            $table->char('model', 100);
            $table->foreignId('brand_id');
            $table->text('image')->nullable();
            $table->text('price')->nullable();
            $table->text('description')->nullable();
            $table->text('specification')->nullable();
            $table->text('url');
            $table->boolean('special_offer')->default(0);
            $table->boolean('best_car')->default(0);
            $table->boolean('popular_new_car')->default(0);
            $table->boolean('recommended_cars')->default(0);
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
        Schema::dropIfExists('car_models');
    }
}
