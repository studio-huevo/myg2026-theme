<?php
add_action('init', 'my_terminal_careposting_init');
function my_terminal_careposting_init()
{
  $labels = array(
    'name' => 'ターミナルケア事例',
    'singular_name' => 'ターミナルケア事例',
    'add_new' => 'ターミナルケア事例を追加',
    'add_new_item' => 'ターミナルケア事例を追加する',
    'edit_item' => 'ターミナルケア事例を編集する',
    'new_item' => '新しいターミナルケア事例',
    'view_item' => 'ターミナルケア事例表示',
    'search_items' => 'ターミナルケア事例検索',
    'not_found' =>  '検索ターミナルケア事例が見つかりません',
    'not_found_in_trash' => 'ゴミ箱にターミナルケア事例はありません',
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
  register_post_type('terminal_care',$args);
  flush_rewrite_rules( false );
}

?>