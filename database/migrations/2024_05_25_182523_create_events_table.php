<?php

use App\Models\User;
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
        Schema::create('Events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name', 255);
            $table->text('event_description');
            $table->dateTime('event_start_date');
            $table->dateTime('event_end_date');
            $table->string('event_venue', 255);
            $table->unsignedBigInteger('organizer_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreignIdFor(User::class);
            $table->foreign('organizer_id')->references('id')->on('EventOrganizers');
            $table->foreign('category_id')->references('id')->on('EventCategories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Events');
    }
};
