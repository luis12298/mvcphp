<?php
include_once("models/UsuarioModel.php");
include_once("Conexion.php");
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

//INITIAL VALUES
$controller = "pages";
$action = "home";
if ($_POST) {
   $nombre = $_POST['txtUsuario'];
   $contrasena = $_POST['txtContrasena'];
   if (UsuarioModel::login($nombre, $contrasena)) {
      if ((!empty($_GET["controler"])) && (!empty($_GET["action"]))) {
         $controller = $_GET['controler'];
         $action = $_GET['action'];
      }
      $_SESSION["user"] = $nombre;
   } else {
      include_once("views/login.php");
   }
}

if ((!empty($_GET["controler"])) && (!empty($_GET["action"]))) {
   $controller = $_GET['controler'];
   $action = $_GET['action'];
}
if (isset($_SESSION['user'])) {
   require_once("views/index.php");
} else {
   include_once("views/login.php");
}
