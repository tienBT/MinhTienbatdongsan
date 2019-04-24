@extends('admin.layouts.index')
@section('content')


<!-- <table class="table table-hover table-dark"> -->
    <div class="col-12" style="background-color: #ffff">
        <div class="row">
            <table class=" table-condensed" id="dataTable" width="auto" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: auto;">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">nvid</th>
                        <th scope="col">Họ và Tên</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Địa chỉ thường trú</th>
                        <th scope="col">Chứng minh nhân dân</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Loại khách hàng</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    foreach ($khachhang as $key => $value) {
                    ?>
                    <tr class="col-12">
                        <th scope="row"> {{ $value['id'] }} </th>
                        <td> {{ $value['nvid'] }} </td>
                        <td> {{ $value['hoten'] }} </td>
                        <td> {{ $value['diachi'] }} </td>
                        <td> {{ $value['diachitt'] }} </td>
                        <td> {{ $value['cmnd'] }} </td>
                        <td> {{ $value['ngaysinh'] }} </td>
                        <td> {{ $value['sdt'] }} </td>
                        <td> {{ $value['gioitinh'] }} </td>
                        <td> {{ $value['email'] }} </td>
                        <td> {{ $value['mota'] }} </td>
                        <td> {{ $value['loaikh'] }} </td>
                        <td> {{ $value['trangthai'] }} </td>
                        <td>
                            <div class="btn-group " role="group" aria-label="Basic example">


                            <a href="{{ route('khachhang.show', $value['id']) }}" type="button" class="btn btn-primary">Show</a>
                              <a href="{{ route('khachhang.edit', $value['id']) }}" type="button" class="btn btn-success">Edit</a>
                              <a href="{{ route('khachhang.destroy', $value['id']) }}" type="button" class="btn btn-danger">Remove</a>
                            </div>
                        </td>
                    </tr>

                <?php
                            // echo "$key : $value";
                    }
                        ?>
                </tbody>
</table>
        </div>
    </div>
        
<div class="col-12">
    <div class="row no-gutters justify-content-end">
        <div class="btn-group col-3">
            <a href=" {{ route('khachhang.create') }} " class="btn btn-primary btn-sm">Them khach hang</a>
        </div>
    </div>
</div>
    
</div>

    



@endsection