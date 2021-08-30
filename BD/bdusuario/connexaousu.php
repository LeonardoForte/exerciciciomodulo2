<?php
     $servidor = "localhost";
     $usuario = "root";
     $senha = "";
     $banco = "exerciciomodulo2";
     
     $connu = mysqli_connect($servidor, $usuario, $senha, $banco);
     
     var_dump($connu);

?>