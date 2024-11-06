<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    if (empty($nome)) {
        echo "<p>É necesario introducir o nome</p>";
    }else{
        echo "Nome: ".$nome."</br>";
    }
    if (empty($email)) {
        echo "<p>É necesario introducir o mail</p>";
    }else{
        echo "Email: ".$email."</br>";
    }
    if (empty($idade)) {
        echo "<p>É necesario introducir a idade</p>";
    }else{
        echo "Idade: ".$idade."</br>";
    }
}
?>
