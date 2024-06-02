<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "dormitorydb";

$room = $_POST['room_Num'];
$complaint = $_POST['complaint'];
$status = $_POST['status'];
$date = $_POST['date'];

$alert = '<script>alert("Complaint Changed Successfully");
                  window.history.back();
          </script>';

$alerts = '<script>alert("Cannot be Empty");
           window.history.back();
  </script>';

$conn =  new mysqli($serverName,$userName,$password,$databaseName);
$sql = "UPDATE complaint_tbl SET Room_Number='".$room."',Complaint='".$complaint."', Status='".$status."', Date_of_Complaint='".$date."' WHERE Room_Number='".$room."'";

//connection
if($conn->connect_error)
{
    die("Connection Failed" . $conn->connect_error);
}


if(empty($room))
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