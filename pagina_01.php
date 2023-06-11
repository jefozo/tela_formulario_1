<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$sexo=$_POST['genero'];
$nascimento=$_POST['nascimento'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$endereco=$_POST['endereço'];

include_once('config.php');

echo "-------------------------------";
echo "<br>Nome: $nome";
echo "<br>E-Mail: $email";
echo "<br>Telefone: $telefone";
echo "<br>Sexo: $sexo";
echo "<br>Data de nascimento: $nascimento";
echo "<br>Estado: $estado";
echo "<br>Cidade: $cidade";
echo "<br>Endereço: $endereco";
echo "<br>-------------------------------";

$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nascimento,estado,cidade,endereço) VALUES('$nome','$email','$telefone','$sexo','$nascimento','$estado','$cidade','$endereco')");





?>