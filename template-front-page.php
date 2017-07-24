<?php 
/*
  Template Name: Template front page
 */
//get_header(); ?>
<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>
<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"light-top"};
</script>

<script type="text/javascript" src="//s3.amazonaws.com/cc.silktide.com/cookieconsent.latest.min.js"></script>
<!-- End Cookie Consent plugin -->

<head>
<meta name="google-site-verification" content="IWZI3_sfIL1lxz2Z5lzWRiNbT5HpISrjvI5XGskboHU" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54310854-1', 'auto');
  ga('send', 'pageview');

</script>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php wp_title(''); ?></title>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/bootstrap.min.css" type="text/css" media="all">
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/animate.min.css" type="text/css" media="all">
		<style>
			#header {
				background-color: transparent;
			}
			.logo-area{
				background:#fff;
				    min-height: 109px;
			}
			.logo h1{
			    font-size: 35px;
				margin: 54px 0 15px 0;
			}
			.logo-area .toggle-search{
				display:none;
			}
			.logo-area .search-expand{
			    display: block;
    top: 25px;
    position: initial;
    width: auto;
    margin-top: 25px;
			}
			.logo-area .nav{
			    margin: 54px 0 15px 0;
				    text-align: right;
			}
			.logo-area .nav li{
			border:0 !important;
			width:56px;
			float:right;
			}
			.logo-area .nav li a{
			padding: 4px 0 0 0;
			border:0 !important;
			}
			.counter-wrap{    text-align: center;
    font-size: 30px;
    line-height: 64px;
    margin-top: 50px;}
	.counter-wrap a{text-decoration:none;color:#000;}
	.most-viewed{    margin-top: 50px;
    padding: 35px 0;}
		.most-viewed h4 {
    font-size: 18px;
    margin: 0 0 20px 0;
    border-bottom: 1px dashed #222;
    padding: 0 0 5px 0;
}
	.stats-holder {
    padding: 15px;
    margin: 10px;
    background-color: #fff;
}
.pad100{padding:50px 0 50px 0;    text-align: center;}
.pad50{padding:50px 0 0px 0;text-align: center;}
.random-holder {
    width: 20%;
    float: left;
}

.img-holder {
        padding: 5px;
    margin: 10px;
    height: 200px;
}
.latest-news a{padding:20px 0px;color:#000;}
.latest-news-holder {
    padding: 8px 0;
}
.latest-news {
    padding: 30px;
}
.news-title a {
    font-weight: bold;
}
.news_text {
    font-size: 14px;
}
.main {
    background-color: #eee !important;
	}
body {
    background: #fff;
}	
.logo a{color:#000;text-decoration:none;}
.carousel {
    position: relative;
    height: 400px;
}
.carousel-control {
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    top: 45%;
    background-color: #000;
}
.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
    min-height: 400px;
	background-color:#eee;
}
.spanimg{position: absolute;
    top: 80px;
    left: 33%;}
.spantext {
    position: absolute;
    top: 70px;
    left: 0;
    width: 80%;
}
.spantext h1{    font-size: 60px;
    line-height: 80px;}	
.spantext p	{    padding: 10px 0;}
.carousel .content{    height: 400px;
    position: absolute;
    top: 20px;
    left: 0px;
	right:0px;
    overflow: hidden;
    background-color: #eee;}
	.new{background-color:#222;}
	.new a{color:#fff}
	.new h3{color:#fff;}
	.carousel .content h1 a{color:#333;text-decoration:none;}
	.carousel .content .btn{border-radius:0;background-color:#333;border:0;}
	.carousel-indicators .active {
    width: 12px;
    height: 12px;
    margin: 0;
    background-color: #444;
}
.carousel-indicators li {
    border: 2px solid #444;
}
#login-widget{opacity:0;
    position: absolute;
    top: 51px;
    background-color: #444;
    right: 46px;
    width: 250px;
    padding: 20px 10px 0 10px;transition:all .5s ease;}
	#login-widget.open{opacity:1;}
	#login-widget .widget a {
    color: #fff;
}
#login-widget label{color:#fff !important;}
#menu-item-4516{float:right;}
#menu-item-4516 a{    background-color: #e80404;
    color: #fff !important;}
	#bp_core_login_widget-2{display:none;}
		</style>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9588338010060946",
    enable_page_level_ads: true
  });
</script>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">

	<header id="header">
		<div class="logo-area">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- Top of home page -->
						<ins class="adsbygoogle"
							 style="display:inline-block;width:728px;height:90px"
							 data-ad-client="ca-pub-9588338010060946"
							 data-ad-slot="1579654115"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
					<div class="col-md-3">	
						<div class="toggle-search"><i class="fa fa-search"></i></div>
						<div class="search-expand">
							<div class="search-expand-inner">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-9">
						<div class="logo"><h1><a href="<?php echo bloginfo('url')?>">Football-Wonderkids</a></h1></div>
					</div>
					<div class="col-md-3">	
						<ul class="nav nav-justified">
						  <li role="presentation"><a href="https://www.facebook.com/footwonderkids?ref=hl"><img src="http://football-wonderkids.co.uk/wp-content/uploads/2015/08/football_facebook.png" alt="football_facebook" width="32" height="32" class="alignnone size-full wp-image-4407" /></a></li>
						  <li role="presentation"><a href="https://twitter.com/footwonderkids?lang=en-gb"><img src="http://football-wonderkids.co.uk/wp-content/uploads/2015/08/football_twitter.png" alt="football_twitter" width="32" height="32" class="alignnone size-full wp-image-4409" /></a></li>
						  <li role="presentation"><a href="http://football-wonderkids.co.uk/wp-content/uploads/2015/08/football_google.png"><img src="http://football-wonderkids.co.uk/wp-content/uploads/2015/08/football_google.png" alt="football_google" width="32" height="32" class="alignnone size-full wp-image-4410" /></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
		<?php if ( has_nav_menu('topbar') ): ?>
			<nav class="nav-container group" id="nav-topbar">
				<div class="nav-toggle"><i class="fa fa-bars"></i></div>
				<div class="nav-text"></div>
				<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'topbar','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
				
				<?php if ( is_active_sidebar( 'primary' ) ) : ?>
					<div id="login-widget">
						<?php dynamic_sidebar( 'primary' ); ?>
					</div>
				<?php endif; ?>
				
			</nav><!--/#nav-topbar-->
		<?php endif; ?>
	</header><!--/#header-->
	

	
	
			<?php if( is_match() ) :
				get_template_part('inc/match-title');
			endif; ?>

				
						<!-- Counter -->
<?php
$args = array(
		'post_type' => 'wpcm_player',
		'numposts' => -1,
		'posts_per_page' => -1,
		'meta_key' => 'wpcm_number',
		'suppress_filters' => 0
	);
$players = get_posts( $args );	

$args_most = array(
		'post_type' => 'wpcm_player',
		'numposts' => 5,
		'posts_per_page' => 5,
		'meta_key' => 'post_views_count',
		'orderby' => 'meta_value_num',
		'suppress_filters' => 0
	);
$most_players = get_posts( $args_most );

$args_random = array(
		'post_type' => 'wpcm_player',
		'numposts' => 5,
		'posts_per_page' => 5,
		'orderby' => 'rand',
		'suppress_filters' => 0
	);
$random_players = get_posts( $args_random );
	
$args_young = array(
		'post_type' => 'wpcm_player',
		'numposts' => 5,
		'posts_per_page' => 5,
		'meta_key' => 'wpcm_dob',
		'orderby' => 'meta_value_num',
		'suppress_filters' => 0
	);
$young_players = get_posts( $args_young );	
	
//echo '<pre>';print_r($young_players);
$args1 = array(
		'post_type' => 'wpcm_club',
		'numposts' => -1,
		'posts_per_page' => -1,
		'suppress_filters' => 0
	);
$clubs = get_posts( $args1 );	
?>

<section>
<div class="container">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner banner-area text-white" role="listbox">
				<!-- slide -->
				<?php
				$bannerposts = get_posts('category=409&numberposts=5');
				$i= 0;
				foreach($bannerposts as $person){
				if($i==0){
				$v = 'active';
				}else{
				$v='';
				}
				$i++;
				?>
				<div class="item <?php echo $v;?>">
					
					<!-- slide content -->
					<div class="content text-left">
						<div class="row">
						  <div class="col-sm-4">
						  <span class="spanimg animated fadeInDownBig">
						  <?php
						  if ( has_post_thumbnail( $person->ID ) ) {
							$thumb = get_the_post_thumbnail( $person->ID);
							echo $thumb;
							} 
							
						  ?>
						  </span>
						  </div>
						  <div class="col-sm-8">
						  <span class="spantext">
							<h1 class="animated fadeInDownBig"><a href="<?php echo get_permalink($person->ID);?>"><?php echo $person->post_title?></a></h1>
							<p class="animated fadeInRightBig"><?php
							echo $person->post_content;
							?></p>
							<a href="#" class="btn btn-primary animated fadeInUpBig">Read more</a>
							</span>
						  </div>
						</div>
					</div>
				</div>
				<?php } ?>
				<!-- end slide -->
				
			</div>
           
		
			
			
            
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="fa fa-angle-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="fa fa-angle-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
</div>
</section>

<section class="counter-wrap animated fadeInBottomBig">
	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-4">
				<div class="stats-holder new">
				<a href="">
					<span class="counter"><?php echo sizeof( $players );?></span>
					<h3>Players</h3>
				</a>
				</div>
			</div>
			
			<div class="col-sm-4">
			<div class="stats-holder new">
				<a href="">
					<span class="counter"><?php echo sizeof( $clubs );?></span>
					<h3>Clubs</h3>
				</a>
				</div>
			</div>
			
			<div class="col-sm-4">
			<div class="stats-holder new">
				<a href="">
					<span class="counter">56</span>
					<h3>Nationalities</h3>
				</a>
				</div>
			</div>
			
		</div>
	</div><!-- /.container -->	
	
</section>

<!-- Counter ends-->

<section class="most-viewed" style="background-color: #eee;">
	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-4">
				<div class="stats-holder">
				<h4>Most viewed players</h4>
				<?php
				if(sizeof( $most_players ) > 0){
					$c = 0;
					foreach($most_players as $person){
					if($c < 5){
					?>
					<div class="row">
						<div class="col-sm-3">
						<?php
						 if ( has_post_thumbnail( $person->ID ) ) {
						$thumb = get_the_post_thumbnail( $person->ID, 'player-thumb' );
						} else {
							$thumb = '<img src="' . get_template_directory_uri() . '/img/player-thumb.png" alt="' . $person->post_title . '"/>';
						}
						echo $thumb;
						?>
						</div>
						<div class="col-sm-6"><a href="<?php echo get_permalink($person->ID);?>"><?php echo $person->post_title?></a></div>
						<div class="col-sm-3"> 
						<?php
						$age=get_age( get_post_meta( $person->ID, 'wpcm_dob', true ) ); 
						if($age<150){
						echo $age .' years';
						}?></div>
					</div>
					<?php } $c++; }
				}?>
				</div>
			</div>
			
			<div class="col-sm-4">
				
				<div class="stats-holder">
				<h4>Latest players</h4>
				<?php
				if(sizeof( $players ) > 0){
					$c = 0;
					foreach($players as $person){
					if($c < 5){
					?>
					<div class="row">
						<div class="col-sm-3">
						<?php
						 if ( has_post_thumbnail( $person->ID ) ) {
						$thumb = get_the_post_thumbnail( $person->ID, 'player-thumb' );
						} else {
							$thumb = '<img src="' . get_template_directory_uri() . '/img/player-thumb.png" alt="' . $person->post_title . '"/>';
						}
						echo $thumb;
						?>
						</div>
						<div class="col-sm-6"><a href="<?php echo get_permalink($person->ID);?>"><?php echo $person->post_title?></a></div>
						<div class="col-sm-3"> 
						<?php
						$age=get_age( get_post_meta( $person->ID, 'wpcm_dob', true ) ); 
						if($age<150){
						echo $age .' years';
						}?></div>
					</div>
					<?php } $c++; }
				}?>
				</div>
			</div>
			
			<div class="col-sm-4">
				
				<div class="stats-holder">
				<h4>Youngest players</h4>
				<?php
				if(sizeof( $young_players ) > 0){
					$c = 0;
					foreach($young_players as $person){
					if($c < 5){
					?>
					<div class="row">
						<div class="col-sm-3">
						<?php
						 if ( has_post_thumbnail( $person->ID ) ) {
						$thumb = get_the_post_thumbnail( $person->ID, 'player-thumb' );
						} else {
							$thumb = '<img src="' . get_template_directory_uri() . '/img/player-thumb.png" alt="' . $person->post_title . '"/>';
						}
						echo $thumb;
						?>
						</div>
						<div class="col-sm-6"><a href="<?php echo get_permalink($person->ID);?>"><?php echo $person->post_title?></a></div>
						<div class="col-sm-3"> 
						<?php
						$age=get_age( get_post_meta( $person->ID, 'wpcm_dob', true ) ); 
						if($age<150){
						echo $age .' years';
						}?></div>
					</div>
					<?php } $c++; }
				}?>
				</div>
			</div>
			
		</div>
	</div><!-- /.container -->	
	
</section>
<section class="pad100" style="overflow: hidden;">
	<div class="row">
	<div class="col-sm-12">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- 2nd ad -->
	<ins class="adsbygoogle"
		 style="display:inline-block;width:728px;height:90px"
		 data-ad-client="ca-pub-9588338010060946"
		 data-ad-slot="4533120519"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	</div>
	</div>
</section>
<section class="most-viewed" style="background-color: #eee;">
	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-4">
				<div class="stats-holder latest-news">
				<h4>Latest Skills</h4>
					<?php
			$posts = get_posts('category=328&numberposts=5');
				if(sizeof( $posts ) > 0){
					$c = 0;
					foreach($posts as $person){
					if($c < 5){
					?>
					<div class="latest-news-holder">
					<div class="news-title">
					<a href="<?php echo get_permalink($person->ID);?>"><?php echo $person->post_title;?></a>
					</div>
					<div class="news_text">
					<?php
					
					$input = strip_tags($person->post_content);
					$length=50;
					//find last space within length
					$last_space = strrpos(substr($input, 0, $length), ' ');
					$trimmed_text = substr($input, 0, $last_space);

					//add ellipses (...)
					$trimmed_text .= '...';
					echo $trimmed_text;
					?>
					</div>
					</div>
					<?php } $c++; }
				}?>
				</div>
			</div>
			
			<div class="col-sm-4">
				
				<div class="stats-holder latest-news">
				<h4>Latest Specials</h4>
					<?php
			$posts = get_posts('category=88&numberposts=5');
				if(sizeof( $posts ) > 0){
					$c = 0;
					foreach($posts as $person){
					if($c < 5){
					?>
					<div class="latest-news-holder">
					<div class="news-title">
					<a href="<?php echo get_permalink($person->ID);?>"><?php echo $person->post_title;?></a>
					</div>
					<div class="news_text">
					<?php
					
					$input = strip_tags($person->post_content);
					$length=50;
					//find last space within length
					$last_space = strrpos(substr($input, 0, $length), ' ');
					$trimmed_text = substr($input, 0, $last_space);

					//add ellipses (...)
					$trimmed_text .= '...';
					echo $trimmed_text;
					?>
					</div>
					</div>
					<?php } $c++; }
				}?>
				</div>
			</div>
			
			<div class="col-sm-4">
				
				<div class="stats-holder latest-news">
				<h4>Latest News</h4>
				<?php
			$posts = get_posts('category=97&numberposts=5');
				if(sizeof( $posts ) > 0){
					$c = 0;
					foreach($posts as $person){
					if($c < 5){
					?>
					<div class="latest-news-holder">
					<div class="news-title">
					<a href="<?php echo get_permalink($person->ID);?>"><?php echo $person->post_title;?></a>
					</div>
					<div class="news_text">
					<?php
					
					$input = strip_tags($person->post_content);
					$length=50;
					//find last space within length
					$last_space = strrpos(substr($input, 0, $length), ' ');
					$trimmed_text = substr($input, 0, $last_space);

					//add ellipses (...)
					$trimmed_text .= '...';
					echo $trimmed_text;
					?>
					</div>
					</div>
					<?php } $c++; }
				}?>
				</div>
			</div>
			
		</div>
	</div><!-- /.container -->	
	
</section>

<section class="pad50">
	<div class="container">
		<div class="row">
		<?php
				if(sizeof( $random_players ) > 0){
					
					foreach($random_players as $person){
					
					?>
						<div class="random-holder">
						<div class="img-holder">
						<?php
						 if ( has_post_thumbnail( $person->ID ) ) {
						$thumb = get_the_post_thumbnail( $person->ID, 'player-profile', get_the_ID(), array(135,180));
						} else {
							$thumb = '<img height="473" width="439" src="' . get_template_directory_uri() . '/img/player-small.png" alt="' . $person->post_title . '"/>';
						}
						echo $thumb;
						?>
						</div>
						<div class="player-title">
						<a href="<?php echo get_permalink($person->ID);?>"><?php echo $person->post_title?></a>
						</div>
						</div>
					
					<?php  }
				}?>
		</div>
	</div>	
</section>

<?php get_sidebar(); ?>


				

	<footer id="footer">	
		<?php // footer widgets
			$total = 4;
			if ( ot_get_option( 'footer-widgets' ) != '' ) {
				
				$total = ot_get_option( 'footer-widgets' );
				if( $total == 1) $class = 'one-full';
				if( $total == 2) $class = 'one-half';
				if( $total == 3) $class = 'one-third';
				if( $total == 4) $class = 'one-fourth';
				}

				if ( ( is_active_sidebar( 'footer-1' ) ||
					   is_active_sidebar( 'footer-2' ) ||
					   is_active_sidebar( 'footer-3' ) ||
					   is_active_sidebar( 'footer-4' ) ) && $total > 0 ) 
		{ ?>		
		<section class="container" id="footer-widgets">
			<div class="container-inner">
				
				<div class="pad group">
					<?php $i = 0; while ( $i < $total ) { $i++; ?>
						<?php if ( is_active_sidebar( 'footer-' . $i ) ) { ?>
					
					<div class="footer-widget-<?php echo $i; ?> grid <?php echo $class; ?> <?php if ( $i == $total ) { echo 'last'; } ?>">
						<?php dynamic_sidebar( 'footer-' . $i ); ?>
					</div>
					
						<?php } ?>
					<?php } ?>
				</div><!--/.pad-->
				
			</div><!--/.container-inner-->
		</section><!--/.container-->	
		<?php } ?>
		
		<?php if ( has_nav_menu( 'footer' ) ): ?>
			<nav class="nav-container group" id="nav-footer">
				<div class="nav-toggle"><i class="fa fa-bars"></i></div>
				<div class="nav-text"></div>
				<div class="nav-wrap"><?php wp_nav_menu( array('theme_location'=>'footer','menu_class'=>'nav container group','container'=>'','menu_id'=>'','fallback_cb'=>false) ); ?></div>
			</nav><!--/#nav-footer-->
		<?php endif; ?>
		
		<section class="container" id="footer-bottom">
			<div class="container-inner">
				
				<div class="pad group">
					
					<div class="grid one-half">
						
						<?php if ( ot_get_option('footer-logo') ): ?>
							<img id="footer-logo" src="<?php echo ot_get_option('footer-logo'); ?>" alt="<?php get_bloginfo('name'); ?>">
						<?php endif; ?>
						
						<div id="copyright">
							<?php if ( ot_get_option( 'copyright' ) ): ?>
								<p><?php echo ot_get_option( 'copyright' ); ?></p>
							<?php else: ?>
								<p><?php bloginfo(); ?> &copy; <?php echo date( 'Y' ); ?>. <?php _e( 'All Rights Reserved.', 'scoreline' ); ?></p>
							<?php endif; ?>
						</div><!--/#copyright-->
						
						<?php if ( ot_get_option( 'credit' ) != 'off' ): ?>
						<div id="credit">
							<p><?php _e('Powered by','scoreline'); ?> <a href="http://wordpress.org" rel="nofollow">WordPress</a>. <?php _e('Theme by','scoreline'); ?> <a href="http://wpclubmanager.com" rel="nofollow">Clubpress</a>.</p>
						</div><!--/#credit-->
						<?php endif; ?>
						
					</div>
					
					<div class="grid one-half last">	
						<?php cp_social_links(); ?>
					</div>
				
				</div><!--/.pad-->

				<a id="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
				
			</div><!--/.container-inner-->
		</section><!--/.container-->
		
	</footer><!--/#footer-->

</div><!--/#wrapper-->

<?php wp_footer(); ?>
<script src="<?php echo bloginfo('template_url')?>/js/bootstrap.min.js"></script>
<!-- Waypoints script -->
<script src="<?php echo bloginfo('template_url')?>/js/waypoints.min.js"></script>

<!-- Counterup script -->
<script src="<?php echo bloginfo('template_url')?>/js/jquery.counterup.min.js"></script>
<script>
jQuery(document).ready(function(){
/*-- Course counter --*/
jQuery('.counter').counterUp({
	delay: 10,
	time: 1000
});

jQuery('.img-holder img').each(function(){

var h = jQuery(this).attr('src');
jQuery(this).hide();
jQuery(this).parent().css({'background':'url('+h+')','background-repeat': 'no-repeat','background-size': 'contain','background-position': '50% 50%'})
 
});

jQuery('#menu-item-4516 a').on('click',function(e){
	e.preventDefault();
	jQuery('#login-widget').toggleClass('open');

});

});
</script>

</body>
</html>
