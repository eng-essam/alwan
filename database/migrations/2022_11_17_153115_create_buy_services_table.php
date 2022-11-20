<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('buy_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('service_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('details');
            $table->string('user_file');
            $table->integer('order_id');
            $table->foreignId('order_status_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->tinyText('order_status_message')->nullable();
            $table->foreignId('address_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('admin_file')->nullable();
            $table->float('service_price')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buy_services');
    }
};
