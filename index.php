<?php
require "classes/crud.php";
require "classes/User.php";
require "classes/Group.php";

$host = "localhost";
$dbname = "test_poo_crud";
$user = "root";
$password = "";
$conx = new crud($host, $dbname, $user, $password);

$user=new User("oussama","oussama@gmail.com!");

$user->insert();
$group=new Group("Namek",$user);
$group->insert();
echo $user->select();
$user->setName("khalid");
echo $user->update();

$user->delete();

echo $group->select();
$group->delete();