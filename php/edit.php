<h2>Edit Your Profile</h2>
<hr>
<form action="update.php" method="post" class="forms">
    <table class="profile-save">
        <tr>
            <td><button class="left btn-save" name="save-edit" type="submit"><i class="fa fa-check green"></i>Save</button></td>
            <td><button class="right btn-save" name="cancel" onclick="location.href='profile.php';"><i class="fa fa-times red"></i>Cancel</button></td>
        </tr>
    </table>
    <table class="profile-edit">
        <tr>
            <td>First Name</td>
            <td><input name="FNAME" type="text" value="<?PHP echo $fn; ?>"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input name="LNAME" type="text" value="<?PHP echo $ln; ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input name="EMAIL" type="email" value="<?PHP echo $eml; ?>"></td>
        </tr>
        <tr>
            <td>New Password</td>
            <td><input name="PASS" type="password" id="myPasswordField"></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><input name="PASS2" type="password" id="f19"></td>
            <script type="text/javascript">
		            var f19 = new LiveValidation('f19');
		            f19.add(Validate.Confirmation, { match: 'myPasswordField'} );
            </script>  
        </tr>
        <tr>
            <td>Telephone</td>
            <td><input name="TELE" type="text" value="<?PHP echo $tl; ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="hidden" name="IDX" value="<?PHP echo $sesid; ?>"></td>
        </tr>
    </table>
</form>