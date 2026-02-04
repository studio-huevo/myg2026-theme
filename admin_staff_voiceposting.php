<?php
add_action('init', 'my_staff_voiceposting_init');
function my_staff_voiceposting_init()
{
  $labels = array(
    'name' => 'スタッフの声',
    'singular_name' => 'スタッフの声',
    'add_new' => 'スタッフの声を追加',
    'add_new_item' => 'スタッフの声を追加する',
    'edit_item' => 'スタッフの声を編集する',
    'new_item' => '新しいスタッフの声',
    'view_item' => 'スタッフの声表示',
    'search_items' => 'スタッフの声検索',
    'not_found' =>  '検索スタッフの声が見つかりません',
    'not_found_in_trash' => 'ゴミ箱にスタッフの声はありません',
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
  register_post_type('staff_voice',$args);
  flush_rewrite_rules( false );
}

?>