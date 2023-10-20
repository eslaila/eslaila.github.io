<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "essoutilaila@gmail.com";  // Remplacez par votre propre adresse e-mail
    $subject = "Nouveau message de $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>
