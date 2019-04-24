<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hoten',
        'cmnd',
        'diachi',
        'nvid',
        'diachitt',
        'ngaysinh',
        'sdt',
        'gioitinh',
        'email',
        'mota',
        'trangthai',
        'loaikh',
    ];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;



	protected $table = "khachhang";

	public function Nhanvien() {
		return $this->belongsTo('app\Nhanvien', 'nvid', 'id');
	}
}
