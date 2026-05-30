<?php
add_action('init', 'my_documentposting_init');
function my_documentposting_init()
{
  $labels = array(
    'name' => '重要事項説明書',
    'singular_name' => '重要事項説明書',
    'add_new' => '重要事項説明書を追加',
    'add_new_item' => '重要事項説明書を追加する',
    'edit_item' => '重要事項説明書を編集する',
    'new_item' => '新しい重要事項説明書',
    'view_item' => '重要事項説明書表示',
    'search_items' => '重要事項説明書検索',
    'not_found' =>  '検索重要事項説明書が見つかりません',
    'not_found_in_trash' => 'ゴミ箱に重要事項説明書はありません',
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
  register_post_type('document',$args);
  flush_rewrite_rules( false );
}

?>