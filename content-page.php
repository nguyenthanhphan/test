<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="row" style="padding:0">
    <div class="large-12 columns" style="padding:0; background-color:#e5e5e5">
            
        <div class="entry-content">
        	<div class="large-3 columns column_container sidebar-page">
        		<?php dynamic_sidebar( 'sidebar' ); ?>
        		<div class="module">
                         <script type="text/javascript" src="http://isoccerschool.com/wp-content/themes/mrtailor/js/skype-uri.js"></script>  
                         <div id="SkypeButton_Call_pc10shop.com_1" style="float:right; height:32px; padding-right:20px; margin-top:-2px">
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
        				<img src="http://isoccerschool.com/wp-content/uploads/2015/12/facebook.png" style="height:32px">
        			</a>
        		</div>
        		<div class="module-register">
        			<?php $lang = get_bloginfo("language"); 
        				if($lang == "vi"){
        			?>
        				<a href="http://isoccerschool.com/vi/dang-ky-hoc/"><img src="http://isoccerschool.com/wp-content/uploads/2015/12/reg-en.png" width="70%"></a>
        			<?php }else{ ?>
        				<a href="http://isoccerschool.com/en/booking/"><img src="http://isoccerschool.com/wp-content/uploads/2015/12/reg-en.png" width="70%"></a>
        			<?php } ?>
        		</div>
        	</div>
        	<div class="large-9 columns column_container" style="background-color:#fff; font-size:14px; padding-bottom:30px">

<header class="entry-header <?php if ($page_header_src != "") : ?>with_featured_img<?php endif; ?>" style="background-image:url(<?php echo $page_header_src; ?>)">
        
                <div class="page_header_overlay"></div>
                
                <div class="row">
                    <?php if ( $blog_with_sidebar == "yes" ) : ?>
                    <div class="large-12 columns">
                    <?php else : ?>
                    <div class="large-12 large-centered columns without-sidebar">
                    <?php endif; ?>
        
                        <?php if ( is_page() ) : ?>
        
                        <h4 class="entry-title" style="font-weight:bold; color:#004fa3; text-align:left; <?php if(is_home() || is_front_page()) echo 'display:none'; ?>"><?php the_title(); ?></h4>
                        
                        <?php if($post->post_excerpt) : ?>
                            <div class="page-description"><?php the_excerpt(); ?></div>
                        <?php endif; ?>
                        
                        <?php else : ?>
        
                        <h1 class="entry-title">
                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                        </h1>
        
                        <?php endif; // is_page() ?>
        
                    </div>
                </div>
        
            </header>

            	<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'mr_tailor' ) ); ?>
            	<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'mr_tailor' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
        	</div>
        </div><!-- .entry-content -->

    </div><!-- .columns -->
    </div><!-- .row -->
    
</article><!-- #post -->
