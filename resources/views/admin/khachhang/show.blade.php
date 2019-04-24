@extends('admin.layouts.index')
@section('content')

<div class="col-12" >
    <div class="row" >

        {{-- name --}}
        <div class="col-12">
            <div class="col-4">Ho va Ten</div>
            <div class="col-8"> {{ $khachhang["hoten"] }} </div>
        </div>

        {{-- sdt --}}
        <div class="col-12">
            <div class="col-4">So Dien Thoai</div>
            <div class="col-8"> {{ $khachhang["sdt"] }}</div>
        </div>

        {{-- cmnd --}}
        <div class="col-12">
            <div class="col-4"> CMND</div>
            <div class="col-8"> {{ $khachhang["cmnd"] }}</div>
        </div>

        {{-- ngay sinh --}}
        <div class="col-12">
            <div class="col-4">Ngay Sinh</div>
            <div class="col-8"> {{ $khachhang["ngaysinh"] }}</div>
        </div>

        {{-- gioi tinh --}}
        <div class="col-12">
            <div class="col-4">Gioi Tinh</div>
            <div class="col-8"> {{ $khachhang["gioitinh"] }}</div>
        </div>

        {{-- dia chi --}}
        <div class="col-12">
            <div class="col-4">Dia chi</div>
            <div class="col-8">{{ $khachhang["diachi"] }} </div>
        </div>

        {{-- dia chi thuong tru --}}
        <div class="col-12">
            <div class="col-4"> Dia chi thuong tru </div>
            <div class="col-8"> {{ $khachhang["diachitt"] }}</div>
        </div>

        {{-- email --}}
        <div class="col-12">
            <div class="col-4"> Email </div>
            <div class="col-8">{{ $khachhang["email"] }}</div>
        </div>

        {{-- mo ta --}}
        <div class="col-12">
            <div class="col-4"> Mo ta </div>
            <div class="col-8">{{ $khachhang["mota"] }} </div>
        </div>

        {{-- trang thai --}}
        <div class="col-12">
            <div class="col-4"> Trang Thai </div>
            <div class="col-8">{{ $khachhang["trangthai"] }}</div>
        </div>

        {{-- loai khach hang --}}
        <div class="col-12">
            <div class="col-4"> Loai khach hang </div>
            <div class="col-8"> {{ $khachhang["loaikh"] }} </div>
        </div>

    </div>
</div>

@endsection