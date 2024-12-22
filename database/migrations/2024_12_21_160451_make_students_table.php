<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->date('birthdate');
            $table->integer('age');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('civil_status');
            $table->string('contact_number', 11);
            $table->string('email_address')->unique();
            $table->text('permanent_address');
            $table->text('temporary_address');
            $table->string('id_number')->unique();
            $table->string('program');
            $table->string('college');
            $table->string('year_level');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_number', 11);
            $table->string('relationship_to_guardian');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
};
