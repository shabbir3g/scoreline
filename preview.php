<?php 
/*
  Template Name: Preview
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
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/jquery-ui.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/animate.min.css" type="text/css" media="all">
		<style>
			#header {
				background-color: transparent;
			}
			.logo-area{
				       background: #082d45;
				min-height: 96px;
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
			.stats-holder.new:hover {
    background: #23527c;
    background-color: #0C3B5F;
}
a {
    color: #0c3b5f;
}
a:focus, a:hover {
    color: #23527c;
    text-decoration: underline;
}

			.logo-area .nav li a{
			padding: 4px 0 0 0;
			border:0 !important;
			}
			.counter-wrap{    text-align: center;
    font-size: 25px;
    line-height: 34px;
	padding: 15px 0;
    background: transparent url("http://football-wonderkids.co.uk/wp-content/uploads/2016/03/bg.jpg");
	}
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
	.new{background: #B39F69;
    box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.4);    padding: 10px;}
	.new a{color: #fff;}
	.new h3{  font-weight: normal;
    color: rgba(255, 255, 255, 0.5);
    text-transform: uppercase;
    font-size: 20px;}
	.carousel .content h1 a{color:#333;text-decoration:none;}
	.carousel .content .btn{border-radius:0;background-color:#333;border:0;}
	.carousel-indicators .active {
    width: 12px;
    height: 12px;
    margin: 0;
    background-color: #444;
}
h1, h2, h3, h4, h5, h6 {
    color: #0c3b5f;
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
	.bbp-login-form label {
    width: 140px;
    display: inline-block;
    color: #fff;
}
.stats-holder.new img{ width: 106px;
    /* float: left; */
    position: absolute;
    top: -7px;
    left: 25px;}
.stats-holder.new.club img {
           width: 96px;
    left: 38px;
    top: -5px;
}
.stats-holder.new.globe img {
             width: 88px;
    left: 35px;
    top: 11px;
}
#login-widget #user-submit{background: #000;
border-radius: 0;
border: 0;
color: #fff;}

.logo-area .nav li {
    border: 0 !important;
    width: 40px;
    float: left;
    text-align: center;
}
.logo-area .nav li a {
    padding: 0px 0 0 0;
    border: 0 !important;
    line-height: 40px;
    vertical-align: middle;
}
.logo-area {
       background: #082d45;
    max-height: 92px;
}
.logo-area .nav {
    margin: 30px 0 15px 0;
    text-align: right;
}
.carousel {
    position: relative;
    height: 485px;
    overflow: hidden;
}
.carousel .item img{width:100%;}
.carousel-caption {
    background: rgba(0,0,0,.7);
    top: 20%;
    bottom: initial;
}
.carousel-caption h3 {
    color: #fff;
    font-size: 60px;
    line-height: 60px;
}
.most-viewed h3{    font-size: 25px;
    margin-bottom: 25px;
    text-transform: uppercase;
    text-align: left;}
.most-viewed .random-holder {
      width: 22.5%;
	  height: 300px;
    float: left;
    border-radius: 4px;
    margin: 1%;
    position: relative;
    /* border: #d0ddf6 solid 2px; */
    box-shadow: 1px 1px 1px #ccc;
}
#nav-topbar.nav-container {
    background: #0c3b5f;
}
@media only screen and (min-width: 720px) {
.nav-wrap{max-height:50px;overflow:hidden;}
}
.pad50 {
        padding: 0px 0 0px 0;
    text-align: center;
}
.fix.profile{background-size:50% !important;}
.fix.profile img {
        position: relative;
    width: 70%;
    top: 30px;
    left: 0%;}
.img-holder1 {
    padding: 5px;
    margin: 10px;
    height: 200px;
}	
.overlay {
     position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(15,59,95,.2);
    border-radius: 4px;
}
.random-holder.top-players .player-title {
    position: absolute;
    width: 100%;
    left: 0;
}
.random-holder.top-players .player-title a{  
    text-transform: uppercase;
	color: #0c3b5f;
	font-weight: bold;
	}
.pad50 {
    padding: 35px 0 35px 0;
    text-align: center;
    background: #f1f5fc;
    margin: 0;
}
section.most-viewed.interviews {
    text-align: center;
}	
.interviews h3, .interviews p.lead{text-align:center;}
.highlight{font-style:italic;color: #0c3b5f;
    font-weight: bold;border:none;}
