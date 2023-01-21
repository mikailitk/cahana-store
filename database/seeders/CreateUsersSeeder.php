<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@admin.com',
               'telp'=>'081208120812',
               'alamat'=>'Jl. Bekasi',
               'type'=>1,
               'password'=> bcrypt('12121212'),
            ],
            [
               'name'=>'Normal User',
               'email'=>'user@user.com',
               'telp'=>'087808780878',
               'alamat'=>'Jl. Jakarta',
               'type'=> 0,
               'password'=> bcrypt('12121212'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
