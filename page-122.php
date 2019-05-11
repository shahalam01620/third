
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
			<div id="call"><a style="font-size:20px; margin-left:20px; color:white; padding-top:3px;" href="#">01746361481</a></div>
			<div id="message"><a style="font-size:20px; margin-left:15px; color:white; padding-top:3px;" href="#">shahalam01620@gmail.com</a></div>
			<div id="follow">
				<p>Follow us by:</p>
			</div>
			<div id="social">
				<ul>
					<a href="https://www.facebook.com/profile.php?id=100006472838361"><li><img src="<?php echo get_template_directory_uri(); ?>/images/img-fb.png"/></li></a>
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
		<div id="notice-section">
			<div id="notice">Notice</div>
			<div id="notice-content"><marquee>here will be goes new notice here will be goes new notice here will be goes new notice </marquee></div>
		</div>

<div class="board">
<a href="http://www.educationboardresults.gov.bd/" >Board Results</a>

</div>

		<div id="outer-footer">
			<div class="footer">
				<div class="left-foot">
						<ul><h4></h4>
							<li><a href="#">About</a></li>
							<li><a href="#">History</a></li>
							<li><a href="#">Achivement</a></li>
							<li><a href="#">Location</a></li>
							<li><a href="#">Contact Us</a></li>
						
						</ul>
				
				</div>
				<div class="mid-foot">
						<ul><h4>Important Links</h4>
					<ul>
						<a href="http://bmeb.gov.bd/"><li>মাদ্রাসা শিক্ষা বোর্ড</li></a>
						<a href="http://www.dshe.gov.bd/"><li>শিক্ষা অধিদপ্তর	</li></a>
						<a href="http://www.bteb.gov.bd/"><li>কারিগরি শিক্ষা বোর্ড	 	</li></a>
						<a href="https://www.sust.edu/"><li>শাহজালাল বিশ্ববিদ্যালয়,সিলেট</li></a>
						<a href="https://sylhetboard.gov.bd/"><li>সিলেট শিক্ষা বোর্ড </li></a>
						
					</ul>
						
						</ul>
				
				</div>
				<div class="address">
					<h3>Welcome to our website</h3>
					<p>It will help you to know more info</p>
				
				</div>
			</div>
			<div class="footer-bottom">
			
			</div>
	 </div>
	 	
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	 <?php wp_footer(); ?>
	 
</body>
</html>