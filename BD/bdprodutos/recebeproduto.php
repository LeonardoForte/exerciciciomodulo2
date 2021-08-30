<?php
     include_once 'conexaoprod.php';
     

     $nome =  $_POST['nome_produto'];

     $preco = $_POST['preco'];

     $vendidos = $_POST['vendidos'];

     $fornecedor = $_POST['fornecedor'];



     $sqlprod = " INSERT INTO `produto` (`nome_produto`, `preco`, `vendidos`, `fornecedor`) VALUES ('$nome','$preco','$vendidos','$fornecedor');";


     $resultp = mysqli_query($connprod,$sqlprod) or die ("Algum  erro ocorreu na inserção!<br>".mysqli_error($connprod));

     if($resultp){
         echo "Registro inserido com sucesso!";
     }