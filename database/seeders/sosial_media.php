<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class sosial_media extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sosial_media = [
            [
                'nama' => 'Instagram',
                'deskripsi' => null,
                'link' => '#',
                'logo' => 'bi bi-instagram me-2',
                'status' => 1,
            ],
            [
                'nama' =>'Youtube',
                'deskripsi' => null,
                'link' => '#',
                'logo' => 'bi bi-youtube me-2',
                'status' => 1,
            ],
            [
                'nama' => 'Facebook',
                'deskripsi' => null,
                'link' => '#',
                'logo' => 'bi bi-facebook me-2',
                'status' => 1,
            ],
            [
                'nama' => 'Whatsapp',
                'deskripsi' => null,
                'link' => '#',
                'logo' => 'bi bi-whatsapp me-2',
                'status' => 1,
            ]
        ];
        DB::table('sosial_media')->insert($sosial_media);
    }
}
