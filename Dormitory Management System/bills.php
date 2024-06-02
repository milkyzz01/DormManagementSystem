<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Content</title>
    <link rel="stylesheet" href="bills.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="header">
        <ul class="ul">
            <li class="li">Dormitory Management System</li>
            <li class="lo">Admin  <i class="fa fa-fw fa-bars" onclick="opensidebar()"></i></li>
        </ul>
    </header>
    <section class="maincontent">
        <div class="panel">
            <ul>
                <li><a href="3.php"><i class="fa fa-fw fa-home"></i>Available Rooms</a></li>
                <li><a href="bills.php"><i class="fa fa-fw fa-user"></i>Bills</a></li>
                <li><a href="admincomplaint.php"><i class="fa fa-fw fa-wrench"></i>Complaints</a></li>
                <li class="liPeople"><a href="adminannounce.php"><i class="fa fa-fw fa-envelope"></i>Announcements</a></li>
                
            </ul>
        </div>
        <div class="upcomingbills">
            <br>
            <input type="button" onclick="openpopup()" id="buttonaddbills"  value="Add Bill">
            <input type="button" onclick="openpopup2()" id="buttonchangebills"  value="Change Bill">
            <br>
            <table id="tablebills">
                <tr>
                    <th>Bill ID</th>
                    <th>Room Number</th>
                    <th>Electric</th>
                    <th>Water</th>
                    <th>Rent</th>
                    <th>Due Date</th>
                    <th>Status</th>
                </tr>
                <?php
                $serverName = "localhost";
                $userName = "root";
                $password = "";
                $databaseName = "dormitorydb";
                $conn = mysqli_connect($serverName,$userName,$password,$databaseName);
                $sql = "select * from bills_tbl;";
                $result = $conn-> query($sql);

                if($result->num_rows > 0)
                {
                   while ($row = $result-> fetch_assoc()){
                       echo "<tr><td>" . $row["Bill_id"] . "</td><td>" . $row["Room_Number"] . "</td><td>" . $row["Electric"] . "</td><td>" . $row["Water"] . "</td><td>" . $row["Rent"] . "</td><td>" . $row["Due_Date"] . "</td><td>" . $row["Status"] . "</td></tr>";
                   }
                }
            ?>

            </table>
            <div class="popup" id="popup">
                <div class="closebtn" onclick="cancelpop()">&times;</div>
                <h1>Add Bills</h1>
                <br>
                <form method="POST" action="billadd.php">
                    <label for="addroomNum">Room Number: </label>
                    <input type="text" id="addroomNum" name="addroomNum"><br>
                    <label for="addtypeBills">Electric: </label>
                    <input type="text" id="addtypeBills" name="addtypeBills"><br>
                    <label for="addamount">Water: </label>
                    <input type="text" id="addamount" name="addamount"><br><br>
                    <label for="addamount">Rent: </label>
                    <input type="text" id="rent" name="rent"><br>
                    <label for="addDue">Due Date: </label>
                    <input type="text" id="addDue" name="addDue"><br>
                    <label for="addstatus">Status: </label>
                    <input type="text" id="addstatus" name="addstatus">
                    <input type="submit" value="Add Bill" class="addbtns">
                    <input type="button" onclick="cancelpop()" value="Cancel" class="cancelbtns">
                </form>
            </div>

            <div class="popup2" id="popup2">
                <div class="closebtn" onclick="cancelpop2()">&times;</div>
                <h1>Change Bills</h1>
                <br>
                <form method="POST" action="billchange.php">
                    <label for="changeroomNum">Bill ID: </label>
                    <input type="text" id="addroomNum" name="billID"><br><br>
                    <label for="changeroomNum">Room Number: </label>
                    <input type="text" id="addroomNum" name="changeroomNum"><br>
                    <label for="changetypeBills">Electric: </label>
                    <input type="text" id="addtypeBills" name="changetypeBills"><br>
                    <label for="changeamount">Water: </label>
                    <input type="text" id="addamount" name="changeamount"><br><br>
                    <label for="changeamount">Rent: </label>
                    <input type="text" id="rent" name="rent"><br>
                    <label for="changeDue">Due Date: </label>
                    <input type="text" id="addDue" name="changeDue"><br>
                    <label for="changestatus">Status: </label>
                    <input type="text" id="addstatus" name="changestatus"><br>
                    <input type="submit" value="Change Bill" class="addbtns"><br>
                    <input type="button" onclick="cancelpop2()" value="Cancel" class="cancelbtns">
                </form>
            </div>

            

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
         let popup2 = document.getElementById("popup2");
         let popup3 = document.getElementById("popup3");
         
         function openpopup(){
            popup.classList.add("open-popup")
         }
         function cancelpop(){
            popup.classList.remove("open-popup")
         }

         function openpopup2(){
            popup2.classList.add("open-popup")
         }

         function cancelpop2(){
            popup2.classList.remove("open-popup")
         }

         function openpopup3(){
            popup3.classList.add("open-popup")
         }

         function cancelpop3(){
            popup3.classList.remove("open-popup")
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