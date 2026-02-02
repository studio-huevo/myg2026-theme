<?php
// カスタム投稿
include_once (TEMPLATEPATH . '/admin_kango_ichieposting.php');
include_once (TEMPLATEPATH . '/admin_kango_infoposting.php');
include_once (TEMPLATEPATH . '/admin_kango_rehaposting.php');
include_once (TEMPLATEPATH . '/admin_kaigo_ichieposting.php');
include_once (TEMPLATEPATH . '/admin_wakonoieposting.php');
include_once (TEMPLATEPATH . '/admin_corporation.php');
include_once (TEMPLATEPATH . '/admin_faqposting.php');
include_once (TEMPLATEPATH . '/admin_jobposting.php');
include_once (TEMPLATEPATH . '/admin_documentposting.php');

// メディアの位置変更
function custom_menus() {
  global $menu;
  $menu[19] = $menu[10];
  unset($menu[10]);
}
add_action('admin_menu', 'custom_menus');

function my_post_queries( $query ) {
	if ( is_admin() || ! $query->is_main_query() )
		return;
        
    if ( is_post_type_archive('gallery') ) {
        $query->set('posts_per_page', 2);
        $query->set('order', ASC);
        return;
    }
}
add_action( 'pre_get_posts', 'my_post_queries' );


function addClass( $html ) {
    $class = 'colorbox'; // ←付けたいクラス名が入ります。
    return str_replace( '<a ', '<a class="'. $class. '" ', $html );
}
add_filter( 'image_send_to_editor', 'addClass' );



// ページネーション
function pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;//表示するページ数（５ページを表示）

     global $paged;//現在のページ値
     if(empty($paged)) $paged = 1;//デフォルトのページ

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;//全ページ数を取得
         if(!$pages)//全ページ数が空の場合は、１とする
         {
             $pages = 1;
         }
     }

     if(1 != $pages)//全ページが１でない場合はページネーションを表示する
     {
		 echo "<div class=\"pagenation clearfix\">\n";
		 echo "<ul class=\"clearfix\">\n";
		 //Prev：現在のページ値が１より大きい場合は表示
         if($paged > 1) echo "<li class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>Prev</a></li>\n";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                //三項演算子での条件分岐
                echo ($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
             }
         }
		//Next：総ページ数より現在のページ値が小さい場合は表示
		if ($paged < $pages) echo "<li class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">Next</a></li>\n";
		echo "</ul>\n";
		echo "</div>\n";
     }
}

?>