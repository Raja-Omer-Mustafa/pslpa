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
        Schema::create('reg_form', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('cnic_no')->unique();
            $table->string('city');
            $table->string('prof_qualification');
            $table->string('year_qualification');
            $table->string('mobile_no')->unique();
            $table->string('landline_no');
            $table->string('residential_address');
            $table->string('official_address');
            $table->string('email_id')->unique();
            $table->string('mem_cetag');
            $table->string('fee_schedule');
            $table->string('submission_date');
            $table->string('cnic_copy');
            $table->string('photo');
            $table->string('fee');
            $table->string('doc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reg_form');
    }
};
