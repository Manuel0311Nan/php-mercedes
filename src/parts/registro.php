<?php

require_once(dirname(__FILE__) . '../../../config/config.php');
$conexion = connectServer(SERVER, USER, PASS, DATABASE);
if(isset($_POST['submit'])){
        if(strlen($_POST['name'])>=1 && strlen($_POST['surname1'])>=1 && strlen($_POST['surname2'])>=1 && strlen($_POST['tipo_doc'])>= 1  && strlen($_POST['ident'])>=1 && strlen($_POST['direccion'])>=1 && strlen($_POST['telefono'])>=9 && strlen($_POST['email'])>=1 && strlen($_POST['email'])>=1){
        $nombre = ucfirst(trim($_POST['name']));
        $surname1 = ucfirst(trim($_POST['surname1']));
        $surname2 = ucfirst(trim($_POST['surname2']));
        $tipo_doc = trim($_POST['tipo_doc']);
        $ident = trim($_POST['ident']);
        $direccion = trim($_POST['direccion']);
        $telefono = trim($_POST['telefono']);
        $marca = trim($_POST['marca']);
        $renovacion = trim($_POST['renovacion']);
        $sentencia = $conexion->prepare("INSERT INTO usuarios(Name, Primer_Apellido, Segundo_Apellido, Tipo_Documento, Nº_identificación, Dirección, Teléfono, Email, Marca, Renovación) VALUES (:name, :primer_apellido, :segundo_apellido, :tipo_documento, :n_documento, :direccion, :telefono, :email, :marca, :renovacion");
        $sentencia ->bindParam(':name', $nombre);
        $sentencia ->bindParam(':primer_apellido', $surname1);
        $sentencia ->bindParam(':segundo_apellido', $surname2);
        $sentencia ->bindParam(':tipo_documento', $tipo_doc);
        $sentencia ->bindParam(':n_documento', $ident);
        $sentencia ->bindParam(':direccion', $direccion);
        $sentencia ->bindParam(':telefono', $telefono);
        $sentencia ->bindParam(':marca', $marca);
        $sentencia ->bindParam(':renovacion', $renovacion);
        $sentencia->execute();
        echo'<script type="text/javascript">
        alert("Gracias, nos comunicaremos contigo muy pronto");
        window.location.href="index.php";
        </script>';
    }else{
        ?>
        <h3>Complete este campo</h3>
        <?php
    };
}