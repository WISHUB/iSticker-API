<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStickerCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sticker_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('sticker_id');
            $table->unsignedInteger('category_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('sticker_id')->references('id')->on('stickers');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sticker_category');
    }
}
