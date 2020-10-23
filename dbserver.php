<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$serverName = "localhost";
$dbUsererName = "root";
$dbPassword = "password";
$dbName = "rkpummjg_wp833";

$conn = mysqli_connect($serverName, $dbUsererName, $dbPassword, $dbName);

if(!$conn)
{die("connection failed". mysqli_connect_error());}
