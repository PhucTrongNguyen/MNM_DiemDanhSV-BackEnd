<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongHoc extends Model
{
    use HasFactory;

    protected $fillable = ['MaPH', 'TenPH', 'DiaChiPH'];
    protected $primaryKey = 'MaPH';
    public $timestamps = false;
    protected $table = 'PhongHoc';
    public $incrementing = false;
    protected $keyType = 'string';
}
