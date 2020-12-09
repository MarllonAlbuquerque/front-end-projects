<?php
  include('conexão.php');
      
      $nome = $_POST['nome'];
      $sobrenome = $_POST['sobrenome'];
      $endereço = ($_POST['endereço']);
      $complemento = $_POST['complemento'];
      $numero = $_POST['numero'];
      $estado = $_POST['estado'];
      $bairro = $_POST['bairro'];
      $cidade = $_POST['cidade'];
      $cep = $_POST['cep'];
      $email = $_POST['email'];
      $senha = md5($_POST['senha']);

      $strSQL =  "INSERT INTO usuarios(nome,sobrenome,endereço,complemento,numero, estado, bairro, cidade, cep, email, senha) VALUES('{$nome}','{$sobrenome}','{$endereço}','{$complemento}','{$numero}','{$estado}', '{$bairro}', '{$cidade}', '{$cep}', '{$email}', '{$senha}')"; 
      $resultado = mysqli_query($conexão,$strSQL);

      $row = mysqli_num_rows($resultado);

      if($row == 0){
          header('Location: login.php'); 
          $aux = 1;
          exit;}
      else {header('Location: home.php'); 
      exit ;}  


?>
