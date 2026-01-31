<?php
/**
  * Version    : 1.0.0
 * Author     : Studio Huevo
 * Author URI : https://huevo.xyz
 * Created    : May 13, 2021
 */
?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); /* ループ開始 */ ?>

<?php the_content(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
