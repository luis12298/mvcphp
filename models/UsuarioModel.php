<?php
class UsuarioModel
{
   //las variables tienen que concordar con el arreglo listar
   public $Id;
   public $Nombre;
   public $Cont;
   public function __construct($Id, $Nombre, $Cont)
   {
      $this->Id = $Id;
      $this->Nombre = $Nombre;
      $this->Cont = $Cont;
   }
   public static function consult()
   {
      $listar = [];
      $conn = Conexion::CrearConexion();
      $query = $conn->query("Select * from Usuarios");
      foreach ($query->fetchAll() as $dato) {
         $listar[] = new UsuarioModel($dato["IdUsuario"], $dato["NombreUsuario"], $dato["Contrasena"]);
      }
      return $listar;
   }
   public static function create($Nombre, $Cont)
   {
      $conn = Conexion::CrearConexion();
      $query = $conn->prepare("SELECT ISNULL((select max(IdUsuario) FROM Usuarios),0)+1");
      $query->execute();
      $data = $query->fetch();
      $Id = $data[0];
      $query = $conn->prepare("INSERT INTO Usuarios(IdUsuario,NombreUsuario,Contrasena) VALUES(?,?,?)");
      $query->execute(array($Id, $Nombre, $Cont));
   }
   public static function search($id)
   {
      $conn = Conexion::CrearConexion();
      $query = $conn->prepare("SELECT * FROM Usuarios WHERE IdUsuario = ?");
      $query->execute(array($id));
      $dato = $query->fetch();
      return new UsuarioModel($dato["IdUsuario"], $dato["NombreUsuario"], $dato["Contrasena"]);
   }
   public static function edit($Id, $Nombre, $Cont)
   {
      $conn = Conexion::CrearConexion();
      $query = $conn->prepare("UPDATE Usuarios SET NombreUsuario = ?, Contrasena = ? WHERE IdUsuario = ?");
      $query->execute(array($Nombre, $Cont, $Id));
   }
   public static function delete($id)
   {
      $conn = Conexion::CrearConexion();
      $query = $conn->prepare("DELETE Usuarios Where IdUsuario = ?");
      $query->execute(array($id));
   }
   public static function login($Nombre, $Cont)
   {
      $conn = Conexion::CrearConexion();
      $query = $conn->prepare("SELECT * FROM Usuarios WHERE NombreUsuario = ? and Contrasena = ?");
      $query->execute(array($Nombre, $Cont));
      $fila = $query->rowCount();
      if ($fila) {
         return true;
      } else {
         return false;
      }
   }
}
