<h2>Crawler Control Panel</h2>
<hr>
<form action="update.php" method="post" class="forms">
    <table id="admin-table">
        <tr>
            <td>Update Crawler status</td>
            <td>
                <?PHP $status = mysql_fetch_array($stat_results = mysql_query("SELECT `io` FROM `status`"));
                $options = array("", "", "", "", "");
                if($status[0] == "0"){
                    $options[0] = "selected";
                }
                elseif($status[0] == "1"){
                    $options[1] = "selected";
                }
                elseif($status[0] == "2"){
                    $options[2] = "selected";
                }
                elseif($status[0] == "3"){
                    $options[3] = "selected";
                }
                ?>
                <select class="right" name="selecter">
                    <option value="0" <?php echo $options[0]; ?>>Offline</option>
                    <option value="1" <?php echo $options[1]; ?>>Maintenance</option>
                    <option value="2" <?php echo $options[2]; ?>>Processing</option>
                    <option value="3" <?php echo $options[3]; ?>>Operational</option>
                </select>
            </td>
            <td><button onclick="return confirm('This will change the Crawler status. Continue?')" name="save-admn-status" class="right btn-save btn-admn"><i class="fa fa-exclamation-circle"></i></button></td>
        </tr>
        <tr>
            <td>Delete Crawler user</td>
            <td>
                <select name='id_list' class="right">
                <option>None</option>
                <?php
                $user_results = mysql_query("SELECT * FROM `users` WHERE `id` > 2");
                while($rec = mysql_fetch_array($user_results))
                {
                    ?><option value="<?PHP echo $rec['id']; ?>"><?PHP echo $rec['id']." : "; echo $rec['username']; ?></option><?PHP
                }
                ?>
                </select>
            </td>
            <td><button onclick="return confirm('This action cannot be undone. Continue?')" name="save-admn-delete" class="right btn-save btn-admn"><i class="fa fa-exclamation-circle"></i></button></td>
        </tr>
        <tr>
            <td>Reset download counter</td>
            <td>
                <select name='id_list2' class="right">
                <option>None</option>
                <?php
                $user_results = mysql_query("SELECT * FROM `users` WHERE `id`");
                while($rec = mysql_fetch_array($user_results))
                {
                    ?><option value="<?PHP echo $rec['id']; ?>"><?PHP echo $rec['id']." : "; echo $rec['username']; ?></option><?PHP
                }
                ?>
                </select>
            </td>
            <td><button onclick="return confirm('This action cannot be undone. Continue?')" name="save-admn-counter" class="right btn-save btn-admn"><i class="fa fa-exclamation-circle"></i></button></td>
        </tr>
    </table>
</form>