<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();

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
                'username' => 'guru3',
                'email' => 'guru3@gmail.com',
                'password' => Hash::make('guru123123'),
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
                'password' => Hash::make('siswa123123'),
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'siswa4',
                'email' => 'siswa4@gmail.com',
                'password' => Hash::make('siswa12341234'),
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'siswa5',
                'email' => 'siswa5@gmail.com',
                'password' => Hash::make('siswa345345'),
                'role' => 'siswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}