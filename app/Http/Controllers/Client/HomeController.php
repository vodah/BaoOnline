<?php

namespace App\Http\Controllers\Client;

use App\Model\BaiDang;
use App\Model\BinhLuan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\DanhMuc;
use Illuminate\Database\Query\Builder;

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
            $baidang = BaiDang::where('danhmuc', $check->TenDanhMuc )->orderBy('id','DESC')->paginate('8');
            $danhsach = BaiDang::where('danhmuc', $check->TenDanhMuc)->get();
            return view('client.danhmuc', compact('danhsach' , 'check', 'tong', 'baidang'));

        }
        else {
            $baidang = BaiDang::where('slug', $slug)->first();
            if ($baidang){

                $baidang->LuotXem++;
                $baidang->save();
                $binhluan = BinhLuan::where('baidang_id' , $baidang->id)->orderBy('id','DESC')->get();
                return view('client.chitiet', compact('tong', 'baidang', 'binhluan'));
            }
            else {
                return view('layouts.404');
            }
        }
    }
    public function timkiem(){
        $timkiem = $_GET['tim_kiem'];
        $tong = DanhMuc::all();

        $ketqua = BaiDang::where('TieuDe','LIKE', '%' . $timkiem.'%')->paginate(9);
        return view('client.timkiem', compact('ketqua', 'tong'));
    }
    public function binhluan(Request $request){

        $this->validate($request,
            [
                'Ten' => 'required|max:255',
                'BinhLuan' => 'required',

            ],
            [
                'ten.required' => "Nhập tên của bạn",
                'BinhLuan.required' => "Nhập nội dung bạn muốn bình luận",
            ]
        );
        $binhluan = new BinhLuan();
        $binhluan->fill($request->all());

        $binhluan->save();

        return $this->getslug($request->slug);

    }
}
