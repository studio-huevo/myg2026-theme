<?php
add_action('init', 'my_faqposting_init');
function my_faqposting_init()
{
  $labels = array(
    'name' => 'FAQ情報',
    'singular_name' => 'FAQ情報',
    'add_new' => 'FAQ情報を追加',
    'add_new_item' => 'FAQ情報を追加する',
    'edit_item' => 'FAQ情報を編集する',
    'new_item' => '新しいFAQ情報',
    'view_item' => 'FAQ情報表示',
    'search_items' => 'FAQ情報検索',
    'not_found' =>  '検索FAQ情報が見つかりません',
    'not_found_in_trash' => 'ゴミ箱にFAQ情報はありません',
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
    'has_archive' => true,
//  'supports' => array('title','editor','author','thumbnail','excerpt','comments')
    'supports' => array('title','editor')
  );
  register_post_type('faq',$args);
  flush_rewrite_rules( false );
}

?>