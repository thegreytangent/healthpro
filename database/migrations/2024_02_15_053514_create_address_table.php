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
        Schema::create('address', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('brgy_id')->index();
            $table->string('prk');


            $table->foreign('brgy_id')
                ->references('id')
                ->on('barangays')
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
        Schema::dropIfExists('address');
    }
};
