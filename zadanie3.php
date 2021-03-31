<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "liczby";
$port = 3306;

try{
    $polaczenie = @new PDO('mysql:host='.$host.';dbname='.$dbname.';port='.$port.';charset=utf8',$username,$password);
    echo("Połączono");
}catch(PDOException $e){
    
}

?>