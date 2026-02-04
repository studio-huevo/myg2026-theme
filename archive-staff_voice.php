<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main-content">
    <!-- よくある質問（訪問関連） -->
    <?php
    $staffvoice_args = Array(
        'post_type' => 'staff_voice',  // 投稿
        'post_status' => 'publish',   // 公開済
        'posts_per_page' => -1,       // 表示する投稿数(-1を指定すると全投稿を表示)
        'orderby' => 'date',
        'order' => 'ASC',
    );

    $staffvoice_query = new WP_Query( $staffvoice_args );
    ?>
    <?php if($staffvoice_query->have_posts()): ?>
    <?php $post_counter = 1; ?>
    <?php while ($staffvoice_query->have_posts()) : $staffvoice_query->the_post(); /* ループ開始 */ ?>
    <?php 
    $staff_01 = get_post_meta($post->ID , 'staff_01' ,true);
    $voice_01 = get_post_meta($post->ID , 'voice_01' ,true);
    $staff_02 = get_post_meta($post->ID , 'staff_02' ,true);
    $voice_02 = get_post_meta($post->ID , 'voice_02' ,true);
    $staff_03 = get_post_meta($post->ID , 'staff_03' ,true);
    $voice_03 = get_post_meta($post->ID , 'voice_03' ,true);
    $staff_04 = get_post_meta($post->ID , 'staff_04' ,true);
    $voice_04 = get_post_meta($post->ID , 'voice_04' ,true);
    $staff_05 = get_post_meta($post->ID , 'staff_05' ,true);
    $voice_05 = get_post_meta($post->ID , 'voice_05' ,true);

    ?>
    <?php if($post_counter %2 == 1): ?>
    <section class="features-section" id="voice01">
    <?php else: ?>
    <section class="features-section" id="voice02" style="background-color: white;">
    <?php endif; ?>
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    <?php the_title(); ?>
                </h2>
            </div>

            <div class="features-grid">
                <div class="faq-list">
                    <?php if(empty($staff_01) || empty($voice_01)): ?>
                    <?php else: ?>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span class="faq-icon mod-btn--pink">声</span>
                            <span><?php echo $staff_01; ?></span>
                        </div>
                        <div class="faq-answer">
                            <?php echo $voice_01; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(empty($staff_02) || empty($voice_02)): ?>
                    <?php else: ?>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span class="faq-icon mod-btn--pink">声</span>
                            <span><?php echo $staff_02; ?></span>
                        </div>
                        <div class="faq-answer">
                            <?php echo $voice_02; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(empty($staff_03) || empty($voice_03)): ?>
                    <?php else: ?>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span class="faq-icon mod-btn--pink">声</span>
                            <span><?php echo $staff_03; ?></span>
                        </div>
                        <div class="faq-answer">
                            <?php echo $voice_03; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(empty($staff_04) || empty($voice_04)): ?>
                    <?php else: ?>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span class="faq-icon mod-btn--pink">声</span>
                            <span><?php echo $staff_04; ?></span>
                        </div>
                        <div class="faq-answer">
                            <?php echo $voice_04; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(empty($staff_05) || empty($voice_05)): ?>
                    <?php else: ?>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span class="faq-icon mod-btn--pink">声</span>
                            <span><?php echo $staff_05; ?></span>
                        </div>
                        <div class="faq-answer">
                            <?php echo $voice_05; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php $post_counter++; ?>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
