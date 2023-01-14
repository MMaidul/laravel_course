<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\Platform;
use App\Models\Series;
use App\Models\Topic;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $series = ['PHP', 'JavaScript', 'Wordpress', 'Laravel'];
        foreach ($series as $item) {
            Series::create([
                'name' => $item,
            ]);
        }

        $topics = [
            'Eloquent',
            'Validation',
            'Authentication',
            'Testing',
            'Refactoring',
        ];
        foreach ($topics as $item) {
            Topic::create([
                'name' => $item,
            ]);
        }

        $platforms = [
            'Laracasts',
            'Youtube',
            'LaraJobs',
            'Laravel News',
            'laravel Fourm',
        ];
        foreach ($platforms as $item) {
            Platform::create([
                'name' => $item,
            ]);
        }

        //Create 50 users;
        User::factory(50)->create();

        //Course 100;
        Course::factory(100)->create();
    }
}
