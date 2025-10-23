<?php

header("Content-Type: application/json");



$pdo= new PDO("mysql:host=localhost;dbname=agenda","root","");

$accion= (isset($_GET['accion']))?$_GET['accion']:'leer';

switch($accion){
    case 'leer':
        $sentenciaSQL= $pdo->prepare("SELECT * FROM tbleventos");
        $sentenciaSQL->execute();

        $resultado=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
        print_r(json_encode($resultado));
    break;

    case 'agregar':

        $sentenciaSQL=$pdo->prepare("INSERT INTO `tbleventos` (`id`, `title`, `descripcion`, `color`, `start`, `end`) VALUES (NULL, :title,:descripcion,:color,:fecha,:fecha);");
        $sentenciaSQL->execute( array(
            "title"=>$_POST['title'],
            "descripcion"=>$_POST['descripcion'],
            "color"=>$_POST['color'],
            "fecha"=>$_POST['fecha']." ".$_POST['hora'].":00",
            "fecha"=>$_POST['fecha']." ".$_POST['hora'].":00"


        ) );
        print_r($_POST);
    break;


    case 'borrar':
        $sentenciaSQL=$pdo->prepare("DELETE FROM tbleventos WHERE id=:id");
        $sentenciaSQL->execute( array(
            "id"=>$_POST['id']
        ) );
        print_r($_POST);
    break;

    case 'actualizar':
        $sentenciaSQL=$pdo->prepare("UPDATE tbleventos SET title=:title, descripcion=:descripcion, color=:color, start=:fecha, end=:fecha WHERE id=:id");
        $sentenciaSQL->execute( array(
            "id"=>$_POST['id'],
            "title"=>$_POST['title'],
            "descripcion"=>$_POST['descripcion'],
            "color"=>$_POST['color'],
            "fecha"=>$_POST['fecha']." ".$_POST['hora'].":00",
            "fecha"=>$_POST['fecha']." ".$_POST['hora'].":00"
        ) );
        print_r($_POST);
    break;
}



?>