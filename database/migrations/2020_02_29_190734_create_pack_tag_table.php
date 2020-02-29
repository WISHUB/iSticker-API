<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pack_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('pack_id');
            $table->unsignedInteger('tag_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('pack_id')->references('id')->on('packs');
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
        Schema::dropIfExists('pack_tag');
    }
}