.interviews h2{    font-size: 21px;
    margin-bottom: 15px;}
.interviews p.lead{     margin-bottom: 45px;
    border-bottom: 2px solid #eee;
    padding-bottom: 30px; }	
.btn.btn-readmore {
        background: #fff;
    padding: 6px 25px;
    font-size: 18px;
    border: 2px solid #0c3b5f;
}	
.btn.btn-readmore:hover {
    background: #0c3b5f;
    color: #fff;
}
.by-lines{    font-size: 12px;
    /* line-height: 39px; */
    margin-bottom: 15px;}
.interviews p.interview-content{padding: 15px;
    border-top: 1px solid #eee;    font-size: 15px;}
	.interviews .highlight {
    text-transform: capitalize;
}
.specials .background {
    background-repeat: no-repeat !important;
    height: 200px;
    overflow: hidden;
    /* padding: 1px; */
    border: 1px solid #fff;
    background-size: cover !important;
}
.specials .overlay {
    background: rgba(15,59,95,.5);
}
.specials .news-title a {
    color: #fff;
}
.specials .news_text {
    color: #fff;
}
.specials .text-wrap {
    position: absolute;
    width: 100%;
    bottom: 15px;
    left: 20px;
}
.specials .lead{text-align:center;}
.btn-seemore{    background: #e4241d;
    padding: 8px 25px;
    font-size: 18px;
    color: #fff;    margin-top: 35px;}
.btn.btn-seemore:hover, .btn.btn-seemore:focus {
    background: #b61f19;
	color:#fff;
}	
.random-holder.top-players .player-title a.age {
    color: #e80404;
    text-decoration: none;
    font-weight: normal;
    font-size: 14px;
    line-height: 22px;
    text-transform: lowercase;
    vertical-align: top;
    font-style: italic;
}
.random-holder.top-players .player-title a.nationality {
    clear: both;
    display: block;
    font-weight: normal;
    font-size: 14px;
    line-height: 25px;
    text-decoration: none;
    vertical-align: middle;
    text-transform: capitalize;
}
.random-holder.top-players .player-title a.nationality img.flag {
    vertical-align: middle;
    height: 16px;
    margin: 2px 0px 5px 5px;
}
.random-holder.top-players .player-title .pos a{
    font-size: 12px;
    text-decoration: none;
    font-weight: bold;
}
.search_name label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.clubs-mega-menu .dropdown,.natl-mega-menu  .dropdown{position: initial;}	
.clubs-mega-menu .dropdown .dropdown-menu,.natl-mega-menu .dropdown .dropdown-menu{    background: #082d45;
    padding: 10px 22px;width:100%;}
.clubs-mega-menu .dropdown .dropdown-menu li,.natl-mega-menu  .dropdown .dropdown-menu li{
    float: left;
    width: 13%;
        color: rgba(255,255,255,.7);
    font-weight: lighter;
    font-size: 13px;
    cursor: pointer;
	rgba(255,255,255,0.7)
}
.clubs-mega-menu .dropdown .dropdown-menu li:hover,.natl-mega-menu  .dropdown .dropdown-menu li:hover{
	color:rgba(255,255,255,1);
}
.search-wrap{ position: relative;
    padding: 50px 22px 0 22px;
    text-align: left;}
	.dropdown button{
    background: #0c3b5f;
    border: none;
    padding: 5px 10px;	
	}
.search-wrap .form-group label {
    text-align: left;
    width: 100%;
	    padding-left: 8px;
}
@media screen and (min-width: 768px){
.carousel-caption {
    right: 10%;
    left: 10%;
}	
.carousel-inner{
overflow:visible;
}
.image-wrap {
    height: 485px;
    overflow: hidden;
}
.form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
    width: 20%;
}
.form-inline .form-group.age {
    width: 9%;
}
.form-inline .form-group.age input{
    width: 60%;
}
}
.search-wrap .btn.btn-default{vertical-align: bottom;}
.search-wrap .dropdown button {
    background: #0c3b5f;
    border: none;
    padding: 6px 10px;
    width: 80%;
    border-radius: 4px;
	text-align: left;
}
.search-wrap button.btn.btn-seemore {
    margin: 0;
    padding: 6px 10px;
    font-size: 15px;
    vertical-align: bottom;
}
.search-wrap input#player-search {
    background: #0c3b5f;
	color: #fff;
	border-color: #082d45;
}
.ui-widget-content {
    background: #0c3b5f;
    border: none;
}
.ui-menu .ui-menu-item {
    color: #fff;
    font-size: 13px;
}
.ui-state-focus{
background:#082d45 !important;
border-color:#082d45 !important;
}
.carousel {
    position: relative;
    height: 485px;
    overflow: visible;
	    z-index: 1;
}
.clubs-mega-menu .dropdown .dropdown-menu li:hover{text-decoration:underline;    color: rgba(255,255,255,1);}
li.reset-club{color:#e4241d;    display: block;
    clear: both;}
