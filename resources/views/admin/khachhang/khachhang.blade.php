khachhang.blade.php
@extends('layout.index')

@section('content')
<div class="container">
	<div class="row carousel-holder">
		<div class="co1-md-2"
		</div>
		<div class="co1-md-8"
			<div class="panel panel-default">
				<div class="panel-heading">Thông tin khách hàng</div>
				<div class="panel-body">
					<form>
						<div>
							<label>Họ và tên</label>
							<input type="text" class="form-control" placeholder="Name" name="name" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label>Số điện thoại</label>
							<input type="text" class="form-control" placeholder="sdt" name="sdt" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label>Email</label>
							<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1" disabled>
						</div>
						<br>
						<div>
							<label>Mã ID</label>
							<input type="text" class="form-control" placeholder="ID" name="id" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label>Địa chỉ</label>
							<input type="text" class="form-control" placeholder="adress" name="adress" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label>Ngày sinh</label>
							<input type="text" class="form-control" placeholder="Ngaysinh" name="ngaysinh" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label>Giới tính</label>
							<input id="gender" type="radio" class="input-radio"name="gender" value="nam" checked="checked" style="width: 10"><span style="margin-right: 10">Nam</span>
							<input id="gender" type="radio" class="input-radio"name="gender" value="nữ" checked="checked" style="width: 10"><span style="margin-right: 10">Nữ</span>
						</div>
						<br>
						<div>
							<label>Mô tả</label>
							<input type="text" class="form-control" placeholder="Mota" name="mota" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label>Ghi chú</label>
							<input type="text" class="form-control" placeholder="Note" name="note" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label>Loại Khách hàng/label>
							<input type="text" class="form-control" placeholder="Type" name="type" aria-describedby="basic-addon1">
						</div>
						<br>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>