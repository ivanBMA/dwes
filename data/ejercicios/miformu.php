<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Mi formulario</h1>

    <form name="miformu" action="/autoriza.php" method="post">
        <p>
            <label for="nombre">INtroduce el nombre:</label>
            <input type="text" name="nombreusu" id="nombreusu">

        </p>
        <p>
            <label for="password">introduce la contraseña :</label>
            <input type="password" name="passwwd" id="passwwd">
        </p>
        <p>
            <label for="checkbox">aceptar Terminos y condiciones :</label>
            <input type="checkbox" name="checkbox1" id="checkbox1">
            <label for="checkbox">java :</label>
            <input type="checkbox" name="checkbox2" id="checkbox2">
            <label for="checkbox">phps :</label>
            <input type="checkbox" name="checkbox3" id="checkbox3">
            <label for="checkbox">c++ :</label>
            <input type="checkbox" name="checkbox4" id="checkbox4">
        </p>
        <p>
            <label for="asignatura1">aceptar Terminos y condiciones :</label>
            <input type="checkbox" name="checkbox[]" id="asigntura1" value="aceptar">
            <label for="asignatura2">java :</label>
            <input type="checkbox" name="checkbox[]" id="checkbox2" value="java">
            <label for="asignatura3">phps :</label>
            <input type="checkbox" name="checkbox[]" id="checkbox3" value="php">
            <label for="asignatura4">c++ :</label>
            <input type="checkbox" name="checkbox[]" id="checkbox4" value="c++">
        </p>

        <p>
            <label for="equipo1">CasaDemont Zaragoza</label>
            <input type="radio" name="equipo" value="equipo1" value="CasaDemont">
            <label for="equipo2">SanPablo Burgos</label>
            <input type="radio" name="equipo" value="equipo2" value="Burgos">
            <label for="equipo2">Obradoiro</label>
            <input type="radio" name="equipo" value="equipo3" value="Obradoiro">
        </p>

        <p>Eligue tu plato favorito</p>
        <p>

            <select name="menus" id="menus">
                <option value="codillo">codillo asado</option>
                <option value="ensalada">Ensalada</option>
                <option value="macarrones">macarrones con tomate</option>
                <option value="brocoli">brocoli</option>
            </select>

        </p>

        <p>Eligue tus platos favoritos (Select multiple)</p>
        <p>

            <select name="menusm[]" id="menus" multiple>
                <option value="codillo">codillo asado</option>
                <option value="ensalada">Ensalada</option>
                <option value="macarrones">macarrones con tomate</option>
                <option value="brocoli">brocoli</option>
            </select>

        </p>

        <input type="hidden" name="ip" value="<?= $_SERVER['SERVER_ADDR'] ?>">

        <input type="submit" name="envio" value="Enviar">

    </form>

</body>

</html>