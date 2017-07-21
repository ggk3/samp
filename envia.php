<?php

$id = $_GET['id'];

$bloco = $_POST['bloco'];

$piso = $_POST['piso'];

$sala = $_POST['sala'];

$descricao = $_POST['descricao'];

$nome = $_POST['nome'];

/*$serve = mysqli_connect("localhost","root","","samp");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$SQL = "insert into reclamacao (modalidade, bloco, piso, sala, descricao, nome) values ($id, '$bloco', '$piso', '$sala', '$descricao','$nome')";

mysqli_query($serve,$SQL);*/

header('location: index.php?sucesso');