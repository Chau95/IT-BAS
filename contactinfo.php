<?php
//start session
    SESSION_start();
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html>


<head>
<title>Contact Info Page</title>
</head>

<body>
<div class="header">
<h1>BAS Online Application</h1>


<form method="post" action="tellusmore.php" >
    <div class="left">
        First Name:<br>
        <input type="text" name="fname" placeholder="Enter First Name" required><br><br>
        Last Name:<br>
        <input type="text" name="lname" placeholder="Enter Last Name" required><br><br>
        <div id="content">
            What type of degree are you interested in? <br>
            <input type="radio" name ="degreebtn" value="sdpre">Software Development
               
            <br>
            <input type="radio" name ="degreebtn" value="netpre">Networking
                
            <br>
            <input type="radio" name ="degreebtn" value="undecided">Undecided
               
            
        </div>
    </div>
    
    <div class="right">
    Email:<br/>
    (If Green River Student, please enter student email address):<br>
    <input type="email" name="mail" placeholder="Enter Email" required><br><br>


     Contact Number (xxxxxxxxxx):<br>
    <input type="tel"  pattern="^\d{3}\d{3}\d{4}$" name="phone" placeholder="Enter Number"><br><br>
    </div> 

    
    
    <input type="submit" name="submit" value="Continue">
</form>
</div>



</body>
</html>