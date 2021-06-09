<?php
    $host_name = 'localhost';
    $db_name = 'databaseshoesshop';
    $username = 'root';
    $password = '';
    $option = array(
        PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8",
        PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION
    );
    try{
        $connect = new PDO("mysql:host=$host_name;dbname=$db_name",$username,$password,$option);
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //echo 'thanh cong';
    }
    catch(PDOException $err)  {
        echo $err->getMessage();
        exit(1);
    }
?>