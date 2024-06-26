<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Khoa extends Model
{
    use HasFactory;
    protected $fillable = ['MaKhoa', 'TenKhoa', 'SoLuongSV'];
    protected $primaryKey = 'MaKhoa';
    public $timestamps = false;
    protected $table = 'Khoa';
    public $incrementing = false;
    protected $keyType = 'string';
    public function SinhVien() : HasMany{
        return $this->hasMany(SinhVien::class, 'MaKhoa', 'MaKhoa');
    }
}
