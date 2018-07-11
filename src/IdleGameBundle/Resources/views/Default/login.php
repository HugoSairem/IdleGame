<?php

$database='mysql:host=localhost;dbname=idle_war_game;charset=utf8';
$username="root";
$password="root";
$conn = new PDO($database, $username, $password);

$query;
$result;

$conn=NULL;