<?php get_header(); ?>
						<div id="notice-section">
			<div id="notice">Notice</div>
			<div id="notice-content"><marquee>here will be goes new notice here will be goes new notice here will be goes new notice </marquee></div>
		</div>

		  <div class="slider-wrapper-theme-default">
            <div id="slider" class="nivoSlider">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow/01.jpg"  />
                <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow/02.jpg" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow/03.jpg"/>
                <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow/04.jpg" />
            </div>
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
