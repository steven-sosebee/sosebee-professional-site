<?php
$user_name=htmlspecialchars($_POST['user_name']);
$user_email=htmlspecialchars($_POST['user_email']);
echo $user_name, ' ', $user_email;
?>