<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "dormitorydb";

$billID = $_POST['billID'];
$roomNum = $_POST['changeroomNum'];
$billtype = $_POST['changetypeBills'];
$amount = $_POST['changeamount'];
$status = $_POST['changestatus'];
$due = $_POST['changeDue'];
$rent = $_POST['rent'];

$alert = '<script>alert("Bill Changed Successfully");
                  window.history.back();
          </script>';

$alerts = '<script>alert("Cannot be Empty");
           window.history.back();
  </script>';

$conn =  new mysqli($serverName,$userName,$password,$databaseName);
$sql = "UPDATE bills_tbl SET Room_Number='".$roomNum."', Electric='".$billtype."', Water='".$amount."', Rent='".$rent."', Due_Date='".$due."', Status='".$status."' WHERE Bill_id='".$billID."'";

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