@extends('layout.plantilla')

@section('tituloPagina','Crud Laravel 8')




@section('content')
<center>
 <div style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman',  serif;" class="card" >
    <h2 class="card-header">CRUD CON LARAVEL 8 Y MYSQL</h2>
    <div class="card-body">
       
      <div class="row">
         <div class="col-sm-12">
            @if ($mensaje=Session::get('success'))
               <div class="alert alert-success" role="alert">
                  {{$mensaje}}
               </div>
            @endif
         </div>
       </div>
      <h5 class="card-title">Lista de Personas en el Sistema</h5>
      <img src="https://img.freepik.com/vector-premium/gente-negocios-que-verifica-tareas-completadas-prioriza-tareas-lista-tareas-pendientes_186332-603.jpg" style='height: 200px'>
     
      <p>
        <br>
        <a href="{{route('personas.create')}}" class="btn btn-primary"><span class="fas fa-user-plus"></span>  Agregar Nueva Persona</a>
         
      </p>
      <hr>
        <p class="card-text">
           <div class="table table-responsive">
             <table class="table table-sm table-bordered">
                 <thead>
                      <th>Foto</th>
                      <th>Nombre</th>
                      <th>Apellido Paterno</th>
                      <th>Apellido Materno</th>
                      <th>Fecha de Nacimiento</th>
                      <th>Editar</th>   
                      <th>Eliminar</th> 
                 </thead>
                 <tbody>
                      @foreach ( $datos as $item )
                          <tr>
                              <td> 
                                 <img src='{{ asset('storage/' . $item->foto)}}'  style="width: 80px; height: 60px;">
                              </td>
                              <td>{{$item->nombre}}</td>
                              <td>{{$item->apellido_paterno}}</td>
                              <td>{{$item->apellido_materno}}</td>
                              <td>{{$item->fecha_nacimiento}}</td>
                              <td>
                                 <form action="{{ route('personas.edit', $item->id)}}" method="GET">
                                    <a href="{{ route('personas.edit', $item->id)}}"><i class="fas fa-edit" style="color: rgb(48, 188, 104)"></i></a>
                                 </form>
                              </td>
                              <td>
                                 <form action="{{route('personas.show', $item->id)}}" method="GET">
                                    <a href="{{ route('personas.show', $item->id)}}"><i class="fas fa-trash-alt" style="color: rgb(217, 53, 77)"></i></a>
                                 </form>
                              </td>
                          </tr>
                      @endforeach
                   </tbody>
             </table> 
          </div>
          <hr>
    
            <div class="row">
             <div class="col-sm-12">
               {{$datos-> links()}}
             </div>
            </div>
        
      </p>      
    </div>
  </div>
</center>

@endsection


