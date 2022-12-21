<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use DB;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('admin123'),
            ]];
        $narahubung = [
            [
                'type' => 'narahubung1',
                'lainya' => '08123456790',
                'var1' => 'Bu Vini',
            ],
            [
                'type' => 'narahubung2',
                'lainya' => '08123456790',
                'var1' => 'Bu Ulfa',
            ],
            [
                'type' => 'jumlah_siswa',
                'lainya' => 0
            ],
            [
                'type' => 'jumlah_mapel',
                'lainya' => 0
            ],
            [
                'type' => 'jumlah_guru',
                'lainya' => 0
            ],
            [
                'type' => 'jumlah_ekskul',
                'lainya' => 0
            ]
        ];
        DB::table('informasi_lainya')->insert($narahubung);
        DB::table('users')->insert($admin);
    }
}
