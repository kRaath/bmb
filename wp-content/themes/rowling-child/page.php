<?php get_header(); ?>

<div class="wrapper section-inner">
	
	<div class="content">
		<div class="page-title">
			<h1><a class ="sf-link-title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<div class="clear"></div>
		</div>
												        
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div id="post-<?php the_ID(); ?>" <?php post_class('post single single-post'); ?>>
				
				<?php if ( has_post_thumbnail() ) : ?>
		
					<div class="post-image">
					
						<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">	
							
							<?php the_post_thumbnail('post-image'); ?>
							
						</a>
						
						<?php if ( !empty(get_post(get_post_thumbnail_id())->post_excerpt) ) : ?>
						
							<p class="post-image-caption"><span class="fa fw fa-camera"></span><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
														
						<?php endif; ?>
						
					</div> <!-- /post-image -->
						
				<?php endif; ?>
				
				<div class="post-inner">
				
					<div class="post-content">
					
						<?php the_content(); ?>
						
					
					
					</div> <!-- /post-content -->
					
					<div class="clear"></div>
					
				</div> <!-- /post-inner -->
														
				<?php comments_template( '', true ); ?>
			
			</div> <!-- /post -->
										                        
	   	<?php endwhile; else: ?>
	
			<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "rowling"); ?></p>
		
		<?php endif; ?>    
	
	</div> <!-- /content -->
	
	<?php get_sidebar(); ?>
	
	<div class="clear"></div>
	
</div> <!-- /wrapper.section-inner -->
								
<?php get_footer(); ?>