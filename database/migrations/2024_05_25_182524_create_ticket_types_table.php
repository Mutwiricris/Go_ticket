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
        Schema::create('TicketTypes', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_type_name', 255);
            $table->text('ticket_type_description')->nullable();
            $table->timestamps();    
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TicketTypes');
    }
};
