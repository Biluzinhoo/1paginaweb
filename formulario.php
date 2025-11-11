<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formulario de Cadastro</h2>
    <form action="" method="get">
        <label for="iname">Nome</label>
        <input type="text" id="iname" name="nome">

         <label for="iemail">E-mail</label>
        <input type="text" id="iemail" name="email">

         <label for="ipeso">Peso</label>
        <input type="text" id="ipeso" name="peso">

         <label for="ialtura">Altura</label>
        <input type="text" id="ialtura" name="altura">

        <input type="submit" value="Cadastrar"> 
    </form>

     <?php if (isset($_GET["nome"]) & isset ($_GET["email"]) & isset ($_GET["peso"]) & isset ($_GET["altura"]) )
        {?>
   <p>Nome: <?php echo $_GET["nome"]; ."<br>"
    Email: echo $_GET["email"]; ."<br>"
    IMC: echo $_GET["peso"]* echo $_GET["altura"]; 
   ?> </p>
   <?php } ?>
</body>
</html>