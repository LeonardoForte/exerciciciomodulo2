<?php
     include_once 'connexaousu.php';
     

     $nome = $_POST['nome_usuario'];
     $email = $_POST['email_usuario'];


     $sqlu = " INSERT INTO `usuarios` (`usuario`, `emailu`) VALUES ('$nome', '$email');";


     $resultu = mysqli_query($connu,$sqlu) or die ("Algum  erro ocorreu na inserção!<br>".mysqli_error($connu));

     if($resultu){
         echo "Registro inserido com sucesso!";
     }


    
    


?>