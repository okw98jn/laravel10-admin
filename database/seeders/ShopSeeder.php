<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Consts\AppConsts;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shops')->truncate();
        DB::table('shops')->insert([
            'code'         => "shop1",
            'name'         => "テスト店舗",
            'zip'          => "123-4567",
            'prefectures'  => "大阪府",
            'city'         => "大阪市淀川区",
            'address'      => "1-1-1",
            'email'        => "0cu2045d@gmail.com",
            'tel'          => "090-1111-1111",
            'status'       => AppConsts::STATUS_VALID,
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now(),
        ]);
    }
}
