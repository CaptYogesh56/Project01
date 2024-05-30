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
        Schema::create('nutrients', function (Blueprint $table) {
            $table->id();
            $table->integer('s_no');
            $table->string('name');
            $table->float('ca');
            $table->float('k');
            $table->float('mg');
            $table->float('n');
            $table->float('p');
            $table->float('cost_per_kg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutrients');
    }
};
