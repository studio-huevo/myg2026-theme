<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main-content">
    <!-- 研修制度 -->
    <section class="features-section">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title"><?php the_title(); ?></h2>
            </div>
            <div style="max-width: 800px; text-align: center; margin: 0 auto 40px auto;">
                <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'training_img' ,true)); ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="features-grid">
                <div>
                    <?php echo get_post_meta($post->ID, 'training_content', true); ?>
                </div>
            
            </div>

        </div>
    </section>

<?php get_footer(); ?>
