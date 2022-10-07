<?php

if (!isset($_SESSION["lista"])) {
    $_SESSION["lista"] = array();
}
$_SESSION["paciente"] = $_POST["nome"];

foreach ($_SESSION["lista"] as $value) {
    if (strpos($value, $_SESSION["paciente"])) {
        $_SESSION["jaCadastrado"] = true;
    }
}

if (!$_SESSION["jaCadastrado"]) {
    $_SESSION["paci"] = $_SESSION["paciente"] . "<br><br>";
    array_push($_SESSION["lista"], $_SESSION["paci"]);
} else {
    echo "<p style=\"color: red;\"> Paciente já cadastrado<p>";
}
