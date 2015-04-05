<h2>Configure Research Options</h2>
<hr>
<form action="update.php" method="post" class="forms">
    <table class="profile-save">
        <tr>
            <td><button class="left btn-save" name="save-res" type="submit"><i class="fa fa-check green"></i>Save</button></td>
            <td><button class="right btn-save" name="cancel" onclick="location.href='profile.php';"><i class="fa fa-times red"></i>Cancel</button></td>
        </tr>
    </table>
    <table class="profile-edit">
        <tr>
            <td>Department</td>
            <td>
                <?PHP $depts = mysql_fetch_array($depts_results = mysql_query("SELECT `department` FROM `users` WHERE `id` = $sesid "));
                $options = array("", "", "", "", "");
                if($depts[0] == "Computer Science and Engineering"){
                    $options[0] = "selected";
                }
                elseif($depts[0] == "Electrical and Computer Engineering"){
                    $options[1] = "selected";
                }
                elseif($depts[0] == "Industrial and Systems Engineering"){
                    $options[2] = "selected";
                }
                elseif($depts[0] == "Mechanical Engineering"){
                    $options[3] = "selected";
                }
                ?>
                <select name="DEPT">
                    <option <?php echo $options[0]; ?>>Computer Science and Engineering</option>
                    <option <?php echo $options[1]; ?>>Electrical and Computer Engineering</option>
                    <option <?php echo $options[2]; ?>>Industrial and Systems Engineering</option>
                    <option <?php echo $options[3]; ?>>Mechanical Engineering</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Specialty</td>
            <td>
                <input name="SPEC" type="text" value="<?PHP echo $sp; ?>">
            </td>
        </tr>
        <tr>
            <td colspan="2"><div class="spacer-20"></div></td>
        </tr>
        <tr>
            <td colspan="2">Key Words<br>
                <input name="KEYW" name="tags" id="mySingleField" value="<?PHP echo $kw; ?>" hidden="true">
                <ul class="livetag" id="singleFieldTags"></ul>
            </td>
        </tr>
        <tr><td></td></tr>
        <tr>
            <td colspan="2">Custom Agencies<br>
                <input name="URLS" name="tags" id="mySingleField2" value="<?PHP echo $ur; ?>" hidden="true">
                <ul class="livetag" id="singleFieldTags2"></ul>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="hidden" name="IDX" value="<?PHP echo $sesid; ?>"></td>
        </tr>
    </table>
</form>
<!--bottom-->