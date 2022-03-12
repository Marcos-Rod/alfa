<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = Section::factory(5)->create();

        foreach ($sections as $section){
            Image::factory(1)->create([
                'imageable_id' => $section->id,
                'imageable_type' => Section::class
            ]);
        }
    }
}
