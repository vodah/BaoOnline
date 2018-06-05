<?php

namespace App\Http\Controllers\Admin;

use App\Model\BaiDang;
use App\Model\DanhMuc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use File;

class BaiDangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baidang = BaiDang::orderBy('id', 'desc')->paginate('10');

        return view('admin.baidang.index', compact('baidang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function them()
    {
        $baidang = new BaiDang();
        $danhmuc = DanhMuc::all();
        return view('admin.baidang.form', compact('danhmuc', 'baidang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function sua(Request $request, $id)
    {
        $baidang = BaiDang::find($id);
        if ($baidang == null) {
            return redirect(route('baidang.list'));
        } else {
            $danhmuc = DanhMuc::all();

            return view('admin.baidang.form', compact('baidang', 'danhmuc'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function xoa(Request $request, $id)
    {
        $baidang = BaiDang::find($id);

        if ($baidang != null) {

            File::delete($baidang->Anh);

            $baidang->delete();
            $request->session()->flash('status', 'Đã xóa thành công!');
            return redirect(route('baidang.list'));
        } else {
            $request->session()->flash('status1', 'Không tồn tại danh mục này!');
            return redirect(route('baidang.list'));
        }
    }

    public function luu(Request $request)
    {

        $all = $request->all();
        $id = $request->input('id');
        $danhmuc = $all['DanhMuc'];
        $TieuDe = $all['TieuDe'];

        $MoTa = $all['MoTa'];
        $NoiDung = $all['NoiDung'];
        $NguoiDang = $all['NguoiDang'];


        $this->validate($request,
            [
                'TieuDe' => 'required|max:255',

                'DanhMuc' => 'required',
                'MoTa' => 'required|max:255',

                'NoiDung' => 'required',
                'NguoiDang' => 'required',
            ],
            [
                'TieuDe.required' => "Trường này không được để trống",

                'DanhMuc.required' => "Trường này không được để trống",
                'MoTa.required' => "Trường này không được để trống",

                'NoiDung.required' => "Trường này không được để trống",
                'TieuDe.max' => ['string' => "Số lượng ký tự vượt quá 255"],
                'MoTa.max' => ['string' => "Số lượng ký tự vượt quá 255"],
                'NguoiDang.required' => "Trường này không được để trống",
            ]
        );

        if ($id == null) {
            $baidang = new BaiDang();

            $this->validate($request, [
                'TieuDe' => 'unique:bai_dang',
                'Anh' => 'required',
            ],
                [
                    'TieuDe.unique' => "Tiêu đề này đã tồn tại",
                    'Anh.required' => "Trường này không được để trống",
                ]);
            $baidang->LuotXem = 0;

        } else {
            $baidang = BaiDang::find($id);

        }

        $NoiBat = isset($_POST["NoiBat"]) == true ? $_POST["NoiBat"] : "";
        if ($NoiBat == null) {
            $NoiBat = 0;
        } else {
            $NoiBat = 1;
        }

        $baidang->DanhMuc = $danhmuc;
        $baidang->TieuDe = $TieuDe;
        $baidang->slug = str_slug($TieuDe) .'-'. uniqid();
        $baidang->MoTa = $MoTa;
        $baidang->NoiDung = $NoiDung;
        $baidang->NguoiDang = $NguoiDang;
        $baidang->NoiBat = $NoiBat;

        if ($request->hasFile('Anh')) {
            $fileExtension = $request->file('Anh')->getClientOriginalExtension();

            $fileName = time() . "_" . rand(0, 9999999) . "_" . md5(rand(0, 9999999)) . "." . $fileExtension;

            $uploadPath = public_path('uploads');

            $request->file('Anh')->move($uploadPath, $fileName);

            $baidang->Anh = 'uploads/' . $fileName;
        }
        $baidang->save();

        $request->session()->flash('status', 'Đã lưu thành công vào CSDL!');

        return redirect(route('baidang.list'));

    }
    public function timkiem(){
        $timkiem = $_GET['timkiem'];

        $ketqua = BaiDang::where('TieuDe','LIKE', '%' . $timkiem.'%')->orwhere('MoTa','LIKE', '%' . $timkiem.'%')->paginate(10);
        return view('admin.timkiem', compact('ketqua'));
    }
}
