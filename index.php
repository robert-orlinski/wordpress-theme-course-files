<?php
get_header(); ?>

	<main class="content">
		<article class="blog-container">
			<?php
				if (have_posts()) :
					while (have_posts()) : the_post(); ?>

					<section class="post">
						<h2 class="post-title">
							<a class="post-link" href="<?php the_permalink(); ?>">
					    	<?php the_title(); ?>
							</a>
						</h2>
						<?php the_content(); ?>
					</section>

					<?php endwhile;

					else :
						echo "<p>Na tej stronie nie ma żadnych wpisów.</p>";
				endif; ?>

		</article>
	</main>

<?php
get_footer();
?>
