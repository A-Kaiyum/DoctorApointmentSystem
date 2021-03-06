<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_type')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('hospital_id')->nullable();
            $table->string('hospitalName')->nullable();
            $table->string('designation')->nullable();
            $table->string('department')->nullable();
            $table->string('degree')->nullable();
            $table->string('age')->nullable();
            $table->string('address')->nullable();
            $table->string('workingDays')->nullable();
            $table->boolean('status')->nullable();
            $table->string('doctor_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
