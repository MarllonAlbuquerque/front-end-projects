<?php
 $servidor="localhost";
 $usuario = "root";
 $senha = "";
 $dbname = "projeto_login";

$conexão = mysqli_connect($servidor,$usuario,$senha,$dbname) or die ("Não foi possível fazer a conexão");
?>