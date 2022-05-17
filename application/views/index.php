<?php
	//var_dump($cause);
	$str="je suis l'element le plus l'aide";
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Index</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Germinate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="<?php echo css_loader('bootstrap')?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo css_loader('style')?>" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="<?php echo js_loader('jquery-2.1.4.min') ?>"></script>
<!-- //js -->
<link href="<?php echo css_loader('mislider') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo css_loader('mislider-custom') ?>" rel="stylesheet" type="text/css" />
<!-- font-awesome-icons -->
<link href="<?php echo css_loader('font-awesome') ?>" rel="stylesheet"> 
<!-- //font-awesome-icons -->

</head>
	
<body>





<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="w3_agileits_banner_main_grid">
				<div class="w3_agile_logo">
				<h1><a href="<?php echo site_url('Accueil/index')?>"><span>Le</span>monde<i>Rechauffement climatique </i></a></h1>
				</div>
				<div class="agile_social_icons_banner">
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook" style=color:black><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter" style=color:black><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble" style=color:black><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo" style=color:black><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="agileits_w3layouts_menu">
					<div class="shy-menu">
						<a class="shy-menu-hamburger">
							<span class="layer top"></span>
							<span class="layer mid"></span>
							<span class="layer btm"></span>
						</a>
						<div class="shy-menu-panel">
							<nav class="menu menu--horatio link-effect-8" id="link-effect-8">
								<ul class="w3layouts_menu__list">
									<li class="active"><a href="<?php echo site_url('Accueil/index')?>">Accueil</a></li>
									<li><a href="<?php echo site_url('ControllerPage/indexAbout')?>">Solution</a></li> 
									<li><a href="<?php echo site_url('ControllerPage/indexAccueilAdmin')?>">Administrateur</a></li>
								</ul>
							</nav>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3_banner_info">
				<div class="w3_banner_info_grid">
					<h3 class="test" style=color:black>Reconstruire notre monde pour nos enfants</h3>
					<br>
					<br>
					<br>
					<ul>
						<li><a href="<?php echo site_url('ControllerPage/indexContact') ?>" class="w3l_contact">Contacts</a></li>
						<li><a href="#" class="w3ls_more" data-toggle="modal" data-target="#myModal">Description</a></li>
					</ul>
				</div>
			</div>
			<div class="thim-click-to-bottom">
				<a href="#welcome_bottom" class="scroll">
					<i class="fa  fa-chevron-down"></i>
				</a>
			</div>
		</div>
	</div>
<!-- banner -->
<!---728x90--->

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Germinate
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="<?php echo img_loader('4.jpg') ?>" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- banner-bottom -->
	

<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Cause du Rechauffement <span>Climatique</span></h3>
			<div class="w3_agile_image">
				<img src="<?php echo img_loader('1.png') ?>" alt=" " class="img-responsive" />
			</div>
			
		</div>
<!---728x90--->

		<div class="mis-stage w3_agileits_welcome_grids"> 
			<!-- The element to select and apply miSlider to - the class is optional -->
			<ol class="mis-slider">
			<?php foreach($cause as $element) {?>
				<li class="mis-slide"> 
					<figure> 
					<a href="<?php echo base_url("/index.php/ControllerContenu/select")?>?id=<?php echo $element['id']?>"><img src="<?php echo img_loader($element['images'])?>" alt=" " class="img-responsive"/></a>
						<figcaption><?php echo $element['nom'] ?></figcaption>
					</figure>
				</li>
			<?php }?>
			</ol>
		</div>
	</div>
<!-- //welcome -->
<!-- welcome-bottom -->
	<div id="welcome_bottom" class="welcome-bottom">
		<div class="col-md-6 wthree_welcome_bottom_left">
			<h1>le <span>reboisement</span></h1>
			
			<h3>nous aidera à sauver notre planète </h3>
			
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 wthree_welcome_bottom_right">
			<div class="agileinfo_grid">
				<figure class="agileits_effect_moses">
					<img src="<?php echo img_loader('4.jpg') ?>" alt=" " class="img-responsive" />
					<figcaption>
						<h4>Plantation <span>pour le future</span></h4>
						
					</figcaption>			
				</figure>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //welcome-bottom -->
