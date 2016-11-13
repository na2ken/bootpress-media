<?php
/**************************************************
 *
 * BootPress media v0.8
 *
 ***************************************************/

/**************************************************
  一般的な機能を機能させる　v1.1
***************************************************/
// ウィジェットエリアを追加する
register_sidebar();

//RSSフィードを追加する
add_theme_support( 'automatic-feed-links' );

// 本文と概要（抜粋）の文字数を統一する
function my_length($length) {
	return 70;
}
add_filter('excerpt_mblength','my_length');

// 本文と概要（抜粋）の省略記号を設定する
function my_more($more) {
	return '・・・';
}
add_filter('excerpt_more', 'my_more');

// アイキャッチ画像を表示する
add_theme_support( 'post-thumbnails' );


/**************************************************
  カスタム投稿タイプを登録する　v2.0
***************************************************/
/* 1つ目 */
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'content-a',  //変更箇所１：スラッグ名
        array(
        'labels' => array(
        'name' => __( 'コンテンツA' ), //変更箇所２：管理画面に表示されるラベル名
        'singular_name' => __( 'content-a' ) //変更箇所３：このカスタム投稿の識別名
        ),
        'public' => true,
        'has_archive' => true,
        'hierarchical' => false, //投稿と同じように
        'supports' => array(
        'title', 'editor', 'thumbnail', 'custom-fields'
        ),
        'menu_position' => 5,
        )
    );

/* 2つ目以降 */
    register_post_type( 'content-b',  //変更箇所１：スラッグ名
        array(
        'labels' => array(
        'name' => __( 'コンテンツB' ), //変更箇所２：管理画面に表示されるラベル名
        'singular_name' => __( 'content-b' ) //変更箇所３：このカスタム投稿の識別名
        ),
        'public' => true,
        'has_archive' => true,
        'hierarchical' => false, //投稿と同じように
        'supports' => array(
        'title', 'editor', 'thumbnail', 'custom-fields'
        ),
        'menu_position' => 5,
        )
    );
/* 一番最後の閉じ括弧 */
}
/**************************************************
  カスタムタクソノミーを登録する v2.0
***************************************************/
/* 1つ目 */
add_action( 'init', 'custom_register_taxonomy' );
function custom_register_taxonomy() {
    register_taxonomy(
        'content-a-cat',  //変更箇所１：スラッグ名
        'content-a',  //変更箇所１：カスタム投稿タイプ名
        array(
            'labels' => array(
            'name' => __( 'カテゴリー' ), //変更箇所３：管理画面に表示されるラベル名
            'singular_name' => __( 'content-a-cat' ) //変更箇所４：このカスタムタクソノミーの識別名
            ),
            'public' => true,
            'rewrite' => true,
        )
    );

/* 2つ目 */
    register_taxonomy(
        'content-b-cat',  //変更箇所１：スラッグ名
        'content-b',  //変更箇所２：カスタム投稿タイプ名
        array(
            'labels' => array(
            'name' => __( 'カテゴリー' ), //変更箇所３：管理画面に表示されるラベル名
            'singular_name' => __( 'content-b-cat' ) //変更箇所４：このカスタムタクソノミーの識別名
            ),
            'public' => true,
            'rewrite' => true,
        )
    );
/* 一番最後の閉じ括弧 */
}


/**************************************************
  カスタムメニューを機能させる　v1.0
***************************************************/
// ナビゲーションメニューを登録する
register_nav_menu( 'navigation', 'ナビゲーション' );

add_theme_support( 'menus' );

// 「メニュー」の「テーマの場所」を定義する
register_nav_menu( 'header-navi', 'メインナビゲーション' );
register_nav_menu( 'header-sub-navi', 'サブナビゲーション' );
register_nav_menu( 'footer-navi', 'フッターナビゲーション' );
register_nav_menu( 'footer-left-column', 'フッター左カラム' );
register_nav_menu( 'footer-center-column', 'フッターセンターカラム' );
register_nav_menu( 'footer-right-column', 'フッター右カラム' );

/**************************************************
  BootPressのデフォルト機能を追加する　v1.1
***************************************************/
// トップページにカスタム投稿タイプの記事を表示する
function chample_latest_posts( $wp_query ) {
    if ( is_home() && ! isset( $wp_query->query_vars['suppress_filters'] ) ) {
        $wp_query->query_vars['post_type'] = array( 'content-a','content-b');
    }
}
add_action( 'parse_query', 'chample_latest_posts' );

// 検索結果を投稿タイプとカスタム投稿タイプだけにする
function search_filter($query) {
  if (!$query -> is_admin && $query -> is_search) {
    $query -> set('post_type', array('post', 'content-a', 'content-b'));
  }
  return $query;
}
add_filter('pre_get_posts', 'search_filter');

/**************************************************
  記事で勝手につくHTMLタグをなくす　v1.1
***************************************************/
