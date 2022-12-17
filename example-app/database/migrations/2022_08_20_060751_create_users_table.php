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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('ユーザーID');//ユーザーID

            $table->string('user_first_name')->comment('名前');//名前
            $table->string('user_later_name')->comment('苗字');//苗字
            $table->string('email')->unique()->comment('メールアドレス');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('age')->comment('年齢');//年齢
            $table->integer('work')->comment('仕事');//仕事
            $table->string('university')->comment('大学');//大学
            $table->string('speciality')->comment('専攻');//専攻
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
