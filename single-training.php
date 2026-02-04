<?php get_header(); ?>
<?php
$syokusyu      = get_post_meta($post->ID,'syokusyu', true);
$message       =get_post_meta($post->ID,'message', true);
$keitai        = get_post_meta($post->ID,'keitai', true);
$gyomu         = get_post_meta($post->ID,'gyomu', true);
$koyoukikan   = get_post_meta($post->ID,'koyoukikan', true);
$shiyoukikan   = get_post_meta($post->ID,'shiyoukikan', true);
$kinmukeitai   = get_post_meta($post->ID,'kinmukeitai', true);
$kinmujikan    = get_post_meta($post->ID,'kinmujikan', true);
$kyukeijikan   = get_post_meta($post->ID,'kyukeijikan', true);
$syukyuseido   = get_post_meta($post->ID,'syukyuseido', true);
$yukyu         = get_post_meta($post->ID,'yukyu', true);
$chinginkeitai = get_post_meta($post->ID,'chinginkeitai', true);
$teate         = get_post_meta($post->ID,'teate', true);
$shoyo         = get_post_meta($post->ID,'shoyo', true);
$hoken         = get_post_meta($post->ID,'hoken', true);
?>
<!-- メインコンテンツ -->
<main class="main-content">
    <!-- 施設紹介 -->
    <section class="services-section" id="recruit">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title"><?php echo $syokusyu; ?></h2>
            </div>
            <?php echo $message; ?>
            <?php if(is_single('看護師（常勤／正規雇用）')): ?>
            <div>
                <p style="padding-bottom: 2rem;">※「訪問看護１日のスケジュール」をご覧ください。</p>
                <a href="<?php echo wp_get_attachment_image_src( '279','full',true )[0]; ?>"  class="btn btn--yellow btn--circle popup-image-btn">
                    「訪問看護１日のスケジュール」はこちら
                </a>
            </div>
            <?php elseif(is_single('理学療法士・作業療法士（正社員）')): ?>
            <div>
                <p style="padding-bottom: 2rem;">※「訪問リハ１日のスケジュール」をご覧ください。</p>
                <a href="<?php echo wp_get_attachment_image_src( '280','full',true )[0]; ?>"  class="btn btn--yellow btn--circle popup-image-btn">
                    「訪問リハ１日のスケジュール」はこちら
                </a>
            </div>
            <?php endif; ?>
            <div class="services-grid">
                <div>
                <table class="company--overview__table table-lay-col2">
                    <?php if(empty($keitai)): ?>
                    <?php else: ?>
                    <tr>
                        <th>雇用形態</th>
                        <td><?php echo $keitai; ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if(empty($gyomu)): ?>
                    <?php else: ?>
                    <tr>
                        <th>職務内容</th>
                        <td><?php echo $gyomu; ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if(empty($shiyoukikan)): ?>
                    <?php else: ?>
                    <tr>
                        <th>試用期間</th>
                        <td><?php echo $shiyoukikan; ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if(empty($koyoukikan)): ?>
                    <?php else: ?>
                    <tr>
                        <th>雇用期間</th>
                        <td><?php echo $koyoukikan; ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if(empty($kinmukeitai)): ?>
                    <?php else: ?>
                    <tr>
                        <th>勤務形態</th>
                        <td><?php echo $kinmukeitai; ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if(empty($kinmujikan)): ?>
                    <?php else: ?>
                    <tr>
                        <th>勤務時間</th>
                        <td><?php echo $kinmujikan; ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if(empty($kyukeijikan)): ?>
                    <?php else: ?>
                    <tr>
                        <th>休憩時間</th>
                        <td><?php echo $kyukeijikan; ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if(empty($syukyuseido)): ?>
                    <?php else: ?>
                    <tr>
                        <th>週休制度</th>
                        <td><?php echo $syukyuseido; ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if(empty($yukyu)): ?>
                    <?php else: ?>
                    <tr>
                        <th>有給休暇</th>
                        <td><?php echo $yukyu; ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if(empty($chinginkeitai)): ?>
                    <?php else: ?>
                    <tr>
                        <th>賃金形態</th>
                        <td><?php echo $chinginkeitai; ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if(empty($teate)): ?>
                    <?php else: ?>
                    <tr>
                        <th>手　　当</th>
                        <td><?php echo $teate; ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if(empty($shoyo)): ?>
                    <?php else: ?>
                    <tr>
                        <th>賞　　与</th>
                        <td><?php echo $shoyo; ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if(empty($hoken)): ?>
                    <?php else: ?>
                    <tr>
                        <th>各種保険</th>
                        <td><?php echo $hoken; ?></td>
                    </tr>
                    <?php endif; ?>
                </table>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
