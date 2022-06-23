<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Super admin', 'username' => 'superadmin'.'@gmail.com', 'password' => Hash::make('1234'), 'role_id' => 1,],
            ['name' => 'COD', 'username' => 'cod'.'@gmail.com', 'password' => Hash::make('1234'), 'role_id' => "{'role':'2','department':'ICI'}",],
            ['name' => 'COD', 'username' => 'codICTS'.'@gmail.com', 'password' => Hash::make('1234'), 'role_id' => "{'role':'2','department':'ICTS'}",],
            ['name' => 'Finance', 'username' => 'finance'.'@gmail.com', 'password' => Hash::make('1234'), 'role_id' => 3,],
            ['name' => 'Dean', 'username' => 'dean'.'@gmail.com', 'password' => Hash::make('1234'), 'role_id' => "{'role':'4','department':'ICI'}",],
            ['name' => 'Dean', 'username' => 'deanICTS'.'@gmail.com', 'password' => Hash::make('1234'), 'role_id' => "{'role':'4','department':'ICTS'}",],
            ['name' => 'Accommodation', 'username' => 'accommodation'.'@gmail.com', 'password' => Hash::make('1234'), 'role_id' => 5,],
            ['name' => 'Student', 'username' => 'student'.'@gmail.com', 'password' => Hash::make('1234'), 'role_id' => 6,],
            ['name' => 'Exams', 'username' => 'examination'.'@gmail.com', 'password' => Hash::make('1234'), 'role_id' => 7,],
        ];

        foreach ($users as $user){
            DB::table('users')->insert([ $user ]);
        }
    }
}
