<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role' => 'a',
            'nome' => 'cacao',
            'cognome' => 'cacao2',
            'email' => 'cacao@cacao.it',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123456'),
            'annoNascita' => 1975,
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        User::factory(300)->create();
    }
}
