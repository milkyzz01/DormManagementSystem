<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "dormitorydb";

//Getting input data from the form
$paymentmethod = $_POST['paymentmethod'];
$typepayment = $_POST['typepayment'];
$amounttopay = $_POST['amounttopay'];
$amountofpay = $_POST['amountofpay'];
$roomnum = $_POST['roomnum'];
$period = $_POST['period'];

$alert = '<script>alert("Successfully Added the Records");
                  window.history.back();
          </script>';

$alerts = '<script>alert("Cannot be Empty");
          window.history.back();
 </script>';

$conn =  new mysqli($serverName,$userName,$password,$databaseName);

//connection

$sql = "insert into transaction (Payment_Method, Type_of_Payment, Amount_to_Pay, Amount_of_Pay, Room_Number, Period) values ('".$_POST['paymentmethod']."','".$_POST['typepayment']."','".$_POST['amounttopay']."','".$_POST['amountofpay']."','".$_POST['roomnum']."','".$_POST['period']."')";

if($conn->connect_error)
{
    die("Connection Failed" . $conn->connect_error);
}


if(empty($roomnum))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}


if(empty($paymentmethod))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}

if(empty($typepayment))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}

if(empty($amounttopay))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}

if(empty($amountofpay))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}

if(empty($period))
{
    echo $alerts;
    die("Connection Failed" . $conn->connect_error);
}


if ($conn->query($sql) === TRUE) {
    echo $alert;
        
}






?>