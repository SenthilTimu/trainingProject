<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class parentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parent = [
            [
                'name' => 'Kumar',
                'address' => 'Velachery',
                'd_o_b' => '22-07-1991',
                'blood_group' => 'O+ve',
                'created_at' => gmdate("Y-m-d H:i:s"),
                'updated_at' => gmdate("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Valli',
                'address' => 'Lake View',
                'd_o_b' => '02-02-1854',
                'blood_group' => 'A+ve',
                'created_at' => gmdate("Y-m-d H:i:s"),
                'updated_at' => gmdate("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Meena',
                'address' => 'Madipakkam Flat',
                'd_o_b' => '14-07-1994',
                'blood_group' => 'A-ve',
                'created_at' => gmdate("Y-m-d H:i:s"),
                'updated_at' => gmdate("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Pradeep',
                'address' => 'Guna Cave Otteri',
                'd_o_b' => '31-09-2021',
                'blood_group' => 'OC',
                'created_at' => gmdate("Y-m-d H:i:s"),
                'updated_at' => gmdate("Y-m-d H:i:s"),
            ]
        ];
        DB::connection('mysql')->table('parent')->insertOrIgnore($parent);
    }
}
