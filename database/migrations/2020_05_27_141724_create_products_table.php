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
            $table->id()->nullable;
            $table->text("product_name")->nullable;
            $table->string("slug")->nullable;
            $table->text("product_summary")->nullable;
            $table->text("product_description")->nullable;
            $table->string("product_color")->nullable;
            $table->string("product_size")->nullable;
            $table->string("product_price")->nullable;
            $table->string("product_thumbnail")->nullable;
            $table->string("product_quantity")->nullable;
            $table->bigInteger("category_id")->nullable;
            $table->bigInteger("subcategory_id")->nullable;
            $table->string("product_alart")->nullable;
            $table->string("product_code")->nullable;
            $table->string("product_tags")->nullable;
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
        Schema::dropIfExists('products');
    }
}
