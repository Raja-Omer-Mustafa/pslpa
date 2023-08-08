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
            $table->string('name',30);
            $table->string('father_name',30);
            $table->string('cnic_no')->unique();
            $table->string('city',20);
            $table->string('prof_qualification',30);
            $table->string('year_qualification',30);
            $table->string('mobile_no')->unique();
            $table->string('landline_no',30);
            $table->string('residential_address',40);
            $table->string('official_address',40);
            $table->string('email_id')->unique();
            $table->string('mem_cetag',30);
            $table->string('fee_schedule',30);
            $table->string('submission_date',20);
            $table->string('cnic_copy',30);
            $table->string('photo',30);
            $table->string('fee',30);
            $table->string('doc',30);
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
