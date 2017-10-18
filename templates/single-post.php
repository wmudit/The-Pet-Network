<?php include 'includes/header.php' ?>

<div class="w3-container w3-content" style="max-width:1400px;margin-top:40px">    

<!--
<div class="w3-col m2">
	 fdfa
</div>
-->

<div class="w3-col w3-twothird" style="margin-left: 16.66667%">
	
	<div class="w3-container  w3-round w3-margin"><br>
	
		<img src="<?php echo $post->profile_img ?>" alt="No profile image" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity"><?php echo $post->timestamp; ?></span>
        <h4><?php echo $post->username; ?></h4><br>
        <hr class="w3-clear">
        <h5><?php echo $post->title; ?></h5>
        <img src="<?php echo $post->img; ?>" style="width:100%" class="w3-margin-bottom">
        <p><?php echo $post->description; ?></p>
		<p id="likes<?php echo $post->post_id; ?>"><?php echo $post->upvotes; ?> Likes</p>		
		<button id="like_button_<?php echo $post->post_id; ?>" type="button" class="w3-button w3-theme-d1 w3-margin-bottom" onClick="like(<?php echo $post->post_id; ?>,<?php echo $_SESSION['user_id']; ?>)" style="visibility: visible"><i class="fa fa-thumbs-up"></i></button> 
        <button id="dislike_button_<?php echo $post->post_id; ?>" type="button" class="w3-button w3-theme-d2 w3-margin-bottom" onClick="dislike(<?php echo $post->post_id; ?>,<?php echo $_SESSION['user_id']; ?>)" style="visibility: hidden"><i class="fa fa-thumbs-down"></i></button>
        
	</div>




<div class="w3-row-padding">
        	<div class="w3-col m12">
          		<!--<div class="w3-card-2 w3-round w3-white">-->
            		<div class="w3-container w3-padding">
              		<h4 id="comments" class="w3-opacity">Comments</h4>
              		<p contenteditable="true" id="comment" class="w3-border w3-padding"></p>
              		<button type="button" class="w3-button w3-theme" onClick="comment(<?php echo $post->post_id; ?>,<?php echo $_SESSION['user_id']; ?>)"><i class="fa fa-pencil"></i> &nbsp;Comment</button><br><br>
              		<?php foreach($comments as $comment): ?>
              		<div class="w3-content"><img src="<?php echo $comment->profile_img; ?>" class="w3-left w3-circle w3-margin-right" style="width: 50px;" alt="No profile image">
              		<p class="w3-right w3-opacity"><?php echo $comment->timestamp; ?></p>
             		 <h4><?php echo $comment->username; ?></h4>
             		 
						<p><?php echo $comment->comment; ?></p><hr></div>
             		<?php endforeach; ?>
              		</div>
          		<!--</div>-->
        	</div>
      	</div>

</div>
</div>


<?php include 'includes/footer.php' ?>