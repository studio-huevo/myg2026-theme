<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main-content">
    <!-- よくある質問（訪問関連） -->
    <?php
    $terminalcare_args = Array(
        'post_type' => 'terminal_care',  // 投稿
        'post_status' => 'publish',   // 公開済
        'posts_per_page' => -1,       // 表示する投稿数(-1を指定すると全投稿を表示)
        'orderby' => 'date',
        'order' => 'ASC',
    );

    $terminalcare_query = new WP_Query( $terminalcare_args );
    ?>
    <?php if($terminalcare_query->have_posts()): ?>
    <?php $post_counter = 1; ?>
    <?php while ($terminalcare_query->have_posts()) : $terminalcare_query->the_post(); /* ループ開始 */ ?>
    <?php 
    $patron_01 = get_post_meta($post->ID , 'patron_01' ,true);
    $usecase_01 = get_post_meta($post->ID , 'usecase_01' ,true);
    $patron_02 = get_post_meta($post->ID , 'patron_02' ,true);
    $usecase_02 = get_post_meta($post->ID , 'usecase_02' ,true);
    $patron_03 = get_post_meta($post->ID , 'patron_03' ,true);
    $usecase_03 = get_post_meta($post->ID , 'usecase_03' ,true);
    $patron_04 = get_post_meta($post->ID , 'patron_04' ,true);
    $usecase_04 = get_post_meta($post->ID , 'usecase_04' ,true);
    $patron_05 = get_post_meta($post->ID , 'patron_05' ,true);
    $usecase_05 = get_post_meta($post->ID , 'usecase_05' ,true);
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
                    <?php if(empty($patron_01) || empty($usecase_01)): ?>
                    <?php else: ?>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span class="faq-icon mod-btn--pink">声</span>
                            <span><?php echo $patron_01; ?></span>
                        </div>
                        <div class="faq-answer">
                            <?php echo $usecase_01; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(empty($patron_02) || empty($usecase_02)): ?>
                    <?php else: ?>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span class="faq-icon mod-btn--pink">声</span>
                            <span><?php echo $patron_02; ?></span>
                        </div>
                        <div class="faq-answer">
                            <?php echo $usecase_02; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(empty($patron_03) || empty($usecase_03)): ?>
                    <?php else: ?>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span class="faq-icon mod-btn--pink">声</span>
                            <span><?php echo $patron_03; ?></span>
                        </div>
                        <div class="faq-answer">
                            <?php echo $usecase_03; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(empty($patron_04) || empty($usecase_04)): ?>
                    <?php else: ?>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span class="faq-icon mod-btn--pink">声</span>
                            <span><?php echo $patron_04; ?></span>
                        </div>
                        <div class="faq-answer">
                            <?php echo $usecase_04; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(empty($patron_05) || empty($usecase_05)): ?>
                    <?php else: ?>
                    <div class="faq-item">
                        <div class="faq-question">
                            <span class="faq-icon mod-btn--pink">声</span>
                            <span><?php echo $patron_05; ?></span>
                        </div>
                        <div class="faq-answer">
                            <?php echo $usecase_05; ?>
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
