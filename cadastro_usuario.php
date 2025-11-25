<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro usuário</title>

    <style>
        *{
            border: 0px;
            padding:0px;
            margin:0px;
            box-sizing: border-box;
        }

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content:center;
            width: 100%;
            height: 20vh;
        }

        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header>
    <h1>Cadastro Usuário</h1>
    <nav>Links</nav>
    </header>
    <div class="container">
    <form action="processa_cadastro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" required>
        <label for="login">Login:</label>
        <input type="text" id="login" required>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" required>
        <input type="submit" value="Cadastrar">

    </form>
    </div>
</body>
</html>