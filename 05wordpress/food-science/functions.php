<?php

/** 
 * <title>タグを出力する
 */
add_theme_support('title-tag');

/** 
 * <title>の区切り文字を変更する
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator)
{
    $separator = '|';
    return $separator;
}
/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');

/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support('menus');

/**
 * Contact Form 7 の時には<p>タグが入る整形機能をOFFにする
 */
add_filter('wpcf7_autop_or_not', 'my_wpc7_autop');
function my_wpc7_autop()
{
    return false;
}


/**
 * メインクエリを変更する
 */
add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query)
{
    // 管理画面、メインクエリ意外には設定しない
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    //トップページの場合
    if ($query->is_home()) {
        $query->set('posts_per_page', 3);
        return;
    }
}
