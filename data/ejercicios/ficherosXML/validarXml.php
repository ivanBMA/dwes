<?php
    $dept = new DOMDocument();
    $dept->load("empleados.xml");
    $respuesta = $dept->schemaValidate("departamento.xsd");

    echo ($respuesta)? "<h1>Documento Valido</h1>" 
        : "<h1>Documento invalido</h1>";