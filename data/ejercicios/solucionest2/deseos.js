function hola(){
    
    alert("hola" );
    session_start();
    $array = $_SESSION;
    document.write($array);
    
    
}