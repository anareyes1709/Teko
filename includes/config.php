<?php 
$conn = mysqli_connect('localhost','root','','teko');
if(!conn){
    "Fallo de consulta:". mysqli_connect_error();
    die();
}
?>