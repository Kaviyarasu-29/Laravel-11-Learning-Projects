<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // User Migration
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->timestamps();
        });
    }



    // public function up(): void
    // {
    //     Schema::create('users', function (Blueprint $table) {
    //         // $table->id('uid');
    //         $table->integer('uid')->unique();
    //         $table->string('name');
    //         $table->integer('age');
    //         $table->timestamps();

    //         $table->primary('uid');
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
