<?php include("connection.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
</head>
<body>
    <div id="main">
        <form action="#" method="post">
            <div id="Login">Login</div>
            <div>
                <label for="UserID" id="usernametext">User Name</label>
            </div>
            <div id="user">
                <input type="text" id="UserID" name="username" placeholder="Enter your username">
            </div>
            <br>
            <div>
                <label for="Password" id="passwordtext">Password</label>
                <input type="password"  name="password" placeholder="Enter Password" >

            </div>
            <br>
            <div class="center-h">
                <input type="submit" value="Login" name="sub">
            </div>
        </form>
        <div id="createAccount">
            <p>Don't have an account? <a href="#">Create one</a></p>
        </div>
    </div>
    <link rel="stylesheet" href="login.css">
</body>
</html>

<?php
if (isset($_POST['sub'])) {

    $usernam = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO log VALUES ('$usernam', '$password')";
    $deta=mysqli_query($conn,$sql);
    if($deta){
        echo "Data inserted";
    }else{
        echo "data not";
    }

   
    
    
    }

    
    


?>
