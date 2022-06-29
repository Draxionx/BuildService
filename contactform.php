<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $subject = "Keyboard Build Service Enquiry";
    $emailFrom = $_POST["email"];
    $message = $_POST["message"];

    $mailTo = "Draxion1015@gmail.com";
    $headers = "From: ".$mailFrom;
    $text = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $text, $headers);
    header("Location: index.php?mailsend");
}

?>