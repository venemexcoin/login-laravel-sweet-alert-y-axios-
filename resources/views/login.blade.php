<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <link src="{{ asset("js/app.css")}}"rel="stylesheet">
        

    </head>
    <body>
       <div class="container" id="app_login">

       <div class="col-md-4 offset-md-4 mt-5">
          <h1 class="my-3 text-center">Iniciar sesión</h1>

          @auth
              <div class="alert alert-success">
              Has iniciado sesión {{Auth::user()->email}}
              </div>

          @endauth

            <div class="card">
            <div class="card-body">
            
            <form id="formulario-login">
            <div class="form-group">
              <label for="usuario">Usuario</label>
              <input type="email" v-model="usuario" class="form-control" id="usuario" placeholder="Usiario">
              
            </div>
            <div class="form-group">
              <label for="pass">Contraseña</label>
              <input type="password" v-model="clave" class="form-control" id="pass" placeholder="Ingresa tu clave">
            </div>
            
            <button type="button" class="btn btn-primary" @click="iniciarSesion()">Enviar</button>
          </form>
       </div>
       </div>
            
            </div>
            </div>
          
      
       <script src="{{asset("js/app.js")}}"></script>
    </body>
</html>

