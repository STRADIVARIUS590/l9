<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']
// function () {
  /*   return view('index', ['datos' => [
        'asd'=> 'aaa',
        'fdf'=> 'fff']
    ]); */
   // return 'Bienvenido a la pagina principal';
//}
)->name('home');


/* Route::get('cursos/', [CursoController::class, 'index']);

Route::get('cursos/create', [CursoController::class, 'create']);

Route::get('cursos/{curso}/{categoria?}',  [CursoController::class, 'show']); 

 */
// grupo de rutas

 
/*
Route::controller(CursoController::class)->group(function(){
    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
   
    Route::get('cursos/', 'index')->name('cursos.index');

    Route::get('cursos/create','create')->name('cursos.create');

    Route::get('cursos/{curso}/{categoria?}','show')->name('cursos.show');

    Route::post('cursos', 'store')->name('cursos.store');

    Route::put('cursos/{curso}', 'update')->name('cursos.update');

    Route::delete('curso/{curso}', 'destroy')->name('cursos.destroy');

}); */

Route::resource('asignatura', CursoController::class)->parameters(['asignatura' => 'curso'])->names('cursos');
//Route::resource('cursos', CursoController::class)->names('cursos');


/* Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria  = null){
    if($categoria)
        return "bienvenido al curso de $curso de la categoria $categoria";
    else    
        return "bienvenido al curso de $curso";
}); */


Route::view('nosotros', 'nosotros')->name('nosotros');// view para mostrar contenido estatico

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');

//Route::get('contactanos', function(){
/*     $correo = new ContactanosMailable;
    Mail::to('joel.uss1728@gmail.com')->send($correo);
    return 'mensaje enviado !'; */


//})->name('contactanos.index');


Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');
