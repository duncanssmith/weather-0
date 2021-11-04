<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::factory(1)->create([
            'name' => 'Duncan Smith',
            'email' => 'duncanssmith@gmail.com',
            'location' => 'London',
            'is_admin' => 1,
        ]);

        User::factory(1)->create([
            'name' => 'Robert Jones',
            'email' => 'r-jones123321@gmail.com',
            'location' => 'Edinburgh',
            'is_admin' => 0,
        ]);

        User::factory(1)->create([
            'name' => 'Asheesh Rajnesh',
            'email' => 'ash.rajnesh@yahoo.com',
            'location' => 'Manchester',
            'is_admin' => 1,
        ]);

        User::factory(2)->create();
    }
}
