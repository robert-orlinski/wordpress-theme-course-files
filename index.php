<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Modern Blog</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<?php 
		if (have_posts()) :
			while (have_posts()) : the_post(); ?>
			<h2>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>
			<div class="post-info">
				<div><?php the_category(); ?></div>
				<div><?php the_author(); ?></div>
				<div><?php the_date(); ?></div>
				<div><?php the_tags(); ?></div>
			</div>
			
			<?php the_content(); ?>

			<?php endwhile;

			else :
				echo "<p>Na tej stronie nie ma żadnych wpisów.</p>";
		endif;
	?>	

	

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>