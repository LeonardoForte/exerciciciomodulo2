<?php
     $servidor = "localhost";
     $usuario = "root";
     $senha = "";
     $banco = "exerciciomodulo2";
     
     $conn = mysqli_connect($servidor, $usuario, $senha, $banco);
     
     var_dump($conn);

?>