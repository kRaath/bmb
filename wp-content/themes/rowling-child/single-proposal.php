<?php get_header(); ?>
				
<?php 
	$age = get_post_custom_values('age')[0];
	$education = get_post_custom_values('education')[0];
	$gender = get_post_custom_values('gender')[0];
	$cast = get_post_custom_values('cast')[0];
	$location = get_post_custom_values('location')[0];
	$title = get_the_title();
	$post_id = get_the_ID();
	$form_array = array(
		'post_id' => $post_id,
		'post_title' => $title,
	);
?>

<div class="wrapper section-inner">
	<div class="content">
		<div class="page-title">
			<h1><a class ="sf-link-title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<div class="clear"></div>
		</div>
												        
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<div id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>
				
				<div class="post-header">
										
					<?php if (has_category()) : ?>
						<p class="post-categories"><?php the_category(', '); ?></p>
					<?php endif; ?>
					
				</div> <!-- /post-header -->
				
				<?php 
					$post_format = get_post_format();
					if ( $post_format == 'gallery' ) : ?>
			
					<?php rowling_flexslider('post-image'); ?>
				
				<?php elseif ( has_post_thumbnail() ) : ?>
		
					<div class="post-image">
						<?php the_post_thumbnail('medium'); ?>
					</div> <!-- /post-image -->
						
				<?php endif; ?>
				
				<div class="sf-information-single">
					<div class="sf-info">
					   <p class="proposal-age"><?=$age?> years <b> <?=$gender?></b></p>
					   <p>Location: <b><?=$location?></b></p>
					   <p>Education: <b><?=$education?></b></p>
					   <p>Cast: <b><?=$cast?></b></p>
					</div>
					<div class="clear"></div>
					<?php if ( has_term('','proposal_tag') ) : ?>
						<div class="post-tags">
							<?php the_terms('','proposal_tag','',''); ?>
						</div>
					<?php endif; ?>
					
				</div>
				
				<div class="clear"></div>
										
				<div class="post-inner">
					
					<?php if ( get_the_content() ) : ?>
	
						<div class="post-content">
						
							<?php the_content(); ?>
							
							<?php 
						    	$args = array(
									'before'           => '<div class="clear"></div><p class="page-links"><span class="title">' . __( 'Pages:','rowling' ) . '</span>',
									'after'            => '</p>',
									'link_before'      => '<span>',
									'link_after'       => '</span>',
									'separator'        => '',
									'pagelink'         => '%',
									'echo'             => 1
								);
					    	
					    		wp_link_pages($args); 
							?>
						
						</div>
						
						<div class="clear"></div>
					
					<?php endif; ?>
					
					
					
					
					
					<?php rowling_related_posts('3'); // Number of related posts to display ?>
									
				</div> <!-- /post-inner -->
				
				<div class="clear"></div>
				
			</div> <!-- /post -->
										                        
	   	<?php endwhile; else: ?>
	
			<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "rowling"); ?></p>
		
		<?php endif; ?>    
		<br/><br/><br/>
		

		<?php gravity_form(2, false, false, false, '', false);?>
	
	</div> <!-- /content -->

	
	<?php get_sidebar(); ?>
	
	<div class="clear"></div>
	
</div> <!-- /wrapper -->
		
<?php get_footer(); ?>