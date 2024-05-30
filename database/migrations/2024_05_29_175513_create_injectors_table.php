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
        Schema::create('injectors', function (Blueprint $table) {
            $table->id();
            $table->integer('s_no');
            $table->string('tank_name');
            $table->string('tank_type');
            $table->string('flow_sensor_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('injectors');
    }
};
