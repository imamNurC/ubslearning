<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Customer::create([
            'type' => 'admin',
            'name' => 'Muhamad Ichsan Ramadhan',
            'username' => 'ican123',
            'phone_number' => '083892616049',
            'email' => 'ican123@gmail.com',
            'password' => bcrypt('ican123'),

        ]);

        //data ikhwan
        Customer::create([
            'type' => 'admin',
            'name' => 'Muhamad Ikhwanudin Irfan',
            'username' => 'ikhwan123',
            'phone_number' => '089601975126',
            'email' => 'ikhwan123@gmail.com',
            'password' => bcrypt('ikhwan123'),

        ]);

        //data pikih
        Customer::create([
            'type' => 'admin',
            'name' => 'Muhamad Pikih',
            'username' => 'pikih123',
            'phone_number' => '088211450987',
            'email' => 'pikih123@gmail.com',
            'password' => bcrypt('pikih123'),

        ]);
        //data imam
        Customer::create([
            'type' => 'admin',
            'name' => 'Muhamad Imam Nur Cakra',
            'username' => 'imam123',
            'phone_number' => '081289605909',
            'email' => 'imam123@gmail.com',
            'password' => bcrypt('imam123'),

        ]);

        //data meli
        Customer::create([
            'type' => 'admin',
            'name' => 'Meliana Azhara',
            'username' => 'meli123',
            'phone_number' => '087884529504',
            'email' => 'meli123@gmail.com',
            'password' => bcrypt('meli123'),

        ]);
    }
}
