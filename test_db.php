<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="phpmyadmin";
    
    //create connection for database
    $db= new mysqli($servername,$username,$password,$db);
    //check connection
    if (mysqli_connect_error()){
      die ("Database connection failed: ". mysqli_connect_error());
    }
    echo "Connect successfully";
    
    //create a new database name "testDB"
    /*
    $sql="CREATE DATABASE testDB";
    if ($conn->query($sql)===TRUE){
        echo "Database created successfully!";
    }
    else{
        echo "Failed to create database";
    }
    */

 ?>
