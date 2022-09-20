<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Curso;
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
        $this->call(CursoSeeder::class);
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

/*     
        $curso = new Curso;
        $curso->name = 'LARAVEL 9';
        $curso->description = 'El mejor framework de PHP';
        $curso->categoria = 'web dev';
        $curso->save();

        $curso2 = new Curso;
        $curso2->name = 'LARAVEL 9';
        $curso2->description = 'El mejor framework de PHP';
        $curso2->categoria = 'web dev';
        $curso2->save();

        $curso3 = new Curso;
        $curso3->name = 'LARAVEL 9';
        $curso3->description = 'El mejor framework de PHP';
        $curso3->categoria = 'web dev';
        $curso3->save(); 
        */
    }
}
