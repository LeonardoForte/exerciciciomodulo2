<?php
     include_once 'conexao.php';
     

     $nome =  $_POST['nome_cliente'];

     $email = $_POST['email'];



     $sql = " INSERT INTO `cliente` (`nome`, `email`) VALUES ('$nome', '$email');";


     $result = mysqli_query($conn,$sql) or die ("Algum  erro ocorreu na inserção!<br>".mysqli_error($conn));

     if($result){
         echo "Registro inserido com sucesso!";
     }


    
    


?>
