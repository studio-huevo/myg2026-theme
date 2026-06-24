<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="main-content">
    <!-- クレド -->
    <section class="features-section" id="credos" style="background-color: white;">
        <div class="container">
            <div class="features-grid">
                <div>
                    <?php echo '<img src="'.wp_get_attachment_url(get_post_meta($post->ID , 'hero_img01' ,true)). '">'; ?>
                </div>
                <div>
                    <?php echo '<img src="'.wp_get_attachment_url(get_post_meta($post->ID , 'hero_img02' ,true)). '">'; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 理事長挨拶 -->
    <section class="features-section" id="greeting">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title"><?php echo nl2br(get_post_meta($post->ID, 'area_title01', true)); ?></h2>
            </div>
            
            <div class="features-grid">
                <div>
                    <?php echo get_post_meta($post->ID, 'area_content01', true); ?>
                </div>
            </div>

        </div>
    </section>
    <!-- 法人概要 -->
    <section class="features-section" id="summary" style="background-color: white;">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title"><?php echo nl2br(get_post_meta($post->ID, 'area_title02', true)); ?></h2>
            </div>
            
            <div class="features-grid">
                <div>
                <table class="company--overview__table table-lay-col2">
                    <tr>
                        <th>法人名</th>
                        <td><?php echo nl2br(get_post_meta($post->ID, 'houjinmei', true)); ?></td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td><?php echo nl2br(get_post_meta($post->ID, 'shozaichi', true)); ?></td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td><?php echo nl2br(get_post_meta($post->ID, 'setsuritsu', true)); ?></td>
                    </tr>
                    <!-- <tr>
                        <th>資本金</th>
                        <td><?php echo nl2br(get_post_meta($post->ID, 'shihonkin', true)); ?></td>
                    </tr> -->
                    <tr>
                        <th>代表者</th>
                        <td><?php echo nl2br(get_post_meta($post->ID, 'daihyousha', true)); ?></td>
                    </tr>
                    <tr>
                        <th>活動実績</th>
                        <td><?php echo nl2br(get_post_meta($post->ID, 'jisseki', true)); ?></td>
                    </tr>
                </table>
                </div>
           
            </div>

        </div>
    </section>

    <!-- アクセス -->
    <section class="features-section" id="access">
        <div class="container">
            <div class="section-title">
                <h2 class="slash-title"><?php echo nl2br(get_post_meta($post->ID, 'area_title03', true)); ?></h2>
            </div>
            
            <div class="features-grid">
                <div>
                    <p><?php echo get_post_meta($post->ID, 'map_add', true); ?></p>
                    <iframe loading="lazy" style="border: 0;" tabindex="0" src="<?php echo nl2br(get_post_meta($post->ID, 'map_url', true)); ?>" width="100%" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                </div>
           
            </div>

        </div>
    </section>

<?php get_footer(); ?>
