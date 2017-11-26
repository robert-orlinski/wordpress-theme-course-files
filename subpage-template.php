<?php 

// Template name: Szablon strony

get_header();	
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>
		
		<article class="post">
			<h3><?php the_title(); ?></h3>
				<img src="http://localhost:8080/wordpress/wp-content/uploads/2017/07/avi-richards-183715-e1500226465857.jpg">
			<?php the_content(); ?>
		</article>
				
		<?php endwhile;

		else :
			echo "<p>Na tej stronie nie ma żadnych wpisów.</p>";
	endif;
	
get_footer();
?>