<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;
    protected $table = 'tipe_cuti';
    protected $fillable = [
        'karyawan_id',
        'tgl_cuti',
        'akhir_cuti',
        'lama_cuti',
        'keterangan'
    ];
    
    protected $primaryKey = 'id';
    
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id', 'id');
    }
}
