<?php
SESSION_start();
    echo $_SESSION['fname'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    echo $fname . " " . $lname;

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
    if(isset($_POST['degree'])) {
        $degree = $_POST['degree'];
    } else {
       print "<p>Please go back and choose your highest level of education</p>";
       $isValid = false;
    }
    
    if(!empty($_POST['credits'])) {
        $credits =clean($_POST['credits']);
    } else {
        $credits = "";
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
$_SESSION['degree'] = $_POST['degree'];
$_SESSION['credits'] = $_POST['credits'];

?>
<head>
<title>Email</title>
</head>

<body>
<h1><center>EMAIL CONFIRMATION</center></h1>
<div>
<p>
    
    Hi <?php echo $fname . " " . $lname; ?><br>
    Thank you for your application to Green River's BAS program.
    An advisor will contact you within 2 business days. <br>
    
    In the meantime, please visit check us out on…<br>
    [Social networking icons]
    
    <img src="Pictures/fb.png" alt="fb" style="width:304px;height:228px"><br>
</p>

<p>
<b>New students only:</b><br>

Please continue for information on next steps.<br>


Include a blurb about financial aid and scholarships.<br>

<center>
    <a href="steps.php">
    <button type="button"> Next Steps
    </button>
</center>
</p>
</div>

