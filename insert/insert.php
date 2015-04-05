<?PHP
include '../php/con.php';
?>

<form action="#" method="post" id="enter">
    <table>
        <tr>
            <td><div>Select user</div>
                <select name='id_list' class="right">
                <option>None</option>
                <?php
                $user_results = mysql_query("SELECT * FROM `users` WHERE `id` > 24");
                while($rec = mysql_fetch_array($user_results)) 
                { ?>
                <option value="<?PHP echo $rec['id']; ?>"><?PHP echo $rec['id']." : "; echo $rec['username']; ?></option>
                <?PHP }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <div>Solicitation Title</div><input type="text" name="title" required>
            </td>
        </tr>
        <tr>
            <td>
                <div>File Name</div><input type="text" name="file" required>
            </td>
        </tr>
        <tr>
            <td>
                <div>Due Date</div><input type="text" name="date" placeholder="9/10/14 or N/A" required>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="submiter">Insert</button><button type="reset">Clear</button>
            </td>
        </tr>
    </table>
    
</form>

<?PHP

if(isset($_POST['submiter'])) {
    $id = $_POST['id_list'];
    $title = $_POST['title'];
    $file = $_POST['file'];
    $date = $_POST['date'];
    
    if ($title == '' || $file == ''  || $date == '') {
        
        echo "<div class='outer'><div class='sql'>Invalid Operation</div></div>";
        
    }
    else {
        $sql = "INSERT INTO `crawler`.`id$id` (`pk`, `path`, `title`, `date`) VALUES (NULL, '$file', '$title', '$date');";
        if (!mysql_query($sql, $db)) {
            die("<div class='outer'><div class='sql'>Fatal Error:<br><b>".mysql_error()."</b></div></div>");
        }
        echo "<div class='outer'><div class='sql'>Successfully executed SQL transaction:<br><b>$sql</b></div></div>";
    }
}
?>
