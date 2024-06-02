<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "dormitorydb";

$billID = $_POST['deletebillID'];


$alert = '<script>alert("Bill Deleted Successfully");
                  window.history.back();
          </script>';

$alerts = '<script>alert("Cannot be Empty");
           window.history.back();
  </script>';

$conn =  new mysqli($serverName,$userName,$password,$databaseName);
$sql = "delete from bills_tbl where Bill_id='" .$billID. "';";

//connection
if($conn->connect_error)
{
    die("Connection Failed" . $conn->connect_error);
}


if(empty($billID))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
    echo $alert;
        
}
?>