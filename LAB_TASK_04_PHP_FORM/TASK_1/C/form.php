

<!DOCTYPE html>
<html>
<head>
	<title>page 1</title>
</head>
<body>
	<p><b>1.</p>
	<form method="post" action="
	form.php">
<h3>Name</h3><input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name']; }?>"/><br><br>
<input type="Submit" name=" Submit" value="Submit">
</form>
</body>
</html>