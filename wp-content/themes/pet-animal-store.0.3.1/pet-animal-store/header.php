<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-aa">
 *
 * @package Pet Animal Store
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'pet-animal-store' ) ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="main-bodybox">
 <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','pet-animal-store'); ?></a></div>

<div class="topbar">
  	<div class="container">
		  	<div class="row">
		  	<div class="site_header col-lg-10 col-md-12 offset-lg-1">
			  	<div class="row">
				    <div class="col-lg-3 col-md-3">
				    	<div class="logo">
					      	<?php if( has_custom_logo() ){ pet_animal_store_the_custom_logo();
					         	}else{ ?>
					        	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					        <?php $description = get_bloginfo( 'description', 'display' );
					        	if ( $description || is_customize_preview() ) : ?>
					          <p class="site-description"><?php echo esc_html($description); ?></p>
					      	<?php endif; }?>
					    </div>
				    </div>
				    <div class="col-lg-9 col-md-9">
					    <div class="baricon row">
					      	<div class="col-lg-4 col-md-4">
						      	<?php if( get_theme_mod( 'pet_animal_store_mail','' ) != '') { ?>
						      	<div class="mail row">
						      		<div class="col-lg-2 col-md-2 p-0">
						      			<i class="fa fa-at"></i>
						      		</div>
								    <div class="col-lg-10 col-md-10">
								      	<p class="email_title"><?php echo esc_html(get_theme_mod('pet_animal_store_mail_title',__('EMAIL','pet-animal-store'))); ?></p>
								        <p class="email icon social fb"><?php echo esc_html( get_theme_mod('pet_animal_store_mail',__('support@example.com','pet-animal-store')) ); ?></p>
								    </div>
						    	</div>
						      	<?php } ?>
					    	</div>
					        <div class="col-lg-4 col-md-4">
					      		<?php if( get_theme_mod( 'pet_animal_store_call','' ) != '') { ?>
					        	<div class="phone row">
					        		<div class="col-lg-2 col-md-2 p-0">
					        			<i class="fas fa-phone-volume"></i>
					        		</div>
					        		<div class="col-lg-10 col-md-10">
							      		<p class="call_title"><?php echo esc_html(get_theme_mod('pet_animal_store_call_title',__('CALL NOW','pet-animal-store'))); ?></p>
							        	<p class="call"><?php echo esc_html( get_theme_mod('pet_animal_store_call',__('(518) 356-5373','pet-animal-store') )); ?></p>
							        </div>
						        </div>
					      		<?php } ?>
					        </div>
					      <div class="col-lg-4 col-md-4 p-0">

					      <?php if( get_theme_mod( 'pet_animal_store_facebook_url') != '') { ?>
					        <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
					      <?php } ?>
					      <?php if( get_theme_mod( 'pet_animal_store_twitter_url') != '') { ?>
					        <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
					      <?php } ?>
					      <?php if( get_theme_mod( 'pet_animal_store_instagram_url') != '') { ?>
					        <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_instagram_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
					      <?php } ?>
					      <?php if( get_theme_mod( 'pet_animal_store_linkedin_url') != '') { ?>
					        <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
					      <?php } ?>
					      </div>
					    </div>
				    </div>
			    </div>
				<div id="header" class="header-slider row">
					<div class="col-lg-12 col-md-12 menubg">
						<div class="menubox nav">
						    <div class="mainmenu">
						      <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
						    </div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
  	</div>
</div>
