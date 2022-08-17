<?php
include_once("models/UsuarioModel.php");
include_once("Conexion.php");
class UsuarioController
{
   public function initial()
   {
      $Usuario = UsuarioModel::consult(); //esta variable es la que se envia a las vistas
      include_once("views/initial.php");
   }
   public function create()
   {
      if ($_POST) {
         $nombre = $_POST['txtUsuario'];
         $contrasena = $_POST['txtContrasena'];
         UsuarioModel::create($nombre, $contrasena);
         echo '<script>window.alert("Datos Guardados!")</script>';
         header("refresh:1; url=http://localhost/MVCPHP/?controler=Usuario&action=initial");
      }
      include_once("views/crear.php");
   }
   public function modify()
   {
      if ($_POST) {
         $id = $_POST['txtId'];
         $nombre = $_POST['txtUsuario'];
         $contrasena = $_POST['txtContrasena'];
         UsuarioModel::edit($id, $nombre, $contrasena);
         echo '<script>window.alert("Datos Actualizados!")</script>';
         header("refresh:1; url=http://localhost/MVCPHP/?controler=Usuario&action=initial");
      }
      $id =  $_GET['id'];
      $Usuario = UsuarioModel::search($id);
      include_once("views/editar.php");
   }
   public function delete()
   {
      $id =  $_GET['id'];
      UsuarioModel::delete($id);
      echo '<script>window.alert("Dato Eliminado!")</script>';
   }
   public function info()
   {
      include_once("views/info.php");
   }
   public function exit()
   {
      include_once("views/exit.php");
   }
}
