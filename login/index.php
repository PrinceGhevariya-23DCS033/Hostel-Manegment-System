<?php include("connection.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youth Hostel Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div id="logo"></div>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="loginpage.php">Login </a></li>
                <li><a href="buy-software.html">Buy Software</a></li>
                <li><a href="free-trial.php">Free Trial</a></li>
                <li><a href="pricing.html">Pricing</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>
    </header>
    <div class="right">
        <div class="logo-block"></div>
        <div class="info">



            <div>
                <h1>Welcome</h1>
            </div>

            <p id="welcometext">“Hello and welcome to YHM Hostel! As part of our commitment to providing a seamless
                experience, our management system allows you to manage room allocations, track attendance, and access
                important information. If you have any questions, don’t hesitate to ask—we’re here to help!”</p>

        </div>
    </div>
    <div id="div3" class="scroll-animate">Why Yuva Hostel System?</div>
    <div id="main" class="scroll-animate">
        <div id="tex" class="scroll-animate-fade-in-left">
            <p id="feh">Powerful Reservation Management</p>
            
 
            <ul id="ll">
              <li class="fe"> Easy and Intuitive booking view</li>
            <li  class="fe">  Up-to-date availability on portals</li>
            <li class="fe"> User-friendly interface</li>
            <li class="fe"> Student  details on the fingertips</li>
               <li class="fe"> Easy  reservation editing</li>
               </ul>
        </div>
        <div id="img" class="scroll-animate-fade-in-right"></div>
    </div>
    

    
    <div id="main1" class="scroll-animate">
        <div id="img1" class="scroll-animate-fade-in-left"></div>
        <div id="tex1" class="scroll-animate-fade-in-right">
            <p id="feh1">Synchronized between Computers</p>
            
 
            <ul id="ll">
              <li class="fe1"> Advanced real-time data synchronization</li>
            <li  class="fe1"> Many users can work in use HostelSystem simultaneously on multiple computers</li>
            <li class="fe1"> Easy for Student And Manegment</li>
            
               </ul>
        </div>
       
    </div>


    <div id="main" class="scroll-animate">
        <div id="tex2" class="scroll-animate-fade-in-left">
            <p id="feh2">Reception & Cash Box Administration</p>
            
 
            <ul id="ll">
              <li class="fe2">Easily keep track of all the reception actions</li>
            <li  class="fe2"> Control the cash flow of your hostel</li>
            <li class="fe2"> Keep an eye on the income and expenses</li>
           
               
               </ul>
        </div>
        <div id="img2" class="scroll-animate-fade-in-right"></div>
    </div>


    <div id="main3" class="scroll-animate">
        <div id="img3" class="scroll-animate-fade-in-left"></div>
        <div id="tex3" class="scroll-animate-fade-in-right">
            <p id="feh3">Accounts, Statistics & Reports</p>
            
 
            <ul id="ll">
              <li class="fe3"> Unlimited accounts for multiple currencies</li>
            <li  class="fe3"> Income and expense categories</li>
            <li class="fe3"> Upcoming payments list for future bills and deliveries</li>
            <li class="fe3">Future income projections</li>
            
               </ul>
        </div>
       
    </div> 
    <div id="main4">
        <br>
        <br>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };
        
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in-up');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
        
            document.querySelectorAll('.scroll-animate').forEach(element => {
                observer.observe(element);
            });
        });
        </script>
    
    <footer></footer>

    
    <link rel="stylesheet" href="index.css">
</body>

</html>
