<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;
use App\Http\Requests\CreateKhachHangRequest;
use App\Http\Requests\UpdateKhachHangRequest;
use Auth;

class khachHangController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khachhang = KhachHang::all()->toArray();
        // dd($khachhang);
        return view("admin.khachhang.danhsach", compact("khachhang"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.khachhang.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateKhachHangRequest $request)
    {
        // $e = $request ;
        // dd($e);

        $khachhang = new KhachHang();
        $khachhang->hoten = $request['name'];
        $khachhang->nvid = Auth::user()->id;
        $khachhang->diachi = $request['address'];
        $khachhang->diachitt = $request['address_2'];
        $khachhang->cmnd = $request['cmnd'];
        $khachhang->ngaysinh = $request['birthday'];
        $khachhang->sdt = $request['phone'];
        $khachhang->gioitinh = $request['gioitinh'];
        $khachhang->email = $request['email'];
        $khachhang->mota = $request['mo_ta'];
        $khachhang->trangthai = $request['status'];
        $khachhang->loaikh = $request['loai_khach_hang'];
        $khachhang->save();

        return redirect('admin/khach-hang/danh-sach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $khachhang = KhachHang::findOrFail($id)->toArray();
        return view('admin.khachhang.show', compact('khachhang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $khachhang = KhachHang::findOrFail($id);
        return view('admin.khachhang.edit', compact('khachhang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKhachHangRequest $request, $id)
    {
        $khachhang = KhachHang::findOrFail($id);
        $khachhang->hoten = $request['name'];
        $khachhang->nvid = Auth::user()->id;
        $khachhang->diachi = $request['address'];
        $khachhang->diachitt = $request['address_2'];
        $khachhang->cmnd = $request['cmnd'];
        $khachhang->ngaysinh = $request['birthday'];
        $khachhang->sdt = $request['phone'];
        $khachhang->gioitinh = $request['gioitinh'];
        $khachhang->email = $request['email'];
        $khachhang->mota = $request['mo_ta'];
        $khachhang->trangthai = $request['status'];
        $khachhang->loaikh = $request['loai_khach_hang'];
        $khachhang->update();

        return redirect('admin/khach-hang/danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $khachhang = KhachHang::findOrFail($id);
        $khachhang->delete();

        return redirect()->route('khachhang.index');
    }
}
