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


<!--this is a jumbotron and will hold each pages content-->
<div id="main-div">
    <p>Thank you for your interest in Green River College's BAS programs! An advisor will be contacting you soon.</p>
</div>
<a href="?page=email2">NEXT</a>
</body>
</html>