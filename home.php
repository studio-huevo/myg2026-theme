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
                    <?php
                    $kango_args = Array(
                        'post_type' => 'kango_ichie',  // 投稿
                        'post_status' => 'publish',   // 公開済
                        'posts_per_page' => -1,       // 表示する投稿数(-1を指定すると全投稿を表示)
                    );

                    $kango_query = new WP_Query( $kango_args );
                    ?>
                    <?php if($kango_query->have_posts()): ?>
                    <?php while ($kango_query->have_posts()) : $kango_query->the_post(); /* ループ開始 */ ?>
                    <div class="service-image">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'hero_img01' ,true)); ?>" alt="訪問看護「一会」">
                    </div>
                    <div class="service-content">
                        <h3>訪問看護「一会」</h3>
                        <p><?php echo get_post_meta($post->ID, 'kango_summary', true); ?></p>
                        <div class="service-content__btn-wrap">
                            <a href="<?php echo home_url('/'); ?>kango_ichie" class="btn btn--green btn--circle btn--arrow_right">
                                詳細を見る
                            </a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                
                <div class="service-card">
                    <?php
                    $kaigo_args = Array(
                        'post_type' => 'kaigo_ichie',  // 投稿
                        'post_status' => 'publish',   // 公開済
                        'posts_per_page' => -1,       // 表示する投稿数(-1を指定すると全投稿を表示)
                    );

                    $kaigo_query = new WP_Query( $kaigo_args );
                    ?>
                    <?php if($kaigo_query->have_posts()): ?>
                    <?php while ($kaigo_query->have_posts()) : $kaigo_query->the_post(); /* ループ開始 */ ?>
                    <div class="service-image">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'hero_img01' ,true)); ?>" alt="訪問介護「一会」">
                    </div>
                    <div class="service-content">
                        <h3>訪問介護「一会」</h3>
                        <p><?php echo get_post_meta($post->ID, 'kaigo_summary', true); ?></p>
                        <div class="service-content__btn-wrap">
                            <a href="<?php echo home_url('/'); ?>kaigo_ichie" class="btn btn--green btn--circle btn--arrow_right">
                                詳細を見る
                            </a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>

                <div class="service-card">
                    <?php
                    $wakonoie_args = Array(
                        'post_type' => 'wakonoie',  // 投稿
                        'post_status' => 'publish',   // 公開済
                        'posts_per_page' => -1,       // 表示する投稿数(-1を指定すると全投稿を表示)
                    );

                    $wakonoie_query = new WP_Query( $wakonoie_args );
                    ?>
                    <?php if($wakonoie_query->have_posts()): ?>
                    <?php while ($wakonoie_query->have_posts()) : $wakonoie_query->the_post(); /* ループ開始 */ ?>
                    <div class="service-image">
                        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'hero_img01' ,true)); ?>" alt="ホームホスピス「わこの家」">
                    </div>
                    <div class="service-content">
                        <h3>ホームホスピス「わこの家」</h3>
                        <p><?php echo get_post_meta($post->ID, 'wakonoie_summary', true); ?></p>
                        <div class="service-content__btn-wrap">
                            <a href="<?php echo home_url('/'); ?>wakonoie" class="btn btn--green btn--circle btn--arrow_right">
                                詳細を見る
                            </a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- 重要事項説明書 -->
    <section class="important-section" id="important" style="background-color: white;">
        <div class="container">
            <?php
                $document_args = Array(
                    'post_type' => 'document',  // 投稿
                    'post_status' => 'publish',   // 公開済
                        'posts_per_page' => -1,       // 表示する投稿数(-1を指定すると全投稿を表示)
                );

                $document_query = new WP_Query( $document_args );
	        ?>
            <?php if($document_query->have_posts()): ?>
            <?php while ($document_query->have_posts()) : $document_query->the_post(); /* ループ開始 */ ?>

            <div class="section-title">
                <h2 class="slash-title">訪問看護医療DX情報活用加算について</h2>
                <p>訪問看護医療DX情報活用加算に関するお知らせをPDFでダウンロードできます。</p>
            </div>
            <div class="important-grid" style="margin-bottom: 4rem;">
                <div></div>
                <div class="important-content__btn-wrap">
                    <a href="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'document_file04' ,true)); ?>" class="btn btn--yellow" target="_blank" style="width: 100%; font-size: 1.5rem;">
                        訪問看護医療DX情報活用加算に関するお知らせ
                    </a>
                </div>
                <div></div>
            </div>
            <div class="section-title">
                <h2 class="slash-title">重要事項説明書</h2>
                <p>重要事項説明書をPDFでダウンロードできます。</p>
            </div>
            <div class="important-grid">
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