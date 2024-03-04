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
        $datos=Personas::all();
        return view('inicio', compact('datos'));
    }


    public function create()
    {
        //El formulario donde agregaremos los datos de la clase personas(registro)

        $formulario = "
        <center>
        <p style='color: #fff; text-align: left; margin-top: 10px;'> <a href='" . route('personas.index') . "'>Inicio</a></p><center>
        <div class='container'  style='background-color: #a1d1cb; max-width: 400px' >
        <div id='contact-form' class='con' style='font-family:Cambria, Cochin, Georgia, Times, \"Times New Roman\", serif;'>
         <br>
         <div class='image'>
            <h2 style='color: #fff;'>Formulario de Registro</h2>
            <img src='https://cdn-icons-png.flaticon.com/512/4205/4205906.png' alt='Imagen de inicio de sesión' style='max-width: 100%; height: 300px; border-radius: 5px;'>
           </div>

          <div>
             <form action='/store' method='POST' style='display: flex; flex-direction: column; align-items: center;'>
             
                 <label for='nombre' style='margin-bottom: 5px; color: #555;'>Nombre:</label>
                 <input type='text' id='nombre' name='nombre' required style='padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;'>

                 <label for='apellido_paterno' style='margin-bottom: 5px; color: #555;'>Apellido Paterno:</label>
                 <input type='text' id='apellido_paterno' name='apellido_paterno' required style='padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;'>

                 <label for='apellido_materno' style='margin-bottom: 5px; color: #555;'>Apellido Materno :</label>
                 <input type='txt' id='apellido_materno' name='apellido_materno' required style='padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;'>

                 <label for='fecha' style='margin-bottom: 5px; color: #555;'>Fecha de nacimiento :</label>
                 <input type='date' id='fecha_nacimiento' name='fecha' required style='padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;'>
                 <br>
                 <button style='background-color:#48cebc; color: #fff; cursor: pointer; transition: background-color 0.3s ease; padding: 10px; border: none; border-radius: 5px;' type='submit'><i class='fa fa-paper-plane'></i> Enviar</button>
                 <br>
               </form>
          </div>
        </div>
        </div></center>
    ";
        return ($formulario);

       

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
        return ("<center><h1 style='font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;'>Tienda MT Motos <div id='inicio-content' class='con'>
        <img src='https://http2.mlstatic.com/D_NQ_NP_868157-MCO72507912494_102023-O.webp' >
        </div>
        </center>");
    }


    public function edit(Personas $personas)
    {
        //Traer lo datos que se van a editar de la tabla personas 
        $tableContent = "
        <table class='table' style='width: 50%; margin: auto; border-collapse: collapse;'>
    <caption style='font-size: 1.5em; margin-bottom: 10px;'>Lista de Registros</caption>
    <thead>
        <tr style='background-color: #48cebc; color: #fff;'>
            <th style='padding: 10px; border: 1px solid #ddd;'>#</th>
            <th style='padding: 10px; border: 1px solid #ddd;'>Nombret</th>
            <th style='padding: 10px; border: 1px solid #ddd;'>Apellido</th>
            <th style='padding: 10px; border: 1px solid #ddd;'>correo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style='padding: 10px; border: 1px solid #ddd;'>1</td>
            <td style='padding: 10px; border: 1px solid #ddd;'>Mark</td>
            <td style='padding: 10px; border: 1px solid #ddd;'>Otto</td>
            <td style='padding: 10px; border: 1px solid #ddd;'>@mdo</td>
        </tr>
        <tr>
            <td style='padding: 10px; border: 1px solid #ddd;'>2</td>
            <td style='padding: 10px; border: 1px solid #ddd;'>Jacob</td>
            <td style='padding: 10px; border: 1px solid #ddd;'>Thornton</td>
            <td style='padding: 10px; border: 1px solid #ddd;'>@fat</td>
        </tr>
        <tr>
            <td style='padding: 10px; border: 1px solid #ddd;'>3</td>
            <td style='padding: 10px; border: 1px solid #ddd;'>Larry</td>
            <td style='padding: 10px; border: 1px solid #ddd;'>the Bird</td>
            <td style='padding: 10px; border: 1px solid #ddd;'>@twitter</td>
        </tr>
    </tbody>
</table>
<p style='color: #fff; text-align: left; margin-top: 10px;'> <a href='" . route('personas.index') . "'>Inicio</a></p><center>
";

        return ($tableContent);
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
