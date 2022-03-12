<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Storage::makeDirectory('public/sections');
        
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Marcos Rodriguez',
            'email' => 'tmlwar01@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $this->call(SectionSeeder::class);
    }
}
