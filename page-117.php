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
				

			

			
			
		<div id="result-loging">
		<h2 style="text-align:center;">Acadamic Results</h2>
		<table id="table">
			<tr class="tablerow">
				<td width="10%"  valign="middle" align="left"></td>
				<td width="20%" valign="middle" align="left">Year</td>
				<td width="10%" valign="middle" align="left">:</td>
				<td width="60%" valign="middle" align="Right">
					<select class="exam" onchange="fd(this);">
						<option value="2019">2019</option>
						<option value="2018">2018</option>
						<option value="2017">2017</option>
						<option value="2016">2016</option>
						<option value="2015">2015</option>
						<option value="2014">2014</option>
						<option value="2013">2013</option>
	
					</select>
			
			</tr>
		<tr class="tablerow">
				<td width="10%" valign="middle" align="left"></td>
				<td width="20%" valign="middle" align="left">Class</td>
				<td width="10%;" valign="middle" align="left">:</td>
				<td width="60%;" valign="middle" align="Right">
					<select class="exam" onchange="fd(this);">
						<option value="six">Six</option>
						<option value="seven">Seven</option>
						<option value="eight">Eight</option>
						<option value="nine">Nine</option>
						<option value="ten">Ten</option>
						<option value="eleven">Eleven</option>
						<option value="twelve">Twelve</option>
	
					</select>

				</td>
			
			
			
			<tr class="tablerow">
				<td width="10%" valign="middle" align="left"></td>
				<td width="20%" valign="middle" align="left">Section</td>
				<td width="10%;" valign="middle" align="left">:</td>
				<td width="60%;" valign="middle" align="Right">
					<select class="exam" onchange="fd(this);">
						<option value="section">A</option>
						<option value="section">B</option>
						<option value="section">C</option>
						<option value="section">D</option>
						<option value="section">E</option>

	
					</select>

				</td>
			</tr>
			
			<tr class="tablerow">
				<td width="10%" valign="middle" align="left"></td>
				<td width="20%" valign="middle" align="left">Roll</td>
				<td width="10%;" valign="middle" align="left">:</td>
				<td width="60%;" valign="middle" align="Right">
				<input type="text" class="exam" height="30px;">
			
			
			</tr>			
			<tr class="tablerow">
				<td width="10%" valign="middle" align="left"></td>
				<td width="18%" valign="middle" align="left"></td>
				<td width="47.5%;" valign="middle" align="left"></td>
				<td width="70%;" valign="middle" align="Right">
	            <button type="reset">Reset</button>
	            <button type="submit">Submit</button>
			
			
			</tr>

			
			

		</table>
		 </div>
		  <?php get_footer(); ?>
	