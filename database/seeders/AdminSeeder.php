<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('admins')->insert([
        'nip'=> '12345678',
        'jenis_kelamin'=> 'laki laki',
        'tanggal_lahir'=> '23 November 2023',
        'nama'=> 'bangrey',
        'password'=> bcrypt('123456'),
        'telepon'=> '081234567',

        ]);


    }


}
