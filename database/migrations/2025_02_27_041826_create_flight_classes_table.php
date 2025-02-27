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
        Schema::create('flight_classes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("flight_id");
            $table->enum('class_type',['economy', 'bussines']);
            $table->integer("price");
            $table->integer("total_seats");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_classes');
    }
};
