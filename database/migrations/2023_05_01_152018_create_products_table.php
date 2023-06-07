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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('features')->nullable();
            $table->string('thumbnail_img')->nullable();
            $table->string('photos')->nullable();
            $table->string('pdf_file')->nullable();
            $table->tinyInteger('featured')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->string('meta_title', 191)->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
