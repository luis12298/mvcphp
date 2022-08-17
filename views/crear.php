<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <title>Document</title>
</head>

<body>
   <div class="card">
      <div class="card-header">
         Agregar Nuevo Usuario
      </div>
      <div class="card-body">
         <!-- FORM -->
         <form action="" method="post">
            <div>
               <?php
               $conn = Conexion::CrearConexion();
               $query = $conn->prepare("SELECT ISNULL((select max(IdUsuario) FROM Usuarios),0)+1");
               $query->execute();
               $data = $query->fetch();
               $Id = $data[0];
               ?>
            </div>
            <div class="mb-3">
               <label for="text" class="form-label">Id Usuario:</label>
               <input type="text" class="form-control" name="txtId" id="txtId" placeholder="Id" disabled value="<?php echo $Id ?>">
            </div>
            <!-- INPUT EMAIL -->
            <div class="mb-3">
               <label for="text" class="form-label">Nombre Usuario:</label>
               <input type="text" class="form-control" name="txtUsuario" id="txtUsuario" placeholder="Usuario">
            </div>
            <div class="mb-3">
               <label for="text" class="form-label">Contrasena:</label>
               <input type="text" class="form-control" name="txtContrasena" id="txtContrasena" placeholder="Contrasena">
            </div>
            <!-- SUBMIT -->
            <button type="submit" class="btn btn-success" value="Agregar Usuario">Agregar Nuevo Usuario</button>
            <a href="?controler=Usuario&action=initial" class="btn btn-info">Cancelar</a>
         </form>
      </div>
   </div>
</body>

</html>