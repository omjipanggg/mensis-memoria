<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "maulana.ajie.pamungkas@gmail.com";
    $subject = "The site is working!";
    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "Message has been submitted! Redirecting...";
        header('Location: ../index.html');
        exit();
    } else {
        echo "Connection closed unexpectedly! Redirecting...";
        header('Location: ../index.html');
        exit();
    }
} else {
    echo "Reloading...";
    header('Location: ../index.html');
    exit();
}