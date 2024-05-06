<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonasController extends Controller
{
    protected $fillable = [
        'foto', 'nombre', 'apellido_paterno', 'apellido_materno', 'fecha_nacimiento',
    ];



    public function index()
    {
        // pagina de inici
        //$datos = "impresiones desde el controller index";
        //return view('inicio', compact('datos'));
        $datos = Personas::orderBy('nombre', 'asc')->paginate(3);
        return view('home', compact('datos'));
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
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'nombre' => 'required|string',
            'apellido_paterno' => 'required|string',
            'apellido_materno' => 'required|string',
            'fecha_nacimiento' => 'required|date',
        ]);
        $imagePath = null;
        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('uploads', 'public');
        }

        // Crear un nuevo registro en la base de datos
        $persona = new Personas();
        $persona->foto = $imagePath;
        $persona->nombre = $request->post('nombre');
        $persona->apellido_paterno = $request->post('apellido_paterno');
        $persona->apellido_materno = $request->post('apellido_materno');
        $persona->fecha_nacimiento = $request->post('fecha_nacimiento');
        $persona->save();

        // Redirigir a la página de inicio o a donde sea necesario
        return redirect()->route('personas.index')->with("success", "Registro Agregado con Exito  ..!");
        //print_r($_POST);
    }


    public function show($id)
    {

        // Obtener un registro de la tabla personas 
        $personas = Personas::find($id);
        return view('eliminar', compact('personas'));
        //return view('eliminar');
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
        $request->validate([
            'foto_nueva' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'nombre' => 'required|string',
            'apellido_paterno' => 'required|string',
            'apellido_materno' => 'required|string',
            'fecha_nacimiento' => 'required|date',
        ]);
        //Actualizar un registro de la tabla personas
        $persona = Personas::find($id);
        if (!$persona) {
            return redirect()->route('personas.index')->with("error", "Persona no encontrada.");
        }

        // Procesar la nueva foto
        if ($request->hasFile('foto_nueva')) {
            // Eliminar la foto anterior si existe
            if ($persona->foto) {
                Storage::disk('public')->delete($persona->foto);
            }
            // Almacenar la nueva foto
            $imagePath = $request->file('foto_nueva')->store('uploads', 'public');
            $persona->foto = $imagePath;
        }


        $persona->nombre = $request->post('nombre');
        $persona->apellido_paterno = $request->post('apellido_paterno');
        $persona->apellido_materno = $request->post('apellido_materno');
        $persona->fecha_nacimiento = $request->post('fecha_nacimiento');
        $persona->save();
        return redirect()->route('personas.index')->with("success", "Registro Actualizado con Exito  ..!");
    }


    public function destroy($id)
    {
        $persona = Personas::find($id);
        if (!$persona) {
            return redirect()->route('personas.index')->with("error", "Persona no encontrada.");
        }

        if ($persona->foto) {
            Storage::disk('public')->delete($persona->foto);
        }

        $persona->delete();
        return redirect()->route('personas.index')->with("success", "Registro eliminado con éxito.");
    }
}
