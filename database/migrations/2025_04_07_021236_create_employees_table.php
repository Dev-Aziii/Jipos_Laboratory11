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
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); 
            $table->string('first_name'); 
            $table->string('last_name');
            $table->string('email')->unique(); 
            $table->string('phone_number');
            $table->date('hire_date'); 
            $table->unsignedBigInteger('job_id');
            $table->decimal('salary', 8, 2); 
            $table->unsignedBigInteger('manager_id');
            $table->unsignedBigInteger('department_id');

            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
