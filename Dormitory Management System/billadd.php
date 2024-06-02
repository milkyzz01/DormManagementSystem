<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "dormitorydb";

$roomNum = $_POST['addroomNum'];
$billtype = $_POST['addtypeBills'];
$amount = $_POST['addamount'];
$status = $_POST['addstatus'];
$due = $_POST['addDue'];
$rent = $_POST['rent'];

$alert = '<script>alert("Bill Added Successfully");
                  window.history.back();
          </script>';

$alerts = '<script>alert("Cannot be Empty");
           window.history.back();
  </script>';

$conn =  new mysqli($serverName,$userName,$password,$databaseName);
$sql = "insert into bills_tbl (Room_Number, Electric, Water, Rent, Due_Date, Status) values ('".$_POST['addroomNum']."','".$_POST['addtypeBills']."','".$_POST['addamount']."','".$_POST['rent']."','".$_POST['addDue']."','".$_POST['addstatus']."')";

//connection
if($conn->connect_error)
{
    die("Connection Failed" . $conn->connect_error);
}


if(empty($roomNum))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}

if(empty($billtype))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}

if(empty($amount))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}

if(empty($status))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}

if(empty($due))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
    echo $alert;
        
}
?>