<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num = $_POST["nume"];
    $prenum = $_POST["prenume"];
    $email = $_POST["email"];

    echo"Nume: " .$num;
    echo "Prenume: " .$prenum;
    echo "Email: ".$email;

}
?>