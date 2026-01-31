<?php
/**
 * Version    : 1.0.0
 * Author     : Studio Huevo
 * Author URI : https://huevo.xyz
 * Created    : January 19, 2026
 */
?>

<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main-content">
    
    <!-- むゆうげん -->
    <section class="features-section" id="features">
        <div class="container">            
            <div class="features-grid">
                <?php
                    $corporation_args = Array(
                        'post_type' => 'corporation',  // 投稿
                        'post_status' => 'publish',   // 公開済
                        'posts_per_page' => -1,       // 表示する投稿数(-1を指定すると全投稿を表示)
                    );

                    $corporation_query = new WP_Query( $corporation_args );
                ?>
			    <?php if($corporation_query->have_posts()): ?>
			    <?php while ($corporation_query->have_posts()) : $corporation_query->the_post(); /* ループ開始 */ ?>
                <div>
                    <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'hero_img01' ,true)); ?>" alt="特定非営利法人むゆうげん">
                </div>
                <div>
                    <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'hero_img02' ,true)); ?>" alt="特定非営利法人むゆうげん">
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <a href="<?php echo home_url('/'); ?>corporation" class="btn btn--yellow btn--circle">
                    「むゆうげん」法人案内へ
                </a>
            </div>
        </div>
    </section>

    <!-- お知らせ -->
    <section class="news-section" id="news">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    <span class="slash-title__lead">Instagram</span>
                    お知らせ
                </h2>
            </div>

            
            <div class="news-grid" id="instagram-grid"></div>
            
            <div style="text-align: center; margin-top: 3rem;">
                <a href="https://www.instagram.com/muyuugen/" class="btn btn--yellow btn--circle">
                    インスタグラムを見る
                </a>
            </div>
        </div>
    </section>

    <!-- サービス紹介 -->
    <section class="services-section" id="services">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    <span class="slash-title__lead">むゆうげんのサービス</span>
                    サービス一覧
                </h2>
            </div>
            
            <div class="services-grid">                
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-kango.png" alt="訪問看護「一会」">
                    </div>
                    <div class="service-content">
                        <h3>訪問看護「一会」</h3>
                        <p>主治医の指示のもと看護師や理学療法士などがご自宅（または施設）に訪問します。24時間365日、不安な時にはいつでも相談に応じられる体制を整えています。</p>
                        <div class="service-content__btn-wrap">
                            <a href="kango.html" class="btn btn--green btn--circle btn--arrow_right">
                                詳細を見る
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-kaigo.png" alt="訪問介護「一会」">
                    </div>
                    <div class="service-content">
                        <h3>訪問介護「一会」</h3>
                        <p>介護保険のみならず、制度の枠外をカバーできる生活援助が可能です。</p>
                        <div class="service-content__btn-wrap">
                            <a href="kaigo.html" class="btn btn--green btn--circle btn--arrow_right">
                                詳細を見る
                            </a>
                        </div>
                        
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-wako.png" alt="ホームホスピス「わこの家」">
                    </div>
                    <div class="service-content">
                        <h3>ホームホスピス「わこの家」</h3>
                        <p>我が家のような環境で、いつも誰かに見守られて「ひとりぼっちではない、孤独ではない」心地よい自分の居場所を造ります。</p>
                        <div class="service-content__btn-wrap">
                            <a href="wako.html" class="btn btn--green btn--circle btn--arrow_right">
                                詳細を見る
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 重要事項説明書 -->
    <section class="important-section" id="important" style="background-color: white;">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">重要事項説明書</h2>
                <p>重要事項説明書をPDFでダウンロードできます。</p>
            </div>
            <div class="important-grid">
                <?php
                    $corporation_args = Array(
                        'post_type' => 'document',  // 投稿
                        'post_status' => 'publish',   // 公開済
                        'posts_per_page' => -1,       // 表示する投稿数(-1を指定すると全投稿を表示)
                    );

                    $corporation_query = new WP_Query( $corporation_args );
                ?>
			    <?php if($corporation_query->have_posts()): ?>
			    <?php while ($corporation_query->have_posts()) : $corporation_query->the_post(); /* ループ開始 */ ?>
                <div class="important-content__btn-wrap">
                    <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'document_file01' ,true)); ?>" class="btn btn--yellow" target="_blank" style="width: 100%; font-size: 1.5rem;">
                        ホームホスピスわこの家 重要事項説明書
                    </a>
                </div>
                <div class="important-content__btn-wrap">
                    <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'document_file02' ,true)); ?>" class="btn btn--yellow" target="_blank" style="width: 100%; font-size: 1.5rem;">
                        訪問看護 重要事項説明書
                    </a>
                </div>
                <div class="important-content__btn-wrap">
                    <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'document_file03' ,true)); ?>" class="btn btn--yellow" target="_blank" style="width: 100%;  font-size: 1.5rem;">
                        訪問介護 重要事項説明書
                    </a>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                
            </div>
        </div>
    </section>



<?php get_footer(); ?>