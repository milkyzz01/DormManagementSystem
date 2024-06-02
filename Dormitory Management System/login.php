<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "dormitorydb";

//get the input from form 1
$email = $_POST['Email'];
$pass = $_POST['Password'];


$alert = '<script>alert("Please Enter a Valid Input");
                  window.history.back();
          </script>';
          
$conn =  mysqli_connect($serverName,$userName,$password,$databaseName);

//connection
if($conn->connect_error)
{
    die("Connection Failed" . $conn->connect_error);
}

$sql = "select * from users_tbl where Email = '".$email."'and Password = '".$pass."'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if($row['User_Type']=="admin")
{
    header('location: 3.php');
}
if($row['User_Type']=="tenants")
{
    header('location: tenant3.php');
}
if(empty($row))
{
    echo $alert;
    die("Connection Failed" . $conn->connect_error);
}

if(empty($row))
{
    echo $alert;
    die("Connection Failed" . $conn->connect_error);
}





?>