<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Eliana Yorely Galvis Gonzales',
            'email' => 'fonoeliana22@gmail.com',
            'password' => Hash::make('secret'),
            'phone' => '3229243184',
            'location' => 'Calle 10 # 21-67 apt 602',
            'about_me' => 'Fonoaudiologa',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
