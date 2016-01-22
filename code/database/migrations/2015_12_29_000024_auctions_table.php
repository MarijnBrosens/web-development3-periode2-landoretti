<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('media_id')->unsigned();
            $table->integer('style_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->smallInteger('year');
            $table->string('artist');
            $table->string('width', 20);
            $table->string('height', 20);
            $table->string('depth', 20)->nullable();
            $table->string('image_artwork', 255);
            $table->string('image_signature', 255);
            $table->string('image_optional', 255)->nullable();
            $table->Integer('minimum_price');
            $table->Integer('maximum_price');
            $table->Integer('buyout_price')->nullable();
            $table->Integer('current_price')->nullable();
            $table->date('end_date');
        });

        Schema::create('auction_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auction_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title', 255);
            $table->string('slug');
            $table->string('description', 255);
            $table->string('condition', 255);
            $table->string('origin', 255);

            $table->unique(['auction_id','locale']);
            $table->foreign('auction_id')->references('id')->on('auctions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('auctions');
    }
}
