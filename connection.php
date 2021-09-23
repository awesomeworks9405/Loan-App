<?php

$connect = mysqli_connect('localhost', 'samuel', 'samuel@fmysd', 'loandb');

//Check if connection is Successful

if(!$connect){
    echo 'Connection Failed ' . mysqli_connect_error();
}

?>