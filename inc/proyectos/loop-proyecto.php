<?php
/*
the_title()
the_content()
the_excerpt()
the_time()
the_date()
the_permalink()
the_category()
the_author()
the_ID()
wp_list_pages()
wp_tag_cloud
wp_list_cats()>
get_calendar()
wp_get_archives()
posts_nav_link()
next_post_link()
previous_post_link()
edit_post_link('Editar artículo')
the_search_query()
wp_register()
wp_loginout()
wp_meta()
timer_stop(1)
comments_popup_link()
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		
	
	<div class="post-inner thin ">

		<div class="entry-content">
			
			<?php				  
				
				//printf( '%1$s - %2$s', get_the_title(), get_the_content() ); 
				
				
				echo '<div class="entry-content">';
					
					the_post_thumbnail();
					
					the_excerpt();
					
				echo '</div>';
				
				echo '<h2><a href="';
				
				the_permalink()	;
				
				echo '">';
				
					the_title();
			
				echo '</a></h2>';	
				
			
			?>


		</div>
		
	</div>
	
</article>