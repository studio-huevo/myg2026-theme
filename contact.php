<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
<article>

<section class="category_head">
<?php if ( is_page('contact')) : ?>
<h1>資料請求・お問い合わせ</h1>
<?php elseif ( is_page('contact2')) : ?>
<h1>施設見学のご相談</h1>
<?php endif; ?>

</section>

<div class="container slide-in-top ">
<div class="wrapper">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); /* ループ開始 */ ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div><!-- wrapper -->
</div><!-- container -->

<?php get_footer(); ?>