.positions .dropdown-menu{    background: #082d45;padding: 10px 22px;}	
.positions .dropdown-menu li{ cursor:pointer;color:rgba(255,255,255,.7);}
.positions .dropdown-menu li:hover{ color:rgba(255,255,255,1);}	
li.reset-position{    margin: 5px 0;
    padding: 0 20px;
    font-size: 15px;}
	.form-group.natl-mega-menu li img.flag {
    height: 16px;
    width: auto;
    vertical-align: middle;
    margin-right: 4px;
}
 .natl-mega-menu .dropdown .dropdown-menu li {
    width: 19%;
}
li.btn.btn-seemore.reset-nationality {
    clear: both;
    width: 10%;
    margin-top: 10px;
    padding: 5px;
}
.form-group.natl-mega-menu img.flag {
    height: 16px;
    width: auto;
    margin-right: 5px;
    vertical-align: middle;
}
.search-wrap input#age {
    background: #0c3b5f;
    color: #fff;
	    border-color: #082d45;
}
input#filter-clubs,input#filter-nationality {
color: #333;
    float: left;
    border-radius: 2px;
    border: none;
    padding: 2px 7px;
    margin: 16px 0;
}
.form-group.clubs-mega-menu.yamm {
    width: 24%;
}
.form-group.positions {
    width: 17%;
}
.form-group.natl-mega-menu.yamm {
    width: 24%;
}
		</style>

</head>

<body <?php body_class(); ?>>

<div id="wrapper">

	<header id="header">
		<div class="logo-area">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Header New -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9588338010060946"
     data-ad-slot="8711095714"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
					</div>
					<div class="col-md-3">	
						
						
						<ul class="nav navbar-nav pull-right">
						  <li role="presentation"><a href="https://www.facebook.com/footwonderkids?ref=hl"><i class="fa fa-facebook"></i></a></li>
						  <li role="presentation"><a href="https://twitter.com/footwonderkids?lang=en-gb"><i class="fa fa-twitter"></i></a></li>
						  <li role="presentation"><a href="https://plus.google.com/118428543287443384754"><i class="fa fa-google-plus"></i></a></li>
						  <li role="presentation"><a href="https://uk.pinterest.com/footwonderkids"><i class="fa fa-pinterest"></i></a></li>
						  <li role="presentation"><a href="https://www.instagram.com/footwonderkids/"><i class="fa fa-instagram"></i></a></li>
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
		'fields'=>'ids' , 
		'suppress_filters' => 0
	);
$players = new WP_Query( $args );	

$argsLatest = array(
		'post_type' => 'wpcm_player',
		'numposts' => -1,
		'posts_per_page' => 5,
		'meta_key' => 'wpcm_number',
		'suppress_filters' => 0
	);
$latestplayers = get_posts( $argsLatest );



$args_most = array(
		'post_type' => 'wpcm_player',
		'numposts' => 5,
		'posts_per_page' => 5,
		'meta_key' => 'post_views_count',
		'orderby' => 'meta_value_num',
		'suppress_filters' => 0
	);
$most_players = get_posts( $args_most );

$args_lost = array(
		'post_type' => 'wpcm_player',
		'numposts' => 4,
		'posts_per_page' => 4,
		'wpcm_team'=>'Lost Wonderkids'
	);
$lost_players = get_posts( $args_lost );

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
		'fields'=>array('ids','post_title') , 
		'suppress_filters' => 0
	);
$clubs = get_posts( $args1 );	
?>

