<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreCurso;
class CursoController extends Controller
{
    
    public function index(){
      //  return 'Bienvenido a la pagina principalll';
      //  $cursos = Curso::all(); recupera ti¿odos los cursos. Podria afectar el rendimiento 
     //   return $cursos;
        //$cursos = Curso::paginate();// retorna solo cierta cantidad de registros. ej: http://127.0.0.1:8000/cursos?page=5
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));

    }
    
    public function create(){
        return view('cursos.create');
     //   return 'En esta pagina podras crear un curso';
    }

    public function show(Curso $curso, $categoria=null){
        // $curso = Curso::find($id);

        return view('cursos.show', compact('curso'));
/*      
        $estado = '404';
        if($categoria){
            $estado = "bienvenido al curso de $curso de la categoria $categoria";
        }else{
            $estado = "bienvenido al curso de $curso"; 
        } */
/*         return view('cursos.show', 
        [
   //     'estado'=> $estado,
            'curso'=> $id,
            'categoria' => $categoria
          //compact($curso)
        ]
    ); */
    /*     if($categoria)
        return "bienvenido al curso de $curso de la categoria $categoria";
    else    
        return "bienvenido al curso de $curso"; */
    }


    public function store(StoreCurso $request){ 

     /*    // si estas reglas fallan, te retorna al formulario 
        $request->validate([
            'name'=> 'required|max:10',
            'description'=> 'required|min:5',
            'categoria'=> 'required'
        ]);


 */



        // return $request;
/*         $curso = new Curso; /// sin asignnacion masiva 
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria; */
// return $curso;
    /*     $curso = Curso::create([    // con asignacion masiva . Tambien lo guarda en DB 
            'name'=> $request->name,
            'description' => $request->description, 
            'categoria' => $request->categoria
        ]);  */
    
        // return $request->all();
        $curso = Curso::create($request->all());// aginacion masiva corta




        // $curso->save();
        return redirect()->route('cursos.show', $curso);
    }

    public function edit(Curso $curso){
        // $curso = Curso::find($id);
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

    
        $request->validate([
            'name'=> 'required',// si estas reglas fallan, te retorna al formulario 
            'description'=> 'required',
            'categoria'=> 'required'
        ]); 



        // return $request;
/*         $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save(); */

        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
        }

        public function destroy(Curso $curso){
            $curso->delete();
            return redirect()->route('cursos.index');
            
        }
}
