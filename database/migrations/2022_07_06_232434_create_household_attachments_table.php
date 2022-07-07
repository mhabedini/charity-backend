<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseholdAttachmentsTable extends Migration
{
    public function up(): void
    {
        Schema::create('household_attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('household_id');
            $table->string('path');
            $table->timestamps();

            $table->foreign('household_id')->on('households')->references('id')->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('household_attachments');
    }
}
