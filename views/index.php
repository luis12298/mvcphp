<!doctype html>
<html lang="es">

<head>
   <title>Usuario CRUD PHP SQL SERVER MVC</title>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS v5.0.2 -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
   <!-- CONTAINER BODY -->
   <div class="container">
      <div class="row">
         <div class="col-12">
            <!-- MENU -->
            <nav class="navbar navbar-expand navbar-light bg-light">
               <div class="nav navbar-nav">
                  <a class="nav-item nav-link active" href="?controler=Usuario&action=exit">CRUD PHP <span class=" visually-hidden"></span></a>
                  <a class="nav-item nav-link" href="?controler=pages&action=home">Inicio</a>
                  <a class="nav-item nav-link" href="?controler=Usuario&action=initial">Usuarios</a>
               </div>
            </nav>
            <!-- PAGE -->
            <?php include_once("router.php"); ?>
         </div>
      </div>
   </div>

   <!-- Bootstrap JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>