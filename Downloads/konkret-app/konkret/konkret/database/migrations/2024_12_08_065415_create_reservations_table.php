<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('id_ticket');
            $table->integer('ticket_quantity');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->enum('seating_plan', ['dream','cat1', 'cat2', 'cat3', 'cat4', 'cat5', 'cat 6']);
            $table->timestamp('ticket_date')->useCurrent();
            $table->string('email', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