<section>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000">
			<!-- Indicators -->
			<!--<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>-->

			<!-- Wrapper for slides -->
			<div class="carousel-inner banner-area text-white" role="listbox">
				<div class="item active">
				<div class="image-wrap">
				  <img src="http://football-wonderkids.co.uk/wp-content/uploads/2016/03/nationalarena-cropped_1syvx406wqcgc1kj1ealopagf5.jpg" alt="...">
				  </div>
				  <div class="carousel-caption">
					<h3>Football-Wonderkids</h3>
					
					<div  class="search-wrap" sestyle="display:none;">
						<form action="/search-results" method="get" class="form-inline">
						  <div class="form-group">
							<label for="exampleInputEmail1">Name</label>
							<div>
							<input type="text"  class="form-control" name="player" id="player-search" placeholder="Player name">
							</div>
						  </div>
						  <div class="form-group clubs-mega-menu yamm">
							<label for="exampleInputPassword1">Club</label>
							<div class="dropdown">
							  <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Select Club
								<span class="caret"></span>
							  </button>
							  <input type="hidden" name="club" id="club" />
							  
							  <ul class="dropdown-menu" aria-labelledby="dLabel">
							 <div style="
    width: 100%;
    clear: both;
    float: left;
"><input type="text" name="club-filter" id="filter-clubs" placeholder="Filter"></div>
								<?php
									if($clubs){
										foreach($clubs as $club){?>
											<li><?php echo $club->post_title; ?></li>
										
										<?php }
									
									}
								?>
								<li class="btn btn-seemore reset-club">Reset</li>
							  </ul>
							</div>
						  </div>
						  <div class="form-group positions">
							<label for="exampleInputPassword1">Position</label>
							<div class="dropdown">
							  <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Select Position
								<span class="caret"></span>
							  </button>
							  <input type="hidden" name="position" id="position" />
							  <ul class="dropdown-menu" aria-labelledby="dLabel">
								<?php
								$terms = get_terms( 'wpcm_position' );
								if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
									
									foreach ( $terms as $term ) {
										echo '<li slug="'. $term->slug .'">' . $term->name . '</li>';
									}
								
								}?>
								<li class="btn btn-seemore reset-position">Reset</li>
															  </ul>
							</div>
						  </div>
						  <div class="form-group natl-mega-menu yamm">
							<label for="exampleInputPassword1">Nationality</label>
							<div class="dropdown">
							  <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Select Nationality
								<span class="caret"></span>
							  </button>
							  <input type="hidden" name="nationality" id="nationality" /> 
							  <ul class="dropdown-menu" aria-labelledby="dLabel">
							  <div style="
    width: 100%;
    clear: both;
    float: left;
"><input type="text" name="nationality-filter" id="filter-nationality" placeholder="Filter"></div>
								<?php global $wpclubmanager;
									$countries = $wpclubmanager->countries->countries;
									global $wpdb;
									$values = $wpdb->get_col("SELECT DISTINCT meta_value FROM $wpdb->postmeta WHERE meta_key = 'wpcm_natl'" );
									
									foreach ( $values as $value ) {
									if($value !='' && !empty($countries[$value])){
									?>
										<li key="<?php echo $value; ?>"> <img class="flag" src="<?php echo WPCM_URL; ?>assets/images/flags/<?php echo $value; ?>.png" /><?php echo $countries[$value]; ?></li>
									<?php }}
								
					?><li class="btn btn-seemore reset-nationality">Reset</li>
							  </ul>
							</div>
						  </div>
						  <div class="form-group age">
							<label for="exampleInputEmail1">Age</label>
							<div>
							<input type="text" id="age" class="form-control" name="age" placeholder="Age">
							</div>
						  </div>
						  <button type="submit" class="btn btn-seemore">Go</button>
						  </form>
					</div>
				  </div>
				</div>
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
							<h1 class="animated fadeInDownBig"><?php echo $person->post_title?></h1>
							<p class="animated fadeInRightBig"><?php
							echo $person->post_content;
							?></p>
				
							</span>
						  </div>
						</div>
					</div>
				</div>
				<?php } ?>
				<!-- end slide -->
				
			</div>
           
		
			
			
            
			<!-- Controls -->
			<!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="fa fa-angle-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="fa fa-angle-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>-->
		</div>

</section>

