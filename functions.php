<?php
/**************************************************
 *
 * BootPress media v0.9
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
  meta keywordsとdescription個別変更　v2.0
***************************************************/
add_action('admin_menu', 'add_custom_fields');
add_action('save_post', 'save_custom_fields');

// 記事ページと固定ページでカスタムフィールドを表示させる
function add_custom_fields() {
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'post');
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'page');
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'content-a');
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'content-b');
}

function my_custom_fields() {
  global $post;
  $htmltitle = get_post_meta($post->ID,'htmltitle',true);
  $keywords = get_post_meta($post->ID,'keywords',true);
  $description = get_post_meta($post->ID,'description',true);

  echo '<p>タイトル（全角・半角28文字〜34文字程度）<br>';
  echo '<input type="text" name="htmltitle" value="'.esc_html($htmltitle).'" size="60" /></p>';

  echo '<p>キーワード（半角カンマ区切り）<br>';
  echo '<input type="text" name="keywords" value="'.esc_html($keywords).'" size="60" /></p>';

  echo '<p>ページの説明（description）160文字以内<br>';
  echo '<input type="text" style="width: 600px;height: 40px;" name="description" value="'.esc_html($description).'" maxlength="160" /></p>';
}

// カスタムフィールドの値を保存する
function save_custom_fields( $post_id ) {
  if(!empty($_POST['htmltitle']))
    update_post_meta($post_id, 'htmltitle', $_POST['htmltitle'] );
  else delete_post_meta($post_id, 'htmltitle');

  if(!empty($_POST['keywords']))
    update_post_meta($post_id, 'keywords', $_POST['keywords'] );
  else delete_post_meta($post_id, 'keywords');

  if(!empty($_POST['description']))
    update_post_meta($post_id, 'description', $_POST['description'] );
  else delete_post_meta($post_id, 'description');
}

function my_description() {

// カスタムフィールドの値を読み込む
$custom = get_post_custom();
if(!empty( $custom['htmltitle'][0])) {
  $htmltitle = $custom['htmltitle'][0];
}
if(!empty( $custom['keywords'][0])) {
  $keywords = $custom['keywords'][0];
}
if(!empty( $custom['description'][0])) {
  $description = $custom['description'][0];
}
?>
<?php if(is_home()): // トップページ ?>
<title>デフォルトタイトル</title>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="キーワード1,キーワード2,キーワード3”>
<meta name="description" content="ページの説明160文字以内。" />

<?php elseif(is_single()): // 記事ページ ?>
<title><?php echo $htmltitle ?></title>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="<?php echo $keywords ?>">
<meta name="description" content="<?php echo $description ?>">
<?php elseif(is_page()): // 固定ページ ?>
<title><?php echo $htmltitle ?></title>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="<?php echo $keywords ?>">
<meta name="description" content="<?php echo $description ?>">

<?php elseif (is_category()): // カテゴリーページ ?>
<title><?php echo $htmltitle ?></title>
<meta name="robots" content="index, follow" />
<meta name="description" content="<?php single_cat_title(); ?>の記事一覧" />
<?php elseif (is_tag()): // タグページ ?>
<title><?php echo $htmltitle ?></title>
<meta name="robots" content="noindex, follow" />
<meta name="description" content="<?php single_tag_title("", true); ?>の記事一覧" />
<?php elseif(is_404()): // 404ページ ?>
<meta name="robots" content="noindex, follow" />
<title><?php echo 'お探しのページが見つかりませんでした'; ?></title>
<?php else: // その他ページ ?>
<title><?php echo $htmltitle ?></title>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="キーワード1,キーワード2,キーワード3">
<meta name="description" content="ページの説明160文字以内。" />
<?php endif; ?>
<?php
}

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
