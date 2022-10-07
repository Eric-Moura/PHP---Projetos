<?php
$_SESSION["paciente"] = $_POST["nome"];

if (strpos($_SESSION["lista"], $_SESSION["paciente"])) {
  $_SESSION["jaCadastrado"] = true;
}

if (!$_SESSION["jaCadastrado"]) {
    $_SESSION["paci"] = $_SESSION["paciente"] . "<br><br>";

    $_SESSION["lista"] .= $_SESSION["paci"];
    $_SESSION["pacientes"] .= "<option value=\"$_SESSION[paciente]\">$_SESSION[paciente]</option>";
} else {
    echo "<p style=\"color: red;\"> Paciente já cadastrado<p>";
}
