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
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit_01.jpg" alt="訪問看護「一会」">
                    </div>
                    <div class="service-content">
                        <h3>看護師（常勤／正規雇用）</h3>
                        
                        <a href="recruit-1.html" class="btn btn--green btn--circle btn--arrow_right">
                            詳細を見る
                        </a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit_02.jpg" alt="訪問看護「一会」">
                    </div>
                    <div class="service-content">
                        <h3>理学療法士・作業療法士（正社員）</h3>
                        
                        <a href="recruit-2.html" class="btn btn--green btn--circle btn--arrow_right">
                            詳細を見る
                        </a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit_03.jpg" alt="訪問看護「一会」">
                    </div>
                    <div class="service-content">
                        <h3>理学療法士・作業療法士（パート）</h3>
                        
                        <a href="recruit-3.html" class="btn btn--green btn--circle btn--arrow_right">
                            詳細を見る
                        </a>
                    </div>
                </div>
            </div>
            <div class="features-grid" style="width: 95%;margin-top: 3rem;">
                    <a href="staff-voice.html#voice01" class="btn btn--yellow" style="font-size: 1.75rem;">
                        スタッフの声（看護師・ＰＴ）
                    </a>
                    <a href="staff-voice.html#voice01" class="btn btn--yellow" style="font-size: 1.75rem;">
                        スタッフの声（介護スタッフ）
                    </a>
            </div>
        </div>
    </section>

    <!-- 充実した研修制度 -->
    <section class="services-section" id="training" style="background-color: white;">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title">充実した研修制度</h2>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit_04.jpg" alt="充実した研修制度">
                    </div>
                    <div class="service-content">
                        <h3>社外研修</h3>
                        <p>研修内容などの掲載欄です。</p>
                        <a href="training-1.html" class="btn btn--green btn--circle btn--arrow_right">
                            詳細を見る
                        </a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit_05.jpg" alt="充実した研修制度">
                    </div>
                    <div class="service-content">
                        <h3>社内研修</h3>
                        <p>研修内容などの掲載欄です。</p>
                        <a href="training-2.html" class="btn btn--green btn--circle btn--arrow_right">
                            詳細を見る
                        </a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit_06.jpg" alt="充実した研修制度">
                    </div>
                    <div class="service-content">
                        <h3>資格の取得</h3>
                        <p>資格の取得内容などの掲載欄です。</p>
                        <a href="training-3.html" class="btn btn--green btn--circle btn--arrow_right">
                            詳細を見る
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
