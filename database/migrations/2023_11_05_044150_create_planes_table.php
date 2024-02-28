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
        Schema::create('planes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_airline')->nullable();
            $table->foreign('id_airline')->references('id')->on('airlines')->onDelete('cascade');
            $table->string('plane_name', 100)->nullable()->comment("Plane Name");
            $table->integer('flights_plane')->default(0)->comment("Number of flights made by the plane");
            $table->string('color')->nullable()->comment("Color of plane");
            $table->integer('seats')->default(0)->comment("Seats of plane");
            $table->integer('gasoline_capacity')->default(0)->comment("Gasoline capacity");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planes');
    }
};