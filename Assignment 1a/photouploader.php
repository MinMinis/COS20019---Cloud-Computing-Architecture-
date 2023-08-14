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
	<h1>Photo uploader</h1>
	<form>
		<label for="title">Photo title</label>
		<input type="text" name="title" id="title">
		<br>
		<label for="upload">Select a photo</label>
		<input type="file" name="upload" id="upload">
		<br>
		<label for="description">Description</label>
		<input type="description" name="desc" id="desc">
		<br>
		<label for="date">Date:</label>
		<input type="date" name="date" id="date">
		<br>
		<label for="keywords">Keywords (comma-delimited, e.g. keyword1, keyword2, ...):</label>
		<input type="text" name="keywords" id="keywords">
		<br>
		<input type="submit" name="submit" value="Upload">
	</form>
	<a href="photolookup.php">Photo Lookup</a>
</body>
</html>