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
        Schema::create(table: 'treatments', callback: function (Blueprint $table): void
        {
            $table->id("treatment_id");
            $table->integer("patient_id");
            $table->integer("admin_id");
            $table->text("diagnosis");
            $table->string("type_of_treatment");



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
