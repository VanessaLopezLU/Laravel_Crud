@extends('layout.plantilla')

@section('tituloPagina','Crud Laravel 8')




@section('content')
<center>
 <div style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman',  serif;" class="card" >
    <h2 class="card-header">CRUD CON LARAVEL 8 Y MYSQL</h2>
    <div class="card-body">
      <h5 class="card-title">Lista de Personas en el Sistema</h5>
      <p>
        <a href="{{route('personas.create')}}" class="btn btn-primary">Agregar Nueva Persona</a>
         
      </p>
      <hr>
        <p class="card-text">
           <div class="table table-responsive">
             <table class="table table-sm table-bordered">
                 <thead>
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
                              <td>{{$item->nombre}}</td>
                              <td>{{$item->apellido_paterno}}</td>
                              <td>{{$item->apellido_materno}}</td>
                              <td>{{$item->fecha_nacimiento}}</td>
                              <td><a href="{{ route('personas.edit', $item->id)}}"><i class="fas fa-edit" style="color: rgb(126, 218, 163)"></i></a></td>
                              <td><a href="{{ route('personas.destroy', $item->id)}}"><i class="fas fa-trash-alt" style="color: rgb(224, 107, 125)"></i></a></td>
                          </tr>
                      @endforeach
                   </tbody>
             </table>
          </div>
      </p>      
    </div>
  </div>
</center>

<!--<div  id="menu-container" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman',  serif;">
    <center><img src="https://1.bp.blogspot.com/-uOA621Iiu6w/W3iiMB7Rh6I/AAAAAAAAES8/Mr4g9kR6DJwJDvh8z4gWu66QeUSZJ9HsgCLcBGAs/s1600/bienvenidos_tic.jpg" alt="Imagen de nosotros"></center>
    <div class="menu-item" id="inicio">Inicio</div>
    <div class="menu-item" id="nosotros">Nosotros</div>
    <div class="menu-item" id="contacto">Contacto</div>
    <div > <a href="{{route('personas.create')}}">Agregar</a></div>
   
</div>

<div id="inicio-content" class="con">
    <center><img src="https://http2.mlstatic.com/D_NQ_NP_868157-MCO72507912494_102023-O.webp" alt="Imagen de nosotros"></center>
</div>
<center>
<div id="nosotros-content" class="con" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
    <div class="image">
     
        <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">  Nuestra Tiendas TecnoVan</h1>
        <img src="https://i.ytimg.com/vi/6nF-4i3RrG0/hq720.jpg?sqp=-oaymwEXCK4FEIIDSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLA1Ir1cXQna8UT0zPxI62l1ZlvvEQ" alt="Motos MT en nuestra tienda">
    </div>
    <p>
        Bienvenido a nuestra tienda MT Motos, tu destino para encontrar las mejores motocicletas de la reconocida marca MT.
        Nos enorgullece ofrecer una amplia selección de modelos, desde las potentes MT-07 hasta las emocionantes MT-09, 
        diseñadas para satisfacer las necesidades de todos los amantes de las motos.
    </p>
    <p>
        En MT Motos, no solo vendemos motocicletas; creamos experiencias. Nuestro equipo apasionado y conocedor está aquí 
        para ayudarte a encontrar la moto perfecta que se adapte a tu estilo de conducción y preferencias. Ya seas un 
        entusiasta experimentado o un principiante emocionado, tenemos algo para todos.
    </p>
    <p>
        Además de nuestras excepcionales motos MT, ofrecemos una gama completa de accesorios, equipos de protección y 
        servicios de mantenimiento para garantizar que disfrutes de cada viaje de manera segura y emocionante.
    </p>
    <p>
        Visita nuestra tienda MT Motos hoy y descubre el apasionante mundo de la conducción en dos ruedas. ¡Estamos 
        emocionados de ser parte de tu viaje en el mundo de las motocicletas MT!
    </p>
</div>
</center>


<div id="contact-form" class="con" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
    <div class="image">
        <h2 style="color: #a1d1cb">Formulario de Registro </h2>
        <img src="https://http2.mlstatic.com/D_NQ_NP_868157-MCO72507912494_102023-O.webp" alt="Imagen de inicio de sesión">
    </div>

    <div>
        <form action="procesar_formulario.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>
 <br>
            <center><button style="background-color:#48cebc "  type="submit"><i class="fa fa-paper-plane"></i> Enviar</button></center>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('.con').hide();

        $('.menu-item').click(function () {
            var id = $(this).attr('id');

            // Ocultar todos los formularios y contenidos
           
            $('.con').hide();
            switch (id) {
                case 'inicio':
                    $('#inicio-content').show();
                    break;
                case 'nosotros':
                    $('#nosotros-content').show();
                    break;
                case 'contacto':
                    $('#contact-form').show();
                    break;
                default:
                    alert('Información no especificada');
            }
        });
    });
</script>

-->

@endsection


