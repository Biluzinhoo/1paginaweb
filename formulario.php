<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de IMC</title>
</head>
<body>
    <h2>Formulario de Cadastro</h2>
    <form action="formulario.php" method="POST"> 
        <label for="peso">Peso (kg)</label>
        <input type="text" id="peso" name="peso" required>

        <label for="altura">Altura (m)</label>
        <input type="text" id="altura" name="altura" required>

        <input type="submit" value="Cadastrar"> 
    </form>

    <?php
    session_start();

    // Verifica se o usuário está autenticado
    if (isset($_SESSION["username"])) {
        echo "<p>Usuário logado: " . $_SESSION["username"] . "</p>";
    } else {
        header("Location: login.php?error=nao_autenticado");
        exit();
    } 

    // Exibe mensagem de erro se faltar dados
    if (isset($_GET["error"]) && $_GET["error"] == "faltando_dados") {
        echo "<p style='color:red;'>Erro: Por favor, preencha todos os campos.</p>";
    }
    if (isset($_GET["error"]) && $_GET["error"] == "valores_invalidos") {
        echo "<p style='color:red;'>Erro: Por favor, insira valores válidos.</p>";
    }
    ?>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Verifica se o peso e a altura foram preenchidos
        if (!isset($_POST["peso"]) || !isset($_POST["altura"]) || empty($_POST["peso"]) || empty($_POST["altura"])) {
            header("Location: formulario.php?error=faltando_dados");
            exit();
        }

        // Obtém os valores do peso e altura
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        // Verifica se os valores são válidos
        if (!is_numeric($peso) || !is_numeric($altura) || $altura <= 0) {
            header("Location: formulario.php?error=valores_invalidos");
            exit();
        }

        // Calcula o IMC
        $imc = $peso / ($altura * $altura);
        $imc = round($imc, 2);

        // Exibe o resultado do IMC
        echo "<h1>Resultado do Cálculo do IMC</h1>";
        echo "<p>Seu IMC é: $imc</p>";
    }
    ?>
</body>
</html>
