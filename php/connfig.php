<?php 
//create connection
$connfig = new mysqli('localhost','root','','dashboard');

//check connection
if($connfig->connect_error){
    die("connection error : ". $connfig->connect_error);
}
