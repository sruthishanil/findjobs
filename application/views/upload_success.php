<!DOCTYPE html>
<html>
<head>
	<title>Upload form</title>
</head>
<body>
<h3>your file successfully uploaded!</h3>
<ul>
	<?php foreach ($uploaded_data as $item => $value):?>
	<li><?php echo $item; ?> : <?php echo $value; ?></li>
<?php endforeach; ?>		
</ul>
<p><?php echo anchor('upload','upload another file!'); ?></p>
</body>
</html>