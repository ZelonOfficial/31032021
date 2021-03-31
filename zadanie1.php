<?php 

$polaczenie = mysqli_connect("localhost","root","","liczby",3306);

if(mysqli_connect_errno()!=0){
    echo("Błąd połączenia").mysqli_connect_error();
}

?>