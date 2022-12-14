<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('service_branches', function (Blueprint $table) {
            $table->id();
            $table->string('service_branch_img');
            $table->string('service_branch_name');
            $table->mediumText('service_branch_desc');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_branches');
    }
};
