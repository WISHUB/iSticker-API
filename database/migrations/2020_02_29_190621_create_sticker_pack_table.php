<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStickerPackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sticker_pack', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('sticker_id');
            $table->unsignedInteger('pack_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('sticker_id')->references('id')->on('stickers');
            $table->foreign('pack_id')->references('id')->on('packs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sticker_pack');
    }
}
