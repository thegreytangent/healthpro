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
        Schema::create('illness', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('category_id')->index();
            $table->string('illness_name');


            $table->foreign('category_id')
                ->references('id')
                ->on('illness_categories')
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
        Schema::dropIfExists('illness');
    }
};