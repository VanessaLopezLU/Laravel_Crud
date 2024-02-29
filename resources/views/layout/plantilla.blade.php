<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {
          font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          margin: 0;
          padding: 0;
      }

      #contact-form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f8f8f8;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #contact-form .image {
        text-align: center;
        margin-bottom: 20px;
    }

    #contact-form img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
    }

    #contact-form h2 {
        color: #333;
        text-align: center;
    }

    #contact-form form {
        display: flex;
        flex-direction: column;
    }

    #contact-form label {
        margin-bottom: 5px;
        color: #555;
    }

    #contact-form input,
    #contact-form button {
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    #contact-form button {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #contact-form button:hover {
        background-color: #0056b3;
    }
      #menu-container {
            
            padding: 10px;
            text-align: center;
        }

        .menu-item {
            display: inline-block;
            margin-right: 10px;
            cursor: pointer;
            color: #48cebc;
            font-weight: bold;
            font-size: 16px;
            padding: 5px 10px;
            border-radius: 5px;
           
            transition: background-color 0.3s ease;
        }

        .menu-item:hover {
            background-color: #a1d1cb;
        }
        
        #nosotros-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f8f8f8;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #nosotros-content img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        margin-bottom: 15px;
    }

    #nosotros-content h2 {
      color: #a1d1cb;
    }

    #nosotros-content p {
      color: #050606;
        
        line-height: 1.6;
        margin-bottom: 15px;
    }

    @media (max-width: 600px) {
        #nosotros-content {
            padding: 15px;
        }
    }
  </style>
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <title>@yield('tituloPagina')</title>
  </head>
  <body style=" background-color: #93dfdd6c;">
    <header>
    
      <center><h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Tienda MT Motos</h1>
        {{print_r($datos);}}
    </center>
     
  </header>

  
  <main>
      
      @yield('content')
  </main>

    


     

     
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
  </body>
</html>