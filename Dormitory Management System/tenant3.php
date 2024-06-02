<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Content</title>
    <link rel="stylesheet" href="tenant3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="header">
        <ul class="ul">
            <li class="li">Dormitory Management System</li>
            <li class="lo">Tenant  <i class="fa fa-fw fa-bars" onclick="opensidebar()"></i></li>
        </ul>
    </header>
    <section class="maincontent">
        <div class="panel">
            <ul>
                <li><a href="tenant3.php"><i class="fa fa-fw fa-home"></i>Transaction History</a></li>
                <li><a href="tenantbill.php"><i class="fa fa-fw fa-user"></i>Bills</a></li>
                <li><a href="tenantcomplaint.php"><i class="fa fa-fw fa-wrench"></i>Complaints</a></li>
                <li class="liPeople"><a href="tenantannounce.php"><i class="fa fa-fw fa-envelope"></i>Announcements</a></li>
            </ul>
        </div>
        <div class="content">
        <h1>Transaction History</h1>
           <div class="tablecontent">
            <table id="tablebills">
                <tr>
                    <th>Transaction ID</th>
                    <th>Payment Method</th>
                    <th>Type of Payment</th>
                    <th>Amount to Pay</th>
                    <th>Amount of Pay</th>
                    <th>Room Number</th>
                    <th>Period</th>
                </tr>
                <?php
                $serverName = "localhost";
                $userName = "root";
                $password = "";
                $databaseName = "dormitorydb";
                $conn = mysqli_connect($serverName,$userName,$password,$databaseName);
                $sql = "select * from transaction;";
                $result = $conn-> query($sql);

                if($result->num_rows > 0)
                {
                   while ($row = $result-> fetch_assoc()){
                       echo "<tr><td>" . $row["transactionID"] . "</td><td>" . $row["Payment_Method"] . "</td><td>" . $row["Type_of_Payment"] . "</td><td>" . $row["Amount_to_Pay"] . "</td><td>" . $row["Amount_of_Pay"] . "</td><td>" . $row["Room_Number"] . "</td><td>" . $row["Period"] . "</td></tr>";
                   }
                }
            ?>

            </table>
        </div>
        </div>

        <div class="sidebar2" id="sidebar2">
        <i class="fa fa-fw fa-bars" onclick="closesidebar()"></i>
        <h1><j class="fa fa-fw fa-gears" class="gear"></j>Settings</h1>
        <hr>
        <h4><a href ="rules.php"><j class="fa fa-fw fa-book"></j>Rules and Policy</a></h4>
        <hr>
        <h4><a href="1.php"><j class="fa fa-fw fa-share"></j>Signout</a></h4>
        <hr>
        </div>

        
        
    </section>
    
    <footer>
        <div class="footer">
            <h1 Class="footerName">RIVERA'S DORMITORY</h1>
        </div>
    </footer> 

    <script>

    let sidebar = document.getElementById("sidebar2");
    
    function opensidebar(){
          sidebar.classList.add("open-sidebar")
       }

    function closesidebar(){
            sidebar.classList.remove("open-sidebar")
         }


  </script>

</body>
</html>