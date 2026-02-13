<?php
add_action('init', 'my_kango_rehaposting_init');
function my_kango_rehaposting_init()
{
  $labels = array(
    'name' => '訪問リハ（サブ）',
    'singular_name' => '訪問リハ（サブ）',
    'add_new' => '訪問リハ（サブ）を追加',
    'add_new_item' => '訪問リハ（サブ）を追加する',
    'edit_item' => '訪問リハ（サブ）を編集する',
    'new_item' => '新しい訪問リハ（サブ）',
    'view_item' => '訪問リハ（サブ）表示',
    'search_items' => '訪問リハ（サブ）検索',
    'not_found' =>  '検索訪問リハ（サブ）が見つかりません',
    'not_found_in_trash' => 'ゴミ箱に訪問リハ（サブ）はありません',
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
  register_post_type('kango_reha',$args);
  flush_rewrite_rules( false );
}

?>