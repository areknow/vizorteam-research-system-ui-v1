<h2>Choose Contact Methods</h2>
<hr>
<div class="forms">
    <form action="update.php" method="post">
        <table class="profile-save">
            <tr>
                <td><button class="left btn-save" name="save-cont" type="submit"><i class="fa fa-check green"></i>Save</button></td>
                <td><button class="right btn-save" name="cancel" onclick="location.href='profile.php';"><i class="fa fa-times red"></i>Cancel</button></td>
            </tr>
        </table>
        <table class="profile-contact">
            <tr>
                <td><input value="1" <?php echo ($cm_em == 1 ? 'checked' : ''); ?> type="checkbox" name="EMAILCHK">
                </td>
                <td>
                    Send me emails
                </td>
            </tr>
            <tr>
                <td><input value="1" <?php echo ($cm_rm == 1 ? 'checked' : ''); ?> type="checkbox" name="REMCHK">
                </td>
                <td>
                    Send me additional reminder emails
                </td>
            </tr>
            <tr>
                <td>
                    <input disabled value="1" <?php echo ($cm_tx == 1 ? 'checked' : ''); ?> type="checkbox" name="TEXTCHK">
                </td>
                <td>
                    Send me text messages <span class="gray">(coming soon)</span>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="IDX" value="<?PHP echo $sesid; ?>"></td>
            </tr>
        </table>
    </form>
    <form id="feedback" action="feedback.php" method="post">
        <table>
            <tr>
                <td>
                    Send us feedback<br>
                    <textarea name="FEEDBACK"></textarea>
                    <input type="hidden" name="IDX" value="<?PHP echo $sesid; ?>"><br>
                    <button class="btn-save right" type="submit" name="submit-feed">Send</button>
                </td>
            </tr>
        </table>
    </form>
</div>