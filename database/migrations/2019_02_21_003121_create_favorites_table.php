<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     //favoritesテーブル（中間）
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->increments('id');
            //user_idカラム追加
            $table->integer('user_id')->unsigned()->index();
            
            //micropost_idカラム追加
            $table->integer('micropost_id')->unsigned()->index();
            $table->timestamps();
            
            //外部キー
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('micropost_id')->references('id')->on('microposts')->onDelete('cascade');
            
            //重複防止
            $table->unique(['user_id', 'micropost_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
