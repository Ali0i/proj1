<?php 

$conn = mysqli_connect('localhost', 'root' , 'root' , 'winn');

if(!$conn){
echo 'Error: ' . mysqli_connect_error();
}