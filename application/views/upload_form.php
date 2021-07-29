<!DOCTYPE html>
<html>
<head>
	<title>Upload form</title>
</head>
<body>
<?php echo $error; ?>
<!-- <?php echo from_open_multipart('upload/do_upload'); ?>
 -->
<input type="file" name="userfile" size="20" />
<br><br>
<input type="submit" value="upload" />
</form>
</body>
</html>