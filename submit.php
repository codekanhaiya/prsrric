<?php

$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="prsrric";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
    echo "Connection Failed: ".mysqli_connect_error();
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT into faculty(username,password) VALUES('$username','$password')";
$result = mysqli_query($conn,$sql);

if($result){
    ?>
        <script>
            alert("Registration Successful!");
        </script>
    <?php
}else{
    ?>
        <script>
            alert("Please try again!");
        </script>
    <?php
}

?>