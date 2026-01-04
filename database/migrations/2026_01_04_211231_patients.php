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
        Schema::create(table: 'patients', callback: function (Blueprint $table): void
        {

            $table->id("patient_id");
            $table->integer("admin_id");
            $table->string("name");
            $table->string("medical_history");
            $table->integer("age");
            $table->tinyInteger("sex");
            $table->string("password");
            $table->string("email");
            $table->string("location");


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
