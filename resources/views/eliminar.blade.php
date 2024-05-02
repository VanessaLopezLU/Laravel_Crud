@extends('layout.plantilla')  
@section('tituloPagina','Eliminar Registro')

@section('content')
<center><div class="card" style='background-color: #a1d1cb; max-width: 800px ;font-family:Cambria, Cochin, Georgia, Times, \"Times New Roman\", serif;'>
    <h5 class="card-header">Eliminar el  Registro .!</h5>

      <div class="card-body" >
        <p class="card-text" >
            
          <br>
            <div class='image'>
                    <img src='https://cdn-icons-png.flaticon.com/512/2910/2910773.png' alt='Imagen de inicio de sesión' style='max-width: 100%; height: 300px; border-radius: 5px;'>
             </div>
            <br>
            <div class='alert alert-danger' role='alert'>
                Estas seguro que deseas eliminar el registro..!
            </div>
            <table class="table table-sm  table-hover table-bordered" style="background-color: #a3d9dd">
                <thead>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th> Fecha de Nacimiento</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            @if($personas->foto)
                                <img src="{{ asset('storage/' . $personas->foto) }}" alt="Foto de {{ $personas->nombre }}" width="100">
                            @else
                                <span>No hay foto</span>
                            @endif
                        </td>
                     <td>{{$personas->nombre}}</td>
                     <td>{{$personas->apellido_paterno}}</td>
                     <td>{{ $personas->apellido_materno}}</td>
                     <td>{{ $personas->fecha_nacimiento}}</td>
                  </tr>
                </tbody>

            </table>
            <hr>
            <form action='{{route('personas.destroy', $personas->id)}}' method="POST">
                @csrf
                @method('DELETE')
                <div>
                    <button type="button" onclick="window.location='{{ route("personas.index") }}'" style='background-color:#73c7dc; color: #fff; cursor: pointer; transition: background-color 0.3s ease; padding: 10px; border: none; border-radius: 5px;'>
                        <i class="fas fa-arrow-left"></i> Regresar
                    </button>
                                                
                    <button style='background-color:#cd3939; color: #fff; cursor: pointer; transition: background-color 0.3s ease; padding: 10px; border: none; border-radius: 5px;' type='submit'><i class='fas fa-trash-alt'></i> Eliminar</button>
                </div>
            </form>
            
         </p>
      </div>
       
     
    </div>

</center>

@endsection