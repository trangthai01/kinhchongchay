<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->string('category_id')->primary();  
            $table->string('category_name')->nullable();  
            $table->string('parent_category_id')->nullable();  
            $table->boolean('use_yn')->default(true); 
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->string('product_id')->primary();  
            $table->string('category_id');  
            $table->string('product_name');   
            $table->string('image')->default('no_img.gif');
            $table->text('meta_desc')->nullable(); 
            $table->boolean('use_yn')->default(true); 
            $table->timestamps();
            $table->foreign('category_id')
                    ->references('category_id')
                    ->on('product_categories')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });

        Schema::create('product_subs', function (Blueprint $table) {
            $table->id();
            $table->string('product_sub_id');  
            $table->string('product_id');  
            $table->string('product_sub_name'); 
            $table->boolean('use_yn')->default(true); 
            $table->timestamps();
            $table->foreign('product_id')
                    ->references('product_id')
                    ->on('products')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_subs');
        Schema::dropIfExists('product_categories');
        Schema::dropIfExists('products');
    }
}
