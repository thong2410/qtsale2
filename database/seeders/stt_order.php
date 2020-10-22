<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class stt_order extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            ['id' => 1, 'status_order' => 'Chờ xử lý'],
            ['id' => 2, 'status_order' => 'Đang giao hàng'],
            ['id' => 3, 'status_order' => 'Đã giao hàng'],
            ['id' => 4, 'status_order' => 'Đã hủy']
        ]);
    }
}
