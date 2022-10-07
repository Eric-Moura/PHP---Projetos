<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultorio</title>
</head>

<body>
    <h3>Fila de espera</h3>
    <form action="" method="post">
        <label for="nome">Nome do paciente:</label>
        <input type="text" name="nome" id="" required>
        <br>
        <input type="submit" value="Adicionar a fila" name="btn">
        <h3>Pacientes:</h3>
    </form>
    <?php
    session_start();            
    if ($_POST) {
        $_SESSION["jaCadastrado"] = false;
        include "adicionaCliente.php";
    }
    foreach ($_SESSION["lista"] as $key => $value) {
        echo ($key + 1) . ". " . $value;
    }    

    ?>

    <h3>Remover paciente</h3>
    <form action="remove.php" method="post">
        <label for="remove">ID do paciente: </label>
        <br>
        <input type="number" name="remove" id="" required>
        <br>
        <br>
        <input type="submit" value="Remover Paciente">
    </form>
    <br>
</body>

</html>


<?php
/*
if (isset($_POST["btnRemove"])) {
    array_diff($_SESSION["lista"], $_POST["number"]);
}
*/

?>