<?PHP

function spacebar($in) {
    $out = str_replace("%20", " ", $in);
    return $out;
}

function replyMail($sender) {
    $to      = $sender;
    $from    = 'OURS Mail System<no-reply@ours.secs.oakland.edu>';
    $subject = 'OU Research System (New Account Request)';
    $message = 'Your new account is ready for use.'."\r\n".'Please login at ours.secs.oakland.edu with your Oakland email and chosen password'."\r\n\r\n".'Thank you.';
    $headers = 'From: ' . $from . "\r\n" .
        'Reply-To: arnaudcrowther@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
}
