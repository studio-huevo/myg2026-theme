<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main-content">
    <!-- 訪問看護の対象者 -->
    <section class="features-section" id="reha" style="background-color: white;">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    <?php echo get_post_meta($post->ID , 'area_title01' ,true); ?>
                </h2>
            </div>
            
            <div class="features-grid">
                <div>
                    <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'area_img01' ,true)); ?>" alt="訪問看護">
                </div>
                <div>
                    <?php echo get_post_meta($post->ID , 'area_content01' ,true); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- 訪問看護サービス -->
    <section class="features-section" id="reha">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    <?php echo get_post_meta($post->ID , 'area_title02' ,true); ?>
                </h2>
            </div>
            
            <div class="features-grid">
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'service_img01' ,true)); ?>" alt="訪問看護">
                    </div>
                    <div class="service-content">
                        <?php echo get_post_meta($post->ID , 'service_content01' ,true); ?>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'sarvice_img02' ,true)); ?>" alt="訪問看護">
                    </div>
                    <div class="service-content">
                        <?php echo get_post_meta($post->ID , 'sarvice_content02' ,true); ?>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'sarvice_img03' ,true)); ?>" alt="訪問看護">
                    </div>
                    <div class="service-content">
                        <?php echo get_post_meta($post->ID , 'sarvice_content03' ,true); ?>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'sarvice_img04' ,true)); ?>" alt="訪問看護">
                    </div>
                    <div class="service-content">
                        <?php echo get_post_meta($post->ID , 'sarvice_content04' ,true); ?>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'sarvice_img05' ,true)); ?>" alt="訪問看護">
                    </div>
                    <div class="service-content">
                        <?php echo get_post_meta($post->ID , 'sarvice_content05' ,true); ?>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'sarvice_img06' ,true)); ?>" alt="訪問看護">
                    </div>
                    <div class="service-content">
                        <?php echo get_post_meta($post->ID , 'sarvice_content06' ,true); ?>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'sarvice_img07' ,true)); ?>" alt="訪問看護">
                    </div>
                    <div class="service-content">
                        <?php echo get_post_meta($post->ID , 'sarvice_content07' ,true); ?>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'sarvice_img08' ,true)); ?>" alt="訪問看護">
                    </div>
                    <div class="service-content">
                        <?php echo get_post_meta($post->ID , 'sarvice_content08' ,true); ?>
                    </div>
                    <div style="text-align: center; margin-top: 1rem;margin-bottom: 1rem;">
                        <a href="<?php echo home_url('/'); ?>terminal_care"  class="btn btn--yellow">「ターミナルケアの事例」はこちら</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'sarvice_img09' ,true)); ?>" alt="訪問看護">
                    </div>
                    <div class="service-content">
                        <?php echo get_post_meta($post->ID , 'sarvice_content09' ,true); ?>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

<?php get_footer(); ?>
