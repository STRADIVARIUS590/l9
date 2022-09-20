<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Curso;
class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::factory(50)->create();
 /*        $curso = new Curso;
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
        $curso3->save();  */
        //
    }
}
