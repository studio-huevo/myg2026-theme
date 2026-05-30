<?php
add_action('init', 'my_trainingposting_init');
function my_trainingposting_init()
{
  $labels = array(
    'name' => '研修制度',
    'singular_name' => '研修制度',
    'add_new' => '研修制度を追加',
    'add_new_item' => '研修制度を追加する',
    'edit_item' => '研修制度を編集する',
    'new_item' => '新しい研修制度',
    'view_item' => '研修制度表示',
    'search_items' => '研修制度検索',
    'not_found' =>  '検索研修制度が見つかりません',
    'not_found_in_trash' => 'ゴミ箱に研修制度はありません',
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
  register_post_type('training',$args);
  flush_rewrite_rules( false );
}

?>