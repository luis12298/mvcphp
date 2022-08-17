<?php
class Conexion
{
   private static $Conectar = null;
   public static function CrearConexion()
   {
      if (!isset(self::$Conectar)) {
         $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
         self::$Conectar = new PDO('sqlsrv:Server=DESKTOP-28D3RFG;Database=DiseñoWebII', 'sa', 'Root1234', $opcionesPDO);
      }
      return self::$Conectar;
   }
}
