<?php
     $servidor = "localhost";
     $usuario = "root";
     $senha = "";
     $banco = "exerciciomodulo2";
     
     $connprod = mysqli_connect($servidor, $usuario, $senha, $banco);
     
     var_dump($connprod);

?>