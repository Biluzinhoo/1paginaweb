<?php

function connecta_bd() {
    $servername = "localhost";
    $username = "root";
    $password = "admin"; // coloque "" se o root não tiver senha
    $dbname = "webti";

    return new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
}

//connecta_bd();

function cadastra_usuario($nome, $login, $senha) {
    $con = connecta_bd();
    $stmt = $con->prepare("INSERT INTO usuarios (nome, login, senha)
                           VALUES (:nome, :login, :senha)");
    
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":login", $login);
    $stmt->bindParam(":senha", $senha);

    return $stmt->execute();
}

// cadastra_usuario("BILU ", "joao", "12345");

function delete_usuario($id) {
    $con = connecta_bd();
    $stmt = $con->prepare("DELETE FROM usuarios WHERE id = :id");
    $stmt->bindParam(":id", $id);
    
    return $stmt->execute();
}

//delete_usuario(4);

function update_usuario($id, $nome, $login, $senha) {
    $con = connecta_bd();
    $stmt = $con->prepare("UPDATE usuarios
                           SET nome = :nome, login = :login, senha = :senha
                           WHERE id = :id");

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":login", $login);
    $stmt->bindParam(":senha", $senha);

    return $stmt->execute();
}

update_usuario(2, "Daniel", "daniel", "54321");

function get_usuario($id){
    $con = connecta_bd();
    $stmt = $con->prepare("SELECT * FROM usuarios WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


//echo var_dump(get_usuario(1));

function get_usuarios(){
    $con = connecta_bd();
    $stmt = $con -> prepare("SELECT * FROM usuarios");
    $stmt-> execute();
    return $stmt -> fetchAll(PDO::FETCH_ASSOC);
}

/*echo "<pre>";
print_r(var_dump(get_usuarios()));
echo "</pre>"
*/
?>
