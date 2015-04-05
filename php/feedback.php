<?PHP

if(isset($_POST['submit-feed'])) {
    
    include 'con.php';
    include 'functions.php';
    
    $message = mysql_real_escape_string($_POST['FEEDBACK']);
    $id = mysql_real_escape_string($_POST['IDX']);

    
    $sql = "SELECT `username` from `users` where `id` =".$id;
    $id_result_array = mysql_fetch_array($id_result = mysql_query($sql));
    $username = $id_result_array['username'];
    
    
    $sql2 = "INSERT INTO `feedback`(`id`, `user`, `message`) VALUES (NULL, '$username','$message');";
    if (!mysql_query($sql2, $db)) {
        die('Error: ' . mysql_error());
    }
    
    $to      = 'arnaudcrowther@gmail.com,alobaidizt@gmail.com,mrgrant@oakland.edu,gwrogers@oakland.edu';
    $from    = 'OURS Mail System<no-reply@ours.secs.oakland.edu>';
    $subject = 'OU Research System (Feedback Form)';
    $message = "New feedback from $username". "\r\n" ."Message: $message";
    $headers = 'From: ' . $from . "\r\n" .
        'Reply-To: arnaudcrowther@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
    
    header("Location: profile.php");
    exit;
}
