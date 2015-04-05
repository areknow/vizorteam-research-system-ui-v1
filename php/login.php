<?php
if(isset($_POST['submit'])) { //submit button
    
    include 'con.php';
    
    //gather post data
    $usr = mysql_real_escape_string($_POST['username']);
    $pas = mysql_real_escape_string($_POST['password']);
    
    $sec = hash('sha256', $pas);
    
    //compare password/user to db
    $sql = mysql_query("SELECT * FROM users  
        WHERE username='$usr' AND 
        password='$sec' LIMIT 1");
    
    //create ID session for logging
    if(mysql_num_rows($sql) == 1) {
        $row = mysql_fetch_array($sql);
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['logged'] = TRUE;
        header("Location: profile.php");
        exit;
    }
    
    else { //invalid credentials
        header("Location: bad.php");
        exit;
    }
}

if(isset($_POST['new'])) { //new button
    header("Location: new.php");
    exit;
}

else {
    header("Location: ../index.php");
    exit;
}
