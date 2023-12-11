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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('type')->references('id')->on('types');
            $table->foreignId('estate')->references('id')->on('estates');
            $table->foreignId('room')->references('id')->on('rooms');
            $table->foreignId('seller')->references('id')->on('users');
            $table->string('description')->nullable();
            $table->string('floor')->nullable();
            $table->string('number')->nullable();
            $table->string('cost');
            $table->string('address');
            $table->string('all_area');
            $table->string('living_area')->nullable();
            $table->string('height')->nullable();
            $table->foreignId('status')->references('id')->on('statuses');
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
        Schema::dropIfExists('posts');
    }
};
