<?php
SESSION_start();
//ini_set('display_errors', 1);
  //  error_reporting(E_ALL);

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
    if(!empty($_POST['studentYesNo'])) {
        $studentYesNo = $_POST['studentYesNo'];
    } else {
        print "<p>Please go back and select if you are a student or not.</p>";
        $isValid = false;
    }
    if(!empty($_POST['SID'])) {
        $SID = $_POST['SID'];
    } else {
        $SID = "na";
    }
    if(isset($_POST['statvet'])) {
        $statvet = $_POST['statvet'];
    } else {
        $statvet = "na";
    }
     if(isset($_POST['statint'])) {
        $statint = $_POST['statint'];
    } else {
        $statint = "na";
    }
     if(isset($_POST['statrs'])) {
        $statrs = $_POST['statrs'];
    } else {
        $statrs = "na";
    }
    

if($isValid == false) {
        return;
 }
}

?>

<!DOCTYPE html>
<html>
<?php
//store posted variables from tellusmore.php
$_SESSION['studentYesNo'] = $_POST['studentYesNo'];
$_SESSION['SID'] = $_POST['SID'];
$_SESSION['statvet'] = $_POST['statvet'];
$_SESSION['statint'] = $_POST['statint'];
$_SESSION['statrs'] = $_POST['statrs'];
?>

<head>
<title>Networking</title>
</head>

<body>
<div class="container">
    <div id="center">
            <h2>Networking Prerequisities</h2><br>
            <h3>Please check all that you have completed.</h3>
            <p>NOTE: If you don"t have all of the prerequisites, or have extensive industry experience, an advisor will contact
            you to discuss options</p>
        <form method="post" action="education.php" >
            <input type="checkbox" id="class" name="prereq1" value="210">IT 210 or CCENT<br/>
            <input type="checkbox" id="class" name="prereq2" value="160">IT 160 or MTA<br/>
            <input type="checkbox" id="class" name="prereq3" value="190">IT 190 or LPI1 or Linux Essentials<br/>
            <input type="checkbox" id="class" name="prereq4" value="102">IT 102 or a Programming Course<br/><br/>
            <input type="checkbox" id="class" name="prereq5" value="240">IT 240 or 70-411 Microsoft MCP<br/><br/>
        Comments:
            <label for="notes">Notes:</label><br/>
        <textarea rows="15" cols="50" name="notes">
        </textarea>
        
        <input type="submit" name="submit" value="Continue">
        </form>
    </div>
</div>
</body>
</html>