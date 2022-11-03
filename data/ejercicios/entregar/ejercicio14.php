<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if(isset($_POST["envio"]) && !empty($_POST["envio"])){

        $numero = $_POST["numero1"];
        $operador = $_POST["operador"];
        $numero2 = $_POST["numero2"];

        switch($operador){
            case "+":
                $resultado = $numero + $numero2;
            break;

            case "-":
                $resultado = $numero - $numero2;
            break;

            case "*":
                $resultado = $numero * $numero2;
            break;

            case "/":
                $resultado = $numero / $numero2;
            break;

            default:
                $resultado = 0;
            break;
        }
        }else{
            echo "no enviaste nada";
        }

    echo "el resultado es " . $resultado;

    }else{
    echo "se necesitan dos operadoes";
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
    <form name="miformu" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <p>
            <label for="">Operando 1:</label>
            <input type="number" name="numero1" value="">
        </p>
        <p>
            <label for="">Operando 2:</label>
            <input type="number" name="numero2" value="">
        </p>
        <select name="operador" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>

        </select>
        <input type="submit" name="envio" value="Enviar">
    </form>
</body>
</html>