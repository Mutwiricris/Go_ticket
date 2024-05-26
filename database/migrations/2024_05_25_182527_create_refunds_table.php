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
        Schema::create('Refunds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('sale_id');
            $table->decimal('refund_amount', 10, 2);
            $table->dateTime('refund_date');
            $table->text('refund_reason')->nullable();
            $table->foreign('sale_id')->references('id')->on('TicketSales');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Refunds');
    }
};
