<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Maxim IANGAEV',
        	'email' => 'admin@root.com',
        	'password' => bcrypt('123456789'),
        	'role_id' => 'admin',
        ]);

           User::create([
            'name' => 'Fred MUHLLER',
            'email' => 'admin@root.fr',
            'password' => bcrypt('123456789'),
            'role_id' => 'super',
        ]);
    }
}
