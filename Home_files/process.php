<?php
// Get Data	
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$phone = strip_tags($_POST['phone']);
$url = strip_tags($_POST['riferimento']);
$message = strip_tags($_POST['message']);

// Send Message
mail( "alexrah@gmail.com", "Richiesta informazioni da ericroads.com",
"Name: $name\nEmail: $email\nPhone: $phone\nRiferimento: $url\nMessage: $message\n",
"From: ericroads.com <alexrah@gmail.com>" );
?>
