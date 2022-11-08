<?php 
session_start();
include('../server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>High_Stone_Explorer</title>
    <link rel="stylesheet" type="text/css" href="./decoration/create_page.css">
</head>
<body>
	
<?php	if(isset($_SESSION['admin-name'])){ ?>
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
	<?php }  else { ?>
	<?php	
		echo "Good day !! YOU ARE THE READER<br>";
        echo "View Aakash blog at <a href='/../index.php'>high-explorer</a>";
		?>
    <?php } ?>
</body>
</html>