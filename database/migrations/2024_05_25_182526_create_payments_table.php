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
        Schema::create('Payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sale_id');  // Ensure this is the correct column name
            $table->enum('payment_method', ['crypto', 'Mpesa', 'Visa', 'credit_card', 'debit_card', 'Stripe']);
            $table->enum('payment_status', ['pending', 'completed', 'failed']);
            $table->dateTime('payment_date');
            $table->timestamps();

            $table->foreign('sale_id')->references('id')->on('TicketSales');  // Correct foreign key reference
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Payments');
    }
};
