<?php
session_start();

$users = [
    ['login' => 'Anna', 'password' => password_hash(123,PASSWORD_DEFAULT)], //123
    ['login' => 'Inna', 'password' => password_hash(234,PASSWORD_DEFAULT)], //234
];

?>
