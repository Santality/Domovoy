<?php

use Database\Seeders\userSeed;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
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
            $table->string('lastname');
            $table->string('firstname');
            $table->string('photo')->default('default.png');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('role')->references('id')->on('roles');
            $table->timestamps();
        });

        Artisan::call('db:seed', ['--class' => userSeed::class]);
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
