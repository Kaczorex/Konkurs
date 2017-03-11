<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Roles;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Roles::where('name', 'Administrator')->first();
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($role);

        $role = Roles::where('name','Administrator Transportu')->first();
        $user = new User();
        $user->name = 'Kierownik';
        $user->email = 'Kierownik@example.com';
        $user->password = bcrypt('kierownik');
        $user->save();
        $user->roles()->attach($role);

        $role = Roles::where('name','user')->first();
        $user = new User();
        $user->name = 'user2';
        $user->email = 'user2@example.com';
        $user->password = bcrypt('user2');
        $user->save();
        $user->roles()->attach($role);

        
        $role = Roles::where('name','user')->first();
        $user = new User();
        $user->name = 'user';
        $user->email = 'user@example.com';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($role);
    }
}
