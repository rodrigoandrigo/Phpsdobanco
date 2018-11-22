<?php

$senha = isset($_POST['senha']);
$email = isset($_POST['email']);
$endereco = isset($_POST['endereco']);
$inputAddress2 = isset($_POST['inputAddress2']);
$cidade = isset($_POST['cidade']);
$estado = isset($_POST['estado']);
$cep = isset($_POST['cep']);

$sql = "insert into perfil(senha,email, endereco, endereco2,cidade,estado,cep) values ('$senha', '$email','$endereco','$inputAddress2','$cidade','$estado','$cep')";

$res = pg_exec($conexao1, $sql);
pg_query($conexao1, $sql);
