<?php
session_start();

require 'User.php';


$shw = new User;

$shw->logout();


?>