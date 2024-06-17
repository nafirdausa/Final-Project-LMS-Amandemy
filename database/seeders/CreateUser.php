<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'username' => 'guru1',
                'email' => 'guru1@gmail.com',
                'password' => Hash::make('guru123'),
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'guru2',
                'email' => 'guru2@gmail.com',
                'password' => Hash::make('guru12345'),
                'role' => 'guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'siswa1',
                'email' => 'siswa1@gmail.com',
                'password' => Hash::make('siswa123'),
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'siswa2',
                'email' => 'siswa2@gmail.com',
                'password' => Hash::make('siswa12345'),
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'siswa3',
                'email' => 'siswa3@gmail.com',
                'password' => Hash::make('siswa345'),
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
