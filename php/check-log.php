<?php
require_once 'connect.php';
session_start();

$login = filter_var(trim($_POST['login']));
$password = filter_var(trim($_POST['password']));

$user = $mysql->query("SELECT * FROM admin WHERE login = '$login' AND password = '$password'")->fetch_assoc();

if (count($user) == 0) {
    echo 'Неверный пароль!';
    exit;
}

$_SESSION['user'] = $user['id'];
echo 'success';
