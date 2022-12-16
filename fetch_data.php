<?php
$servername="localhost";
$username="root";
$password="";
$dbname="information";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die ("Connection error".mysqli_connect_error());
}else{
    echo "connection successfully ";
}

$sql = "SELECT * FROM detail";
$result =  (mysqli_query($conn, $sql));

// count number of rows in database
$num= mysqli_num_rows($result);
echo "</br>";
echo $num;
echo "</br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row) ;
// echo "</br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row) ;
// echo "</br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row) ;
// echo "</br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row) ;
// echo "</br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row) ;
// echo "</br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row) ;
// echo "</br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row) ;
// echo "</br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row) ;


// fetch data in better way by using while loop
while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row) ;
    echo $row['sno']."--". $row['username'] . "--" . $row['email']."--" .$row['gender']; 
    echo "</br>";
}

?>