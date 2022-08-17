<div class="p-5 bg-light">
   <div class="container">
      <h1 class="display-3">CRUD PHP</h1>
      <p class="lead">Php SQLSERVER MVC</p>
      <hr class="my-2">
      <p>Detalle Usuario</p>
      <p class="lead">
      <h1>Bienvenido: <?php $user = ($_SESSION['user']);
                        echo $user ?></h1>
      <a class="btn btn-primary btn-lg" href="?controler=Usuario&action=info" role="button">EJEMPLO BASICO</a>
      </p>
   </div>
</div>