<?php

namespace App\Http\Controllers\Client;

use App\Model\DanhMuc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $danhmuc = DB::table('danh_muc')->where('DanhMucCha', "")->get();
        $tong = DanhMuc::all();
        return view('client.trangchu', compact('danhmuc', 'tong'));
    }

}
