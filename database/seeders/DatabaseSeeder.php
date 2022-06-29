<?php

namespace Database\Seeders;

use App\Models\Configuration;
use App\Models\Section;
use App\Models\Service;
use App\Models\Team;
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
        /* Storage::makeDirectory('sections'); */
        
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Alfa Barber',
            'email' => 'contacto@alfa-barber.com',
            'password' => bcrypt('12345678')
        ]);

        Configuration::create([
            'name_business' => 'Alfa Barber',
            'mail' => 'contacto@alfa-barber.com',
            'seo_term' => 'Barber shop',
            'meta_keywords' => 'Barberia, Barber shop',
            'meta_description' => 'Barberia profesional'
        ]);

        Section::create([
            'title' => 'Inicio',
            'slug' => 'inicio',
            'extract' => 'Sección en construcción',
            'content' => 'Sección en construcción'
        ]);

        Service::Create([
            'title' => 'servicio 1'
        ]);
        
        Team::Create([
            'name' => 'Marcos',
            'description' => 'barbero'
        ]);
    }
}
