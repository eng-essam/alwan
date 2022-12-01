<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('subServices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_branch_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('service_branch_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('service_name');
            $table->boolean('is_offer')->default(0);
            $table->string('main_img');
            $table->mediumText('service_first_desc');
            $table->mediumText('service_second_desc');
            $table->string('sub_img');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subServices');
    }
};
