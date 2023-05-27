<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Consts\AppConsts;
use App\Consts\AdminConsts;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            'name'       => "admin",
            'login_id'   => "admin",
            'password'   => Hash::make('password'),
            'status'     => AppConsts::STATUS_VALID,
            'role'       => AdminConsts::ROLE_ADMIN,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
