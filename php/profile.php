<?PHP
/*
*   - IE9 compatible
*   - tile bg
*   - ajax page loader
*/
include 'functions.php';
include 'con.php';

session_start(); 
if(!$_SESSION['logged']) { 
    header("Location: index.php"); 
    exit;
} 
$sesid = $_SESSION['id'];
$result = mysql_query("SELECT * FROM `users` WHERE `id` = '$sesid' ");
$row = mysql_fetch_array($result);
$kw_string = $row['keywords'];
$statrow = mysql_fetch_array(mysql_query("SELECT `io` FROM `status`"));
$io = $statrow['io'];
$title_result = mysql_query("SELECT * FROM `id$sesid`");
$title_result_new = mysql_query("SELECT * FROM `id$sesid` WHERE `down` = '0'");
$fn = $row['first_name'];
$ln = $row['last_name'];
$adm = $row['admin'];
$frst = $row['first'];
$eml = $row['username'];
$pw = $row['password'];
$tl = $row['telephone'];
$dp = $row['department'];
$sp = $row['specialty'];
$kw = $row['keywords'];
$ur = $row['urls'];
$cm_em = $row['chk-email'];
$cm_tx = $row['chk-text'];
$cm_rm = $row['chk-rem'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>OURS - Home</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="author" content="Arnaud P. Crowther">
        <meta name="description" content="Research Proposal Web Crawler">
        <link href="../css/jquery-ui-1.9.1.min.css" type="text/css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href="../css/profile-style.css" type="text/css" rel="stylesheet">
        <link href="../css/super-style.css" type="text/css" rel="stylesheet">
        <link href="../css/tabs.css" type="text/css" rel="stylesheet">
        <link href="../css/tagit.css" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="../src/validation.js"></script>
        <script src="../src/jquery-ui-1.9.1.min.js"></script>
        <script type="text/javascript" src="../src/livesearch.js"></script>
        <script src="../src/jquery.awesomeCloud-0.2.min.js"></script>
        <script src="../src/tagit.js" type="text/javascript" charset="utf-8"></script>
    </head>
    <body class="background-flat">
        <?PHP 
        if($frst==0) {
            include 'first.php'; 
        }
        ?>
        <div class="container">
            <div class="nav gradient-top">
                <div class="left">
                    <div class="tile title" onclick="location.href='profile.php';">OU Research System<span class="beta">beta</span></div>
                </div>
                <div class="right">
                    <div class="tile hover" onclick="location.href='profile.php';">HOME</div>
                    <div class="tile hover" onclick="location.href='logout.php';">LOGOUT</div>
                </div>
            </div>
            <div id="tabs">
                <ul class="gradient-panel">
                    <li><a href="#a">Dashboard</a></li>
                    <li><a href="#b">Edit Profile</a></li>
                    <li><a href="#c">Research</a></li>
                    <li><a href="#d">Agencies</a></li>
                    <li><a href="#e">Proposals</a></li>
<!--                    <li><a href="#f">Search</a></li>-->
                    <li><a href="#g">Contact</a></li>
                    <li><a href="#h">Help</a></li>
                    <?PHP if($adm==1) echo '<li><a href="#i">Administration</a></li>'; ?>
                </ul>
                <div id="a">
                    <?PHP include 'dashboard.php'; ?>
                </div>
                <div id="b">
                    <?PHP include 'edit.php'; ?>
                </div>
                <div id="c">
                    <?PHP include 'research.php'; ?>
                </div>
                <div id="d">
                    <?PHP include 'agencies.php'; ?>
                </div>
                <div id="e">
                    <?PHP include 'proposals.php'; ?>
                </div>
<!--
                <div id="f">
                    <?PHP //include 'search.php'; ?>
                </div>
-->
                <div id="g">
                    <?PHP include 'contact.php'; ?>
                </div>
                <div id="h">
                    <?PHP include 'help.php'; ?>
                </div>
                <?PHP if($adm==1) echo '<div id="i">'; ?>
                    <?PHP if($adm==1) include 'admin.php'; ?>
                <?PHP if($adm==1) echo '</div>'; ?>
            </div>
            <div class="footer" onclick="location.href='http://vizorteam.com';">
                &copy; 2014 VizorTeam
            </div>
        </div>
    </body>
    <!-- download -->
    <script src="../src/download.js" type="text/javascript"></script>
    <!-- cloud -->
    <script src="../src/acloud-init.js" type="text/javascript"></script>
    <!-- add button -->
    <script src="../src/add-btn.js" type="text/javascript"></script>
    <!-- accordian -->
    <script src="../src/accordian.js" type="text/javascript"></script>
    <!-- tagit -->
    <script src="../src/tagit-init.js" type="text/javascript"></script>
</html>