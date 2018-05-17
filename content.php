<?php
	global $mr_tailor_theme_options;

    $blog_with_sidebar = "";
    if ( (isset($mr_tailor_theme_options['sidebar_blog_listing'])) && ($mr_tailor_theme_options['sidebar_blog_listing'] == "1" ) ) $blog_with_sidebar = "yes";
    if (isset($_GET["blog_with_sidebar"])) $blog_with_sidebar = $_GET["blog_with_sidebar"];    
?>

            <div class="slider" style="padding-bottom:30px">
                <?php echo do_shortcode('[rev_slider slider1]'); ?>
            </div>
            
            <!--<img src="http://localhost/soccer/wp-content/uploads/2015/12/banner.png" width="100%">-->
            <div class="slogan">
                <ul style="list-style-type:none; text-align:right; margin:0">
                    <li class="lang-item" style="color:#004fa3"><b>"Play together &middot; Win together"</b></li>
                    <?php pll_the_languages( array('show_flags' => 1, 'show_names' => 0)); ?>
                </ul>
            </div>
        
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
    <div class="row" style="padding:0">
        <div class="large-3 columns column_container sidebar-page">
                <?php dynamic_sidebar( 'sidebar' ); ?>
                <div class="module">
                    <div id="SkypeButton_Call_pc10shop.com_1" style="float:right; height:43px">
                         <script type="text/javascript">
                         Skype.ui({
                         "name": "dropdown",
                         "element": "SkypeButton_Call_pc10shop.com_1",
                         "participants": ["zero_phan"],
                         "imageSize": 24
                         });
                         </script>
                        </div>
                    <a href="https://www.facebook.com/isoccerschool/" target="_blank">
                        <img src="http://localhost/soccer/wp-content/uploads/2015/12/facebook.png" width="30%">
                    </a>
                </div>
                <div class="module">
                    <?php $lang = get_bloginfo("language"); 
                        if($lang == "vi"){
                    ?>
                        <a href="http://localhost/soccer/vi/dang-ky-hoc/"><img src="http://localhost/soccer/wp-content/uploads/2015/12/reg-en.png" width="70%"></a>
                    <?php }else{ ?>
                        <a href="http://localhost/soccer/en/booking/"><img src="http://localhost/soccer/wp-content/uploads/2015/12/reg-en.png" width="70%"></a>
                    <?php } ?>
                </div>
            </div>
        <div class="large-9 columns">
            
            <header class="entry-header">
            
                <div class="row">
                    <?php if ( $blog_with_sidebar == "yes" ) : ?>
                    <div class="large-12 columns">
                    <?php else : ?>
                    <div class="large-8 large-centered columns without-sidebar">
                    <?php endif; ?>
                        <?php if ( is_single() ) : ?>
                        <h4 class="entry-title"><?php the_title(); ?></h4>
                        <?php else : ?>
                        <h1 class="entry-title">
                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                        </h1>
                        <?php endif; // is_single() ?>
                        
                        <div class="post_header_date"><?php mr_tailor_post_header_entry_date(); ?></div>
                    </div>
                </div>
                
                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                <div class="entry-thumbnail" style="display:none">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php endif; ?>

    <div class="row">
        <?php if ( $blog_with_sidebar == "yes" ) : ?>
            <div class="large-12 columns">
        <?php else : ?>
            <div class="large-12 large-centered columns without-sidebar">
        <?php endif; ?>
            
            <div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'mr_tailor' ) ); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'mr_tailor' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
            </div><!-- .entry-content -->
        
            <?php if ( is_single() ) : ?>
            
				<?php if ( (isset($mr_tailor_theme_options['sharing_options_blog'])) && ($mr_tailor_theme_options['sharing_options_blog'] == "1" ) ) : ?>
					<div class="box-share-container post-share-container" style="margin:0">
						<a class="trigger-share-list" href="#"><i class="fa fa-share-alt"></i><?php _e( 'Share this post', 'mr_tailor' )?></a>
						<div class="box-share-list">
                        
                        	<?php
								//Get the Thumbnail URL
								$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' );
							?>
							
							<div class="box-share-list-inner">
								<a href="//www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" class="box-share-link" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>
								<a href="//twitter.com/share?url=<?php the_permalink(); ?>" class="box-share-link" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a>
								<a href="//plus.google.com/share?url=<?php the_permalink(); ?>" class="box-share-link" target="_blank"><i class="fa fa-google-plus"></i><span>Google</span></a>
								<a href="//pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php echo esc_url($src[0]) ?>&amp;description=<?php echo urlencode(get_the_title()); ?>" class="box-share-link" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
							</div><!--.box-share-list-inner-->
							
						</div><!--.box-share-list-->
					</div>
				<?php endif; ?>
				
				<footer class="entry-meta" style="display:none">
					
					<?php mr_tailor_entry_meta(); echo "."; ?>
					
					<?php //edit_post_link( __( 'Edit', 'mr_tailor' ), '<div class="edit-link"><i class="fa fa-pencil-square-o"></i> ', '</div>' ); ?>
					
				</footer><!-- .entry-meta -->
            
            <?php endif; ?>
                               
        </div><!-- .columns -->
    </div><!-- .row -->

<div class="row">
<nav role="navigation" id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo $nav_class; ?>">

        <div class="row">
        
			<?php if ( $blog_masonry == "yes" && !is_single() ) : ?>
            <div class="large-12 columns">
        	<?php elseif ( $blog_with_sidebar == "yes" ) : ?>
            <div class="large-12 columns">
        	<?php else : ?>
            <div class="large-12 columns without-sidebar">
        	<?php endif; ?>
        
				<?php if ( is_single() ) : // navigation links for single posts ?>
        
                    <div class="row">
                        
                        <div class="large-6 columns text-center">
                            <div class="nav-previous"><?php previous_post_link( '%link', '<div class="nav-previous-title">'.__( "Previous Reading", "mr_tailor" ).'</div> &larr; %title' ); ?></div>
                        </div><!-- .columns -->
                        
                        <div class="large-6 columns text-center">
                            <div class="nav-next"><?php next_post_link( '%link', '<div class="nav-next-title">'.__( "Next Reading", "mr_tailor" ).'</div> %title &rarr;' ); ?></div>
                        </div><!-- .columns -->
                        
                    </div><!-- .row -->
            
				<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>
            
					<div class="archive-navigation">
						<div class="row">
							
							<div class="small-6 columns text-left">
								<?php if ( get_next_posts_link() ) : ?>
								<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'mr_tailor' ) ); ?></div>
								<?php endif; ?>
							</div>
							
							<div class="small-6 columns text-right">
								<?php if ( get_previous_posts_link() ) : ?>
								<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'mr_tailor' ) ); ?></div>
							<?php endif; ?>
							</div>
						
						</div>
					</div>
				
                <?php endif; ?>
            
            </div><!-- .columns -->
        
        </div><!-- .row -->

	</nav>
</div>
        
            </header><!-- .entry-header -->
            
        </div><!-- .columns -->
    </div><!-- .row -->


</article><!-- #post -->
