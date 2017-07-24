<?php 
/*
  Template Name: Search template
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
    width: 100%;
    border-radius: 4px;
	text-align: left;
	color:#fff;
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
.search-results{min-height:600px;padding:0;margin:0;}
   @media screen and (max-width: 768px){
        .container-fluid {
        padding-right: 0px;
        padding-left: 0px;
    }
    .links.nav{
        position: absolute;
        width: 85%;
    }
    .links.nav > li {
        display: inline-block;
    }
    .links.nav li a {
        line-height: 20px;
        display: block;
        padding: 17px 14px;
    }
    .carousel-caption{
        top: 13%;
        left: 5%;
        right: 5%;
    }
    .carousel-caption h3.website-title {
        color: #fff;
        font-size: 28px;
        line-height: 30px;
            margin: 0;
    }
    .banner-image{
            width: 100%;
        background-image: url(http://football-wonderkids.co.uk/wp-content/uploads/2016/03/nationalarena-cropped_1syvx406wqcgc1kj1ealopagf5.jpg);
        height: 485px;
        background-size: cover;
    }

    .search-wrap {
        padding: 12px 22px 0 22px;
    }
    .search-wrap .dropdown button {
        width: 100%;
    }
    .form-group.clubs-mega-menu.yamm, .form-group.positions, .form-group.natl-mega-menu.yamm {
         width: 100%; 
    }
    .search-wrap label{
        display: none;
    }
    .search-wrap .caret{
        float: right;
        margin-top: 11px;
    }
    .carousel-inner{
        overflow: visible;
    }

    .clubs-mega-menu .dropdown .dropdown-menu li, .natl-mega-menu .dropdown .dropdown-menu li {
        width: 45%;
    }
    .positions .dropdown-menu {
        width: 100%;
    }
    .clubs-mega-menu .dropdown-menu{
        top: 33%;
    }
    .natl-mega-menu .dropdown-menu{
        top: 67%;
    }
    .new {
    text-align: left;
    padding-left: 126px;
}
.stats-holder.new.club img {
    left: 32px;
}
.stats-holder.new.globe img {
    left: 37px;
}
.random-holder.top-players .player-title {
    position: absolute;
    width: 100%;
    left: 0;
    background: rgba(0,0,0,.2);
}
.random-holder.top-players .player-title a {
    text-transform: uppercase;
    color: #fff;
    font-weight: bold;
}

    }
    .owl-carousel .owl-item .fix.profile img {
        display: inline-block;
    position: relative;
    width: 70%;
    top: 30px;
    left: 0%;
}
.owl-carousel .owl-item .nationality img {
    width: auto;
        display: inline-block;
}
        .most-viewed .random-holder {
    width: 94%;
}
.owl-carousel .owl-nav{
    display: none;
}
		</style>

</head>

<body <?php body_class(); ?>>

<div id="wrapper">

	<header id="header">
            <div class="logo-area">
                <div class="container-fluid">
                    <div class="">
                        <div class="col-xs-12 col-md-9">
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
                        <div class="col-md-3 hidden-xs">  
                            
                            
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
                    <div class="visible-xs">
                        <ul class="nav links">
                              <li class="nav-item" role="presentation"><a class="nav-link" href="https://www.facebook.com/footwonderkids?ref=hl"><i class="fa fa-facebook"></i></a></li>
                              <li class="nav-item" role="presentation"><a class="nav-link" href="https://twitter.com/footwonderkids?lang=en-gb"><i class="fa fa-twitter"></i></a></li>
                              <li class="nav-item" role="presentation"><a class="nav-link" href="https://plus.google.com/118428543287443384754"><i class="fa fa-google-plus"></i></a></li>
                              <li class="nav-item" role="presentation"><a class="nav-link" href="https://uk.pinterest.com/footwonderkids"><i class="fa fa-pinterest"></i></a></li>
                              <li class="nav-item" role="presentation"><a class="nav-link" href="https://www.instagram.com/footwonderkids/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
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
			
<section class="most-viewed interviews search-results">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<?php if(!isset($_GET['positions-page'])) {?>	
				<div  class="search-wrap">
						<form action="/search-results" method="get" class="form-inline">
						  <div class="form-group">
							<label for="exampleInputEmail1">Name</label>
							<div>
							<input type="text"  class="form-control" name="player" id="player-search" placeholder="Player name" value="<?php echo $_GET['player'];?>">
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
								$args1 = array(
		'post_type' => 'wpcm_club',
		'numposts' => -1,
		'posts_per_page' => -1,
		'fields'=>array('ids','post_title') , 
		'suppress_filters' => 0
	);
$clubs = get_posts( $args1 );
									if($clubs){
										foreach($clubs as $club){
                                                $term_list = wp_get_post_terms($club->ID, 'wpcm_team', array("fields" => "all"));
                                                if($term_list[0]->parent == 0){
                                                ?>


                                                    <li club="<?php echo $club->post_title; ?>"><?php echo $club->post_title; ?></li>
                                                
                                                <?php 
                                                }
                                                }
									
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
							<input type="text" id="age" class="form-control" name="age" placeholder="Age" value="<?php echo $_GET['age'];?>">
							</div>
						  </div>
						  <button type="submit" class="btn btn-seemore">Go</button>
						  </form>
					</div>
				
				
				<?php } ?>
				
				<?php
				$playerSearch = isset($_REQUEST['player'])&&!empty($_REQUEST['player'])?$_REQUEST['player']:'';
				
				
			
$pagetitle = '';

if($_GET){
if($_GET['age']){

$age = $_GET['age'];
$year = date("Y");
$diff=$year-$age-1;
$newDate = $diff.'-'.date("m-d");
$args = array(
	's' => $playerSearch,
	'post_type'  => 'wpcm_player',
	'posts_per_page'=>-1,
	'meta_query' => array(
		array(
			'key'     => 'wpcm_dob',
           'value' => $newDate,
           'compare' => '>=',
           'type' => 'CHAR'
		),
	),
);
}else{
$args = array(
	's' => $playerSearch,
	'post_type'  => 'wpcm_player',
	'posts_per_page'=>-1
);
}
if($_GET['nationality']){
global $wpclubmanager;
$countries = $wpclubmanager->countries->countries;

	$filterKey='wpcm_natl';
	$filterValue=$_GET['nationality'];
	$show = $countries[$filterValue];
	$metaQueryN = array(
			'key'     => $filterKey,
			'value'   => $filterValue,
			'compare' => '='
		);
		$args['meta_query'][]=$metaQueryN;
}
if($_GET['club']){
	$args['wpcm_team']=$_GET['club'];
}

if($_GET['position']){
	$args['tax_query']=array(
		array(
			'taxonomy' => 'wpcm_position',
			'field'    => 'slug',
			'terms'    => $_GET['position'],
		),
	);
}


$players = get_posts( $args );
$show = $_GET['age'];


}else{
$players = Array();
}

?>	
<?php if(!isset($_GET['positions-page'])) {?>
	<div class="page-title pad group">
	
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Search results -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9588338010060946"
     data-ad-slot="6112492112"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>		

	
	</div>
	<?php } ?>
	<div class="pad group">
		
		<div id="content" class="narrowcolumn">

<?php


if ( sizeof( $players ) > 0 ) {?>
	<article class="group post-2621 page type-page status-publish hentry">
			<div class="entry cp-form">
				<div class="wpcm">
					<div class="cp-table-wrap">
						<table class="cp-table cp-table-full">
							<caption>Players</caption>
							<thead>
								<tr><th class="cp-stats thumb">&nbsp;</th><th class="cp-stats flag">&nbsp;</th><th class="cp-stats name">Name</th><th class="cp-stats position">Position</th><th class="cp-stats age">Age</th><th class="cp-stats team">Team</th></tr>
							</thead>
							<tbody>
	<?php $i=1;
	foreach( $players as $player ) {
	if($_GET['age']){
	$dob = get_post_meta( $player->ID, 'wpcm_dob', true );
	
	if(intval($_GET['age']) == get_age( get_post_meta( $player->ID, 'wpcm_dob', true ))){
	$name = $player->post_title;
			$positions = get_the_terms( $player->ID, 'wpcm_position' );
	

		
		$height = get_post_meta( $player->ID, 'wpcm_height', true );
		$weight = get_post_meta( $player->ID, 'wpcm_weight', true );
		$natl = get_post_meta( $player->ID, 'wpcm_natl', true );
		$hometown = get_post_meta( $player->ID, 'wpcm_hometown', true );
	$teams = get_the_terms( $player->ID, 'wpcm_team' );
		
		
			
		
	
	?>
		
								<tr class="alt">
									<td class="cp-stats thumb">
									<?php
									if ( has_post_thumbnail( $player->ID ) ) {
										$thumb = get_the_post_thumbnail( $player->ID, 'player-thumb' );
									} else {
										$thumb = '<img src="' . get_template_directory_uri() . '/img/player-thumb.png" alt="' . $name . '"/>';
									}
									echo $thumb;
									?>
									</td>
									<td class="cp-stats flag"><img class="flag" src="http://football-wonderkids.co.uk/wp-content/themes/scoreline/img/flags/small/<?php echo $natl;?>.jpg"></td>
									<td class="cp-stats name"><a href="<?php echo get_permalink( $player->ID );?>"><?php echo $name;?></a></td>
									<td class="cp-stats position">
									<?php 
									if ( is_array( $positions ) ) {
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
									}else{
										echo 'none';
									}
								?>
									
									</td><td class="cp-stats age"><?php
									echo get_age( get_post_meta( $player->ID, 'wpcm_dob', true ) );
									?></td>
									<td class="cp-stats team">
									<?php 
									if ( is_array( $teams ) ) {
									$i = 1;
										foreach ( $teams as $team ) {
										?>
											<a href="/club/<?php echo $team->slug;?>"><?php echo $team->name; ?></a>
											<?php 
												if($i < count($teams)){
												echo ',';
												}
											?>
										<?php $i++;}
									}else{
										echo 'none';
									}
									?>
								</td>
								</tr>
							
				
			
		<?php $i++;
		}
		}else{
		
		$name = $player->post_title;
			$positions = get_the_terms( $player->ID, 'wpcm_position' );
	

		$dob = get_post_meta( $player->ID, 'wpcm_dob', true );
		$height = get_post_meta( $player->ID, 'wpcm_height', true );
		$weight = get_post_meta( $player->ID, 'wpcm_weight', true );
		$natl = get_post_meta( $player->ID, 'wpcm_natl', true );
		$hometown = get_post_meta( $player->ID, 'wpcm_hometown', true );
	$teams = get_the_terms( $player->ID, 'wpcm_team' );
		
		
			
		
	
	?>
		
								<tr class="alt">
									<td class="cp-stats thumb">
									<?php
									if ( has_post_thumbnail( $player->ID ) ) {
										$thumb = get_the_post_thumbnail( $player->ID, 'player-thumb' );
									} else {
										$thumb = '<img src="' . get_template_directory_uri() . '/img/player-thumb.png" alt="' . $name . '"/>';
									}
									echo $thumb;
									?>
									</td>
									<td class="cp-stats flag"><img class="flag" src="http://football-wonderkids.co.uk/wp-content/themes/scoreline/img/flags/small/<?php echo $natl;?>.jpg"></td>
									<td class="cp-stats name"><a href="<?php echo get_permalink( $player->ID );?>"><?php echo $name;?></a></td>
									<td class="cp-stats position">
									<?php 
									if ( is_array( $positions ) ) {
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
									}else{
										echo 'none';
									}
								?>
									
									</td><td class="cp-stats age"><?php
									echo get_age( get_post_meta( $player->ID, 'wpcm_dob', true ) );
									?></td>
									<td class="cp-stats team">
									<?php 
									if ( is_array( $teams ) ) {
									$i = 1;
										foreach ( $teams as $team ) {
										?>
											<a href="/club/<?php echo $team->slug;?>"><?php echo $team->name; ?></a>
											<?php 
												if($i < count($teams)){
												echo ',';
												}
											?>
										<?php $i++;}
									}else{
										echo 'none';
									}
									?>
								</td>
								</tr>
							
				
			
		<?php $i++;
		
		}
	}?>
	</tbody>
		</table>
	</div>
</div>				
<div class="clear"></div>
</div><!--/.entry-->
</article>
	<?php
} else {
	// no posts found
	echo "No results found";
}
/* Restore original Post Data */
wp_reset_postdata();
?>		
	</div><!--/.pad-->
	
</section><!--/.content-->

				
			</div>
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
	<?php
		if($_GET['nationality']){?>
			jQuery('li[key="<?php echo $_GET['nationality'];?>"]').click();
		<?php }
		if($_GET['club']){?>
		jQuery('li[club="<?php echo $_GET['club'];?>"]').click();
		<?php }

		if($_GET['position']){?>
			jQuery('li[slug="<?php echo $_GET['position'];?>"]').click();
		<?php }
	?>
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