<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>OURS - New Account</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="author" content="Arnaud P. Crowther">
        <meta name="description" content="Research Proposal Web Crawler">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link type="text/css" href="../css/super-style.css" rel="stylesheet">
        <link type="text/css" href="../css/home-style.css" rel="stylesheet">
        <script src="../src/jquery-1.11.1.min.js"></script>
        <script src="../src/validation.js"></script>
        <script type="text/javascript">// <![CDATA[
            $(function() {
                $("#submiter").click( function() {
                    var email = document.forms[0].elements['username'].value;
                    if (email.indexOf('@oakland.edu', email.length - '@oakland.edu'.length) !== -1) {
                    } 
                    else {
                        return false;
                    }
                });
            });
        // ]]></script>
    </head>
    <body class="background">
        <div class="home-login-window new-login gradient-home">
            <h2 class="main-title">New Account</h2><br>
            <form id="login" action="newaccount.php" method="post">
                <div class="cont1 label">
                    First Name
                </div>
                <div class="cont1">
                    <input type="text" name="first" autocomplete="off">
                </div>
                <div class="cont1 label">
                    Last Name
                </div>
                <div class="cont1">
                    <input type="text" name="last" autocomplete="off">
                </div>
                <div class="cont1 label">
                    Email
                </div>
                <div class="cont1">
                    <input type="text" name="username" autocomplete="off">
                </div>
                <div class="cont1 label">
                    Password
                </div>
                <div class="cont1">
                    <input type="password" name="password" autocomplete="off" id="myPasswordField">
                </div>
                <div class="cont1 label">
                    Confirm Password
                </div>
                <div class="cont1">
                    <input type="password" name="password2" autocomplete="off" id="f19">
                    <script type="text/javascript">
                        var f19 = new LiveValidation('f19');
                        f19.add(Validate.Confirmation, { match: 'myPasswordField'} );
                </script> 
                </div>
                <div class="cont1">
                    <button id="submiter" class="login-buttons" type="submit" name="create">Create</button><button class="login-buttons" type="submit" name="cancel">Cancel</button>
                </div>
            </form>
        </div>
        <div class="login-foot" onclick="location.href='http://vizorteam.com';">
            &copy; 2014 VizorTeam
        </div>
    </body>
</html>