<section class="counter-wrap animated fadeInBottomBig">
	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-4">
				<div class="stats-holder new">
				<img src="http://football-wonderkids.co.uk/wp-content/uploads/2016/03/Players.png" />
				<a href="">
					<span class="counter"><?php echo sizeof( $players->posts );?></span>
					<h3>Players</h3>
				</a>
				</div>
			</div>
			
			<div class="col-sm-4">
			<div class="stats-holder new club">
				<img src="http://football-wonderkids.co.uk/wp-content/uploads/2016/03/Lost-Wonderkids.png" />
			
				<a href="">
					<span class="counter"><?php echo sizeof( $clubs );?></span>
					<h3>Clubs</h3>
				</a>
				</div>
			</div>
			
			<div class="col-sm-4">
			<div class="stats-holder new globe"><img src="http://football-wonderkids.co.uk/wp-content/uploads/2016/03/Nationalities.png" />
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
<section class="pad50 most-viewed">
	<div class="container">
		<div class="row">
		<div class="col-sm-12">
				
				<h3>Top players</h3>
				<?php
				if(sizeof( $most_players ) > 0){
					$c = 0;
					foreach($most_players as $person){
					if($c < 4){
					?>
						<div class="random-holder top-players">
						<a href="<?php echo get_permalink($person->ID);?>"><div class="img-holder1">
						<?php $cat123 = get_the_terms($person->ID,'wpcm_team');
						$args12345 = array(
								'post_type' => 'wpcm_club',
								'numposts' => -1,
								'posts_per_page' => -1,
								'suppress_filters' => 0,
								'wpcm_team'=>$cat123[0]->name
								
							);
							
						$clubs1 = get_posts( $args12345 );

						if ( has_post_thumbnail( $clubs1[0]->ID ) ) {
						//$thumb1 = get_the_post_thumbnail( $clubs->ID, 'player-thumb' );
						$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($clubs1[0]->ID), 'full' );
						}
						if ($thumbnail[0]){?>
						<div class="fix profile" style="background:url(<?php echo $thumbnail[0];?>) no-repeat">
						<div class="overlay"></div>
						<?php }
						if ( has_post_thumbnail( $person->ID ) ) {
						$thumb = get_the_post_thumbnail( $person->ID);
						echo $thumb;
						}
						if ($thumbnail[0]){
						?>
						</div>
						<?php } ?>
						<?php
						 /*if ( has_post_thumbnail( $person->ID ) ) {
						$thumb = get_the_post_thumbnail( $person->ID, 'player-profile', get_the_ID(), array(135,180));
						} else {
							$thumb = '<img height="473" width="439" src="' . get_template_directory_uri() . '/img/player-small.png" alt="' . $person->post_title . '"/>';
						}
						echo $thumb;*/
						?>
						
						</div></a>
						<div class="player-title">
						<a href="<?php echo get_permalink($person->ID);?>"><?php echo $person->post_title?></a>
						<a class="age" href="/stats/?age=<?php echo get_age( get_post_meta( $person->ID, 'wpcm_dob', true ) ); ?>">(<?php echo get_age( get_post_meta( $person->ID, 'wpcm_dob', true ) ); ?> years)</a>
						<?php
					$natl = get_post_meta( $person->ID, 'wpcm_natl', true );
					
					global $wpclubmanager;
					$countries = $wpclubmanager->countries->countries;
					?>
					<a class="nationality" href="/stats/?nationality=<?php echo $natl; ?>"><?php echo $countries[$natl]; ?> <img class="flag" src="<?php echo WPCM_URL; ?>assets/images/flags/<?php echo $natl; ?>.png" /></a>
					
					<!-- position -->
					<?php if ( get_option( 'wpcm_player_profile_show_position' ) == 'yes') {

								$positions = get_the_terms( $person->ID, 'wpcm_position' );

								if ( is_array( $positions ) ) {

									$player_positions = array();

								 ?>

							
								<div class="pos">
									<?php 
										$i = 1;
											foreach ( $positions as $position ) {
											?>
												<a href="/<?php echo $position->slug;?>"><?php echo $position->name; ?></a>
												<?php 
													if($i < count($positions)){
													echo ',';
													}
												?>
											<?php $i++;}

										?>
								</div>
							
						<?php
						}
					}
					?>
					<!-- ./ position -->
					
						</div>
						</div>
					
					<?php } $c++; }
				}?>
		</div>
	</div>	
</section>

