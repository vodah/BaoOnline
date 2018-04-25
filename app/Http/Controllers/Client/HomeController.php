<?php

namespace App\Http\Controllers\Client;

use App\Model\BaiDang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\DanhMuc;

class HomeController extends Controller
{
    public function index(){
        $danhmuc = DanhMuc::where('DanhMucCha', "")->get();
        $noibat = BaiDang::where('NoiBat', 1 )->orderBy('id','DESC')->limit(6)->get();
        $baidang = BaiDang::orderBy('id','DESC')->get();
        $tong = DanhMuc::all();
        return view('client.trangchu', compact('danhmuc', 'tong', 'noibat', 'baidang'));
    }
    public function getslug( $slug){
        $check = DanhMuc::where('slug', $slug)->first();
        $tong = DanhMuc::all();

        if ($check){
            $baidang = BaiDang::where('danhmuc', $check->TenDanhMuc )->orderBy('id','DESC')->paginate('9');
            $danhsach = BaiDang::where('danhmuc', $check->TenDanhMuc)->get();
            return view('client.danhmuc', compact('danhsach' , 'check', 'tong', 'baidang'));

        }
        else {
            $baidang = BaiDang::where('slug', $slug)->first();
            $baidang->LuotXem++;
            $baidang->save();
            return view('client.chitiet', compact('tong', 'baidang'));
        }
    }
}
