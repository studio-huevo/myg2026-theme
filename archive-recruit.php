<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main-content">
    <!-- ヒーローセクション -->
    <section class="hero-section" style="background-color: white;">
        <div class="hero-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_recruit.jpg" alt="むゆうげん ロゴ">
        </div>
    </section>
    
    <!-- 求人情報 -->
    <section class="services-section" id="recruit">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">求人情報</h2>
            </div>
            <p>NPO法人むゆうげんは、患者様一人ひとりの人生という舞台を在宅医療・看護・介護職のスペシャリストが黒衣（くろこ）となって支えているチームです。</p>
            <p>地域の皆様のニーズに応えるための事業展開と現在の行っている事業の安定のために一緒に働いていただける方を募集しています。</p>
            <p>地域の皆様の在宅療養を豊かにしたいという思いのもと、心を込めたケアを行ってくださる方は大歓迎です。</p>
            
            <div class="services-grid">
                <?php
                $recruit_args = Array(
                    'post_type' => 'recruit',  // 投稿
                    'post_status' => 'publish',   // 公開済
                    'posts_per_page' => -1,       // 表示する投稿数(-1を指定すると全投稿を表示)
                    'orderby' => 'date',
                    'order' => 'ASC',
                );

                $recruit_query = new WP_Query( $recruit_args );
                ?>
                <?php if($recruit_query->have_posts()): ?>
                <?php $post_counter = 1; ?>
                <?php while ($recruit_query->have_posts()) : $recruit_query->the_post(); /* ループ開始 */ ?>
                <?php 
                $recruit_img = wp_get_attachment_url(get_post_meta($post->ID , 'recruit_img' ,true));
                ?>
                <div class="service-card">
                    
                    <div class="service-image">
                        <img src="<?php echo $recruit_img; ?>" alt="訪問看護「一会」">
                    </div>
                    <div class="service-content">
                        <h3><?php the_title(); ?></h3>
                        
                        <a href="<?php echo get_permalink(); ?>" class="btn btn--green btn--circle btn--arrow_right">
                            詳細を見る
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="features-grid" style="width: 95%;margin-top: 3rem;">
                    <a href="<?php echo home_url('/'); ?>staff_voice#voice01" class="btn btn--yellow" style="font-size: 1.75rem;">
                        スタッフの声（看護師・ＰＴ）
                    </a>
                    <a href="<?php echo home_url('/'); ?>staff_voice#voice02" class="btn btn--yellow" style="font-size: 1.75rem;">
                        スタッフの声（介護スタッフ）
                    </a>
            </div>
        </div>
    </section>

    <!-- 充実した研修制度 -->
    <section class="services-section" id="training" style="background-color: white;">
        <div class="container" style="max-width: 800px;">
            <div class="section-title">
                <h2 class="slash-title">充実した研修制度</h2>
            </div>
            <div class="services-grid">
                <?php
                $training_args = Array(
                    'post_type' => 'training',  // 投稿
                    'post_status' => 'publish',   // 公開済
                    'posts_per_page' => -1,       // 表示する投稿数(-1を指定すると全投稿を表示)
                    'orderby' => 'date',
                    'order' => 'ASC',
                );

                $training_query = new WP_Query( $training_args );
                ?>
                <?php if($training_query->have_posts()): ?>
                <?php $post_counter = 1; ?>
                <?php while ($training_query->have_posts()) : $training_query->the_post(); /* ループ開始 */ ?>
                <?php 
                $training_img = wp_get_attachment_url(get_post_meta($post->ID , 'training_img' ,true));
                $training_summary = get_post_meta($post->ID , 'training_summary' ,true);
                ?>
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo $training_img; ?>" alt="充実した研修制度">
                    </div>
                    <div class="service-content">
                        <h3><?php the_title(); ?></h3>
                        <?php if(empty($training_summary)): ?>
                        <?php else: ?>
                        <p><?php echo $training_summary; ?></p>
                        <?php endif; ?>
                        <a href="<?php echo get_permalink(); ?>" class="btn btn--green btn--circle btn--arrow_right">
                            詳細を見る
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
