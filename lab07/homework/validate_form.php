<?php
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    }

    $url = $_POST["url"];
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
        echo "Invalid URL";
    }

    $phone = $_POST["phone"];
    if(!preg_match('/^[0-9]{10}+$/', $phone)){
        echo "Invalid phone";
    }
?>