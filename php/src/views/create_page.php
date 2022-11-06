<?php include('../server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>High_Stone_Explorer</title>
    <link rel="stylesheet" type="text/css" href="./decoration/create_page.css">
</head>
<body>
	<form method="post" action="/../server.php" >
		<div class="input-group">
			<label>Post Title</label>
			<input type="text" name="post_title" value="">
		</div>
		<div class="input-group">
			<label for="article-content">Post Content</label>
            <br>
			<textarea id="article-content"  name="post_body" rows="4" cols="50">
            </textarea> 
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="upload" >Upload</button>
		</div>
	</form>
</body>
</html>