<?php include 'includes/header.php' ?>

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

	<div class="w3-row-padding w3-padding-16" style="padding-left: 16px">
		<h3>Adopt a pet today</h3>
	</div>
  
   <div class="w3-row-padding">
        	<div class="w3-col m12" style="width: 30%; margin-left: -8px" >
          		<div class="w3-card-2 w3-round w3-white">
            		<div class="w3-container w3-padding">
              		<h4 class="w3-opacity">Have a pet for adoption?</h4>
              		<!--<p contenteditable="true" class="w3-border w3-padding"></p>-->
              		<button type="button" class="w3-button w3-theme" style="margin-bottom: 5px"><i class="fa fa-pencil"></i> &nbsp;Tell us about it</button> 
            		</div>
          		</div>
        	</div>
      	</div>
      	
      		<div class="w3-row-padding w3-padding-16 w3-center" style="display: inline">
      		<?php foreach($adoption_posts as $post): ?>
				<div class="w3-card-2 w3-round w3-white w3-third">
    			<img src="<?php echo $post->image; ?>" alt="Image not found" style="width: 100%; padding-top: 5px;">
    			<h3><?php echo $post->title; ?></h3>
    			<!--<p><?php echo $post->description; ?></p>-->
				</div>	
		<?php endforeach; ?>
		</div>

  <!-- First Photo Grid-->
<!-- <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-card-2 w3-round w3-white w3-quarter">
      <img src="https://www.w3schools.com/w3images/sandwich.jpg" alt="Sandwich" style="width:100%; padding-top: 5px">
      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-card-2 w3-round w3-white w3-quarter">
      <img src="https://www.w3schools.com/w3images/steak.jpg" alt="Steak" style="width:100%; padding-top: 5px" >
      <h3>Let Me Tell You About This Steak</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text.</p>
    </div>
    <div class="w3-card-2 w3-round w3-white w3-quarter">
      <img src="https://www.w3schools.com/w3images/cherries.jpg" alt="Cherries" style="width:100%; padding-top: 5px">
      <h3>Cherries, interrupted</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      <p>What else?</p>
    </div>
    <div class="w3-card-2 w3-round w3-white w3-quarter">
      <img src="https://www.w3schools.com/w3images/wine.jpg" alt="Pasta and Wine" style="width:100%; padding-top: 5px">
      <h3>Once Again, Robust Wine and Pasta</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
  </div>-->
  
  <!-- Second Photo Grid-->
 <!-- <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="https://www.w3schools.com/w3images/popsicle.jpg" alt="Popsicle" style="width:100%">
      <h3>All I Need Is a Popsicle</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="https://www.w3schools.com/w3images/salmon.jpg" alt="Salmon" style="width:100%">
      <h3>Salmon For Your Skin</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="https://www.w3schools.com/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
      <h3>The Perfect Sandwich, A Real Classic</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="https://www.w3schools.com/w3images/croissant.jpg" alt="Croissant" style="width:100%">
      <h3>Le French</h3>
      <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
  </div>-->



<?php include 'includes/footer.php' ?>