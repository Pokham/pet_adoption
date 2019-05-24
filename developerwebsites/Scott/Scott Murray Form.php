<?php
    header('Content-type: text/plain');
    $message = "Name: " . $_POST["name"] . "\nEmail: " . $_POST["email"] . "\nComments: " . $_POST["comments"];
    $message = wordwrap($message, 70);
    
    echo $message;
    
    mail('11ceilingunlimited@gmail.com', 'Website Form', $message);
?>
