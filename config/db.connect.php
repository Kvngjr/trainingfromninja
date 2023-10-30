<?php

// Connect to database
$conn = mysqli_connect('localhost', 'Meatua', 'work1234', 'michael_pizza');

//check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>