<?php
    session_start();
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];


    




  if($name=="" || $email== "" || $phone_number =="" || $password ==""  || $confirm_password ==""  )
     {
         header('location: OwnerRegistration.php?err=null');
         echo "try again";
     }
     else
     {      
        $user = $name. "|" .$email. "|" .$phone_number. "|" .$password. "|" .$confirm_password. "|" .$address. "|" .$gender.  "\r\n";
        $file = fopen('owner.txt', 'a');
        fwrite($file, $user);

        header('location: login.php');
     }

?>