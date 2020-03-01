<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStickerTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sticker_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('sticker_id');
            $table->unsignedInteger('tag_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('sticker_id')->references('id')->on('stickers');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sticker_tag');
    }
}
