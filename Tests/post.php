

<form method="post">
	<?php
	if(isset($_POST['message']) && !empty($_POST['message'])){
	$message = nl2br($_POST['message']);
	mysql_query("INSERT INTO post VALUES('', '$message', now(), now())");
	header('Refresh: 1; url=http://intweb.bucks.ac.uk/~21330276/RE-ExAM/Tests/index.php');
    
	}
	?>
	<textarea name='message' placeholder="Leave a comment"></textarea>
	</br>
<div class="confirmComment"><input type="submit"value="Comment" /></div>
	</form>