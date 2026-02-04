<?php
add_action('init', 'my_jobposting_init');
function my_jobposting_init()
{
  $labels = array(
    'name' => '採用情報',
    'singular_name' => '採用情報',
    'add_new' => '求人票の追加',
    'add_new_item' => '求人票を追加する',
    'edit_item' => '求人票を編集する',
    'new_item' => '新しい求人票',
    'view_item' => '求人票表示',
    'search_items' => '求人票検索',
    'not_found' =>  '検索求人票が見つかりません',
    'not_found_in_trash' => 'ゴミ箱に求人票はありません',
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
  register_post_type('recruit',$args);
  flush_rewrite_rules( false );
}

?>