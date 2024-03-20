<?php
require "database.php";

echo $_POST['password'];
$zoek_user = $conn->prepare(query:'SELECT * FROM accounts WHERE username = :gebruikernaam');
$zoek_user-> bind_param(':gebruikernaam', $_POST['username']);
$zoek_user-> execute();
$user = $zoek_user->fetchAll(PDO::FETCH_ASSOC);

var_dump($user);
?>