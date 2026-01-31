<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main-content">
    <!-- ヒーローセクション -->
    <section class="hero-section" style="background-color: white;">
        <div class="hero-content">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'hero_img01' ,true)); ?>" alt="訪問看護・リハビリテーション一会 ロゴ">
        </div>
    </section>
    <!-- ホームホスピスとは -->
    <section class="features-section" id="reha">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    <?php echo nl2br(get_post_meta($post->ID, 'area_title01', true)); ?>
                </h2>
            </div>
            
            <div class="features-grid">
                <div>
                    <p style="padding-bottom: 3rem;">
                        <?php echo nl2br(get_post_meta($post->ID, 'area_content01', true)); ?>
                    <div class="features-grid" style="width: 90%;padding-bottom: 3rem;">
                        <a href="<?php echo home_url('/'); ?>kango_info" class="btn btn--green" style="font-size: 1.75rem;">
                            訪問看護ページへ
                        </a>
                        <a href="<?php echo home_url('/'); ?>kango_reha" class="btn btn--green" style="font-size: 1.75rem;">
                            訪問リハビリテーションページへ
                        </a>
                    </div>
                    <h3 style="padding-bottom: 2rem;">● 訪問導入の流れ</h3>
                    <div style="padding-bottom: 3rem;">
                        <p style="padding-bottom: 2rem;"><?php echo nl2br(get_post_meta($post->ID, 'area_content02', true)); ?></p>
                        <a href="<?php echo wp_get_attachment_image_src( '278','full',true )[0]; ?>"  class="btn btn--yellow btn--circle popup-image-btn">
                            「訪問導入フローシート」はこちら
                        </a>
                    </div>
                    <h3 style="padding-bottom: 2rem;">● 訪問可能エリア</h3>
                    <p style="padding-bottom: 3rem;"><?php echo nl2br(get_post_meta($post->ID, 'area_content03', true)); ?></p>
                    <h3 style="padding-bottom: 2rem;">● 営業日</h3>
                    <p style="padding-bottom: 3rem;"><?php echo nl2br(get_post_meta($post->ID, 'area_content04', true)); ?></p>
                    <h3 style="padding-bottom: 2rem;">● 営業時間</h3>
                    <p style="padding-bottom: 3rem;"><?php echo nl2br(get_post_meta($post->ID, 'area_content05', true)); ?></p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
