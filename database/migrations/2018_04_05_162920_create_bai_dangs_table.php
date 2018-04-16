<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaiDangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_dang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('danhmuc_id');
            $table->string('TieuDe');
            $table->string('MoTa');
            $table->longText('NoiDung');
            $table->string('Anh');
            $table->string('NguoiDang');
            $table->boolean('NoiBat');
            $table->integer('LuotXem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bai_dangs');
    }
}
