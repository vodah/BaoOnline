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
        $danhmuc = DanhMuc::paginate('10');

        return view('admin.danhmuc.index', compact('danhmuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function them()
    {
        $danhmuc = DB::table('danh_muc')->where('DanhMucCha', "")->get();
        $nhom = new DanhMuc();

        return view('admin.danhmuc.form', compact('danhmuc', 'nhom'));
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
                    'TenDanhMuc' => 'required|unique:danh_muc'
                ],
                [
                    'TenDanhMuc.required' => "Trường này không được để trống",
                    'TenDanhMuc.unique' => "Danh mục này đã tồn tại",
                ]
            );
        } else {
            $danhmuc = DanhMuc::find($id);
            $this->validate($request,
                [
                    'TenDanhMuc' => 'required'
                ],
                [
                    'TenDanhMuc.required' => "Trường này không được để trống",

                ]
            );
        }

        $danhmuc->fill($request->all());


        if ($danhmuc->DanhMucCha == 0 && $danhmuc->DanhMucCha == null){
            $danhmuc->DanhMucCha = "";
        }

        $danhmuc->save();

        $request->session()->flash('status', 'Đã lưu thành công vào CSDL!');

        return redirect(route('danhmuc.list'));

    }

    public function xoa(Request $request, $id){

        $danhmuc = DanhMuc::find($id);

        if($danhmuc != null){

            $danhmuc->delete();
            $request->session()->flash('status', 'Đã xóa thành công!');
            return redirect(route('danhmuc.list'));
        }
        else{
            $request->session()->flash('status1', 'Không tồn tại danh mục này!');
            return redirect(route('danhmuc.list'));
        }
    }
}
