<?php
/**
 * Version    : 1.0.0
 * Author     : Studio Huevo
 * Author URI : https://huevo.xyz
 * Created    : January 19, 2026
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# <?php echo ( is_single() || is_page() ) ? 'fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#' : 'fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#' ?>">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php if ( is_home() && is_front_page() ) : ?>
<title>訪問看護・訪問リハビリ・ホームホスピス関する相談・介護のお悩みをお持ちの方へ | <?php bloginfo('name'); ?></title>
<?php else : ?>
<title><?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>
<?php endif; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="description" content="ホームホスピス関する相談・訪問看護・訪問リハビリ・訪問介護のお悩みは「むゆうげん」へ" />
<meta name="keywords" content="ホームホスピス,わこの家,訪問看護,訪問リハビリ,訪問介護,むゆうげん,一会" />

<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/styles.css'; echo '?' . filemtime( get_stylesheet_directory() . '/assets/css/styles.css'); ?>" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/nav-style.css'; echo '?' . filemtime( get_stylesheet_directory() . '/assets/css/nav-style.css'); ?>" media="all">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&amp;family=Roboto:wght@300;400;500&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<?php if( is_page('contact') ) : ?>
<style>
/* ===== CF7 プロ仕様送信ボタン ===== */

.cf7-submit{
  display:inline-flex;
  align-items:center;
  gap:10px;

  background-color: var(--primary-green);
  color:#fff;
  font-size:18px;
  font-weight:700;

  padding:16px 28px;
  border:none;
  border-radius:12px;

  cursor:pointer;
  transition:.25s;
}

.cf7-submit i{
  transition:.25s;
}

.cf7-submit:hover i{
  transform:translateX(6px);
}

/* スピナー非表示 */
span.wpcf7-spinner {
  display: none;
}

</style>
<?php endif; ?>
<!-- WordPressのjQueryを読み込ませない -->
<?php wp_deregister_script('jquery'); ?>

<?php wp_head(); ?>
</head>

