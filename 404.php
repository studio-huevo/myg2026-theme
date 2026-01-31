<?php
/**
 * Version    : 1.3.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main-content">
    <!-- クレド -->
    <section class="features-section page-404" id="credos" style="background-color: white;">
        <div class="container" style="padding-top: 8rem; padding-bottom: 8rem;">
			<div style="text-align: center;">
				<h2 style="font-size: 8rem;">404 NOT FOUND</h2>
				<p style="font-size: 1.5rem;">お探しのページは見つかりませんでした</p>
			</div>
			
			<div style="text-align: center; margin-top: 3rem;">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--yellow btn--circle">
                    トップページへ戻る
                </a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>