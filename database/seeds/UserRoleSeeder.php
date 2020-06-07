<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1 = Role::create([
            'name'=>'user'
        ]);
        $role2 = Role::create([
            'name'=>'administrator'
        ]);

        $role1->users()->create([
            'name'=>'Anxhela Elmazi',
            'email'=>'a@gmail.com',
            'password'=> Hash::make('12345678'),
        ]);
        $role2->users()->create([
            'name'=>'Erand Elmazi',
            'email'=>'eelmazi8@gmail.com',
            'password'=> Hash::make('12345678'),
        ]);
    }
}
