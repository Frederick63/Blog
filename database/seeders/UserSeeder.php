<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Frederick',
            'email'=>'frederickcamtest@gmail.com',
            'password'=>bcrypt('frederick63')
        ])->assignRole('Admin');;
        
        User::factory(99)->create();

    }
}
