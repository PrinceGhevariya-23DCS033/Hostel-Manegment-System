
<?php include("connection.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Loginfinal.css">
</head>
<body>
    <div id="main">
        <form action="#"></form>
        <div id="Login">Login</div>
        <div>  
            <div id="usernametext">
                <label for="UserID">User Name</label>
            </div>
            <div id="user">
                <input type="text" id="UserID" name="username" placeholder="Enter your username" >
            </div>
        </div>
        <br>
        <div>
            <label for="Password" id="passwordtext">Password</label>
            <input type="password" id="Password" name="password" placeholder="Enter Password">
        </div>
        <br>
        

        <div class="center-h">
            <input type="submit" value="Login">
        </div>
        <div id="createAccount">
            <p>Don't have an account? <a href="#">Create one</a></p>
        </div>
        </form>
    </div>
</body>

</html>