<!-- news -->

<!-- //news -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<h3 class="agileits_w3layouts_head agileinfo_head"><span>Souscription</h3>
			<div class="w3_agile_image">
				<img src="<?php echo img_loader('12.png') ?>" alt=" " class="img-responsive">
			</div>
			
			<div class="w3ls_news_grids w3ls_newsletter_grids">
				<form action="#" method="post">
					<input name="Your Name" placeholder="Your Name" type="text" required="">
					<input name="Your Email" placeholder="Your Email" type="email" required="">
					<input type="submit" value="Subscribe">
				</form>
			</div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3agile_footer_grids">
				<div class="col-md-3 agileinfo_footer_grid">
					<div class="agileits_w3layouts_footer_logo">
						<h2><a href="<?php echo site_url('Accueil/index')?>"><span>Le</span>monde<i>Rechauffement climatique </i></a></h2>
					</div>
				</div>
				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Contact Info</h3>
					<h4>Call Us <span>+1234 567 891</span></h4>
					<p>My Company, 875 Jewel Road <span>8907 Ukraine.</span></p>
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				
				<div class="col-md-3 agileinfo_footer_grid">
					<h3>Blog Posts</h3>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo img_loader('6.jpg') ?>" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo img_loader('2.jpg') ?>" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo img_loader('5.jpg') ?>" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php echo img_loader('3.jpg') ?>" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="w3_agileits_footer_copy">
			<div class="container">
				<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
		</div>
	</div>
<!-- //footer -->
<!-- stats -->
	<script src="<?php echo js_loader('jquery.waypoints.min') ?>"></script>
	<script src="<?php echo js_loader('jquery.countup') ?>"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!-- mislider -->
	<script src="<?php echo js_loader('mislider') ?>" type="text/javascript"></script>
	<script type="text/javascript">
        jQuery(function ($) {
            var slider = $('.mis-stage').miSlider({
                //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
                stageHeight: 380,
                //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
                slidesOnStage: false,
                //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
                slidePosition: 'center',
                //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
                slideStart: 'mid',
                //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
                slideScaling: 150,
                //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
                offsetV: -5,
                //  Center slide contents vertically - Boolean. Default: false
                centerV: true,
                //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
                navButtonsOpacity: 1,
            });
        });
    </script>
<!-- //mislider -->
<!-- text-effect -->
		<script type="text/javascript" src="<?php echo js_loader('jquery.transit') ?>"></script> 
		<script type="text/javascript" src="<?php echo js_loader('jquery.textFx') ?>"></script> 
		<script type="text/javascript">
			$(document).ready(function() {
					$('.test').textFx({
						type: 'fadeIn',
						iChar: 100,
						iAnim: 1000
					});
			});
		</script>
<!-- //text-effect -->
<!-- menu -->
	<script>
		$(function() {
			
			initDropDowns($("div.shy-menu"));

		});

		function initDropDowns(allMenus) {

			allMenus.children(".shy-menu-hamburger").on("click", function() {
				
				var thisTrigger = jQuery(this),
					thisMenu = thisTrigger.parent(),
					thisPanel = thisTrigger.next();

				if (thisMenu.hasClass("is-open")) {

					thisMenu.removeClass("is-open");

				} else {			
					
					allMenus.removeClass("is-open");	
					thisMenu.addClass("is-open");
					thisPanel.on("click", function(e) {
						e.stopPropagation();
					});
				}
				
				return false;
			});
		}
	</script>
<!-- //menu -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo js_loader('move-top') ?>"></script>
<script type="text/javascript" src="<?php echo js_loader('easing') ?>"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="<?php echo js_loader('bootstrap') ?>"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>

</html>