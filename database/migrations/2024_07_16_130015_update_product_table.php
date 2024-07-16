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
        //
        Schema::table('products', function(Blueprint $table){
            //thêm mới
            $table->string('image',500);
            // sửa
            $table->string('name',250)->change();
            //xoá
            $table->dropColumn(['view']);
            // Rename
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function(Blueprint $table){
       
            $table->dropColumn(['image']);
        
            $table->string('name',200)->change();
       
            $table->integer('view');
            
            
        });
    }
};
