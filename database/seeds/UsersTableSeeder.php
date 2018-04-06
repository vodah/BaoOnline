<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'HaDao', 'email' => 'admin@abc.com', 'password' => Hash::make('12345678')]
        ];
        foreach ($users as $value) {
            DB::table('users')->insert($value);
        }

    }
}
