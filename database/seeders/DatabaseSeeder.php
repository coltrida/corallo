<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
                UserSeeder::class,
                EsercizioSeeder::class,
                /*SchedallenamentoSeeder::class,
                SettimanallenamentoSeeder::class,
                GiornoallenamentoSeeder::class,
                AllenamentoSeeder::class,*/
            ]
        );

        Storage::disk('public')->deleteDirectory('images/');
        Storage::disk('public')->deleteDirectory('news/');
        Storage::disk('public')->deleteDirectory('video/');
        Storage::disk('public')->makeDirectory('images/');
        Storage::disk('public')->makeDirectory('news/');
        Storage::disk('public')->makeDirectory('video/');
    }
}
