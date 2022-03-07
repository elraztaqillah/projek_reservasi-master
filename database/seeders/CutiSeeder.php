<?php

namespace Database\Seeders;

use App\Models\Cuti;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuti::create([
            'karyawan_id' => '1',
            'tgl_cuti' => '2022-02-13',
            'akhir_cuti' => '2022-02-13',
            'lama_cuti' => '2',
            'keterangan' => 'Acara Keluarga'
        ]);

        Cuti::create([
            'karyawan_id' => '2',
            'tgl_cuti' => '2022-02-13',
            'akhir_cuti' => '2022-02-13',
            'lama_cuti' => '2',
            'keterangan' => 'Anak Sakit'
        ]);

        Cuti::create([
            'karyawan_id' => '3',
            'tgl_cuti' => '2022-02-13',
            'akhir_cuti' => '2022-02-13',
            'lama_cuti' => '1',
            'keterangan' => 'Nenek Sakit'
        ]);
    }
}
