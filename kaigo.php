<?php
/*
Template Name: Kaigo
*/
?>
<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main-content">
    <!-- ヒーローセクション -->
    <section class="hero-section" style="background-color: white;">
        <div class="hero-content">
            <img src="assets/images/hero_kaigo.jpg" alt="むゆうげん ロゴ">
        </div>
    </section>
    <!-- 訪問介護とは -->
    <section class="features-section" id="features">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    訪問介護
                </h2>
            </div>
            
            <div class="features-grid">
                 <div>
                    <div style="margin-bottom: 2rem;padding-left: 2rem;">
                        <ol>
                            <li style="margin-bottom: 1rem;">介護スタッフがご自宅に訪問し、家事や調理、身体介護などを行います。</li>
                            <li style="margin-bottom: 1rem;">毎日の生活を、なるべくご自宅でふだん通りに過ごしたい、そうしたご本人やご家族を力強くサポートするサービスです。</li>
                            <li style="margin-bottom: 1rem;">ご自宅での自分らしい生活のために「できること」の継続や「できそうなこと」を引き出し、発見することを念頭に支援します。</li>
                        </ol>
                        
                    </div>
                    <h3 style="padding-bottom: 2rem;">● 身体介護サービス</h3>
                    <p style="padding-bottom: 3rem;">食事介助、入浴介助、排泄介助（おむつ交換）、身体の清拭、移動・移乗介助などの介護を行います。</p>
                    <h3 style="padding-bottom: 2rem;">● 生活援助サービス</h3>
                    <p style="padding-bottom: 3rem;">一般的な調理・配下膳、衣類整理、被服修理、洗濯、掃除、薬の受け取り・買い物などの家事援助を行います。</p>
                    <h3 style="padding-bottom: 2rem;">● 移動介護サービス</h3>
                    <p style="padding-bottom: 3rem;">屋外での移動に制約がある障害者等が社会生活上必要不可欠な外出および余暇活動等の社会参加のための外出をする際において必要な援助を行います。</p>
                    <h3 style="padding-bottom: 2rem;">● 営業日</h3>
                    <p style="padding-bottom: 3rem;">月曜～金曜日まで</p>
                    <h3 style="padding-bottom: 2rem;">● 営業時間</h3>
                    <p style="padding-bottom: 3rem;">8時～17時まで</p>
                </div>
            </div>

        </div>
    </section>
<?php //if (have_posts()) : ?>
<?php //while (have_posts()) : the_post(); /* ループ開始 */ ?>
<?php //the_content(); ?>
<?php //endwhile; endif; ?>

<?php get_footer(); ?>
