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
        Schema::create('valves', function (Blueprint $table) {
            $table->id();
            $table->integer('s_no');
            $table->string('line_id');
            $table->string('name');
            $table->string('type');
            $table->string('covering_area');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valves');
    }
};
