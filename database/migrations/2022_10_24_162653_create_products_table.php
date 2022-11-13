<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_branch_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('product_branch_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('product_name');
            $table->string('product_img');
            $table->boolean('is_offer')->default(0);
            $table->mediumText('product_desc');
            $table->text('Product_quantity_price')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
