<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\DanhMuc;

class HomeController extends Controller
{
    public function index(){
        $danhmuc = DB::table('danh_muc')->where('DanhMucCha', "")->get();
        $noibat = DB::table('bai_dang')->where('NoiBat', 1 )->orderBy('id','DESC')->limit(6)->get();
        $baidang = DB::table('bai_dang')->orderBy('id','DESC')->get();
        $tong = DanhMuc::all();
        return view('client.trangchu', compact('danhmuc', 'tong', 'noibat', 'baidang'));
    }
}
