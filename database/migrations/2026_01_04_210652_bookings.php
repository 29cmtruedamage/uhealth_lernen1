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
        Schema::create(table: 'bookings', callback: function (Blueprint $table): void
        {

            $table->id("booking_id");
            $table->integer("admin_id");
            $table->integer("patient_id");
            $table->dateTime("time_slot_start");
            $table->dateTime("time_slot_end");
            $table->tinyInteger("status");
            $table->timestamps();
        }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
