<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Blitz Support</title>
    <link rel="icon" type="image/png" href="sup.png">
    <!-- Firestore -->
    <script src="https://www.gstatic.com/firebasejs/6.6.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.6.2/firebase-firestore.js"></script>
   
  </head>
  <nav class="navbar navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="#">Blitz Support</a>
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="index.html">Salir</a></button>
</nav>
  <body>
      
      <div class="container">
      <h2>Tabla de Problemas Técnicos</h2>  
            <table class="table table-striped" border="2">
                    <thead>
                      <tr>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">PROBLEMA TÉCNICO</th>
                        <th scope="col">ELIMINAR</th>
                      </tr>
                    </thead>
                    <tbody id="tabla">
                    </tbody>
                  </table>
      </div>
      <div class="container">
        <h2>Enviar Solución al Cliente</h2>
        <form method="post">
          <input class="form-control my-3" type="text" placeholder="Nombre" name="name" required="">
          <input class="form-control my-3" type="email" placeholder="Correo" name="email" required="">
          <input class="form-control my-3" type="text" placeholder="Asunto" name="asunto" required="">
          <textarea name="msg" placeholder="Mensaje"></textarea>
          <input type="submit" name="enviar">
          </form>
          <?php
          include("correo.php")
          ?>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="app.js"></script>
</body>
</html>