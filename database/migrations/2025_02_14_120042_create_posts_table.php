<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->unsignedBigInteger('user_id');
            // user_idをunsignedBigIntegerに変更することで、Usersのidとリレーションできる
            // bigIncrements（Users)と対応する他のテーブルカラムはnsignedBigInteger
            // このリレーションがある場合は、先に下のUsersがマイグレーションされていないと、うまくマイグレーションされない。
            // ファイル自体を先にUsersをcreateする必要があるよ！！！！！！
            $table->string('post', 400);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('current_timestamp on update current_timestamp'));

            // 外部キー制約を追加
            // user_idは、Usersのidに対応しており、Usersのidが削除されれば一緒に削除される
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
