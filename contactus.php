<?php
ini_set( 'display_errors', 1 );   
error_reporting( E_ALL ); 
    $name = $_POST["name"];
    $subject1 = $_POST["subject"];
    $email = $_POST["email"];
    $Message = $_POST["Message"];
    $submit = $_POST["submit"];
    echo $name;
    
    $res = "mailto:".$to."?subject=".$name.$subject1."&amp;body=".$Message;
    $from = $email;    
    $to = "wirosableng212df@gmail.com";    
    $subject = $subject1 .$name ;    
    $message = $Message;   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
    echo "Pesan email sudah terkirim.";
?>