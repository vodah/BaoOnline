<?php

namespace App\Http\Controllers\Admin;

use App\Model\DanhMuc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Validator;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $danhmuc = DanhMuc::all();
        $danhmuc = DanhMuc::orderBy('id', 'desc')->paginate('10'); // Gọi đến bảng danh_muc và lấy 10 bài đăng mới nhất



        return view('admin.danhmuc.index', compact('danhmuc')); //truyền ra view với biến danhmuc nhận được
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function them()
    {
        // $danhmuc = DB::table('danh_muc')->where('DanhMucCha', "")->get();
        $nhom = new DanhMuc();

        return view('admin.danhmuc.form', compact( 'nhom'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nhom = DanhMuc::find($id);
        if($nhom == null){
            return redirect(route('danhmuc.list'));
        }
        $danhmuc = DB::table('danh_muc')->where('DanhMucCha', "")->get();

        return view('admin.danhmuc.form', compact('nhom','danhmuc'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function luu(Request $request)
    {

        $id = $request->input('id');

        if ($id == null) {
            $danhmuc = new DanhMuc();
            $this->validate($request,
                [
                    'TenDanhMuc' => 'required|unique:danh_muc',
//                    'slug' => 'required'
                ],
                [
                    'TenDanhMuc.required' => "Trường này không được để trống",
//                    'slug.required' => "Trường này không được để trống",
                    'TenDanhMuc.unique' => "Danh mục này đã tồn tại",
                ]
            );
        } else {
            $danhmuc = DanhMuc::find($id);
            $this->validate($request,
                [
                    'TenDanhMuc' => 'required',
//                    'slug' => 'required'
                ],
                [
                    'TenDanhMuc.required' => "Trường này không được để trống",
//                    'slug.required' => "Trường này không được để trống",

                ]
            );
        }

        $danhmuc->fill($request->all());
        $danhmuc->slug = str_slug($request->TenDanhMuc);

        $danhmuc->DanhMucCha = "";

        $danhmuc->save();

        $request->session()->flash('status', 'Đã lưu thành công vào CSDL!');

        return redirect(route('danhmuc.list'));

    }

    public function xoa(Request $request, $id){

        $danhmuc = DanhMuc::find($id);// tìm theo id

        if($danhmuc != null){ // nếu tồn tại id thì chạy vào đây

            $danhmuc->delete();
            $request->session()->flash('status', 'Đã xóa thành công!');
            return redirect(route('danhmuc.list'));
        }
        else{ // còn không thì quay về trang trước và hiện thông báo
            $request->session()->flash('status1', 'Không tồn tại danh mục này!');
            return redirect(route('danhmuc.list'));
        }
    }

}
