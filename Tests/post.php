

<div id="createComment">
<form method="post">
	<?php
	if(isset($_POST['message']) && !empty($_POST['message'])){
	$message = nl2br($_POST['message']);

    $pdf_location = htmlspecialchars($_GET["essay"]);    
	mysql_query("INSERT INTO post VALUES('', ('".mysql_real_escape_string($message)."'), now(), now(), '$pdf_location')");
	//header('Refresh: 1; url=#');    
	}
	?>
	<textarea name='message' placeholder="Leave a comment" id="CommentTextbox"></textarea>

    
	</br>
<div class="confirmComment"><input type="submit"value="Comment" /></div>
	</form>
</div>
