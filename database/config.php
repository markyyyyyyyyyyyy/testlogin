<?php 

$conn = mysqli_connect('localhost', 'root', '', 'chatapp');

if(!$conn){
    echo 'error';
}