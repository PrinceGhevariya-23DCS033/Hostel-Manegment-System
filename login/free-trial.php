<?php include("connection.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Trial - Youth Hostel Management System</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="free-trial.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div id="logo"></div>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="Loginfinal.html">Login</a></li>
                <li><a href="buy-software.html">Buy Software</a></li>
                <li><a href="free-trial.html">Free Trial</a></li>
                <li><a href="pricing.html">Pricing</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        <h1>Free Trial</h1>
        <p>Sign up for a free trial of our Youth Hostel Management System software.</p>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="hostel-name">Hostel Name:</label>
                <input type="text" id="hostel-name" name="hostel-name" required>
            </div>
            <div class="form-group">
                <label for="hostel-logo">Hostel Logo:</label>
                <input type="file" id="hostel-logo" name="hostel-logo" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="contact-number">Contact Number:</label>
                <input type="tel" id="contact-number" name="contact-number" required>
            </div>
            <div class="form-group">
                <label for="email-id">Email ID:</label>
                <input type="email" id="email-id" name="email-id" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <footer></footer>
</body>

</html>

<?php
if (isset($_POST['sub'])) {

    $hostelName = $_POST['hostel-name'];
    $contactNumber = $_POST['contact-number'];
    
    $hostellogo=$_FILES['hostel-logo']['name'];
    $emailId = $_POST['email-id'];

    $sql = "INSERT INTO freetial VALUES ('$hostelName','$hostellogo' '$contactNumber', '$emailId')";
    $deta=mysqli_query($conn,$sql);
    if($deta){
        echo "Data inserted";
    }else{
        echo "data not";
    }

}


?>