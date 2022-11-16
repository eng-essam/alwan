<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('cobons', function (Blueprint $table) {
            $table->id();
            $table->string('cobon');
            $table->integer('percentage');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cobons');
    }
};
