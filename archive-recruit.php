<?php get_header(); ?>

<article>

<nav class="category_head service">
<ul>
<li>採用情報</li>
</ul>
</nav><!-- category_head -->

<section class="container" id="lineup">
<div class="wrapper news">

<div class="col12 news_index">
<div class="box_starter-kit">
<h1 class="text-center"><strong>募集一覧</strong></h1>
<ul class="news_index">
<?php
$recruit_args = Array(
	'post_type' => 'recruit',  // 投稿
	'post_status' => 'publish',   // 公開済
	'posts_per_page' => -1,       // 表示する投稿数(-1を指定すると全投稿を表示)
);
?>
<?php $wp_query = new WP_Query( $recruit_args ); ?>
<?php if ( $wp_query->have_posts( )) : ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); /* ループ開始 */ ?>

<li>
<a href="<?php the_permalink(); ?>">
<p><?php the_title(); ?></p>
</a>
</li>
<?php endwhile; ?>
<?php else : ?>
<li>
</ul>
<h3 class="txt-center">現在、募集しておりません。</h3>
<p class="txt-center">弊社にご関心をお寄せいただき、まことにありがとうございます。<br>大変申し訳ありませんが、全ての職種について現在、求人募集は行っておりません。<br>募集の際は当ページにてご案内いたします。</p>
</li>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</ul>
</div><!-- box_starter-kit -->
</div><!-- col10 -->
</div><!-- wrapper -->

</section><!-- container -->


<?php get_footer(); ?>
