<?php
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == "" || $password == "")
    {
        header('location: login.php?err=null');
    }
    else
    {
        $file = fopen('owner.txt', 'r');
        $status = false;
        while(!feof($file)){
            $data = fgets($file);
            $user = explode("|", $data);
            //print_r($user);
            if(trim($user[1]) == $email && trim($user[3]) == $password){
                setcookie('status', 'true', time()+3600, '/');
                $status = true;
            }
        }
        
        if($status){
            header('location: home.php');
        }else{
            header('location: login.php?err=invalid');
        }

    }
?>