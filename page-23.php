<?php get_header(); ?>
      <div id="teachers-section">
	  

		<div id="school-section">
		<h2>School section</h2>
         <div id="teacher-wrapper">
			<div class="teacher-image">
				<img src="<?php echo get_template_directory_uri(); ?>/images/shuhan.jpg" />
			
			</div>
			<div class="teacher-info">
				<ul>
					<li>Teacher's name:<?php  ?></li>
					<li>Qualification:</li>
					<li>Teaching subject:</li>
					<li>Mobile:</li>
				
				</ul>
			
			
			</div>
		
		  </div>
		</div>
		<div id="college-section">
		  <h2>College section</h2>
		    <div id="teacher-wrapper">
		 
			<div class="teacher-image">
			
			
			</div>
			
			
			
			

			<div class="teacher-info">
				<ul>
					<li>Teacher's name:</li>
					<li>Qualification:</li>
					<li>Teaching subject:</li>
					<li>Mobile:</li>
				
				</ul>
			
			
			</div>
		
		
		</div>
	  </div>
	  
	  </div>

 <?php get_footer(); ?>

     

<!--
		<script language="javascript" type="text/javascript">
				function clearText(field)
				{
					if (field.defaultValue == field.value) field.value = '';
					else if (field.value == '') field.value = field.defaultValue;
				}
				</script>

				<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
				<script src="js/jquery.nivo.slider.js" type="text/javascript"> </script>

				<script type="text/javascript">
				$(window).load(function() {
					$('#slider').nivoSlider({
						effect:'random',
						slices:10,
						animSpeed:500,
						pauseTime:2200,
						startSlide:0, //Set starting Slide (0 index)
						directionNav:false,
						directionNavHide:false, //Only show on hover
						controlNav:false, //1,2,3...
						controlNavThumbs:false, //Use thumbnails for Control Nav
						pauseOnHover:true, //Stop animation while hovering
						manualAdvance:false, //Force manual transitions
						captionOpacity:0.8, //Universal caption opacity
						beforeChange: function(){},
						afterChange: function(){},
						slideshowEnd: function(){} //Triggers after all slides have been shown
					});
				});
				</script>
				
				
				
				#notic-section{
	width:100%;
	height:25px;
	
}
.notice{
	background-color:#951e1e;
	width:100px;
	height:25px;
	color:white;
	float:left;
	border-radius:0 5px 5px 0;
	
}

.text{
	background-color:#dedeb3;
	width:860px;
	height:25px;
	float:left;
	
	
}
.text p{
	color:white;
	
}

			<div id="notic-section">
				<div class="notice">Notice:</div>
				<div class="text">
				<marquee>here will be goes new notice here will be goes new notice here will be goes new notice </marquee>
				
				</div>
			</div>
-!>