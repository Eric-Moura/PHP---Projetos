<?php

session_start();
$_SESSION["nomePaciente"] = $_POST["nomePaciente"];

echo $_SESSION["nomePaciente"];

$removerDePacientes = "<option value=\"$_SESSION[nomePaciente]\">$_SESSION[nomePaciente]</option>";
$removerDaLista = $_SESSION["nomePaciente"] . "<br><br>";

$_SESSION["lista"] = str_replace($removerDaLista, "", $_SESSION["lista"]);
$_SESSION["pacientes"] = str_replace($removerDePacientes, "", $_SESSION["pacientes"]);


header("Refresh: 0; consultorio.php");
