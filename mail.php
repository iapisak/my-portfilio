<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $formcontent="From: $name \n Message: $message";
    $recipient = "iapisak1981@gmail.com";
    $subject = "Contact from $email";
    $headers .= 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    if (mail($recipient, $subject, $comment, $header)) {
        echo "Message accepted";
    } else {
        echo "Error: Message not accepted";
    }
?>