<?php
//Usuario 1234  => rol = 0
//Admin 4467    => rol = 1 
function comprobarCredenciales($nombreUsu, $clave)
{
    if ($nombreUsu === "usuario" && $clave == "1234") {
        $credenciales["nombreUsu"] = "usuario";
        $credenciales["rol"] = 0;
        return $credenciales;
    }
    if ($nombreUsu === "Admin" && $clave == "4467") {
        $credenciales["nombreUsu"] = "Admin";
        $credenciales["rol"] = 1;
        return $credenciales;
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["envio"])) {
        $credenciales = comprobarCredenciales($_POST["nombre"], $_POST["contraseña"]);
        if ($credenciales === false) {
            $error = 1;
        } else {
            //Si las credenciales son validas
            session_start();
            $_SESSION["loginOk"] = $credenciales;
            header('Location:principal.php');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Paguina de acceso</h2>
    <hr>
    <?php
    if (isset($error) && $error == 1) {
        echo   "<p>Credenciales invalidas</p>";
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

        <p>
            <label for="nombre">nombre Usuario :</label>
            <input type="text" name="nombre" id="numberA">

        </p>
        <p>
            <label for="contraseña">contraseña:</label>
            <input type="password" name="contraseña" id="numberA">

        </p>
        <br>
        <input type="submit" name="envio" value="Acceder">
    </form>
</body>

</html>