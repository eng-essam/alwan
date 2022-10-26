<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('img');
            $table->foreignId('role_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('company_branch_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('email')->unique();
            $table->string('phoneKey')->nullable();
            $table->string('phone')->nullable();
            $table->tinyText('address')->nullable();
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
};
