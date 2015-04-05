<?php

if(isset($_POST['create'])) {
    
    include 'con.php';
    include 'functions.php';
    
    $first = mysql_real_escape_string($_POST['first']);
    $last = mysql_real_escape_string($_POST['last']);
    $usr = mysql_real_escape_string($_POST['username']);
    $pas = mysql_real_escape_string($_POST['password']);
    
    $sec = hash('sha256', $pas);
    
    $sql="INSERT INTO `users` 
    (`id`, `username`, `password`, `first_name`, `last_name`, `telephone`, `department`, `specialty`, `keywords`, `urls`, `chk-email`, `chk-text`, `chk-rem`, `admin`, `first`) 
    VALUES 
    (NULL, '$usr', '$sec', '$first', '$last', '', 'Computer Science and Engineering', '', '', '', '1', '0', '0', '0', '0')";
    

    if (!mysql_query($sql,$db)) {
        die('Error: ' . mysql_error());
    }
    
    //replyMail($usr);
    
    header("Location: ../index.php");
    exit;
}

if(isset($_POST['cancel'])) {
    
    header("Location: ../index.php");
    exit;
}
