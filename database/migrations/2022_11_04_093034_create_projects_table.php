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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('property',['buy','sell','jd','rent']);
            $table->enum('category',['residential','commercial','jd','rental']);
            $table->enum('type',['house','flat','villa','row-house','site','land','commercial-space']);
            $table->string('location');
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->integer('bedroom');
            $table->integer('bathrooms');
            $table->text('more-info');
            $table->decimal('price');
            $table->string('land-area');
            $table->string('builtup-area');
            $table->string('floor-area');
            $table->enum('carparking',['yes','no']);
            $table->enum('feature',['fully-furnished','semi-furnished','un-furnished']);
            $table->string('amenities');
            $table->string('description');
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
        Schema::dropIfExists('projects');
    }
};
