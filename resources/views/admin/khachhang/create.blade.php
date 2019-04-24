@extends('admin.layouts.index')
@section('content')

<div class="col-12 ">
    <div class="row justify-content-center">
        <form id="khachhang" class="col-12" method="post" action=" {{ url('admin/khach-hang/luu-thong-tin') }} ">
            @csrf
        <div class="col-sm-12" style="background-color: #ffff">
                            <table class="table table-condensed" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Họ tên</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" value=" {{ old('name') }} " name="name" placeholder="Ho Ten">
                </div>
                @if ($errors->has('name'))
                <div class="error">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <!-- <legend class="col-form-label col-sm-2 pt-0">Giới tính</legend>
                    <div class="col-sm-10"> -->
                        <label for="status" class="col-sm-2 col-form-label"> Giới tính</label>
                        <div class="col-sm-10">
                            <select id="status" name="gioitinh" form="khachhang">
                                <option value="">------</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            
                            </select>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="birthday" class="col-sm-2 col-form-label">Ngày sinh</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="birthday" value=" {{ old('birdthday') }} " name="birthday" placeholder="Ngay sinh">
                </div>
                @if ($errors->has('birdthday'))
                <div class="error">{{ $errors->first('birdthday') }}</div>
                @endif
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Địa chỉ</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" name="address" value=" {{ old('address') }} " placeholder="Dia chi">
                </div>
                @if ($errors->has('address'))
                <div class="error">{{ $errors->first('address') }}</div>
                @endif
            </div>
            <div class="form-group row">
                <label for="address_2" class="col-sm-2 col-form-label">Địa chỉ thường trú</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address_2" id="address_2" value=" {{ old('address_2') }} " placeholder="Dia chi thuong tru">
                </div>
                @if ($errors->has('address_2'))
                <div class="error">{{ $errors->first('address_2') }}</div>
                @endif
            </div>
            <div class="form-group row">
                <label for="cmnd" class="col-sm-2 col-form-label">Chứng minh nhân dân</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cmnd" value="{{ old('cmnd') }}" name="cmnd" minlength="9" maxlength="9"
                        placeholder="Chung minh nhan dan">
                </div>
                @if ($errors->has('cmnd'))
                <div class="error">{{ $errors->first('cmnd') }}</div>
                @endif
            </div>
            
            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" value="{{ old('phone') }}" name="phone" minlength="10" maxlength="12"
                        placeholder="So dien thoai">
                </div>
                @if ($errors->has('phone'))
                <div class="error">{{ $errors->first('phone') }}</div>
                @endif
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label"> Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                @if ($errors->has('email'))
                <div class="error">{{ $errors->first('cmnd') }}</div>
                @endif
            </div>
            <div class="form-group row">
                <label for="mo_ta" class="col-sm-2 col-form-label"> Mô tả</label>
                <div class="col-sm-10">
                    <textarea name="mo_ta" id="mo_ta" value=" {{ old('mo_ta') }} " name="mo_ta" cols="90" rows="10"></textarea>
                </div>
                @if ($errors->has('mo_ta'))
                <div class="error">{{ $errors->first('mo_ta') }}</div>
                @endif
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label"> Trạng thái</label>
                <div class="col-sm-10">
                    <select id="status" name="status" form="khachhang">
                        <option value="">------</option>
                        <option value="Chưa kí gửi">Chưa kí gửi</option>
                        <option value="Đã kí gửi">Đã kí gửi</option>
                        <option value="Cần tư vấn thêm">Cần tư vấn thêm</option>
                        <option value="Chuyển nhượng">Chuyển nhượng</option>
                    </select>
                </div>
            </div>
            @if ($errors->has('status'))
                <div class="error">{{ $errors->first('status') }}</div>
            @endif
            <div class="form-group row">
                <label for="loai_khach_hang" class="col-sm-2 col-form-label" name="loai_khach_hang"> Loại khách hàng</label>
                <div class="col-sm-10">
                    <select name="loai_khach_hang" form="khachhang">
                        <option value=""> ------ </option>
                        <option value="Khách hàng mới">Khách hàng mới</option>
                        <option value="Khách đã kí gửi">Khách đã kí gửi</option>
                        <option value="Khách hàng tiềm năng">Khách hàng tiềm năng</option>
                    </select>
                </div>
            </div>
            @if ($errors->has('loai_khach_hang'))
                <div class="error">{{ $errors->first('loai_khach_hang') }}</div>
            @endif
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
            </div>
        </form>
    </div>
</table>
</div>
</div>

@endsection