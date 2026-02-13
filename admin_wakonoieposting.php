<?php
add_action('init', 'my_wakonoieposting_init');
function my_wakonoieposting_init()
{
  $labels = array(
    'name' => 'わこの家',
    'singular_name' => 'わこの家',
    'add_new' => 'わこの家を追加',
    'add_new_item' => 'わこの家を追加する',
    'edit_item' => 'わこの家を編集する',
    'new_item' => '新しいわこの家',
    'view_item' => 'わこの家表示',
    'search_items' => 'わこの家検索',
    'not_found' =>  '検索わこの家が見つかりません',
    'not_found_in_trash' => 'ゴミ箱にわこの家はありません',
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