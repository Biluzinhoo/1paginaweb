<?php
session_start();

// Verifica se o formulário foi enviado com os dados obrigatórios
if (!isset($_POST["username"]) || !isset($_POST["password"])) {
    header("Location: login.php?error=faltando_dados");
    exit();
}

$username = $_POST["username"]; 
$password = $_POST["password"];  // Corrigido: atribuindo a senha corretamente

// Verificação de credenciais
if ($username === "admin" && $password === "senha123") {
    $_SESSION["username"] = $username;
    echo "<h1>Login bem-sucedido!</h1>";
    echo "<p>Bem-vindo, $username!</p>";
} else {
    $_SESSION["username"] = NULL;
    header("Location: login.php?error=credenciais_invalidas");
    exit();
}
?>
