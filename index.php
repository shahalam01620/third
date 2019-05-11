<?php get_header(); ?>


		  <div class="slider-wrapper-theme-default">
            <div id="slider" class="nivoSlider">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow/01.jpg"  />
                <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow/02.jpg" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow/03.jpg"/>
                <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow/04.jpg" />
            </div>
        </div>
				<div id="notice-section">
			<div id="notice">Notice</div>
			<div id="notice-content"><marquee>here will be goes new notice here will be goes new notice here will be goes new notice </marquee></div>
		</div>
			

			
			<div id="content-section">
				<div class="main-content">
				<?php 
				
				if(have_posts()) : 
					while(have_posts()) : the_post(); ?>
					
					<article class="home_ar_wrap">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						
						<div class="featured_image">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<div class="post_meta">Posted By: <?php the_author_posts_link();?>
							|  Posted On: <?php the_time('M,d,y');?>
							|  Posted In: <?php the_category(', ');?></div>
							
						</div>
						
						


						<p><?php the_excerpt(); ?></p>

					</article>
					
				<?php	endwhile;
				else:
				echo 'No Posts Found';
				endif;
				
				?>
				
			
				</div>
			<?php get_sidebar();?>
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