<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    $mailTo = "ownersemail@gmail.com";
    $headers = "From my website";
    mail($mailTo, $headers);
    header("Location: index.php?mailsend");
}