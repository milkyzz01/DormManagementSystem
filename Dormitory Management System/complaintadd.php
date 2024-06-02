<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "dormitorydb";

//Getting input data from the form
$roomnum = $_POST['room_Num'];
$complaint = $_POST['complaint'];
$status = $_POST['status'];
$date = $_POST['date'];

$alert = '<script>alert("Complaint Has Been Added");
                  window.history.back();
          </script>';

$alerts = '<script>alert("Cannot be Empty");
           window.history.back();
  </script>';

$conn =  new mysqli($serverName,$userName,$password,$databaseName);

//connection
if($conn->connect_error)
{
    die("Connection Failed" . $conn->connect_error);
}

$sql = "insert into complaint_tbl (Room_Number, Complaint, Status, Date_of_Complaint) values ('".$roomnum."','".$complaint."','".$status."','".$date."')";

if(empty($roomnum))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}

if(empty($complaint))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}

if(empty($status))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}

if(empty($date))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
    echo $alert;
        
}


?>