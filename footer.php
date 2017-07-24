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