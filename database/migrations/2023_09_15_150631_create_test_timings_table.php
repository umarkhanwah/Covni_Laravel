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
        Schema::create('test_timings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hosp_id')->constrained('hospitals');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('report_id')->nullable()->constrained('test_reports')->onDelete('set null');
            // $table->foreignId('report_id')->nullable()->constrained('test_reports');
            $table->string('days');
            $table->string('timing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_timings');
    }
};
