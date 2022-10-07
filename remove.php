<?php

session_start();
$_SESSION["remove"] = $_POST["remove"];
if (isset($_SESSION["lista"][$_SESSION["remove"] - 1])) {
    unset($_SESSION["lista"][$_SESSION["remove"] - 1]);
    echo "<p style=\"color: green\"><b>SUCESSO</b> O paciente foi removido da lista</p>";
    foreach ($_SESSION["lista"] as $key => $value) {
        if ($key > $_SESSION["remove"] - 1) {
            $_SESSION["lista"][$key - 1] = $value;
            unset($_SESSION["lista"][$key]);
        }
    }
} else {
    echo "<p style=\"color: red\"><b>ERRO</b> paciente não foi encontrado</p>";
}

header("Refresh: 2; consultorio.php");
