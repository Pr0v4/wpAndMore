<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		
		<title><?php wp_title(''); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
			
		<!-- drop Google Analytics Here -->
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-2175460-19']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
		<!-- end analytics -->
		
	</head>
	
	<?php
		//Codice per aggiungere il nome di categoria all'interno del body
		$cat_body = 'cat';
		
		if ( is_category('usa') || in_category('usa') ) {
			$cat_body = 'category-usa';
		} elseif ( is_category('dev') || in_category('dev') ) {
			$cat_body = 'category-dev';
		} elseif ( is_category('help-cat') || in_category('help-cat') || is_page( 1963 ) ){
			$cat_body = 'category-help';
		}
		
	?>
	
	<body <?php body_class( $cat_body ); ?>>
		
		<div id="container">
			
			<header class="header" role="banner">
			
				<div id="inner-header" class="wrap clearfix">
					<div id="logo-motto">
						<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
						<p id="logo" class="h1">	<a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></p>
						
						<!-- if you'd like to use the site description you can un-comment it below -->
						<div id="motto" class="no768">
							<?php bloginfo('description'); ?>
						</div>
					</div>	
					<nav role="navigation">
						
						<?php bones_main_nav(); ?>
						
					</nav>
				
				</div> <!-- end #inner-header -->
			
			</header> <!-- end header -->
