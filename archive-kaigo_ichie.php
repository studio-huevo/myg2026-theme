<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main-content">
    <!-- ヒーローセクション -->
    <section class="hero-section" style="background-color: white;">
        <div class="hero-content">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'hero_img01' ,true)); ?>" alt="訪問介護 一会 ロゴ">
        </div>
    </section>
    <!-- ホームホスピスとは -->
    <section class="features-section" id="features">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    <?php echo get_post_meta($post->ID, 'area_title01', true); ?>
                </h2>
            </div>
            
            <div class="features-grid">
                 <div>
                    <div style="margin-bottom: 2rem;padding-left: 2rem;">
                        <?php echo get_post_meta($post->ID, 'area_content01', true); ?>
                    </div>
                    <h3 style="padding-bottom: 2rem;">● 身体介護サービス</h3>
                    <p style="padding-bottom: 3rem;"><?php echo nl2br(get_post_meta($post->ID, 'area_content02', true)); ?></p>
                    <h3 style="padding-bottom: 2rem;">● 生活援助サービス</h3>
                    <p style="padding-bottom: 3rem;"><?php echo nl2br(get_post_meta($post->ID, 'area_content03', true)); ?></p>
                    <h3 style="padding-bottom: 2rem;">● 移動介護サービス</h3>
                    <p style="padding-bottom: 3rem;"><?php echo nl2br(get_post_meta($post->ID, 'area_content04', true)); ?></p>
                </div>
            </div>

        </div>
    </section>

<?php get_footer(); ?>
