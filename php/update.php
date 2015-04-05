<?PHP
if(isset($_POST['save-edit'])) {
    
    include 'con.php';

    $new_first = mysql_real_escape_string($_POST['FNAME']);
    $new_last = mysql_real_escape_string($_POST['LNAME']);
    $new_email = mysql_real_escape_string($_POST['EMAIL']);
    $new_pass = mysql_real_escape_string($_POST['PASS2']);
    $new_tele = mysql_real_escape_string($_POST['TELE']);
    $idx = mysql_real_escape_string($_POST['IDX']);

    $result = mysql_query("SELECT * FROM `users` WHERE `id` = '$idx' ");
    $row = mysql_fetch_array($result);
    $old_pass = $row['password'];
    $updater = 0;
    
    if ($new_pass == '') {
        $sec = $old_pass;
    }
    else {
        $sec = hash('sha256', $new_pass);
        $updater = 1;
    }

    $sql="UPDATE `users` SET 
    `first_name` = '$new_first',
    `last_name` = '$new_last',
    `username` = '$new_email',
    `password` = '$sec',
    `telephone` = '$new_tele'
    WHERE `id` = '$idx' ";

    if (!mysql_query($sql, $db)) {
        die('Error: ' . mysql_error());
    }
    

    if ($updater == 1) {
        header("Location: ../index.php");
        exit;
    }
    else {
        header("Location: profile.php");
        exit;
    }
}

if(isset($_POST['save-res'])) {
    
    include 'con.php';

    $new_department = mysql_real_escape_string($_POST['DEPT']);
    $new_specialty = mysql_real_escape_string($_POST['SPEC']);
    $new_keywords = mysql_real_escape_string($_POST['KEYW']);
    $new_urls = mysql_real_escape_string($_POST['URLS']);
    $idx = mysql_real_escape_string($_POST['IDX']);

    $sql="UPDATE `users` SET 
    `department` = '$new_department',
    `specialty` = '$new_specialty',
    `keywords` = '$new_keywords',
    `urls` = '$new_urls'
    WHERE `id` = '$idx' ";

    if (!mysql_query($sql, $db)) {
        die('Error: ' . mysql_error());
    }
    
    header("Location: profile.php");
    exit;
}

if(isset($_POST['save-cont'])) {
    
    include 'con.php';
    
    $checked_email = ($_POST['EMAILCHK']);
    $checked_text = ($_POST['TEXTCHK']);
    $checked_rem = ($_POST['REMCHK']);
    $idx = mysql_real_escape_string($_POST['IDX']);
    
    if (isset($checked_email)) {
        $checked_email = 1;
    }
    if (isset($checked_text)) {
        $checked_text = 1;
    }
    if (isset($checked_rem)) {
        $checked_rem = 1;
    }
    
    $sql="UPDATE `users` SET 
    `chk-email` = '$checked_email',
    `chk-text` = '$checked_text',
    `chk-rem` = '$checked_rem'
    WHERE `id` = '$idx' ";

    if (!mysql_query($sql, $db)) {
        die('Error: ' . mysql_error());
    }
    
    header("Location: profile.php");
    exit;
}

if(isset($_POST['cancel'])) {
    header("Location: profile.php");
    exit;
}

if(isset($_POST['save-admn-status'])) {
    
    include 'con.php';
    
    $sel = ($_POST['selecter']);
    
    if($sel==0) {
        $io = 0;
    }
    elseif($sel==1) {
        $io = 1;
    }
    elseif($sel==2) {
        $io = 2;
    }
    elseif($sel==3) {
        $io = 3;
    }
    
    $sql="UPDATE `status` SET 
    `io` = '$io' ";

    if (!mysql_query($sql, $db)) {
        die('Error: ' . mysql_error());
    }
    
    header("Location: profile.php");
    exit;
}

if(isset($_POST['save-admn-delete'])) {
    
    include 'con.php';
    
    $usr = $_POST['id_list'];

    if ($usr =='None') {
        header("Location: profile.php");
        exit;
    }
    elseif ($usr =='2') {
        echo 'Deleting the Administrator account is against protocol. Choose another user.';
    }
    else {
        $sql1 = "DELETE FROM `users` WHERE `id` = '$usr' ";
        $sql2 = "DROP TABLE `id$usr` ";
            
        if (!mysql_query($sql1, $db)) {
            die('Error: ' . mysql_error());
        }
        if (!mysql_query($sql2, $db)) {
            die('Error: ' . mysql_error());
        }
        header("Location: profile.php");
        exit;
    }
}

if(isset($_POST['save-admn-counter'])) {
    
    include 'con.php';
    
    $usr = $_POST['id_list2'];

    if ($usr =='None') {
        header("Location: profile.php");
        exit;
    }
    else {
        $sql = "UPDATE `id$usr` SET `down` = '0';";
            
        if (!mysql_query($sql, $db)) {
            die('Error: ' . mysql_error());
        }
        header("Location: profile.php");
        exit;
    }
}
