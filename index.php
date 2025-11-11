<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Minha pagina HTML

    <?php
    echo "<BR>"."Olá Mundão Perdido<BR>";
    $nome = "Bilu Safado";
    echo $nome."<BR>";
    ?>
    <h2>Exemplo tipo de dados PHP</h2>
    <?php
    $a = 5;
    $b = 7;
    echo "<p>".$a+$b. "<p>";
    ?>
    <p><?php echo $a+$b ?></p>

    <h2>Operador terciário</h2>
    <?php
    $nota=5.9;
    $situacao = $nota >= 6 ? "aprovado" : "reprovado"  ;
    echo $situacao;
    ?>

    <h2>While</h2>
    <?php
    $i = 0;
    while($i<10){
        $i++;
        echo "i=".$i."-";
    }
    ?>

    <h2>Array em php</h2>
    <?php
    $vetor = array(20,19,22,19,23);
    for($posicao = 0; $posicao <5; $posicao++){
         echo $vetor[$posicao] . "<br/>";
    }
    foreach($vetor as $elemento){
        echo "Elemento: ". $elemento;
    }
    ?>

<h2>Vetor com indice alfabetico</h2>
    <?php
    $vetor = array(
        "nome" => "Bilu",
        "sobrenome" => "Safado",
        "cpf" => "123.456.789-00"

    );
    echo "Nome: ".$vetor ["nome"]. "<br>";
    echo "Sobrenome: ".$vetor ["sobrenome"]. "<br>";
    echo "CPF: ".$vetor ["cpf"]. "<br>";
    ?>

    <h2>Variáveis de ambiente em PHP</h2>
    <?php
    echo "$_GET". $_GET ["nome"]."<br>";
        echo "REQUEST:". var_dump ($_SERVER);
    ?>

    
    
</body>
</html>