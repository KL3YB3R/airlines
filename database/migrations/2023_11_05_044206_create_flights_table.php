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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('takeoff_city', 100)->nullable()->comment('Takeoff city');
            $table->string('takeoff_country', 100)->nullable()->comment('Takeoff country');
            $table->string('landing_city', 100)->nullable()->comment('Landing city');
            $table->string('landing_country', 100)->nullable()->comment('Landing country');
            $table->string('takeoff_date', 50)->nullable()->comment('Takeoff date');
            $table->string('landing_date', 50)->nullable()->comment('Landing date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
