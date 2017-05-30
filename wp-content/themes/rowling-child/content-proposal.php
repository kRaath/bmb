<div class="proposal-block" id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

	<?php 
		$age = get_post_custom_values('age')[0];
		$education = get_post_custom_values('education')[0];
		$gender = get_post_custom_values('gender')[0];
		$cast = get_post_custom_values('cast')[0];
		$location = get_post_custom_values('location')[0];
	?>
	
	<?php if ( get_the_title() ) : ?>
		<h4 class="proposal-title"><a class ="sf-link-title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
	<?php endif; ?>
	<div class="sf-information">
		<?php if ( has_post_thumbnail() ) : ?>
		
			<div class="sf-thumb">
				
				<?php if ( is_sticky() ) : ?>
					<a class="sticky-tag" title="<?php _e('Sticky post:','rowling'); echo ' '; the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
						<span class="fa fw fa-star"></span>
					</a>
				<?php endif; ?>
			
				<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">	
					
					<?php 
						//the_post_thumbnail('post-image-thumb'); 
						the_post_thumbnail('medium');
					?>
					
				</a>
				
			</div> <!-- /post-image -->
				
		<?php endif; ?>
		<div class="sf-info">
		   <p><?=$age?> years <b> <?=$gender?></b></p>
		   <p>Location: <b><?=$location?></b></p>
		   <p>Education: <b><?=$education?></b></p>
		   <p>Cast: <b><?=$cast?></b></p>
		</div>
	</div>
						
</div> <!-- /post -->