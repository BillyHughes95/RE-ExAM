<html>
<head>
	<title>Comment System</title>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include 'connect.php'; ?>

    <embed src="PDFs/HTML 4 Dummies.pdf"/>
    
    
    <div class="enterComment"><?php include 'post.php'; ?></div>
    
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="index.js"></script>
	</br></br>
	<?php 
		$post_query = mysql_query("SELECT id, post, date, time FROM post");
		while($run_post = mysql_fetch_array($post_query)){
		$post_id = $run_post['id'];
		$post = $run_post['post'];
		$post_date = $run_post['date'];
		$post_time = $run_post['time'];
		
	?>

    
	<div class="commentbox">
	<b>Cat </b>  
	<div class="dateTime">Posted on: <?php echo $post_date; ?> <b>|</b> <?php echo $post_time; ?></div><hr>  
	<div class="commentText"><p><?php echo $post; ?></p></div>
	<div class="replies">
	<?php
		$reply_query = mysql_query("SELECT id, reply, reply_date, reply_time FROM reply WHERE post_id = '$post_id'");
			while($run_reply = mysql_fetch_array($reply_query)){
				$reply_id = $run_reply['id'];
				$reply = $run_reply['reply'];
				$reply_date = $run_reply['reply_date'];
				$reply_time = $run_reply['reply_time'];
	?>
			<div class="view_reply">
			<b>Dog</b> <div class="dateTimeReply"><?php echo $reply_date . " | " . $reply_time ?></div> <div class="commentText"><?php                echo $reply; ?></div>
			</div>
	<?php
	}
	?>
	
	</div>
	
	<input type="text" name="submit" placeholder="Leave a reply" class="reply" post_id=<?php echo $post_id;?>/>
	</div>
	<?php
	}

	?>
	
</body>
</html>