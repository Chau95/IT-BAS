<?php

    SESSION_start();
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    


print "<pre>";
print_r($_POST);
print "</pre>";
?>



<?php



function clean($text) {
            $text = trim($text);
            $text = strip_tags($text); //Remove any HTML tags from input
            return $text;
        }

//see if form has been submitted
if(isset($_POST['submit'])) {
    $isValid = true;
    //first name
    if(!empty($_POST['fname'])) {
        $fname = clean($_POST['fname']);
    } else {
        print "<p>Please go back and enter a first name.</p>";
        $isValid = false;
    }
    //last name
    if(!empty($_POST['lname'])) {
        $lname = clean($_POST['lname']);
    } else {
        print "<p>Please go back and enter a last name.</p>";
        $isValid = flase;
    }
    //degree selected
    if(isset($_POST['degreebtn'])) {
        $degreebtn = clean($_POST['degreebtn']);
    } else {
        print "<p>Please go back and select a degree option.</p>";
        $isValid = false;
    }
    //email
    if(!empty($_POST['mail'])) {
        $email = clean($_POST['mail']);
    } else {
        print "<p>Please go back and enter a valid email address.</p>";
        $isValid = false;
    }
    //phone
    if(!empty($_POST['phone'])) {
        $phone = clean($_POST['phone']);
    } else {
        $phone = "";
    }

if($isValid == false) {
    return;
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Tell Us More</title>
<style>
 #hideSID{
            display: none;
        }

</style>
</head>

<body>
<?php


//store posted variables from contact.php
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['degreebtn'] = $_POST['degreebtn'];
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['phone'] = $_POST['phone'];

?>

    <!--this will contain due dates and other important information-->

    <div id="due-dates-field">

        

    </div>

    

    <!--this is a jumbotron and will hold each pages content-->

    <div id="main-div">
    <!DOCTYPE html>

        <form method="post" action="<?php echo $_POST['degreebtn'];?>.php" id="studentForm" onsubmit="checkSID();">

            <fieldset>

                <legend>Please Select One:</legend>

                <label><input type="radio" name="studentYesNo" value ="yes" id="YesStu" required>I am currently a student at Greenriver<br></label>

                    <div id="hideSID">

                        <label>Student ID (xxxxxxxxx):<input type="text" pattern="^\d{3}\d{3}\d{3}$" name="SID" id="SID"></label><br>

                    </div>

                <label><input type="radio" name="studentYesNo" value ="no" id="NoStu"required>I am a new stuent.</label>

            </fieldset>

            <fieldset>

                <legend>I am a (please check all that apply):</legend>

                <label><input type="checkbox" name="statvet" value="veteran">Veteran<br></label>

                <label><input type="checkbox" name="statint" value="international">International Student<br></label>

                <label><input type="checkbox" name="statrs" value="runningStart">Running Start Student</label>

            </fieldset>



            <input type="submit" id="submit" value="Continue">

        </form>

    

    </div>

    

    <script>

        var IDnum = document.getElementById("hideSID");

        var StuYes = document.getElementById("YesStu");

        var StuNo = document.getElementById("NoStu");

        StuYes.onclick = toggleDisplayOn;

        StuNo.onclick = toggleDisplayOff;

        //var SIDcheck = document.getElementById("submit");

        //SIDcheck.onclick = checkSID;

        

        function toggleDisplayOn(){

            IDnum.style.display = "block";

        }

        function toggleDisplayOff(){

            IDnum.style.display = "none";

        }

        //function checkSID(){

          /*  var SIDvalid = document.getElementById("SID").value;

            if (SIDvalid.length == 9) {

                return true;

            }

            alert("A student ID number should be 9 numbers long.");

            return false;*/
        
    </script>
    </body>
</html>