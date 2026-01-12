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
        Schema::create('patients_diseases', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('disease_id');
            $table->date('diagnosis_date');
            $table->timestamps();

            $table->primary(['patient_id', 'disease_id']);

            $table->foreign('patient_id')
                ->references('patient_id')->on('patients')
                ->onDelete('cascade');

            $table->foreign('disease_id')
                ->references('disease_id')->on('diseases')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients_diseases');
    }
};
