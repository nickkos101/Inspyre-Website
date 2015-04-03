<html>
<head>
	<title>Inspyre - A california digital agency <?php echo wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/typed.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/function.js"></script>
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700|Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58366141-6', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body class="homepage">
	<div class="col-wrap">	
		<header class="skyline column">
			<h1 class="logo taligncenter"><a href="<?php echo get_site_url(); ?>">Inspyre</a></h1>
			<h2 class="taligncenter"><i><span>california</span> digital agency</i></h2>
			<div class="container">
				<nav class="aligncenter">
					<ul>
						<li>Menu</li>
						<li><a href="<?php echo get_site_url(); ?>/contact-us">Contact Us</a></li>
					</ul>
				</nav>
			</div>
			<div class="menu">
				<div class="close"><i class="fa fa-times"></i></div>
				<div class="menu-section black">
					<div class="col-wrap">
						<div class="column half">
							<h3>what we do</h3>
						</div>
						<div class="column half">
							<ul>
								<li><a href="<?php echo get_site_url(); ?>/services/web-design">Web Design</a></li>
								<li><a href="<?php echo get_site_url(); ?>/services/photography">Photography</a></li>
								<li><a href="<?php echo get_site_url(); ?>/services/ecommerce">e-Commerce</a></li>
								<li><a href="<?php echo get_site_url(); ?>/services/print-and-branding">Print and Branding</a></li>
								<li><a href="<?php echo get_site_url(); ?>/services/custom-projects">Custom Projects</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="menu-section white">
					<div class="col-wrap">
						<div class="column half">
							<h3>who we are</h3>
						</div>
						<div class="column half">
							<ul>
								<li><a href="<?php echo get_site_url(); ?>/about-us">About Us</a></li>
								<li><a href="<?php echo get_site_url(); ?>/blog">Blog</a></li>
								<li><a href="<?php echo get_site_url(); ?>/social-hub">Social Hub</a></li>
								<!-- <li><a href="<?php echo get_site_url(); ?>/our-team">Our Team</a></li>-->
							</ul>
						</div>
					</div>
				</div>
				<div class="menu-section black">
					<div class="col-wrap">
						<div class="column half">
							<h3>how to reach us</h3>
						</div>
						<div class="column half">
							<ul>
								<li>1205 J St. San Diego CA, 92021</li>
								<li>contact@inspyregroup.com</li>
								<li>619-729-8424</li>
								<li>Hours 9AM - 5PM Mon-Fri</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php if (is_home()) { ?>
			<div class="taligncenter">
			<div class="btn btm-btn">Client Login</div>
			</div>
			<div class="bottom">
				<?php

				$args = array(
        'echo'           => true,
        'redirect'       => 'http://inspyregroup.com/my-account', 
);  
				wp_login_form($args); ?> 
			</div>
			<?php } ?>
		</header>