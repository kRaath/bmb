<?php get_header(); ?>

<div class="wrapper section-inner" >
			
	<div class="content">				
																							                    
		<?php if (have_posts()) : ?>
		
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			
			if ( "1" < $paged ) : ?>
			
				<div class="page-title">
					
					<h1>Archive</h1>
				
					<p><?php _e('Page', 'rowling'); echo ' ' . $paged . '<span class="sep">/</span>' . $wp_query->max_num_pages; ?></p>
					
					<div class="clear"></div>
					
				</div> <!-- /page-title -->
							
			<?php endif; ?>
			<div class="page-title">
				<h1>Latest Proposals</h1>
				<div class="clear"></div>
			</div>
			<div class="posts" id="posts">
				<?php $row = 0 ?>
		    	<?php while (have_posts()) : the_post(); ?>		    	
		    		<?php get_template_part( 'content', 'proposal' ); ?>
					<?php
						if($row == 1){
							?>
							<div class="clear"></div>
							<?php
							$row = 0;
						}else{
							$row++;
						}
					?>        		            
		        <?php endwhile; ?>
	        	                    			
			</div> <!-- /posts -->
		
			<?php rowling_archive_navigation(); ?>
			
		<?php endif; ?>
		
	</div> <!-- /content -->
	
	<?php get_sidebar(); ?>
	
	<div class="clear"></div>
	
</div> <!-- /wrapper.section-inner -->
	              	        
<?php get_footer(); ?>