<?php
/**
 * Version    : 1.0.0
 * Author     : Studio Huevo
 * Author URI : https://huevo.xyz
 * Created    : January 19, 2026
 */
?>
    <!-- CTAセクション -->
    <section class="cta-section" id="contact">
        <div class="cta-grid">
            <div class="">
                <p class="footer--comp__info__name" style="font-size: 2.0rem;">特定非営利活動法人「むゆうげん」</p>
                <p class="footer--comp__info__name" >訪問看護「一会」、訪問介護「一会」</p>
                <p class="footer--comp__info__address" style="line-height: 0.5;">〒825-0004 福岡県田川市夏吉1205-11</p>
                <p class="footer--comp__info__tel">TEL 0947-45-7507　FAX 0947-45-7505</p>
                <p class="footer--comp__info__name" style="padding: 2px 0;">ホームホスピス「わこの家」</p>
                <p class="footer--comp__info__address" style="line-height: 0.5;">〒822-1406 福岡県田川郡香春町香春84-1</p>
                <p class="footer--comp__info__tel">TEL 0947-32-7511</p>
            </div>
            <div class="footer--comp__sns-btn" style="width: 300px">
                <a href="https://www.instagram.com/muyuugen/" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bnr_instagram.jpg" style="min-width: 300px;" alt="Instagram 更新中！" />
                </a>
            </div>
        </div>
    </section>
    <section class="copyright">&copy;2016 - <?php echo date('Y'); ?> <span class="copy-comp">むゆうげん All Rights Reserved.</span></section>
</main>

<!-- ページトップへ戻る -->
<div id="page-top" class="page-top">
    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/arrow-wh.svg" alt="ページトップへ戻る"></a>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/lib.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<?php if(is_page('wakonoie')): ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wako_popup.js"></script>
<?php endif; ?>
<?php if ( is_home() && is_front_page() ) : ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/instagram.js"></script>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
