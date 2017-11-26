<?php
get_header(); ?>

	<main class="content">
		<article class="blog-container">
			<?php
				if (have_posts()) :	
			?>
					
				<h2 class="archive-title">
					<?php 
						if (is_category()) {
							single_cat_title('Category: ');
						} elseif (is_tag()) {
							single_tag_title('Tag: ');
						} elseif (is_author()) {
							echo 'Author: ' . get_the_author();
						} elseif (is_day()) {
							echo 'Day: ' . get_the_date();
						} elseif (is_month()) {
							echo 'Month: ' . get_the_date('F Y');
						} elseif (is_year()) {
							echo 'Year: ' . get_the_date('Y');
						} else {
							echo 'Archive';
						}
					?>
				</h2>	
				
				<?php
					while (have_posts()) : the_post(); ?>

					<section class="post">
						<h3 class="post-title">
							<a class="post-link" href="<?php the_permalink(); ?>">
					    	<?php the_title(); ?>
							</a>
						</h3>
						<p class="post-meta">
								<?php
									$categories = get_the_category();
									$output = '';

									if ($categories) {
										foreach($categories as $category){
											$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>, ';
										}
										echo trim($output, ', ');
									}
							 	?>
							 	| Written by: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> in
							 	<?php the_time('F j, Y'); ?>
					 		</p>
						<div class="post-thumbnail">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
						<div class="post-content">
							<?php the_content(); ?>
						</div>
						<hr class="post-separator">
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
