<?php

if(isset($_POST['submit'])){
    $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
    $message = $_POST['contact-project'];

    $mailTo = "siteabletech@gmail.com"; //look in later video
    $headers = "From: ".$email;
    $txt = "You received an email from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
}