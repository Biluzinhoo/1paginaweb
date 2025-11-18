<?php

function connecta_bd(){
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "wetbti";
}
return new PDO("mysql:host=$servername;dbname=$dbname",$username, $password)

//connecta_bd();

function cadastra_usuario($nome,$email,$login,$senha){
    $con = connecta_bd();
    $stmt = $con -> prepare("INSERT INTO usuarios (nome, email, login, senha)
                             VALUES (:nome, :email, :login, :senha)");
    stmt -> bindParam(":nome", $nome);
    stmt -> bindParam(":login", $login);
    stmt -> bindParam(":senha", $senha);
    return $stmt -> execute(); 
 
 
}

?>