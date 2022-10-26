<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_branch_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('service_branch_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('service_name');
            $table->string('first_img');
            $table->mediumText('first_desc');
            $table->string('second_img');
            $table->mediumText('second_desc');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
};
