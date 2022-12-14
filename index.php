<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    
    //connection with db
    $host='localhost';
    $user='root';
    $pass='';
    $dbname='information';
    
    $conn=mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO detail(username,email,gender) values ('$username','$email','$gender')";

    mysqli_query($conn,$sql);
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        *{
            margin: 0%;
            padding: 0%;
        }
        .container{width: 60%; margin: auto;}
        h1{margin-top: 90px;}
        .container form{margin-top: 50px; display: flex; flex-direction: column; justify-content: center; align-items: center;}
        #name{padding: 10px 20px;width: 50%;margin-bottom: 20px;}
        #email{padding: 10px 20px;width: 50%;margin-bottom: 20px;}
        #gender{padding: 10px 20px;width: 50%;margin-bottom: 20px;}
        #btn{padding: 10px 20px; cursor: pointer;}
    </style>
</head>
<body>
    <div class="container">
        <h1>Enter Your Detail</h1>
        <form action="#" method="post">
            <input type="text" name="username" id="name" placeholder="username">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="gender" name="gender" id="gender" placeholder=" Enter Gender">
            <input type="submit" value="Send Data" name="submit" id="btn">
        </form>
    </div>
</body>
</html>
<!-- html->php->mysqal -->