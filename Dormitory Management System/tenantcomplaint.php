<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Content</title>
    <link rel="stylesheet" href="tenantcomplaint.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="header">
        <ul class="ul">
            <li class="li">Dormitory Management System</li>
            <li class="lo">Tenant <i class="fa fa-fw fa-bars" onclick="opensidebar()"></i></li>
        </ul>
    </header>
    <section class="maincontent">
        <div class="panel">
            <ul>
                <li><a href="tenant3.php"><i class="fa fa-fw fa-home"></i>Available Rooms</a></li>
                <li><a href="tenantbill.php"><i class="fa fa-fw fa-user"></i>Bills</a></li>
                <li><a href=""><i class="fa fa-fw fa-wrench"></i>Complaints</a></li>
                <li class="liPeople"><a href="tenantannounce.php"><i class="fa fa-fw fa-envelope"></i>Announcements</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Complaints</h1>
            
            <input type="button" name="addcomplaint" onclick="openpopup()" class="addcomplaint" value="Add Complaint">
           <br>
           <br>
            <table id="tablerooms">
            <tr>
                <th>Room Number</th>
                <th>Complaint</th>
                <th>Status</th>
                <th>Date of Complaint</th>
            </tr>

            <?php
                $serverName = "localhost";
                $userName = "root";
                $password = "";
                $databaseName = "dormitorydb";
                $conn = mysqli_connect($serverName,$userName,$password,$databaseName);
                $sql = "select * from complaint_tbl;";
                $result = $conn-> query($sql);

                if($result->num_rows > 0)
                {
                   while ($row = $result-> fetch_assoc()){
                       echo "<tr><td>" . $row["Room_Number"] . "</td><td>" . $row["Complaint"] . "</td><td>" . $row["Status"] . "</td><td>" . $row["Date_of_Complaint"] . "</td></tr>";
                   }
                }
            ?>

           </table>
           
           <div class="popup" id="popup">
                <div class="closebtn" onclick="cancelpop()">&times;</div>
                <br>
                <br>
                <h1>Add Complaints</h1>
                <br>
                <form method="POST" action="complaintadd.php">
                    <label for="room_Num">Room Number: </label>
                    <input type="text" id="room_Num" name="room_Num"><br>
                    <br>
                    <label for="complaint">Complaint: </label>
                    <input type="text" id="complaint" name="complaint"><br>
                    <br>
                    <label for="status">Status: </label>
                    <input type="text" id="status" name="status"><br>
                    <br>
                    <label for="date">Date of Complaint: </label>
                    <input type="text" id="date" name="date"><br>
                    <br>
                    <br>
                    <br>
                    <input type="submit" value="Add Bill" class="addbtns">
                    <br>
                    <input type="button" onclick="cancelpop()" value="Cancel" class="cancelbtns">
                </form>
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
     let popup = document.getElementById("popup");

     function openpopup(){
            popup.classList.add("open-popup")
         }
    function cancelpop(){
            popup.classList.remove("open-popup")
         }
</script>

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