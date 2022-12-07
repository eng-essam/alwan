<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('buy_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('order_id');
            $table->integer('product_quantity');
            $table->float('product_price');
            $table->foreignId('address_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('order_status_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('details');
            $table->string('user_file');
            $table->string('admin_file')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buy_products');
    }
};
