<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function sua()
    {
        $user= User::find(Auth::user()->id);
        return view('admin.taikhoan.capnhat', compact('user'));

    }
    public function matkhau()
    {

        return view('admin.taikhoan.matkhau');

    }

    public function luu(Request $request)
    {

        $this->validate($request,
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|',
                'check_password' => 'required',
            ],
            [
                'name.required' => 'Không được bỏ trống tên',
                'email.required' => 'Không được bỏ trống email',
                'phone.required' => 'Không được bỏ trống số điện thoại',
                'check_password.required' => 'cần nhập mật khẩu để xác nhận đổi thông tin',
                'email.email' => 'Không phải là email hợp lệ'

            ]
        );
        $user= User::find(Auth::user()->id);

        if (Hash::check($request->check_password, $user->password)) {
            $user->fill($request->all());
            $user->save();
            $request->session()->flash('status', 'cập nhật thông tin thành công');
            return redirect(route('admin'));
        }
        else{
            $request->session()->flash('status', 'Mật khẩu nhập vào không khớp');

            return redirect(route('taikhoan.capnhat'));
        }

    }

    public function pass(Request $request)
    {

        $this->validate($request,
            [
                'password' => 'required',
                'mk_moi' => 'required|min:8|max:16',
                'kt_mk' => 'required',
            ],
            [
                'password.required' => 'Không được bỏ trống trường này',
                'mk_moi.required' => 'Không được bỏ trống trường này',
                'mk_moi.min' => 'Mật khẩu phải có ít nhất 8 ký t',
                'mk_moi.max' => 'Mật khẩu chứa tối đa 16 ký tự',
                'kt_mk.required' => 'Không được bỏ trống trường này',

            ]
        );
        $user= User::find(Auth::user()->id);

        if (Hash::check($request->password, $user->password)) {

            if ($request->mk_moi == $request->kt_mk){
                $user->password = Hash::make($request->mk_moi);
                $user->save();
                $request->session()->flash('status', 'cập nhật thông tin thành công');
                return redirect(route('admin'));
            }
            else{
                $request->session()->flash('status1', 'Xác nhận mật khẩu mới thất bại, vui lòng nhập đúng mật khẩu xác nhận');
                return redirect(route('taikhoan.matkhau'));
            }

        }
        else{
            $request->session()->flash('status', 'Mật khẩu nhập vào không khớp');

            return redirect(route('taikhoan.matkhau'));
        }

    }



}
