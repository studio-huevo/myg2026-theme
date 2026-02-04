<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main-content">
    
    
    <!-- お問い合わせ -->
    <section class="features-section" id="summary" style="background-color: white;">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    お問い合わせ
                </h2>
            </div>
            
            <div class="contact__container">

                <p class="contact-catch">メールでのお問い合わせは、<br class="pc-hide">以下の送信フォームをご利用ください。</p>
                <div class="padding-wrapper">
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); /* ループ開始 */ ?>
                        <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                </div>
            </div><!-- /.contents_inner -->
        </div>
    </section>

<?php get_footer(); ?>
