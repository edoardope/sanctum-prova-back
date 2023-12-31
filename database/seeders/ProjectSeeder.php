<?php

namespace Database\Seeders;

use App\Models\Admin\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $new_project = new Project();
            $new_project->title = $faker->sentence(3);
            $new_project->cover_image = $faker->image(640, 480, 'animals', true);
            $new_project->slug = Str::slug($new_project->title, '-');
            $new_project->save();
        }
    }
}