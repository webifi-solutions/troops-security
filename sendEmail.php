<?php

//php display errors
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


    // $message_sent = false;
    if(isset($_POST['name']) && isset($_POST['email'])) {

      if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        // submit the form
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "info@troopssecurity.co.za";
        $body = "";

        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Message: ".$message. "\r\n";

        $message_sent = true;

        if($message_sent){
          mail($to,$messageSubject,$body);
          header("Location: index.php?mailsend");
          echo '<hr /><h3 align="center">Your mail was sent. Thank you!</h3><hr />';
          
    }
    else{
        mail($to,$messageSubject,$body);
        header("Location: index.php?mailFailed");
    }
  }
}

?>
