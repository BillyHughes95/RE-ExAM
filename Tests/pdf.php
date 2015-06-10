<html>
<head>
	<title>Comment System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>  
	<?php include 'connect.php'; ?> <!--Initialises database connection-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="index.js"></script>
    
     <div id="comments_wrapper">
     <?php include 'post.php'; ?>    <!--Adds the post form so that people can leave comments-->

        <?php //Everything inside of this PHP tag retrieves all of the post data from database
            $post_query = mysql_query("SELECT id, post, date, time FROM post");
            while($run_post = mysql_fetch_array($post_query)){
            $post_id = $run_post['id'];
            $post = $run_post['post'];
            $post_date = $run_post['date'];
            $post_time = $run_post['time'];	
        ?>

   
	
         <div class="display_comment_username"><b>Poster's name here </b></div>
	Posted on: <?php echo $post_date; ?> <b>|</b> <?php echo $post_time; ?><hr>  
         <div class="display_comment"><p><?php echo $post; ?></p></div> <!--Displays the actual comment, date & time it was posted-->
	
	<?php //Everything inside of this PHP tag retrieves all of the reply data from the database
		$reply_query = mysql_query("SELECT id, reply, reply_date, reply_time FROM reply WHERE post_id = '$post_id'");
			while($run_reply = mysql_fetch_array($reply_query)){
				$reply_id = $run_reply['id'];
				$reply = $run_reply['reply'];
				$reply_date = $run_reply['reply_date'];
				$reply_time = $run_reply['reply_time'];
	?>
			
    <div class="display_reply_username"><b>Replier's name here </b></div>
    <div class="display_dateTime"><?php echo $reply_date . " | " . $reply_time ?></div>
    <div class="display_reply"><?php echo $reply; ?> </br></br></div>
    <!--Displays the replies, their time and their dates-->
	
    <?php
	   } //Closes the WHILE loop that iterates through the replies
	?>
	
	<input type="text" name="submit" placeholder="Leave a reply" class="reply" post_id=<?php echo $post_id;?>/></br></br>
	<!--This is the text area used to write your reply-->
    
	<?php
	   } //Closes the WHILE loop that iterates through the comments
	?>
	
    </div> <!--Closes the comments_wrapper div-->    

    <div id="pdf_wrapper"><embed src="PDFs/HTML 4 Dummies.pdf"/></div>
    <!--This is the PDF display-->

</body>
</html>