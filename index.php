<?php
require "classes/crud.php";
require "classes/User.php";

$host = "localhost";
$dbname = "test_poo_crud";
$user = "root";
$password = "";

$orm = new crud($host, $dbname, $user, $password);
$user=new User("oussama","oussama@gmail.com!");
$user->insert($orm);
echo $user->select($orm);
$user->setName("khalid");
echo $user->update($orm);

$user->delete($orm);


