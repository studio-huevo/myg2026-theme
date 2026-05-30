<?php
add_action('init', 'my_faqposting_init');
function my_faqposting_init()
{
  $labels = array(
    'name' => 'よくある質問',
    'singular_name' => 'よくある質問',
    'add_new' => 'よくある質問を追加',
    'add_new_item' => 'よくある質問を追加する',
    'edit_item' => 'よくある質問を編集する',
    'new_item' => '新しいよくある質問',
    'view_item' => 'よくある質問表示',
    'search_items' => 'よくある質問検索',
    'not_found' =>  '検索よくある質問が見つかりません',
    'not_found_in_trash' => 'ゴミ箱によくある質問はありません',
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
    'supports' => array('title','editor','revisions')
  );
  register_post_type('faq',$args);
  flush_rewrite_rules( false );
}

?>