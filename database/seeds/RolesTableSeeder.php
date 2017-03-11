<?php

use Illuminate\Database\Seeder;
use App\Roles;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=new \App\Roles();
        $role->name ='Administrator';
        $role->save();
        
        $role=new \App\Roles();
        $role->name ='Administrator Transportu';
        $role->save();
        
        $role=new \App\Roles();
        $role->name ='user';
        $role->save();
    }
}
