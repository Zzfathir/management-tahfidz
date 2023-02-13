<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Tahfidz::factory(10)->create();

        \App\Models\Tahfidz::factory()->create([
            'nama' => 'althaf',
            'surat' => 'at-tahrim',
            'status' => 'done'
        ]);
    }
}
