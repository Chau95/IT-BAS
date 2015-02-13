<?php

    $username='mcurry';
    $password='Peyton#01';
    
    try{
        $dbh = new PDO('mysql:host=localhost;dbname = mcurry_grcc', $username, $password);
        echo "Success";  
    }
    catch(PDOException $e) {
        die("Error!:" .$e->getMessage());
    }
    ?>