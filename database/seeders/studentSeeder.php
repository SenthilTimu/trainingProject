<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class studentSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'uuid' => 'ORSMCF934M',
                'name' => 'Prabhu',
                'comments' => 'hiee can i see u??',
                'created_at' => gmdate("Y-m-d H:i:s"),
                'updated_at' => gmdate("Y-m-d H:i:s"),
            ],
            [
                'uuid' => 'OCWEFDNRWJS',
                'name' => 'Senthil',
                'comments' => 'Y are u here??',
                'created_at' => gmdate("Y-m-d H:i:s"),
                'updated_at' => gmdate("Y-m-d H:i:s"),
            ],
            [
                'uuid' => 'IDXK430FAK1',
                'name' => 'Naveen',
                'comments' => 'we have an argument scheduled after lunch!..',
                'created_at' => gmdate("Y-m-d H:i:s"),
                'updated_at' => gmdate("Y-m-d H:i:s"),
            ],
            [
                'uuid' => 'ODCNW942JCA',
                'name' => 'Dinesh Kumar',
                'comments' => 'I need to reach ofc at 10am tdy with client call??',
                'created_at' => gmdate("Y-m-d H:i:s"),
                'updated_at' => gmdate("Y-m-d H:i:s"),
            ],
        ];
        DB::connection('mysql')->table('student')->insertOrIgnore($data);
    }
}
