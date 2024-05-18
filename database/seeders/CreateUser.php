<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'guru1',
                'email' => 'guru1@gmail.com',
                'password' => Hash::make('guru123'),
                'role' => 'Guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'siswa1',
                'email' => 'siswa1@gmail.com',
                'password' => Hash::make('siswa123'),
                'role' => 'Siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'siswa2',
                'email' => 'siswa2@gmail.com',
                'password' => Hash::make('siswa456'),
                'role' => 'Siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
