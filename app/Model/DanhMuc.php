<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    protected $table = 'danh_muc';
    protected $fillable = ['id', 'DanhMucCha', 'TenDanhMuc'];
}
