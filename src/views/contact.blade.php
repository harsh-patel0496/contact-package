
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Hello Contact</h1>
<form action="{{ route('contact') }}" method="post">
	<input type="text" name="name"><br>
	<input type="email" name="email"><br>
	<textarea name = 'message'></textarea><br>
	<input type="submit" name="" value="Submit">
</form>
</body>
</html>