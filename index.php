<?php
    

    include 'config.php';
    error_reporting(0);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $dd = "Insert into contact(name , email , phone , subject , message) values(?,?,?,?,?)";
    $dc = $connection->prepare($dd);

    $dc->bind_param("sssss" , $name , $email , $phone , $subject , $message);
    
    if($dc->execute()){
        echo 'Insert data success!';
    }else{
        echo'Insert data error !';
    }


    
?>