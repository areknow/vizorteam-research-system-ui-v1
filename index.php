<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>OURS - Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="author" content="Arnaud P. Crowther">
        <meta name="description" content="Research Proposal Web Crawler">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link type="text/css" href="css/super-style.css" rel="stylesheet">
        <link type="text/css" href="css/home-style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/jquery.reject.css" type="text/css" />
        <script src="src/jquery-1.11.1.min.js"></script>
        <script src="src/jquery.reject.js"></script>
        <script type="text/javascript">// <![CDATA[
            $(function() {
                $("#submiter").click( function() {
                    if (document.forms[0].elements['username'].value == "" || document.forms[0].elements['password'].value == "") {
                        alert("Please enter a valid email and password combination");
                        return false;
                    }
                    else {
                        //f.submit();
                    }
                });
            });
        // ]]></script>
        <script type="text/javascript">
            $(function() {  
                $.reject({  
                    reject: { msie: 9 },
                    close: false, 
                    paragraph1: 'Please download a compatible browser below', 
                    paragraph2: ' '  
                });  
                return false; 
            }); 
        </script>
    </head>
    <body class="background">
        <div class="gradient-home home-login-window">
            <h2 class="main-title">OU Research System</h2><br>
            <form id="login" action="php/login.php" method="post" >
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
                    <input type="password" name="password" autocomplete="off">
                </div>
                <div class="cont1">
                    <button id="submiter" class="login-buttons" type="submit" name="submit" >Log In</button><button class="login-buttons" type="submit" name="new">New Account</button>
                </div>
            </form>
        </div>
        <div class="login-foot" onclick="location.href='http://vizorteam.com';">
            &copy; 2014 VizorTeam
        </div>
    </body>
</html>