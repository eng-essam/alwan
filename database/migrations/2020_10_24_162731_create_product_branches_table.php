<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('product_branches', function (Blueprint $table) {
            $table->id();
            $table->string('product_branch_name');
            $table->string('product_branch_desc');
            $table->string('product_branch_img');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_branches');
    }
};
