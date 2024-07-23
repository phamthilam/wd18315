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
    // php artisan migrate
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');// integer | unsigned |primary | auto increment
            $table->string('name',200);
            $table->float('price',8,2);
            $table->integer('view');
            $table->timestamps(); //created at|updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // php artisan migrate:rollback/ reset
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
