<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "dadosdeteste";

// Conexão com o banco de dados
$conexao = new mysqli($servername, $username, $password, $dbname);

// Verificação de conexão
if ($conexao->connect_error) {
    die("FALHA AO CONECTAR NO BANCO: " . $conexao->connect_error);
}

// Recebendo dados do formulário
$nome = $_POST['nome'];
$nomesobre = $_POST['nomesobre'];
$data = $_POST['data'];
$numerodetelefone = $_POST['numerodetelefone'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];

// Comando SQL para inserir os dados na tabela
$sql = "INSERT INTO usuariosdoteste (nome, nomesobre, data, numerodetelefone, cpf, endereco, email) 
        VALUES ('$nome', '$nomesobre', '$data', '$numerodetelefone', '$cpf', '$endereco', '$email')";

// Execução do comando SQL
if ($conexao->query($sql) === TRUE) {
    header("Location: http://127.0.0.1:5500/bemvindo.html");
} else {
    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

// Fechando a conexão
$conexao->close();
?>
