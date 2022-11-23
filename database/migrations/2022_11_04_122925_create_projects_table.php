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
            $table->string('slug')->unique();
            $table->enum('project', ['Prestige', 'Total-Environment','Other']);
            $table->enum('property',['Buy','Sell','JD','Rent']);
            $table->enum('category',['Residential','Commercial','JD','Rental']);
            $table->enum('type',['House','Flat','Villa','Row-house','Site','Land','Commercial-space']);
            $table->string('location');
            $table->string('city');
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->text('moreinfo')->nullable();
            $table->string('price')->nullable();
            $table->string('landarea')->nullable();
            $table->string('builtuparea')->nullable();
            $table->string('floorarea')->nullable();
            $table->enum('carparking',['yes','no'])->nullable();
            $table->enum('feature',['Fully-furnished','Semi-furnished','Un-furnished'])->nullable;
            $table->longText('amenities')->nullable();
            $table->longText('description')->nullable();
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
