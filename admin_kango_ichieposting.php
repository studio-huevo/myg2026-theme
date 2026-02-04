<?php
add_action('init', 'my_kango_ichieposting_init');
function my_kango_ichieposting_init()
{
  $labels = array(
    'name' => '訪問看護・リハ情報',
    'singular_name' => '訪問看護・リハ情報',
    'add_new' => '訪問看護・リハ情報を追加',
    'add_new_item' => '訪問看護・リハ情報を追加する',
    'edit_item' => '訪問看護・リハ情報を編集する',
    'new_item' => '新しい訪問看護・リハ情報',
    'view_item' => '訪問看護・リハ情報表示',
    'search_items' => '訪問看護・リハ情報検索',
    'not_found' =>  '検索訪問看護・リハ情報が見つかりません',
    'not_found_in_trash' => 'ゴミ箱に訪問看護・リハ情報はありません',
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
  register_post_type('kango_ichie',$args);
  flush_rewrite_rules( false );
}

?>