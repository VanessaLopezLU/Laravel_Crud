@extends('layout.plantilla')

@section('tituloPagina','Crear un Nuevo Registro')

@section('content')
<center><div class="card" style='background-color: #a1d1cb; max-width: 400px ;font-family:Cambria, Cochin, Georgia, Times, \"Times New Roman\", serif;'>
    <h5 class="card-header">Agregar Nueva Persona</h5>

      <div class="card-body" >
        <p class="card-text" >
         
                 <br>
                 <div class='image'>
                    
                    <img src='https://cdn-icons-png.flaticon.com/512/4205/4205906.png' alt='Imagen de inicio de sesión' style='max-width: 100%; height: 300px; border-radius: 5px;'>
                   </div>
        
                  <div>
                     <form action='{{route('personas.store')}}' method='POST' style='display: flex; flex-direction: column; align-items: center;'>
                       @csrf
                         <label for="foto" style="margin-bottom: 5px; color: #555;">Foto:</label>
                         <input type="file" name="foto" id="foto" accept="image/*" class="form-control" style="padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">
                       
                         <label for='' style='margin-bottom: 5px; color: #555;'>Nombre:</label>
                         <input type='text'  name='nombre' class="form-control" required style='padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;'>
        
                         <label for='' style='margin-bottom: 5px; color: #555;'>Apellido Paterno:</label>
                         <input type='text' name='apellido_paterno'  class="form-control"  required style='padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;'>
        
                         <label for='' style='margin-bottom: 5px; color: #555;'>Apellido Materno :</label>
                         <input type='text'  name='apellido_materno'  class="form-control" required style='padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;'>
        
                         <label for=''>Fecha de nacimiento:</label>
                         <input type='date'  name='fecha_nacimiento'   class="form-control" required pattern='\d{4}-\d{2}-\d{2}' inputmode='numeric' placeholder='AAAA-MM-DD'>
                         <br>
                         <div>
                            <button onclick="window.location='{{ route("personas.index") }}'" style='background-color:#73c7dc; color: #fff; cursor: pointer; transition: background-color 0.3s ease; padding: 10px; border: none; border-radius: 5px;'>
                                <i class="fas fa-arrow-left"></i> Regresar
                            </button>
                            
                         <button style='background-color:#48cebc; color: #fff; cursor: pointer; transition: background-color 0.3s ease; padding: 10px; border: none; border-radius: 5px;' type='submit'><span class="fas fa-user-plus"></span> Enviar</button>
                         </div>
                         
                         <br>
                       </form>
                  </div>
                
    
         </p>
      </div>
       
     
    </div>
  </div>
  </div>
</center>
@endsection