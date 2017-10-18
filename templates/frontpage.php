<?php include 'includes/header.php' ?>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  	<!-- The Grid -->
  	<div class="w3-row">

    <!-- Left Column -->
    <div class="w3-col m3">
     	
      	<!-- Profile -->
      	<div class="w3-card-2 w3-round w3-white">
        	<div class="w3-container">
         		<h4 class="w3-center">My Profile</h4>
         		<p class="w3-center"><img src="<?php echo $_SESSION['profile_img'] ?>" class="w3-circle" style="height:124px;width:124px" alt="Avatar"></p>
         		<hr>
         		<p><i class="fa fa-hand-o-right fa-fw w3-margin-right w3-text-theme" title="Username"></i><?php echo $_SESSION['username'] ?> </p>
         		<p><i class="fa fa-user-o fa-fw w3-margin-right w3-text-theme" title="Name"></i><?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?></p>
         		<p><i class="fa fa-envelope-o fa-fw w3-margin-right w3-text-theme" title="Email"></i><?php echo $_SESSION['email'] ?></p>
        	</div>
      	</div>
      	<br>
        
        <!--My Posts -->
        <div class="w3-card w3-round w3-white">
        	<div class="w3-container">
        		<h4 id="posts_heading" class="w3-center">My Posts</h4>
        		<?php foreach($user_posts as $user_post): ?>
        		<div class="w3-half col-xs-6" style="padding: 5px">
        			<img class="w3-margin-bottom" src="<?php echo $user_post->img; ?>" style="width: 100%; height: 150px;">
        		</div>
        		<?php endforeach; ?>
        	</div>
        </div>
        <br>

        <!-- Alert Box -->
      	<div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        	<span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          		<i class="fa fa-remove"></i>
        	</span>
        	<p><strong>Hey!</strong></p>
        	<p>Share your crazy pet stories with everyone.</p>
      	</div>
    
    <!-- End Left Column -->
	</div>
        
    <!-- Middle Column -->
    <div class="w3-col m7">

        <div class="w3-row-padding">
        	<div class="w3-col m12">
          		<div class="w3-card-2 w3-round w3-white">
            		<div class="w3-container w3-padding">
              		<h4 class="w3-opacity" style="float: left ">Got something to share?</h4>
              		<button type="button" class="w3-button" data-toggle="collapse" data-target="#post" style="float: right"><i class="fa fa-angle-down"></i></button>
              		<div class="collapse" id="post" style="padding-top: 50px ">
              			<form method="post" action="helpers/post.php" enctype="multipart/form-data">
              				<div class="form-group">
    							<input type="text" class="form-control" id="title" placeholder="Title" name="title">
  							</div>
             				<div class="form-group">
    							<input type="text" class="form-control" id="description" placeholder="Description (optional)" name="description">
  							</div>
             				<div class="form-group">
    							<input type="file" class="form-control" id="image" name="image" style="height: auto">
  							</div>
             				<input type="number" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" style="display: none">
              				<button type="submit" class="w3-button w3-theme" name="submit"><i class="fa fa-pencil">&nbsp;Post</i></button>
              			</form>
              		</div>
					</div>
          		</div>
        	</div>
		</div>
      	
      	<?php foreach($posts as $post): ?>
      	<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        	<img src="<?php echo $post->profile_img ?>" alt="No profile image" class="w3-left w3-circle w3-margin-right" style="width:60px">
        	<span class="w3-right w3-opacity"><?php echo $post->timestamp; ?></span>
        	<h4><?php echo $post->username; ?></h4><br>
        	<hr class="w3-clear">
        	<h4><a href="post.php?id=<?php echo $post->post_id; ?>" style="text-decoration: none; color: black;"><?php echo $post->title; ?></a></h4>
		
        	<img src="<?php echo $post->img; ?>" style="width:100%" class="w3-margin-bottom">
        	<p id="likes<?php echo $post->post_id; ?>" ><?php echo $post->upvotes; ?> Likes</p>
        	<!--<p><?php echo $post->description; ?></p>-->
        	
        	<button id="like_button_<?php echo $post->post_id; ?>" type="button" class="w3-button w3-theme-d1 w3-margin-bottom" onClick="like(<?php echo $post->post_id; ?>,<?php echo $_SESSION['user_id']; ?>)" style="display: inline"><i class="fa fa-thumbs-up"></i></button> 
        	
        	<button id="dislike_button_<?php echo $post->post_id; ?>" type="button" class="w3-button w3-theme-d2 w3-margin-bottom" onClick="dislike(<?php echo $post->post_id; ?>,<?php echo $_SESSION['user_id']; ?>)" style="display: none"><i class="fa fa-thumbs-down"></i></button>
			<button id="comment_button" type="button" class="w3-button w3-theme-d1 w3-margin-bottom" ><i class="fa fa-comment" aria-hidden="true"></i></button>
     		
     	
     		<!-- <div style="display: inline-block">
     		<span id="like_button_<?php echo $post->post_id; ?>" style="visibility: visible">
     			<button class="w3-button w3-theme-d1 w3-margin-bottom" onClick="like(<?php echo $post->post_id; ?>)"><i class="fa fa-thumbs-up"></i></button>
    		</span>     			
     		<span id="dislike_button_<?php echo $post->post_id; ?>" style="visibility: hidden">
     			<button class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-thumbs-down"></i></button>
   			</span>
    		</div>-->
     		
     		
      	</div> 
      	<?php endforeach; ?>
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">

    	<div class="w3-card-2 w3-round w3-white w3-padding-16 w3-center">
        	<p>ADS</p>
      	</div>
      <br>
      
      	<div class="w3-card-2 w3-round w3-white w3-padding-32 w3-center">
        	<p><i class="fa fa-bug w3-xxlarge"></i></p>
      	</div>
      
    <!-- End Right Column -->
    </div>

  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>


<?php include 'includes/footer.php' ?>