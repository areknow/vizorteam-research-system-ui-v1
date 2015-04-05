<!DOCTYPE>
<html>
    <head>
        <title>OURS Insert App</title>
        <meta author="Arnaud P. Crowther">
        <style>
            html,body {
                padding:0;margin:0;
                background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.17) 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.17))); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.17) 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.17) 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.17) 100%); /* IE10+ */
                background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.17) 100%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#2b000000',GradientType=0 ); /* IE6-9 */
            }
            #sec {
                width: 100%;
                position:fixed;
                top:0;
                background:#b90808;
                text-align:center;
                padding: 20px;
            }
            #sec input{
                width:200px;
            }
            #enter {
                background:#d6d6d6;
                border-radius: 4px;
                width:400px;
                padding:20px;
                box-shadow:0 5px 10px rgba(0, 0, 0, 0.45);
                margin:auto;
                margin-top:140px;
            }
            #enter table {
                width:100%;
            }
            #enter input{
                width:100%;
            }
            #enter select{
                width: 100%;
            }
            #enter button{
                width:50%;
                height:30px;
            }
            #enter tr{
                height:50px;
            }
            .outer {
                width:100%;
                text-align:center;
                margin-top:60px;
            }
            .sql {
            }
        </style>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" method="post" id="sec">
            <input type="text" name="user" id="user" placeholder="Username"/>
            <input type="password" name="keypass" id="keypass" placeholder="Password"/>
            <button type="submit" id="submit" value="Login">Submit</button>
        </form>
    </body>
</html>

<?php
$username = "matthew";
$password = "ours!2014";
$nonsense = "supercalifragilisticexpialidocious";

if (isset($_COOKIE['PrivatePageLogin'])) {
   if ($_COOKIE['PrivatePageLogin'] == md5($password.$nonsense)) {



include 'insert.php';
?>
<style>
    #sec {background:green};
</style>
<?PHP

      exit;
   } else {
      echo "Bad Cookie.";
      exit;
   }
}

if (isset($_GET['p']) && $_GET['p'] == "login") {
   if ($_POST['user'] != $username) {
      echo "Sorry, that username does not match.";
      exit;
   } else if ($_POST['keypass'] != $password) {
      echo "Sorry, that password does not match.";
      exit;
   } else if ($_POST['user'] == $username && $_POST['keypass'] == $password) {
      setcookie('PrivatePageLogin', md5($_POST['keypass'].$nonsense));
      header("Location: $_SERVER[PHP_SELF]");
   } else {
      echo "Sorry, you could not be logged in at this time.";
   }
}
?>