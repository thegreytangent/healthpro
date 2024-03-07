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
        Schema::create('resident_illnesses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('date');
            $table->string('illness_id')->index();
            $table->string('resident_id')->index();


            $table->foreign('illness_id')
                ->references('id')
                ->on('illness')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');


            $table->foreign('resident_id')
                ->references('id')
                ->on('residents')
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
        Schema::dropIfExists('resident_illnesses');
    }
};