<body class="home">
<!-- 新しいヘッダー -->
<header class="new-header">
    <!-- トップバー（不要ならそのまま） -->
    <!-- <div class="new-header__topbar"></div> -->

    <!-- メインヘッダー -->
    <div class="new-header__main">
        <div class="new-header__main-inner">
            
            <!-- ロゴ（PC） -->
            <div class="new-header__logo">
                <div class="new-header__logo-text">
                    <span class="new-header__logo-corporate_type">特定非営利活動法人</span> むゆうげん
                    <span class="new-header__logo-subtext">
                        訪問看護 一会・訪問介護 一会・ホームホスピス わこの家
                    </span>
                </div>
            </div>

            <!-- ロゴ（スマホ） -->
            <div class="mobile-header__logo">
                <div class="mobile-header__logo-text">
                    <span class="mobile-header__logo-corporate_type">特定非営利活動法人</span> むゆうげん
                    <span class="mobile-header__logo-subtext">訪問看護 一会・訪問介護 一会</span>
                    <span class="mobile-header__logo-subtext">ホームホスピス わこの家</span>
                </div>
            </div>

            

            <!-- CTA（電話・問い合わせ） -->
            <div class="new-header__cta">
                <a href="tel:0947-45-7507" class="new-header__cta-phone">
                    
                    <div>
                        <i class="fas fa-phone"></i>
                        <span class="new-header__cta-phone-number">0947-45-7507</span>
                        <span class="new-header__cta-phone-time">受付時間 8:00-17:00</span>
                    </div>
                </a>
                <a href="<?php echo home_url('/'); ?>contact" class="new-header__cta-button">
                    <i class="fas fa-envelope"></i>お問い合わせ
                </a>
            </div>

            <!-- モバイルメニューボタン -->
            <button class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
    <div class="new-header__bottombar">
            <!-- PCナビゲーション（PDF準拠） -->
            <nav class="new-header__nav">

                <!-- トップページ -->
                <div class="new-header__nav-item">
                    <a href="<?php echo home_url('/'); ?>" class="new-header__nav-link new-header__nav-link--active">
                        <i class="fas fa-home"></i>ホーム
                    </a>
                </div>

                <!-- サービス・事業（メガメニュー） -->
                <div class="new-header__nav-item">
                    <a class="new-header__nav-link">
                        <i class="fas fa-hand-holding-heart"></i>サービス・事業
                    </a>

                    <div class="new-header__mega-menu">
                        <div class="new-header__mega-grid">
                            
                            <div class="new-header__mega-column">
                                <h4>サービス・事業</h4>
                                <ul class="new-header__mega-links">
                                    <li>
                                        <div>
                                            <a href="<?php echo home_url('/'); ?>kango_ichie" class="new-header__mega-link">
                                                ◆ 訪問看護・訪問リハビリテーション 一会
                                            </a>
                                        </div>
                                        <div style="padding-left: 3rem;">
                                            <a href="<?php echo home_url('/'); ?>kango_info" class="new-header__mega-link">
                                                ├ 訪問看護
                                            </a>
                                        </div>
                                        <div style="padding-left: 3rem;">
                                            <a href="<?php echo home_url('/'); ?>kango_reha" class="new-header__mega-link">
                                                └ 訪問リハビリテーション
                                            </a>
                                        </div>
                                    </li>
                                    <li><a href="<?php echo home_url('/'); ?>kaigo_ichie" class="new-header__mega-link">
                                        ◆ 訪問介護 一会
                                    </a></li>
                                    <li><a href="<?php echo home_url('/'); ?>wakonoie" class="new-header__mega-link">
                                        ◆ わこの家
                                    </a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- 法人案内 -->
                <div class="new-header__nav-item">
                    <a class="new-header__nav-link">
                        <i class="fas fa-landmark"></i>法人案内
                    </a>

                    <div class="new-header__mega-menu">
                        <div class="new-header__mega-grid">
                            <div class="new-header__mega-column">
                                <h4>法人案内</h4>
                                <ul class="new-header__mega-links">
                                    <li>
                                        <div>
                                            <a href="<?php echo home_url('/'); ?>corporation" class="new-header__mega-link">
                                                ◆ 法人案内
                                            </a>
                                        </div>
                                        <div style="padding-left: 3rem;">
                                            <a href="<?php echo home_url('/'); ?>corporation#greeting" class="new-header__mega-link">
                                                ├ 10周年のご挨拶
                                            </a>
                                        </div>
                                        <div style="padding-left: 3rem;">
                                            <a href="<?php echo home_url('/'); ?>corporation#summary" class="new-header__mega-link">
                                                ├ 法人概要
                                            </a>
                                        </div>
                                        <div style="padding-left: 3rem;">
                                            <a href="<?php echo home_url('/'); ?>corporation#access" class="new-header__mega-link">
                                                └ アクセス
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- よくある質問 -->
                <div class="new-header__nav-item">
                    <a class="new-header__nav-link">
                        <i class="fas fa-question-circle"></i>よくある質問
                    </a>
                    <div class="new-header__mega-menu">
                        <div class="new-header__mega-grid">
                            <div class="new-header__mega-column">
                                <h4>よくある質問</h4>
                                <ul class="new-header__mega-links">
                                    <li>
                                        <div>
                                            <a href="<?php echo home_url('/'); ?>faq" class="new-header__mega-link">
                                                ◆ よくある質問
                                            </a>
                                        </div>
                                        <div style="padding-left: 3rem;">
                                            <a href="<?php echo home_url('/'); ?>faq#visit" class="new-header__mega-link">
                                                ├ 訪問関連の質問
                                            </a>
                                        </div>
                                        <div style="padding-left: 3rem;">
                                            <a href="<?php echo home_url('/'); ?>faq#wakonoie" class="new-header__mega-link">
                                                └ わこの家関連の質問
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 採用情報 -->
                <div class="new-header__nav-item">
                    <a class="new-header__nav-link">
                        <i class="fas fa-user-friends"></i>採用情報
                    </a>
                    <div class="new-header__mega-menu">
                        <div class="new-header__mega-grid">
                            <div class="new-header__mega-column">
                                <h4>採用情報</h4>
                                <ul class="new-header__mega-links">
                                    <li>
                                        <div>
                                            <a href="<?php echo home_url('/'); ?>recruit" class="new-header__mega-link">
                                                ◆ 採用情報
                                            </a>
                                        </div>
                                        <div style="padding-left: 3rem;">
                                            <a href="<?php echo home_url('/'); ?>recruit/看護師（常勤／正規雇用）" class="new-header__mega-link">
                                                ├ 看護師（常勤／正規雇用）求人
                                            </a>
                                        </div>
                                        <div style="padding-left: 3rem;">
                                            <a href="<?php echo home_url('/'); ?>recruit/理学療法士・作業療法士（正社員）" class="new-header__mega-link">
                                                ├ 理学療法士・作業療法士（正社員）求人
                                            </a>
                                        </div>
                                        <div style="padding-left: 3rem;">
                                            <a href="<?php echo home_url('/'); ?>recruit/理学療法士・作業療法士（パート）" class="new-header__mega-link">
                                                └ 理学療法士・作業療法士（パート）求人
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="<?php echo home_url('/'); ?>staff_voice" class="new-header__mega-link">
                                                ◆ スタッフの声
                                            </a>
                                        </div>
                                        <div style="padding-left: 3rem;">
                                            <a href="<?php echo home_url('/'); ?>staff_voice#voice01" class="new-header__mega-link">
                                                ├ スタッフの声（看護師・ＰＴ）
                                            </a>
                                        </div>
                                        <div style="padding-left: 3rem;">
                                            <a href="<?php echo home_url('/'); ?>staff_voice#voice02" class="new-header__mega-link">
                                                ├ スタッフの声（介護スタッフ）
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="<?php echo home_url('/'); ?>recruit#training" class="new-header__mega-link">
                                                ◆ 充実した研修制度
                                            </a>
                                        </div>
                                        <div style="padding-left: 3rem;">
                                            <a href="<?php echo home_url('/'); ?>training/社内研修" class="new-header__mega-link">
                                                ├ 社内研修
                                            </a>
                                        </div>
                                        <div style="padding-left: 3rem;">
                                            <a href="<?php echo home_url('/'); ?>training/社外研修" class="new-header__mega-link">
                                                └ 社外研修
                                            </a>
                                        </div>
                                        <!-- <div style="padding-left: 3rem;">
                                            <a href="<?php echo home_url('/'); ?>training/資格の取得" class="new-header__mega-link">
                                                └ 資格の取得
                                            </a>
                                        </div> -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    
        
        <div class="menu-container" id="menuContainer">
            <ul class="menu" id="mainMenu">
                <li class="menu-item">

                    <a href="<?php echo home_url('/'); ?>" class="menu-link">
                        <span><i class="fas fa-home"></i>　ホーム</span>
                    </a>
                </li>
                
                <li class="menu-item has-submenu">
                    <a href="" class="menu-link">
                        <span><i class="fas fa-hand-holding-heart"></i>　サービス・事業</span>
                        <i class="fas fa-chevron-down submenu-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo home_url('/'); ?>kango_ichie">◆ 訪問看護・訪問リハビリテーション 一会</a>
                            <a href="<?php echo home_url('/'); ?>kango_info">├ 訪問看護</a>
                            <a href="<?php echo home_url('/'); ?>kango_reha">└ 訪問リハビリテーション</a>
                            <a href="<?php echo home_url('/'); ?>kaigo_ichie">◆ 訪問介護 一会</a>
                            <a href="<?php echo home_url('/'); ?>wakonoie">◆ わこの家</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item has-submenu">
                    <a href="" class="menu-link">
                        <span><i class="fas fa-landmark"></i>　法人案内</span>
                        <i class="fas fa-chevron-down submenu-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo home_url('/'); ?>corporation">◆ 法人案内トップ</a>
                            <a href="<?php echo home_url('/'); ?>corporation#greeting">├ 10周年のご挨拶</a>
                            <a href="<?php echo home_url('/'); ?>corporation#summary">├ 法人概要</a>
                            <a href="<?php echo home_url('/'); ?>corporation#access">└ アクセス</a>
                        </li>
                    </ul>
                </li>
                
                <li class="menu-item has-submenu">
                    <a href="" class="menu-link">
                        <span><i class="fas fa-question-circle"></i>　よくある質問</span>
                        <i class="fas fa-chevron-down submenu-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo home_url('/'); ?>faq">◆ よくある質問トップ</a>
                            <a href="<?php echo home_url('/'); ?>faq#visit">├ 訪問関連の質問</a>
                            <a href="<?php echo home_url('/'); ?>faq#wakonoie">└ わこの家関連の質問</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item has-submenu">
                    <a href="" class="menu-link">
                        <span><i class="fas fa-user-friends"></i>　採用情報</span>
                        <i class="fas fa-chevron-down submenu-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo home_url('/'); ?>recruit">◆ 採用情報トップ</a>
                            <a href="<?php echo home_url('/'); ?>recruit/看護師（常勤／正規雇用）">├ 看護師（常勤／正規雇用）求人</a>
                            <a href="<?php echo home_url('/'); ?>recruit/理学療法士・作業療法士（正社員）">├ 理学療法士・作業療法士（正社員）求人</a>
                            <a href="<?php echo home_url('/'); ?>recruit/理学療法士・作業療法士（パート）">└ 理学療法士・作業療法士（パート）求人</a>
                            <a href="<?php echo home_url('/'); ?>staff-voice">◆ スタッフの声</a>
                            <a href="<?php echo home_url('/'); ?>staff-voice#voice01">├ スタッフの声（看護師・ＰＴ）</a>
                            <a href="<?php echo home_url('/'); ?>staff-voice#voice02">└ スタッフの声（介護スタッフ）</a>
                            <a href="<?php echo home_url('/'); ?>recruit#training">◆ 充実した研修制度</a>
                            <a href="<?php echo home_url('/'); ?>training/社内研修">├ 社内研修</a>
                            <a href="<?php echo home_url('/'); ?>training/社外研修">└ 社外研修</a>
                            <!-- <a href="<?php echo home_url('/'); ?>training_03">└ 資格の取得</a> -->
                        </li>
                    </ul>
                </li>

                <li>
                    <!-- CTA（電話・問い合わせ） -->
                    <div class="mobile-menu__cta">
                        <a href="tel:0947-45-7507" class="mobile-menu__cta-phone">
                            
                            <div>
                                <i class="fas fa-phone"></i>
                                <span class="mobile-menu__cta-phone-number">0947-45-7507</span>
                                <span class="mobile-menu__cta-phone-time">受付時間 8:00-17:00</span>
                            </div>
                        </a>
                        <a href="<?php echo home_url('/'); ?>contact" class="mobile-menu__cta-button">
                            <i class="fas fa-envelope"></i>お問い合わせ
                        </a>
                    </div>
                </li>
            </ul>
            
        </div>
</header>

