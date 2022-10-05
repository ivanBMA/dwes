<?php
$mihost = $_SERVER["HTTP_HOST"];
echo "<br> El host al que va la peticieon es: " . $mihost;
echo "<hr>";

$misel = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
echo "<br> mi lenguaje: " . $misel;

$milenguaje = $_SERVER["PHP_SELF"];
echo "<br> nombre de la paguina actual: " . $milenguaje;

$minavegador = $_SERVER["HTTP_USER_AGENT"];
echo "<br> El navegador: " . $minavegador;

/*mostrar aqui:
    -el nombre del servior web
    -el lenguaje
    -el nombre de la paguina actual que realiza la soclicitud
    -el tipo de navegador que realiza la solicitud
  */  