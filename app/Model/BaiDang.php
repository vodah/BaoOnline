<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BaiDang extends Model
{
    protected $table = 'bai_dang';
    protected $fillable = ['id', 'danhmuc_id', 'TieuDe', 'MoTa', 'NoiDung', 'Anh', 'NguoiDang', 'NoiBat', 'LuotXem', 'slug'];
}
