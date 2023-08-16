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
        Schema::table('reg_form', function (Blueprint $table) {
             $table->tinyInteger('status')->default(0)->comment('1=Active,0=Inactive');
             $table->string('verification_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reg_form', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('verification_code');
        });
    }
};
