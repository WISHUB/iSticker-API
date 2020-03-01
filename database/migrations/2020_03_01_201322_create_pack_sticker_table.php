<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackStickerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pack_sticker', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('pack_id');
            $table->unsignedInteger('sticker_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('pack_id')->references('id')->on('packs');
            $table->foreign('sticker_id')->references('id')->on('stickers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pack_sticker');
    }
}
