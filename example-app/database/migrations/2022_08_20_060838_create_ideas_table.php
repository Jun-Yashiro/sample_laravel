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
        Schema::create('ideas', function (Blueprint $table) {
            $table->increments('id')->comment('アイデアID');//アイデアID
            $table->string('idea_name')->comment('アイデア名');//アイデア名
            $table->string('idea_url')->comment('googleドライブへのURL');//googleドライブへのURL
            $table->string('idea_picture_1')->comment('アイデア写真1枚目');//アイデア写真1枚目
            $table->string('idea_picture_2')->nullable()->comment('アイデア写真2枚目');//アイデア写真2枚目
            $table->string('idea_picture_3')->nullable()->comment('アイデア写真3枚目');//アイデア写真3枚目
            $table->integer('good_count')->nullable()->default(0)->comment('いいね数');//いいね数
            $table->string('category')->nullable()->comment('アイデアカテゴリー');//アイデアカテゴリー
            $table->string('file_type')->nullable()->comment('ファイル形式');//ファイル形式
            $table->string('explain')->nullable()->comment('説明');//説明
            $table->timestampTz('created_at')->comment('作成日');//作成日
            $table->timestampTz('updated_at')->comment('更新日');//更新日
            $table->smallInteger('delete_flg')->nullable()->comment('削除フラグ');//削除フラグ
            $table->timestampTz('deleted_at')->nullable()->comment('削除日');//削除日
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ideas');
    }
};
