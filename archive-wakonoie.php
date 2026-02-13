<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main-content">
    <!-- ヒーローセクション -->
    <section class="hero-section" style="background-color: white;">
        <div class="hero-content">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'hero_img01' ,true)); ?>" alt="ホームホスピスわこの家 ロゴ">
        </div>
    </section>
    <!-- ホームホスピスとは -->
    <section class="features-section" id="wako-1">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    <?php echo get_post_meta($post->ID, 'area_title01', true); ?>
                </h2>
            </div>
            
            <div class="features-grid">
                <div>
                    <?php echo get_post_meta($post->ID, 'area_content01', true); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ホームホスピスの理念 -->
    <section class="features-section" id="wako-2" style="background-color: white;">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    <?php echo get_post_meta($post->ID, 'area_title02', true); ?>
                </h2>
            </div>
            
            <div class="features-grid">
                <div>
                    <?php echo get_post_meta($post->ID, 'area_content02', true); ?>
                </div>
            
            </div>

        </div>
    </section>
    <!-- ホームホスピス「わこの家」って？ -->
    <section class="features-section" id="wako-3">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    <?php echo get_post_meta($post->ID, 'area_title03', true); ?>
                </h2>
            </div>
            
            <div class="features-grid">
                <div><img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'area_img03' ,true)); ?>" alt="ホームホスピス「わこの家」"></div>
                <div>
                    <?php echo get_post_meta($post->ID, 'area_content03', true); ?>
                </div>
            
            </div>

        </div>
    </section>
    <!-- わこの家、ここは、もうひとつの我が家 -->
    <section class="features-section" id="wako-4" style="background-color: white;">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    <?php echo get_post_meta($post->ID, 'area_title04', true); ?>
                </h2>
            </div>
            
            <div class="features-grid">
                <div>
                    <?php echo get_post_meta($post->ID, 'area_content04', true); ?>
                </div>
            
            </div>
            
            <div class="services-wako-grid">
                <?php if (get_field('hidden_photo01')): ?>
                <div class="hidden_photo">
                <?php else: ?>
                <div>
                <?php endif; ?>
                    <div class="service-image">
                        <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo01' ,true)); ?>" class="wako-photo popup-image-btn" >
                            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo01' ,true)); ?>" alt="ホームホスピス「わこの家」">
                        </a>
                    </div>
                </div>
                <?php if (get_field('hidden_photo02')): ?>
                <div class="hidden_photo">
                <?php else: ?>
                <div>
                <?php endif; ?>
                    <div class="service-image">
                        <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo02' ,true)); ?>" class="wako-photo popup-image-btn" >
                            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo02' ,true)); ?>" alt="ホームホスピス「わこの家」">
                        </a>
                    </div>
                </div>
                <?php if (get_field('hidden_photo03')): ?>
                <div class="hidden_photo">
                <?php else: ?>
                <div>
                <?php endif; ?>
                    <div class="service-image">
                        <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo03' ,true)); ?>" class="wako-photo popup-image-btn" >
                            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo03' ,true)); ?>" alt="ホームホスピス「わこの家」">
                        </a>
                    </div>
                </div>
                <?php if (get_field('hidden_photo04')): ?>
                <div class="hidden_photo">
                <?php else: ?>
                <div>
                <?php endif; ?>
                    <div class="service-image">
                        <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo04' ,true)); ?>" class="wako-photo popup-image-btn" >
                            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo04' ,true)); ?>" alt="ホームホスピス「わこの家」">
                        </a>
                    </div>
                </div>
                <?php if (get_field('hidden_photo05')): ?>
                <div class="hidden_photo">
                <?php else: ?>
                <div>
                <?php endif; ?>
                    <div class="service-image">
                        <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo05' ,true)); ?>" class="wako-photo popup-image-btn" >
                            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo05' ,true)); ?>" alt="ホームホスピス「わこの家」">
                        </a>
                    </div>
                </div>
                <?php if (get_field('hidden_photo06')): ?>
                <div class="hidden_photo">
                <?php else: ?>
                <div>
                <?php endif; ?>
                    <div class="service-image">
                        <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo06' ,true)); ?>" class="wako-photo popup-image-btn" >
                            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo06' ,true)); ?>" alt="ホームホスピス「わこの家」">
                        </a>
                    </div>
                </div>
                <?php if (get_field('hidden_photo07')): ?>
                <div class="hidden_photo">
                <?php else: ?>
                <div>
                <?php endif; ?>
                    <div class="service-image">
                        <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo07' ,true)); ?>" class="wako-photo popup-image-btn" >
                            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo07' ,true)); ?>" alt="ホームホスピス「わこの家」">
                        </a>
                    </div>
                </div>
                <?php if (get_field('hidden_photo08')): ?>
                <div class="hidden_photo">
                <?php else: ?>
                <div>
                <?php endif; ?>
                    <div class="service-image">
                        <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo08' ,true)); ?>" class="wako-photo popup-image-btn" >
                            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo08' ,true)); ?>" alt="ホームホスピス「わこの家」">
                        </a >
                    </div>
                </div>
                <?php if (get_field('hidden_photo09')): ?>
                <div class="hidden_photo">
                <?php else: ?>
                <div>
                <?php endif; ?>
                    <div class="service-image">
                        <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo09' ,true)); ?>" class="wako-photo popup-image-btn" >
                            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo09' ,true)); ?>" alt="ホームホスピス「わこの家」">
                        </a>
                    </div>
                </div>
                <?php if (get_field('hidden_photo10')): ?>
                <div class="hidden_photo">
                <?php else: ?>
                <div>
                <?php endif; ?>
                    <div class="service-image">
                        <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo10' ,true)); ?>" class="wako-photo popup-image-btn" >
                            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo10' ,true)); ?>" alt="ホームホスピス「わこの家」">
                        </a>
                    </div>
                </div>
                <?php if (get_field('hidden_photo11')): ?>
                <div class="hidden_photo">
                <?php else: ?>
                <div>
                <?php endif; ?>
                    <div class="service-image">
                        <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo11' ,true)); ?>" class="wako-photo popup-image-btn" >
                            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo11' ,true)); ?>" alt="ホームホスピス「わこの家」">
                        </a>
                    </div>
                </div>
                <?php if (get_field('hidden_photo12')): ?>
                <div class="hidden_photo">
                <?php else: ?>
                <div>
                <?php endif; ?>
                    <div class="service-image">
                        <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo12' ,true)); ?>" class="wako-photo popup-image-btn" >
                            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'wako_photo12' ,true)); ?>" alt="ホームホスピス「わこの家」">
                        </a>
                    </div>
                </div>
            </div>
            <div class="services-grid">
                <div style="margin-top:20px; text-align:center;">
                    <iframe src="<?php echo get_post_meta($post->ID, 'map_url', true); ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
