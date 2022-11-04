<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        [

            'name'=>'IsUser',
            'username'=>'IsUser',
            'email'=>'user@gmail.com',
            'prssword'=>bcrypt('12345'),
            'roles_id =>2'
        ]
        [
            'name'=>'IsUser',
            'username'=>'IsUser',
            'email'=>'user@gmail.com',
            'prssword'=>bcrypt('12345'),
            'roles_id =>2'
        ]
        ];
            foreach($user as $key => $value){
                User::create($value);
            }
    }
}
