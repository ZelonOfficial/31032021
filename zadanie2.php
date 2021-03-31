<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'liczby';
$port = 3306;

$polaczenie = @new Mysqli($host,$username,$password,$dbname,$port);

if(mysqli_connect_errno()!=0){
    echo("Błąd połączenia").mysqli_connect_error();
}else{
    echo("Połączenie udane");
}

?>