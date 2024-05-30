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
        Schema::create('fertigation', function (Blueprint $table) {
            $table->id();
            $table->string('program_name');
            $table->string('select_valves');
            $table->string('total_area');
            $table->string('required_water');
            $table->string('pre_water_ph')->nullable();
            $table->string('post_water_ph')->nullable();
            $table->string('fertigation_water_ph')->nullable();
            $table->string('tank_sequence');
            $table->string('tank_a');
            $table->string('tank_b');
            $table->string('tank_c');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fertigation');
    }
};
