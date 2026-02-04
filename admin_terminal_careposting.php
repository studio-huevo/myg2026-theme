<?php
add_action('init', 'my_terminal_careposting_init');
function my_terminal_careposting_init()
{
  $labels = array(
    'name' => 'ターミナルケア情報',
    'singular_name' => 'ターミナルケア情報',
    'add_new' => 'ターミナルケア情報を追加',
    'add_new_item' => 'ターミナルケア情報を追加する',
    'edit_item' => 'ターミナルケア情報を編集する',
    'new_item' => '新しいターミナルケア情報',
    'view_item' => 'ターミナルケア情報表示',
    'search_items' => 'ターミナルケア情報検索',
    'not_found' =>  '検索ターミナルケア情報が見つかりません',
    'not_found_in_trash' => 'ゴミ箱にターミナルケア情報はありません',
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
  register_post_type('terminal_care',$args);
  flush_rewrite_rules( false );
}

?>