<?php
$route = $_POST['route'];

if ($route == 'Admin')
{
    echo "Hello";
    header('location: login.php');
} 