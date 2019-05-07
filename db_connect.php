<?php
$connection = mysqli_connect('10.8.30.49','aekrause355wi19','LQWbvz48');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'aekrause355wi19');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}