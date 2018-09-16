<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('product_categories', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->string('slug');
        $table->string('icon');
        $table->softDeletes();
        $table->timestamps();
      });

      Schema::create('product_brands', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('parent_id')->unsigned();
        $table->foreign('parent_id')->references('id')->on('product_categories');
        $table->string('title');
        $table->string('slug');
        $table->string('thumbnail');
        $table->string('logo');
        $table->text('description');
        $table->softDeletes();
        $table->timestamps();
      });

      Schema::create('products', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('brands_id')->unsigned();
        $table->foreign('brands_id')->references('id')->on('product_brands');
        $table->string('title');
        $table->string('slug');
        $table->softDeletes();
        $table->timestamps();
      });

      Schema::create('product_infos', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('product_id')->unsigned();
        $table->foreign('product_id')->references('id')->on('products');
        $table->string('key');
        $table->string('value');
        $table->softDeletes();
        $table->timestamps();
      });

      Schema::create('product_images', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('product_id')->unsigned();
        $table->foreign('product_id')->references('id')->on('products');
        $table->string('file');
        $table->string('ext');
        $table->boolean('featured')->default(false);
        $table->softDeletes();
        $table->timestamps();
      });

      Schema::create('customers', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('logo');
        $table->boolean('featured')->default(false);
        $table->softDeletes();
        $table->timestamps();
      });


      Schema::create('enterprises', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->string('slug');
        $table->string('icon');
        $table->string('file');
        $table->string('ext');
        $table->text('description');
        $table->softDeletes();
        $table->timestamps();
      });

      Schema::create('about_us', function (Blueprint $table) {
        $table->increments('id');
        $table->string('key');
        $table->text('value');
        $table->string('file');
        $table->string('ext');
        $table->softDeletes();
        $table->timestamps();
      });

      Schema::create('sliders', function (Blueprint $table) {
        $table->increments('id');
        $table->string('file');
        $table->string('ext');
        $table->text('description');
        $table->boolean('featured')->default(false);
        $table->softDeletes();
        $table->timestamps();
      });

      Schema::create('news_categories', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->softDeletes();
        $table->timestamps();
      });

      Schema::create('news', function (Blueprint $table) {
        $table->increments('id');
        $table->string('file');
        $table->string('ext');
        $table->string('title');
        $table->string('slug');
        $table->integer('category_id')->unsigned();
        $table->foreign('category_id')->references('id')->on('news_categories');
        $table->text('description');
        $table->boolean('featured')->default(false);
        $table->softDeletes();
        $table->timestamps();
      });

      Schema::create('enterprise_box', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->string('slug');
        $table->string('url');
        $table->string('file');
        $table->string('ext');
        $table->softDeletes();
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
      Schema::dropIfExists('product_categories');
      Schema::dropIfExists('product_brands');
      Schema::dropIfExists('products');
      Schema::dropIfExists('product_infos');
      Schema::dropIfExists('product_images');
      Schema::dropIfExists('customers');
      Schema::dropIfExists('enterprises');
      Schema::dropIfExists('about_us');
      Schema::dropIfExists('sliders');
      Schema::dropIfExists('news_categories');
      Schema::dropIfExists('news');
      Schema::dropIfExists('enterprise_box');
    }
}
