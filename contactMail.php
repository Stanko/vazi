<?php
$email = $_POST['email'];
$message = $_POST['message'];
$name = $_POST['name'];

if($name != ''){
	echo 'false';
	die();
}

$recipient = 'yoouzza@yahoo.com';

$message = "
**************************************
         PORUKA SA SAJTA
**************************************
e-mail: $email

$message
";

if(mail($recipient , 'Poruka sa sajta', $message, "From: $name <$email>")){
    echo 'true';
}
else
    echo 'false';

?>
