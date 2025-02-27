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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("code");
            $table->integer("flight_id");
            $table->integer("flight_class_id");
            $table->string("name");
            $table->string("email");
            $table->string("phone");
            $table->enum("payment_status",['paid', 'pending']);
            $table->integer("subtotal");
            $table->integer("grandtotal");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
