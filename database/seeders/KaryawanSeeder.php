<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Karyawan::create([
            'no_induk' => 'IP06001',
            'nama' => 'Agus',
            'alamat' => 'Jln Gaja Mada no 12, Surabaya',
            'tgl_lahir' => '11-Jan-80'
        ]);

        Karyawan::create([
            'no_induk' => 'IP06003',
            'nama' => 'Yusuf',
            'alamat' => 'Jln A Yani Raya 15 No 14 Malang',
            'tgl_lahir' => '09-Aug-73'
        ]);

        Karyawan::create([
            'no_induk' => 'IP06002',
            'nama' => 'Amin',
            'alamat' => 'Jln Imam Bonjol no 11, Mojokerto',
            'tgl_lahir' => '03-Sep-77'
        ]);
    }
}
