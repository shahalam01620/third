<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<title><?php bloginfo('name'); ?></title>
	
	<meta name="wiewport" content="width=device-width, initial-scale=1">
	<meta charset="<?php bloginfo('charset'); ?>">

	
	<?php wp_head();?>
	
</head>


<body <?php body_class();?>>
  <div id="outer-wrapper">
		
	 <div id="wrapper">
		<div class="top-section">
			<div id="call"><a style="font-size:20px; margin-left:20px; color:white; padding-top:3px;" href="#">01735-604411</a></div>
			<div id="message"><a style="font-size:20px; margin-left:15px; color:white; padding-top:3px;" href="http://localhost/alom/?page_id=25">shahalam01620@gmail.com</a></div>
			<div id="follow">
				<p>Follow us by:</p>
			</div>
			<div id="social">
				<ul>
					<a href="https://www.facebook.com/barkhalschool/"><li><img src="<?php echo get_template_directory_uri(); ?>/images/img-fb.png"/></li></a>
					<a href="#"><li><img src="<?php echo get_template_directory_uri(); ?>/images/img-tw.png"/></li></a>
					<a href="#"><li><img src="<?php echo get_template_directory_uri(); ?>/images/img-ut.png"/></li></a>
				
				</ul>
			
			</div>
		
		</div>
		<div class="header-section">
				
					<div class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo"/>
					</div>
					<div class="heading">
						<h1> <a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></h1>
						<h2><?php bloginfo('description');?></h2>
					</div>
					<div class="box">
					<div class="down-cp">
						<button><a href="http://www.educationboardresults.gov.bd/">Results</a></button>
						<button><a href="">Complain</a></button>
						
						
					</div>
					
					<?php get_search_form();?>
					
					</div>
				
				
		</div>
			
			<div id="nav">
				<div>
					<?php 
						$args=array(
							'theme_location' => 'primary'
						);
					   wp_nav_menu($args);
					?>
				
				
				</div>
			</div>


			

			