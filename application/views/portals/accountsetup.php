hi <?php echo $studentnumber ?>
<?php echo form_open_multipart('accountsetup'); ?>
<input type="hidden" value="<?php echo $id?>" name="id"/>
<br>
First Time logging in<br>
Enter your new password
<br>
<input type="password" name="password"/>
<br>
<input type="password" name="confirm_password"/>
<br>
    <input type="submit" value="submit"/>
</form>
<?php echo validation_errors() ?>