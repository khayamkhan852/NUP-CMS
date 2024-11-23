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
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('landline_no')->nullable();
            $table->string('principal_name')->nullable();
            $table->string('principal_no')->nullable();
            $table->string('bs_coordinator_name')->nullable();
            $table->string('bs_coordinator_no')->nullable();
            $table->string('focal_person_name')->nullable();
            $table->string('bs_person_no')->nullable();
            $table->string('bs_controller_name')->nullable();
            $table->string('bs_controller_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colleges');
    }
};
