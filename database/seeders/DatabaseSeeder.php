<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'first_name' => 'محمد حسین',
            'last_name' => 'عابدینی',
            'gender' => 'male',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin')
        ]);

        Role::insert(array(
            ['title' => 'admin', 'slug' => 'admin'],
            ['title' => 'household', 'slug' => 'household'],
            ['title' => 'family-member', 'slug' => 'family-member']
        ));
    }
}
