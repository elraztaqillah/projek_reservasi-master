<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $fillable = [
        'no_induk',
        'nama',
        'tgl_lahir',
        'alamat'
    ];
    
    protected $primaryKey = 'id';

    public function cuti()
    {
        return $this->hasMany(Cuti::class, 'karyawan_id', 'id');
    }
}
