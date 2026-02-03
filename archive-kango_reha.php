<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main-content">
    <section class="features-section" id="reha" style="background-color: white;">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    <?php echo get_post_meta($post->ID , 'area_title01' ,true); ?>
                </h2>
            </div>
            <div class="features-grid">
                <div>
                    <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'area_img01' ,true)); ?>" alt="訪問リハビリテーション">
                </div>
                <div>
                    <?php echo get_post_meta($post->ID , 'area_content01' ,true); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- サービス内容 -->
    <section class="features-section" id="reha">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    <?php echo get_post_meta($post->ID , 'service_title02' ,true); ?>
                </h2>
            </div>
            <div class="features-grid">
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'service_img01' ,true)); ?>" alt="訪問リハビリテーション">
                    </div>
                    <div class="service-content">
                        <?php echo get_post_meta($post->ID , 'service_content01' ,true); ?>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'service_img02' ,true)); ?>" alt="訪問リハビリテーション">
                    </div>
                    <div class="service-content">
                        <?php echo get_post_meta($post->ID , 'sarvice_content02' ,true); ?>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'service_img03' ,true)); ?>" alt="訪問リハビリテーション">
                    </div>
                    <div class="service-content">
                        <?php echo get_post_meta($post->ID , 'sarvice_content03' ,true); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- 訪問リハビリテーションの対象者 -->
    <section class="features-section" id="reha" style="background-color: white;">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    <?php echo get_post_meta($post->ID , 'area_title03' ,true); ?>
                </h2>
            </div>
            <div class="features-grid">
                <div>
                    <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'area_img03' ,true)); ?>" alt="訪問リハビリテーションの対象者">
                </div>
                <div>
                    <?php echo get_post_meta($post->ID , 'area_content03' ,true); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ポイント -->
    <section class="features-section" id="reha">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    <?php echo get_post_meta($post->ID , 'area_title04' ,true); ?>
                </h2>
            </div>
            <div class="features-grid">
                <div>
                    <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'area_img04' ,true)); ?>" alt="ポイント">
                </div>
                <div>
                    <?php echo get_post_meta($post->ID , 'area_content04' ,true); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