<!-- Interviews -->
<section class="most-viewed interviews">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Interviews</h3>
				<p class="lead">What's new in the interviews? <span class="highlight"><a href="http://football-wonderkids.co.uk/category/interview/">Check!</a></span></p>
					<div class="row">
					<?php 
					$interviews = get_posts('category=473&numberposts=2');				
					foreach($interviews as $item){?>
					
					<?php $author_name = get_author_name( $item->post_author ); ?>
						<div class="col-sm-6">
							<h2><?php echo $item->post_title?></h2>
							<p class="by-lines">By <span class="highlight"> <?php echo $author_name; ?></span></p>
							<p class="interview-content">
							<?php
								echo wp_trim_words( $item->post_content, 40, '...' );
								?>
							</p>
							<a class="btn btn-readmore" href="<?php echo get_permalink($item->ID);?>">Continue Reading</a>
						</div>
					<?php }
					?>	
						
					</div>
				
			</div>
		</div>
	</div>
</section>
<!-- Interviews -->

<!--
<section class="most-viewed">
	
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
				if(sizeof( $latestplayers ) > 0){
					$c = 0;
					foreach($latestplayers as $person){
					
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
					<?php  }
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
	</div>
</section>-->

<section class="most-viewed specials">
	
	<div class="container">
		<div class="row">
			
			<!--<div class="col-sm-4">
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
			</div>-->
			
			<div class="col-sm-12">
				
					<?php
			$posts = get_posts('category=88&numberposts=5');
				if(sizeof( $posts ) > 0){
					$c = 0;
					foreach($posts as $person){
					
					if ( has_post_thumbnail( $person->ID ) ) {
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($person->ID), 'full' );
							} 
					if($c < 2){
					
					?>
						<div class="col-sm-6 background" style="background:url(<?php echo $thumb[0];?>);">
						<div class="overlay"></div>
							<div class="text-wrap">
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
						</div>
					<?php }else{
					
					?>
						<div class="col-sm-4 background" style="background:url(<?php echo $thumb[0];?>);">
						<div class="overlay"></div>
							<div class="text-wrap">
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
						</div>
					<?php
					}					
					$c++; }
				}?>
			</div>
			<p class="lead"><a class="btn btn-seemore" href="http://football-wonderkids.co.uk/category/special/">See our Specials!</a></p>
			<!--<div class="col-sm-4">
				
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

<!--<section class="pad100" style="overflow: hidden;">
	<div class="row">
	<div class="col-sm-12">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	
	<ins class="adsbygoogle"
		 style="display:inline-block;width:728px;height:90px"
		 data-ad-client="ca-pub-9588338010060946"
		 data-ad-slot="4533120519"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	</div>
	</div>
</section>-->
<section class="pad50 most-viewed">
	<div class="container">
		<div class="row">
		<div class="col-sm-12">
				
				<h3>Lost Wonderkids</h3>
				<?php
				if(sizeof( $lost_players ) > 0){
					$c = 0;
					foreach($lost_players as $person){
					if($c < 4){
					?>
						<div class="random-holder top-players">
						<a href="<?php echo get_permalink($person->ID);?>">
						<div class="img-holder1">
						<?php $cat123 = get_the_terms($person->ID,'wpcm_team');
					$args12345 = array(
		'post_type' => 'wpcm_club',
		'numposts' => -1,
		'posts_per_page' => -1,
		'suppress_filters' => 0,
		'wpcm_team'=>$cat123[0]->name
		
	);
	
$clubs1 = get_posts( $args12345 );

 if ( has_post_thumbnail( $clubs1[0]->ID ) ) {
						//$thumb1 = get_the_post_thumbnail( $clubs->ID, 'player-thumb' );
						$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($clubs1[0]->ID), 'full' );
						}
						if ($thumbnail[0]){?>
						<div class="fix profile" style="background:url(<?php echo $thumbnail[0];?>) no-repeat">
						<div class="overlay"></div>
						<?php }
						if ( has_post_thumbnail( $person->ID ) ) {
						$thumb = get_the_post_thumbnail( $person->ID);
						echo $thumb;
						}
						if ($thumbnail[0]){
						?>
						</div>
						<?php } ?>
						<?php
						 /*if ( has_post_thumbnail( $person->ID ) ) {
						$thumb = get_the_post_thumbnail( $person->ID, 'player-profile', get_the_ID(), array(135,180));
						} else {
							$thumb = '<img height="473" width="439" src="' . get_template_directory_uri() . '/img/player-small.png" alt="' . $person->post_title . '"/>';
						}
						echo $thumb;*/
						?>
						
						</div></a>
						<div class="player-title">
						<a href="<?php echo get_permalink($person->ID);?>"><?php echo $person->post_title?></a>
						<a class="age" href="/stats/?age=<?php echo get_age( get_post_meta( $person->ID, 'wpcm_dob', true ) ); ?>">(<?php echo get_age( get_post_meta( $person->ID, 'wpcm_dob', true ) ); ?> years)</a>
						<?php
					$natl = get_post_meta( $person->ID, 'wpcm_natl', true );
					
					global $wpclubmanager;
					$countries = $wpclubmanager->countries->countries;
					?>
					<a class="nationality" href="/stats/?nationality=<?php echo $natl; ?>"><?php echo $countries[$natl]; ?> <img class="flag" src="<?php echo WPCM_URL; ?>assets/images/flags/<?php echo $natl; ?>.png" /></a>
					
					<!-- position -->
					<?php if ( get_option( 'wpcm_player_profile_show_position' ) == 'yes') {

								$positions = get_the_terms( $person->ID, 'wpcm_position' );

								if ( is_array( $positions ) ) {

									$player_positions = array();

								 ?>

							
								<div class="pos">
									<?php 
										$i = 1;
											foreach ( $positions as $position ) {
											?>
												<a href="/<?php echo $position->slug;?>"><?php echo $position->name; ?></a>
												<?php 
													if($i < count($positions)){
													echo ',';
													}
												?>
											<?php $i++;}

										?>
								</div>
							
						<?php
						}
					}
					?>
					<!-- ./ position -->
					
						</div>
						</div>
					
					<?php } $c++; }
				}?>
		</div>
	</div>	
