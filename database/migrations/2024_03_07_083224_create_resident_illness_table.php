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
        Schema::create('resident_illness', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('date');
            $table->string('illness_id')->index();
            $table->string('patient_id')->index();


            $table->foreign('illness_id')
                ->references('id')
                ->on('illness')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');


            $table->foreign('patient_id')
                ->references('id')
                ->on('patients')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resident_illness');
    }
};
