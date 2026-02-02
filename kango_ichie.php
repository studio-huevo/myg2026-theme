<?php
/*
Template Name: Kango
*/
?>
<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main-content">
    <!-- ヒーローセクション -->
    <section class="hero-section" style="background-color: white;">
        <div class="hero-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_kango.jpg" alt="むゆうげん ロゴ">
        </div>
    </section>
    <!-- 訪問看護・訪問リハビリテーションとは -->
    <section class="features-section" id="reha">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">
                    訪問看護・訪問リハビリテーションとは
                </h2>
            </div>
            
            <div class="features-grid">
                <div>
                    <p style="padding-bottom: 3rem;">
                        “訪問看護(リハビリ)が必要”な方を対象に、
                        主治医の指示のもと、看護師や理学療法士などがご自宅(または施設)に訪問を行います。
                        またご自宅で長く過ごせるように援助していきます。
                        24時間365日不安な時にはいつでも相談に応じられるような体制で運営しており、
                        看護師が必要と判断した場合には緊急での訪問も対応しています。<br><br>

                        日本財団在宅看護センターとして、地域の人々、医療機関、薬局、施設、介護事業所、
                        行政など関係する機関の橋渡し役として、予防を含む看護の力を発揮します。
                    </p>
                    <div class="features-grid" style="width: 90%;padding-bottom: 3rem;">
                        <a href="kango-info.html" class="btn btn--green" style="font-size: 1.75rem;">
                            訪問看護ページへ
                        </a>
                        <a href="kango-reha.html" class="btn btn--green" style="font-size: 1.75rem;">
                            訪問リハビリテーションページへ
                        </a>
                    </div>
                    <h3 style="padding-bottom: 2rem;">● 訪問導入の流れ</h3>
                    <div style="padding-bottom: 3rem;">
                        <p style="padding-bottom: 2rem;">詳しくは「訪問導入フローシート」をご覧ください。</p>
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/images/flow.jpg"  class="btn btn--yellow btn--circle popup-image-btn">
                            「訪問導入フローシート」はこちら
                        </a>
                    </div>
                    <h3 style="padding-bottom: 2rem;">● 訪問可能エリア</h3>
                    <p style="padding-bottom: 3rem;">田川市・田川郡近郊エリアなど<br>※ 詳しくはお問合せ下さい</p>
                    <h3 style="padding-bottom: 2rem;">● 営業日</h3>
                    <p style="padding-bottom: 3rem;">月曜～金曜日まで（土日祝日でも必要時対応可能）</p>
                    <h3 style="padding-bottom: 2rem;">● 営業時間</h3>
                    <p style="padding-bottom: 3rem;">8時～17時まで</p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>