<?php

namespace Database\Seeders;

use App\Models\Configuration;
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
        Storage::makeDirectory('sections');
        
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Alfa Barber',
            'email' => 'tmlwar01@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        Configuration::create([
            'name_business' => 'Alfa Barber',
            'mail' => 'contacto@alfabarber.com',
            'seo_term' => 'Barber shop',
            'meta_keywords' => 'Barberia, Barber shop',
            'meta_description' => 'Barberia profesional'
        ]);

        $this->call(SectionSeeder::class);
    }
}
