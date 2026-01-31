<?php get_header(); ?>

<article>

<nav class="category_head service">
<ul>
<li>採用情報</li>
</ul>
</nav><!-- category_head -->


<section class="container" id="lineup">
<div class="wrapper slide-in-top delay04">

<div class="col12">
<div class="box_starter-kit">
<h1 class="text-center"><strong>募集要項</strong></h1>
<div class="box_link">
<div>
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
<h3 class="font_round"><?php echo $syokusyu; ?>募集</h3>
<div><?php echo nl2br($message); ?></div>
<?php if(empty($keitai)): ?>
<?php else: ?>
<p class="price"><span style="width:30%;border-bottom:none;">雇用形態</span><span style="width:70%;border-bottom:none;"><?php echo nl2br($keitai); ?></span></p>
<?php endif; ?>
<?php if(empty($gyomu)): ?>
<?php else: ?>
<p class="price"><span style="width:30%;border-bottom:none;">職務内容</span><span style="border-bottom:none;"><?php echo nl2br($gyomu); ?></span></p>
<?php endif; ?>
<?php if(empty($koyoukikan)): ?>
<?php else: ?>
<p class="price"><span style="width:30%;border-bottom:none;">雇用期間</span><span style="border-bottom:none;"><?php echo nl2br($koyoukikan); ?></span></p>
<?php endif; ?>
<?php if(empty($shiyoukikan)): ?>
<?php else: ?>
<p class="price"><span style="width:30%;border-bottom:none;">試用期間</span><span style="border-bottom:none;"><?php echo nl2br($shiyoukikan); ?></span></p>
<?php endif; ?>
<?php if(empty($kinmukeitai)): ?>
<?php else: ?>
<p class="price"><span style="width:30%;border-bottom:none;">勤務形態</span><span style="border-bottom:none;"><?php echo nl2br($kinmukeitai); ?></span></p>
<?php endif; ?>
<?php if(empty($kinmujikan)): ?>
<?php else: ?>
<p class="price"><span style="width:30%;border-bottom:none;">勤務時間</span><span style="border-bottom:none;"><?php echo nl2br($kinmujikan); ?></span></p>
<?php endif;?>
<?php if(empty($kyukeijikan)): ?>
<?php else: ?>
<p class="price"><span style="width:30%;border-bottom:none;">休憩時間</span><span style="border-bottom:none;"><?php echo nl2br($kyukeijikan); ?></span></p>
<?php endif; ?>
<?php if(empty($syukyuseido)): ?>
<?php else: ?>
<p class="price"><span style="width:30%;border-bottom:none;">週休制度</span><span style="border-bottom:none;"><?php echo nl2br($syukyuseido); ?></span></p>
<?php endif; ?>
<?php if(empty($yukyu)): ?>
<?php else: ?>
<p class="price"><span style="width:30%;border-bottom:none;">有給休暇</span><span style="border-bottom:none;"><?php echo nl2br($yukyu); ?></span></p>
<?php endif; ?>
<?php if(empty($chinginkeitai)): ?>
<?php else: ?>
<p class="price"><span style="width:30%;border-bottom:none;">賃金形態</span><span style="border-bottom:none;"><?php echo nl2br($chinginkeitai); ?></span></p>
<?php endif; ?>
<?php if(empty($teate)): ?>
<?php else: ?>
<p class="price"><span style="width:30%;border-bottom:none;">手　　当</span><span style="border-bottom:none;"><?php echo nl2br($teate); ?></span></p>
<?php endif;?>
<?php if(empty($shoyo)): ?>
<?php else: ?>
<p class="price"><span style="width:30%;border-bottom:none;">賞　　与</span><span style="border-bottom:none;"><?php echo nl2br($shoyo); ?></span></p>
<?php endif; ?>
<?php if(empty($hoken)): ?>
<?php else: ?>
<p class="price"><span style="width:30%;border-bottom:none;">各種保険</span><span style="border-bottom:none;"><?php echo nl2br($hoken); ?></span></p>
<?php endif; ?>
</div><!-- rental -->
</div><!-- box_link -->
<p class="col12 text-center"><a href="<?php echo home_url('/'); ?>recruit/" class="btn_yellow_round">募集一覧</a></p>
</div><!-- box_starter-kit -->
</div><!-- col12 -->
</div><!-- wrapper -->

</section><!-- container -->




<?php get_footer(); ?>
