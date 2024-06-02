<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Content</title>
    <link rel="stylesheet" href="3.css">
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
                <li><a href="3.php"><i class="fa fa-fw fa-home"></i>Transaction</a></li>
                <li><a href="bills.php"><i class="fa fa-fw fa-user"></i>Bills</a></li>
                <li><a href="admincomplaint.php"><i class="fa fa-fw fa-wrench"></i>Complaints</a></li>
                <li class="liPeople"><a href="adminannounce.php"><i class="fa fa-fw fa-envelope"></i>Announcements</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Transaction</h1>
            <form method="post" action="311.php">
            <label for="paymentmethod">Payment Method: </label>
            <select name="paymentmethod" id="paymentmethod">
                 <option value="Cash">Cash</option>
                 <option value="Gcash">Gcash</option>
                 <option value="Paymaya">Paymaya</option>
            </select><br><br>

            <label>Type of Payment: </label>
            <select name="typepayment" id="typepayment">
                 <option value="Electric">Electric Bill</option>
                 <option value="Water">Water Bill</option>
                 <option value="Rent">House Rent</option>
            </select><br><br>

            <label>Amount to Pay: </label>
            <input type="text" name="amounttopay" id="amounttopay"><br><br>

            <label>Amount of Pay: </label>
            <input type="text" name="amountofpay" id="amountofpay"><br><br>

            <label>Room Number: </label>
            <select name="roomnum" id="roomnum">
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                 <option value="6">6</option>
            </select><br><br>

            <label>From What Period: </label>
            <input type="text" name="period" id="period"><br>

            <input type="submit" name="submit" id="submit">

            
            <form>
        </div>



        <div class="sidebar2" id="sidebar2">
        <i class="fa fa-fw fa-bars" onclick="closesidebar()"></i>
        <h1><j class="fa fa-fw fa-gears" class="gear"></j>Settings</h1>
        <hr>
        <h4><a href ="rules.php"><j class="fa fa-fw fa-book" class="gears"></j>Rules and Policy<a></h4>
        <hr>
        <h4><a href ="1.php"><j class="fa fa-fw fa-share"></j>Signout</a></h4>
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