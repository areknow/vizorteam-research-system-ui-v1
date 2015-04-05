<h2>Select Agencies</h2>
<hr>
<form action="update.php" method="post" class="forms">
    <table class="profile-save">
        <tr>
            <td><button class="left btn-save" name="save-agency" type="submit"><i class="fa fa-check green"></i>Save</button></td>
            <td><button class="right btn-save" name="cancel" onclick="location.href='profile.php';"><i class="fa fa-times red"></i>Cancel</button></td>
        </tr>
    </table>
    <div id="profile-agents">
        <ul>
            <?PHP
            $agents_results = mysql_query("SELECT * FROM `agencies`");
            while ($agents = mysql_fetch_array($agents_results)) {
                ?> <li onclick="window.location = '<?PHP echo $agents['agents']; ?>';"><?PHP echo mb_strimwidth($agents['title'], 0, 80, "..."); ?><input type="checkbox" disabled checked class="right"></li> 
            <?PHP
            }
            ?>
        </ul>
    </div>
</form>