<?php
add_action('init', 'my_wakonoieposting_init');
function my_wakonoieposting_init()
{
  $labels = array(
    'name' => 'わこの家情報',
    'singular_name' => 'わこの家情報',
    'add_new' => 'わこの家情報を追加',
    'add_new_item' => 'わこの家情報を追加する',
    'edit_item' => 'わこの家情報を編集する',
    'new_item' => '新しいわこの家情報',
    'view_item' => 'わこの家情報表示',
    'search_items' => 'わこの家情報検索',
    'not_found' =>  '検索わこの家情報が見つかりません',
    'not_found_in_trash' => 'ゴミ箱にわこの家情報はありません',
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
  register_post_type('wakonoie',$args);
  flush_rewrite_rules( false );
}

?>