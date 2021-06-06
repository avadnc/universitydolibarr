<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        //

        User::create([
            'name' => 'Alex Vives',
            'email' => 'correo@correo.com',
            'password' => Hash::make('p@ssw0rd')

        ]);

        User::factory(99)->create();
    }
}
