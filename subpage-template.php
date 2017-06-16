<?php 

// Template name: Szablon strony

get_header();	
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>
		
		<article class="post">
			<h2><?php the_title(); ?></h2>
				<img src="http://localhost/wordpress/wp-content/uploads/2017/06/avi-richards-183715-1-e1497029822241.jpg">
			<?php the_content(); ?>
		</article>
				
		<?php endwhile;

		else :
			echo "<p>Na tej stronie nie ma żadnych wpisów.</p>";
	endif;
	
get_footer();
?>