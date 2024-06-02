<!DOCTYPE html>
<html>
    <head>
        <title>Dormitory Management System</title>
        <link rel="stylesheet" href="1.css">
    </head>
    <body>
        <section>
            <div class="dormNames">
            <br>
            <h1 class = "dormName">Rivera's Dormitory</h1>
            </div>
            <div class="form1">
            <form class ="loginForm" method="POST" action="login.php">
                <fieldset class="fieldset1">
                    <label class="labeluser" for="Username">Email</label><br>
                    <input class = "username1" type="text" name = "Email" value = ""><br>
                    <label class="labelpass" for="Password">Password</label><br>
                    <input class = "password1" type="text" name = "Password" value = "">
                    <input class="loginButton" type="submit" name = "Login" value = "Login"><br>
                    <a href="index.php"><input class="loginButton" type="button"  name = "Login" value = "Home Page"></a><br>
        
                </fieldset>
            </form>
            </div>
        </section>
    </body>
</html>