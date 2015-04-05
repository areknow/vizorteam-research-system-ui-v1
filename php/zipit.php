<?php

include 'con.php';


$idx = mysql_real_escape_string($_POST['IDX']);


$sql = "UPDATE `id$idx` SET `down` = '1';";
if (!mysql_query($sql, $db)) {
    die('Error: ' . mysql_error());
}

if (file_exists('../res/docs/id'.$idx)) {
    ignore_user_abort(true);
    require_once('pclzip.lib.php');
        $archive_name = 'proposals.zip';
        $archive = new PclZip($archive_name);
        $v_list = $archive->create('../res/docs/id'.$idx, PCLZIP_OPT_REMOVE_ALL_PATH);
    if ($v_list == 0) {
        die("Error : ".$archive->errorInfo(true));
    }
    $theZip='proposals.zip';
    header("Content-Type: application/zip");
    header("Content-Disposition: attachment; filename=".basename($theZip));
    header("Content-Length: ".filesize($theZip));
    ob_clean();
    flush();
    readfile($theZip);
    unlink($theZip);
    exit;
} else {
    header("Location: profile.php");
    exit;
}
