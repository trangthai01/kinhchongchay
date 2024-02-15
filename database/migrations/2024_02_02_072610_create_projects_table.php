<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->string('project_id');
            $table->string('project_name');                                  //tên sản phẩm
            $table->string('project_eng_name')->nullable();                   //multilang
            $table->string('location')->nullable();        
            $table->string('owner')->nullable();    
            $table->string('client')->nullable();    
            $table->string('project_info')->nullable();      
            $table->string('image')->default('no_img.gif');     //ảnh hiển thị sản phẩm
            $table->string('image_oth_1')->nullable();                
            $table->string('image_oth_2')->nullable();
            $table->string('image_oth_3')->nullable();
            $table->string('image_oth_4')->nullable();
            $table->string('image_oth_5')->nullable();
            $table->string('image_thumbnail')->nullable();              
            $table->string('image_oth_1_thumbnail')->nullable();
            $table->string('image_oth_2_thumbnail')->nullable();
            $table->string('image_oth_3_thumbnail')->nullable();
            $table->string('image_oth_4_thumbnail')->nullable();
            $table->string('image_oth_5_thumbnail')->nullable();   
            $table->text('meta_desc')->nullable();          
            $table->boolean('use_yn')->default(true);           //0: ngưng bán, 1: đang bán
            $table->string('slug')->unique();                      
            $table->primary(['project_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
