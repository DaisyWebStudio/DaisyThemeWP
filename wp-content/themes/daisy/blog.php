<?php
/**
 * Template name: Блог
 */
            get_header();
         ?>
         <div class="container content_page">
		<div class="blog_main_row">
			<div class="blog_main_row">
				<ul class="blog_main_list">
				<?php
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								?>
								<li class="blog_main_item">
								<div class="blog_main_item_img">
									<a href="<?php echo get_the_permalink();?>" class="blog_main_item_img">
									<img src="<?php the_post_thumbnail_url();?>" alt="">
								</a>
									<a href="" class="blog_heard"><img src="<?php echo bloginfo('template_url');?>/assets/img/main-slider-social/5.svg" alt=""></a>
								</div>
								<div class="blog_main_item_text">
									<a href="<?php echo get_the_permalink();?>" class="blog_main_item_title"><?php the_title(); ?></a>
									<p class="blog_main_item_info"><?php echo carbon_get_the_post_meta('post_descr');?></p>
									<ul class="blog_article_description_list">
										<li><?php echo get_the_author(); ?></li>
										<li><?php echo get_the_category()[0]->name; ?></li>
										<li><?php echo get_the_date('j F Y'); ?></li>
									</ul>
								</div>
							</li>
							<?php
							endwhile;
							?>
							</ul>
				</div>
			</div>
		</div>
         <?php
    get_footer();