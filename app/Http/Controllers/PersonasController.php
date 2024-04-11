<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {
        // pagina de inici
        //$datos = "impresiones desde el controller index";
        //return view('inicio', compact('datos'));
        $datos = Personas::all();
        return view('inicio', compact('datos'));
    }


    public function create()
    {
        //El formulario donde agregaremos los datos de la clase personas(registro)

        return view('agregar');
    }


    public function store(Request $request)
    {
        //Guardar los datos en la BD

        $request->validate([
            'nombre' => 'required|string',
            'apellido_paterno' => 'required|string',
            'apellido_materno' => 'required|string',
            'fecha_nacimiento' => 'required|date',
        ]);

        // Crear un nuevo registro en la base de datos
        $persona = new Personas();
        $persona->nombre = $request->post('nombre');
        $persona->apellido_paterno = $request->post('apellido_paterno');
        $persona->apellido_materno = $request->post('apellido_materno');
        $persona->fecha_nacimiento = $request->post('fecha_nacimiento');
        $persona->save();

        // Redirigir a la página de inicio o a donde sea necesario
        return redirect()->route('personas.index')->with("success", "Registro Agregado con Exito  ..!");
        //print_r($_POST);
    }


    public function show(Personas $personas)
    {

        // Obtener un registro de la tabla personas 
        return view('eliminar');
    }


    public function edit($id)
    {
        //Traer lo datos que se van a editar de la tabla personas 
        //echo  $id;
        $personas = Personas::find($id);
        return view('actualizar', compact('personas'));
    }



    public function update(Request $request, $id)
    {
        //Actualizar un registro de la tabla personas
        $persona = Personas::find($id);
        $persona->nombre = $request->post('nombre');
        $persona->apellido_paterno = $request->post('apellido_paterno');
        $persona->apellido_materno = $request->post('apellido_materno');
        $persona->fecha_nacimiento = $request->post('fecha_nacimiento');
        $persona->save();
        return redirect()->route('personas.index')->with("success", "Registro Actualizado con Exito  ..!");
    }


    public function destroy(Personas $personas)
    {
        //Eliminar un registro de la tabla personas

        return 'aqui se elimina';
    }
}
