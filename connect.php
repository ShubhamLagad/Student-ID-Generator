<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "student_id_generator";

    $con = mysqli_connect($host,$user,$password,$database);
    // if($con)
    // {
    //     echo "connection successsfull";
    // }else{
    //     echo "errorr";
    // }
    // $sql1 = "drop table student";

    //********Student login information****************
    $sql = "create table student(firstname varchar(20),lastname varchar(20),registrationno varchar(15) primary key,password varchar(20))";
    $result = mysqli_query($con,$sql);
    // // echo var_dump($result);

    // //********Student information****************
    $sql1 = "create table studentinfo(firstname varchar(20),middlename varchar(20),lastname varchar(20),birth_date date, blood_group char(5),mobile_no varchar(10),email varchar(30),address varchar(30),course varchar(40),registrationno varchar(15) primary key,photo varchar(50))";
    $result1 = mysqli_query($con,$sql1);
    // echo var_dump($result1);



?>