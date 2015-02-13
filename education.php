<?php
SESSION_start();
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

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
    if(isset($_POST['prereq1'])) {
        $prereq1 = $_POST['prereq1'];
    } else {
       $prereq1="";
    }
    
    if(isset($_POST['prereq2'])) {
        $prereq2 = $_POST['prereq2'];
    } else {
        $prereq2 = "";
    }
     if(isset($_POST['prereq3'])) {
        $prereq3 = $_POST['prereq3'];
    } else {
        $prereq3 = "";
    }
     if(isset($_POST['prereq4'])) {
        $prereq4 = $_POST['prereq4'];
    } else {
        $prereq4 = "";
    }
     if(isset($_POST['prereq5'])) {
        $prereq5 = $_POST['prereq5'];
    } else {
        $prereq5 = "";
    }
    if(!empty($_POST['notes'])) {
        $notes = $_POST['notes'];
    } else {
        $notes = "";
    }

if($isValid == false) {
        return;
 }
}


?>
<!DOCTYPE html>
<html>
<?php
//store posted variables for sdpre or netpre
$_SESSION['prereq1'] = $_POST['prereq1'];
$_SESSION['prereq2'] = $_POST['prereq2'];
$_SESSION['prereq3'] = $_POST['prereq3'];
$_SESSION['prereq4'] = $_POST['prereq4'];
$_SESSION['prereq5'] = $_POST['prereq5'];
$_SESSION['notes'] = $_POST['notes'];
?>
<head>
<title>Software Development</title>
</head>

<body>


Select highest degree achieved:
<!-- Reserve for future POST method -->
    <form name="degree" action="email2.php" method="POST">
        <select name="degree">
        <option value="HS">Highschool Diploma or GED</option>
        <option value="AS">Associates degree (AA, AS, AAS, AAS-T)</option>
        <option value="BA">Bachelors degree</option>
        <option value="MA">Masters degree</option>
        <option value="PhD">Ph.D.</option>
        </select>
        <br>
    
    How many college credits have you earned?:
    <input type="text" name="credits" value=" ">
    
    <p>Upload unofficial transcripts from any college other than Green River.</p>
        <button type="button">Upload</button> <br> <br>
        <input type="checkbox" id="myCheck" name="check" required> I verify that the information submitted here is accurate and complete. <br>
    <a href="netpre.php">
        <button>Previous</button>
    </a> <br>
    <center><input type="submit" id="submit" a href="email2.php" value="FINISH"></center>
    </form>
    </body>
    </html>