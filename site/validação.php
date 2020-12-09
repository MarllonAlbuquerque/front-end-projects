<?php
session_start();
include('conexão.php');

//CASO TENTEM SEGUIR SEM PREENCHER OS CAMPOS A PÁGINA VOLTA PRO LOGIN
if(empty($_POST['email']) || empty($_POST['senha'])){
      header('Location: login.php');
      exit();
}

//VARIÁVEIS RECEBENDO OS VALORES COLOCADOS NOS INPUTS
$senha = md5($_POST['senha']);
$email = $_POST['email'];

//ACHANDO NA TABELA DO BANCO DE DADOS O EMAIL E A SENHA. RESULTADO = 0, NÃO FOI ENCONTRADO. RESULTADO = 1, FOI ENCONTRADO.
$query = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}'";
$resultado = mysqli_query($conexão, $query);

//QUANTIDADE DE LINHAS RETORNADA
$row = mysqli_num_rows($resultado);

if($row == 1){
      header('Location: home.php'); 
      exit;}
  else {header('Location: login.php'); 
  exit ;}  
 ?>  
