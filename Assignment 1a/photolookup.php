<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Photo Album</title>
	<meta name="author" content="Thanh Minh">
	<meta name="keywords" content="COS20019">
</head>
<body>
	<h1>Photo lookup</h1>
	<form>
		<label for="title">Photo title</label>
		<input type="text" name="title" id="title">
		<br>
		<label for="keyword">Keyword:</label>
		<input type="text" name="keyword" id="keyword">
		<br>
		<label for="from_date">From date:</label>
		<input type="date" name="from_date" id="from_date">
		<br>
		<label for="to_date">To date:</label>
		<input type="date" name="to_date" id="to_date">
		<br>
		<input type="submit" name="submit" value="Search">
	</form>
	<a href="photouploader.php">Photo Uploader</a>
</body>
</html>