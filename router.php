<?php
include_once("controllers/$controller" . "" . "Controller.php");
$NameController =  ucfirst($controller) . "Controller";

$ObjControler = new $NameController();
$ObjControler->$action();
