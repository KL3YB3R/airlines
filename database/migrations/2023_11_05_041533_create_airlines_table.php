<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('airlines', function (Blueprint $table) {
            $table->id();
            $table->string('airline_name')->nullable()->comment("Airline Name");
            $table->integer('planes_number')->default(0)->comment("Number of Planes");
            $table->integer('flights_number')->default(0)->comment("Number of flights");
            $table->integer('passenger_lounges_number')->default(0)->comment("Passenger lounges");
            $table->string('status', 20)->nullable()->default('Active')->comment("Airline Status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airlines');
    }
};
