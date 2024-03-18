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
        $persona->nombre = $request->input('nombre');
        $persona->apellido_paterno = $request->input('apellido_paterno');
        $persona->apellido_materno = $request->input('apellido_materno');
        $persona->fecha_nacimiento = $request->input('fecha_nacimiento');
        $persona->save();

        // Redirigir a la página de inicio o a donde sea necesario
        return redirect('/');
    }


    public function show(Personas $personas)
    {

        // Obtener un registro de la tabla personas 
        return view('eliminar');
    }


    public function edit(Personas $personas)
    {
        //Traer lo datos que se van a editar de la tabla personas 
        return view('actualizar');
    }



    public function update(Request $request, Personas $personas)
    {
        //Actualizar un registro de la tabla personas
        $tableContent = "
    <table class='table' style='width: 50%; margin: auto; border-collapse: collapse;'>
        <caption style='font-size: 1.5em; margin-bottom: 10px;'>Lista de Registros</caption>
        <thead>
            <tr style='background-color: #48cebc; color: #fff;'>
                <th style='padding: 10px; border: 1px solid #ddd;'>#</th>
                <th style='padding: 10px; border: 1px solid #ddd;'>Nombre</th>
                <th style='padding: 10px; border: 1px solid #ddd;'>Apellido</th>
                <th style='padding: 10px; border: 1px solid #ddd;'>Correo</th>
                <th style='padding: 10px; border: 1px solid #ddd;'>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style='padding: 10px; border: 1px solid #ddd;'>1</td>
                <td style='padding: 10px; border: 1px solid #ddd;'>Mark</td>
                <td style='padding: 10px; border: 1px solid #ddd;'>Otto</td>
                <td style='padding: 10px; border: 1px solid #ddd;'>@mdo</td>
                <td style='padding: 10px; border: 1px solid #ddd;'>
                    <button style='background-color: #a1d1cb; color: #fff; cursor: pointer; border: none; border-radius: 5px; padding: 5px;' onclick='actualizarRegistro(1)'>Actualizar</button>
                </td>
            </tr>
            <tr>
                <td style='padding: 10px; border: 1px solid #ddd;'>2</td>
                <td style='padding: 10px; border: 1px solid #ddd;'>Jacob</td>
                <td style='padding: 10px; border: 1px solid #ddd;'>Thornton</td>
                <td style='padding: 10px; border: 1px solid #ddd;'>@fat</td>
                <td style='padding: 10px; border: 1px solid #ddd;'>
                    <button style='background-color: #a1d1cb; color: #fff; cursor: pointer; border: none; border-radius: 5px; padding: 5px;' onclick='actualizarRegistro(2)'>Actualizar</button>
                </td>
            </tr>
            <!-- Agregar más filas según sea necesario -->
        </tbody>
    </table>";

        return $tableContent;
    }


    public function destroy(Personas $personas)
    {
        //Eliminar un registro de la tabla personas

        return 'aqui se elimina';
    }
}
