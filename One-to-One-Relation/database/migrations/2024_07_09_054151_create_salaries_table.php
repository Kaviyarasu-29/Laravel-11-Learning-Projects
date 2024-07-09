<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


    // Salary Migration
    public function up(): void
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->string('salary');
            $table->unsignedBigInteger('user_id'); // Ensure it matches the type of uid
            $table->timestamps();

            // Define the foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    // public function up(): void
    // {
    //     Schema::create('salaries', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('salary');
    //         $table->integer('user_id')->unsigned();
    //         $table->timestamps();

    //         $table->foreign('user_id')->references('uid')->on('users')->onDelete('cascade');

    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaries');
    }
};
