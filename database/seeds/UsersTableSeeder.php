<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
        	'name' => 'Maaz',
        	'email' => 'imaaz18@gmail.com',
        	'password' => bcrypt('secret'),
        	'admin' => 1
        ]);
        
        $user2 = User::create([
            'name' => 'Ahmad H.',
            'email' => 'ahmad@mail.com',
            'password' => bcrypt('secret')
        ]);

        $user3 = User::create([
            'name' => 'Emily M.',
            'email' => 'emily@mail.com',
            'password' => bcrypt('secret')
        ]);
    }
}
