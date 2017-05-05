<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Modern Blog</title>
	<?php wp_head(); ?>
</head>
<body>

	<h1>Modern Blog</h1>
	<?php 
		if (have_posts()) :
		        while (have_posts()) : the_post(); ?>
			<h2>
				<a href="<?php the_permalink(); ?>">
	            	<?php the_title(); ?>
				</a>
			</h2>

			<?php the_content(); ?>
				
			<?php endwhile;

			else :
				echo "<p>Na tej stronie nie ma żadnych wpisów.</p>";
		endif;
	?>	

</body>
</html>