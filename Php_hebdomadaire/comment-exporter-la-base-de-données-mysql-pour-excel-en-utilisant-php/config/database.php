<?php

  $hostname = "localhost";
  $username = "root";
  $dbname   = "sql_by_excel";
  $password = "";

  try {
    $connection = new PDO("mysql:host=$hostname; dbname =$dbname, $password, $");
  } catch (\Throwable $th) {
    //throw $th;
  }