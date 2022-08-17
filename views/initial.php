<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <title>Inicio</title>
</head>

<body>
   <div class="card">
      <div class="card-header">
         USUARIO REGISTRADOS

      </div>
      <div class="card-body">
         <table class="table table-bordered">

            <thead>
               <tr>
                  <th>Id Usuario</th>
                  <th>Nombre Usuario</th>
                  <th>Contraseña</th>
                  <th>ACTIONS</th>
               </tr>
            </thead>
            <tbody>
               <?php foreach ($Usuario as $dato) { ?>
                  <tr>
                     <td><?php echo $dato->Id; ?></td>
                     <td><?php echo $dato->Nombre; ?></td>
                     <td><?php echo $dato->Cont; ?></td>
                     <td>
                        <div class="btn-group" role="group" aria-label="">
                           <a href="?controler=Usuario&action=modify&id=<?php echo $dato->Id; ?>" type="button" class="btn btn-info">Editar</a>
                           <!-- Button delete modal -->
                           <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modelId<?php echo $dato->Id; ?>">
                              Borrar
                           </button>
                           <!-- MODAL DELETE -->
                           <div class="modal fade" id="modelId<?php echo $dato->Id ?>" tabindex="-1" role="dialog" aria-labelledby="Borrar" aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="">¿Desea Borar este registro?</h5>
                                       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true"></span>
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       <?php echo "Registro a eliminar: " . $dato->Id; ?>
                                    </div>
                                    <div class="modal-footer">
                                       <button class="btn btn-info" type="button" data-dismiss="modal">Cancelar</button>
                                       <a href="?controler=Usuario&action=delete&id=<?php echo $dato->Id ?>" type="button" class="btn btn-danger">Eliminar</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- END MODAL -->
                        </div>
                     </td>
                  </tr>
               <?php } ?>
            </tbody>
         </table>
         <a class="btn btn-success" href="?controler=Usuario&action=create" role="button">Agregar Nuevo</a>
      </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>