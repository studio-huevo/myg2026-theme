<?php
add_action('init', 'my_kaigo_ichieposting_init');
function my_kaigo_ichieposting_init()
{
  $labels = array(
    'name' => '訪問介護情報',
    'singular_name' => '訪問介護情報',
    'add_new' => '訪問介護情報を追加',
    'add_new_item' => '訪問介護情報を追加する',
    'edit_item' => '訪問介護情報を編集する',
    'new_item' => '新しい訪問介護情報',
    'view_item' => '訪問介護情報表示',
    'search_items' => '訪問介護情報検索',
    'not_found' =>  '検索訪問介護情報が見つかりません',
    'not_found_in_trash' => 'ゴミ箱に訪問介護情報はありません',
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
  register_post_type('kaigo_ichie',$args);
  flush_rewrite_rules( false );
}

?>