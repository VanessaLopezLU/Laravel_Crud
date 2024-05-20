@extends('layouts.plantilla')

@section('tituloPagina','Crear un Nuevo Registro')

@section('container')
<center><div class="card" style='background-color: #cba0d1; max-width: 400px ;font-family:Cambria, Cochin, Georgia, Times, \"Times New Roman\", serif;'>
    <h5 class="card-header">Agregar Nueva Persona</h5>

      <div class="card-body" >
        <p class="card-text" >
         
                 <br>
                 <div class='image'>
                    
                    <img src='https://cdn-icons-png.flaticon.com/512/4205/4205906.png' alt='Imagen de inicio de sesión' style='max-width: 100%; height: 200px; border-radius: 5px;'>
                   </div>
        
                  <div>
                     <form action='{{route('personas.store')}}' method='POST' enctype="multipart/form-data" style='display: flex; flex-direction: column; align-items: center;'>
                       @csrf
                       <br>
                        


                         <label for='' style='margin-bottom: 5px;'>Nombre:</label>
                         <input type='text'  name='nombre' class="form-control" required style='padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;'>
        
                         <label for='' style='margin-bottom: 5px; '>Apellido Paterno:</label>
                         <input type='text' name='apellido_paterno'  class="form-control"  required style='padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;'>
        
                         <label for='' style='margin-bottom: 5px; '>Apellido Materno :</label>
                         <input type='text'  name='apellido_materno'  class="form-control" required style='padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;'>
        
                         <label for=''>Fecha de nacimiento:</label>
                         <input type='date'  name='fecha_nacimiento'   class="form-control" required pattern='\d{4}-\d{2}-\d{2}' inputmode='numeric' placeholder='AAAA-MM-DD'>
                         <br>
                         <div class="file-upload" style="position: relative; display: inline-block;">

                          <input type="file" name="foto" id="foto" accept="image/*" style="opacity: 0; position: absolute; z-index: -1;" />
                        
                         
                          <label for="foto" >
                              <i class="fas fa-upload"></i> Subir foto
                          </label>
                        </div>
                         <br>
                         <div>
                            <button onclick="window.location='{{ route("personas.inicio") }}'" style='background-color:#73c7dc; color: #fff; cursor: pointer; transition: background-color 0.3s ease; padding: 10px; border: none; border-radius: 5px;'>
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