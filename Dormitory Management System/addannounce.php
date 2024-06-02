<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "dormitorydb";

$announce = $_POST['textarea'];

$alert = '<script>alert("Announcement Posted Successfully");
                  window.history.back();
          </script>';

$alerts = '<script>alert("Cannot be Empty");
           window.history.back();
  </script>';

$conn =  new mysqli($serverName,$userName,$password,$databaseName);
$sql = "insert into announcement_tbl (Announcement) values ('".$_POST['textarea']."')";

//connection
if($conn->connect_error)
{
    die("Connection Failed" . $conn->connect_error);
}


if(empty($announce))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
    echo $alert;
        
}
?>