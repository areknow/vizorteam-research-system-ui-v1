<?PHP

include 'con.php';

$id = $_POST['userid']; 
$path = $_POST['filepath']; 

$sql= "UPDATE `id".$id."` SET `down` = '1' WHERE `path` = '".$path."';";
            
if (!mysql_query($sql, $db)) {
    die('Error: ' . mysql_error());
}
