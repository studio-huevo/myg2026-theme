<?php
/*
Template Name: Privacy
*/
?>
<?php get_header(); ?>

<!-- Main Content -->
	<main id="main">
		<section id="about">
			<div class="u_outer about">
				<div class="about01 u_inner">
					<h2 class="_ttl">プライバシーポリシー</h2>
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); /* ループ開始 */ ?>
					<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>
