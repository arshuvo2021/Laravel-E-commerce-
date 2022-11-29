<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductTable extends Migration
{
    /**product_img
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_des');
           
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
