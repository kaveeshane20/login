<?php

$email = $_POST["e"];
$pass = $_POST["pw"];

if(empty($email)){
    echo ("Please enter your name");
}else if(strlen($email) > 100){

}else if(empty($pass)){
    echo ("Please enter your password");
} else if (strlen($pass) < 5 || strlen($pass) > 20) {
    echo ("Invalid Password");

}else{


    $conn = new mysqli("localhost", "root", "Kaveesha12#", "php005", "3306");

    $q = "INSERT INTO `user`(`email`,`password`) VALUES ('" . $email . "','" . $pass . "')";

    $conn->query($q);

    echo ("Success Log In");




}








?>