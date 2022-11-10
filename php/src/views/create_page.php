<?php 
include('../server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>High_Stone_Explorer</title>
    <link rel="stylesheet" type="text/css" href="/./../decoration/create_page.css">
</head>
<body>
	
<?php	if(isset($_SESSION['admin-name'])){ ?>
	<form method="post" action="/../server.php" >
		<!-- When updating, the values should be filled with the previous articles !! -->

	<div class="input-group">
			<label>Post Title</label>
			<input type="text" name="post_title" value="<?php if($update == TRUE) { echo $article_heading;} else {'';}?>">
		</div>
		<div class="input-group">
			<label for="article-content">Post Content</label>
            <br>
			<textarea id="article-content"  name="post_body" rows="4" cols="50"><?php if($update == TRUE) { echo htmlspecialchars($article_body);} else {'';}?></textarea> 
		</div>
		<!-- configure buttons for create new post and update that post -->
		<div class="input-group">
			<?php if ($update == TRUE) { ?>
				<!-- This is for holding the id of the article -->
				<input type = "hidden" name="post_id" value="<?php echo $id; ?>">
				<button class="btn" type="submit" name="update" >Update</button>
			<?php } else { ?>
				<button class="btn" type="submit" name="upload" >Save</button>
			<?php } ?>
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