</section>
<!--<section class="pad50">
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
</section>-->

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

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

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

jQuery( "#player-search" ).autocomplete({
      source: "/wp-admin/admin-ajax.php?action=player",
      minLength: 2,
      select: function( event, ui ) {
        
      }
    });
	jQuery(".clubs-mega-menu .dropdown .dropdown-menu li:not(.reset-club)").click(function(){
		jQuery(this).closest('.dropdown').find('button').html(jQuery(this).html()+' <span class="caret"></span>');
		jQuery('#club').val(jQuery(this).html());
	});
	jQuery(".clubs-mega-menu .dropdown .dropdown-menu li.reset-club").click(function(){
		jQuery(this).closest('.dropdown').find('button').html('Select Club <span class="caret"></span>');
		jQuery('#club').val('');
	});
	jQuery(".positions .dropdown .dropdown-menu li:not(.reset-position)").click(function(){
		jQuery(this).closest('.dropdown').find('button').html(jQuery(this).html()+' <span class="caret"></span>');
		jQuery('#position').val(jQuery(this).attr('slug'));
	});
	jQuery(".positions .dropdown .dropdown-menu li.reset-position").click(function(){
		jQuery(this).closest('.dropdown').find('button').html('Select Position <span class="caret"></span>');
		jQuery('#position').val('');
	});
	jQuery(".natl-mega-menu .dropdown .dropdown-menu li:not(.reset-nationality)").click(function(){
		jQuery(this).closest('.dropdown').find('button').html(jQuery(this).html()+' <span class="caret"></span>');
		jQuery('#nationality').val(jQuery(this).attr('key'));
	});
	jQuery(".natl-mega-menu .dropdown .dropdown-menu li.reset-nationality").click(function(){
		jQuery(this).closest('.dropdown').find('button').html('Select nationality <span class="caret"></span>');
		jQuery('#nationality').val('');
	});
	jQuery('input#filter-clubs').keyup(function() {
    filter(this,'.clubs-mega-menu ul'); 
	});
	jQuery('input#filter-nationality').keyup(function() {
    filter(this,'.natl-mega-menu ul'); 
	});
	//Fix for yamm mega menu

});
jQuery(document).on('click', '.yamm .dropdown-menu', function(e) {
  e.stopPropagation()
});	
function filter(element,ele) {
    var value = jQuery(element).val().toLowerCase();
    jQuery(ele+" > li").each(function () {
        var search = jQuery(this).text().toLowerCase(); 
        if (search.indexOf(value) > -1) {
            jQuery(this).show();
        } else {
            jQuery(this).hide();
        }
    });
}
</script>

</body>
</html>