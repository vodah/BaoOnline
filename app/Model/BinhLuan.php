<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    protected $table = 'binh_luan';
    protected $fillable = ['id', 'baidang_id', 'Ten', 'BinhLuan'];
}
