<?php 

function createDatabase(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crudexample";

    $con = mysqli_connect($servername, $username, $password);

    if(!$con){
        die("Connection failed:" .mysqli_connect_error());
    }

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($con, $sql)){
        $con = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "CREATE TABLE IF NOT EXISTS books
            (
                id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                book_name VARCHAR(25) NOT NULL,
                book_publisher VARCHAR(20),
                book_price FLOAT
            )
        ";

        if(mysqli_query($con, $sql)){
            return $con;
        }else{
            echo "Failed to create table...";
        }
    }else{
        echo "Failed to create database..." .mysqli_error($con);
    }
}

?>