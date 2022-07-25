<?php

// カスタムメニューを利用できるようにする。
register_nav_menu('mainmenu', 'メインメニュー');

// アイキャッチ画像を利用できるようにする。
add_theme_support('post-thumbnails');

//<p>タグを付けない
remove_filter('the_content','wpautop');

//RSSフィードは、サイトがブログ的な性格を帯びている場合は必要ですが、それ以外の場合はとくに必要ないので削除
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

//RSD(Really Simple Discovery)用のxmlへのリンクは、WordPress外部のサービスを使用する際、そのサービスがWordPress内の情報を取得するために必要とされるものです。外部サービスを使ってサイトを運営する予定がないので削除
remove_action('wp_head', 'rsd_link');

//Microsoftが提供するブログエディター「Windows Live Writer」は使用する予定がないので削除
remove_action('wp_head', 'wlwmanifest_link');

//前後のページへのリンクを出力するタグはブログじゃないし使わないので削除
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

//wordpressを使ってサイトを作成したことを公にするタグはWordPressのバージョン情報がバレてよろしくないので削除
remove_action('wp_head', 'wp_generator');

//WordPress4.4までは、投稿画面に[短縮URLを取得]ボタンが表示されていましたが、4.5以降では表示されなくなりましたがヘッドに情報が残っているので削除
remove_action('wp_head', 'wp_shortlink_wp_head');

//絵文字の表示をwp_head関数などから削除
add_action( 'init', function () {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );    
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );    
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
} );

//インラインスタイル削除(html直書きstylesheet削除)
add_action( 'widgets_init', function (){
   global $wp_widget_factory;
   remove_action('wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ));
} );

//初期のCSSとプラグインのCSSをwp_head関数から剥がす
add_action( 'wp_enqueue_scripts', function () {
//    wp_deregister_style( 'jquery-ui-dialog-min-css' );
} );

//独自のCSSをwp_head関数へ書き込む
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css");
	wp_enqueue_style( 'fontawesome', "https://use.fontawesome.com/releases/v5.6.1/css/all.css");
    wp_enqueue_style( 'anm', get_template_directory_uri() . '/css/anm.css');
} );

//特定のページにのみ好きなCSSを読み込ませる。
add_action('wp_enqueue_scripts', function () {
    // is_front_page() ? wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css') : null ;
    // is_front_page() ? wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css') : null ;
    // is_page('service') ? wp_enqueue_style( 'service', get_template_directory_uri() . '/css/service.js') : null ;
} );

//初期のJQueryと初期のJSとプラグインのJSをwp_head関数,wp_footer関数から剥がす
add_action('wp_enqueue_scripts', function () {
	wp_deregister_script('contact-form-7');
	wp_deregister_script('hoverintent-js');
} );

//独自のJSをwp_head関数,wp_footer関数に読み込ませる
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('jquery-3.6.0', 'https://code.jquery.com/jquery-3.6.0.min.js', [], '', false);
    wp_enqueue_script('slick.min', get_template_directory_uri() . '/js/libraries/slick.min.js', [], '', true);
    wp_enqueue_script('lettering', get_template_directory_uri() . '/js/libraries/jquery.lettering.js', [], '', true);
    wp_enqueue_script('particles.min', 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js', [], '', true);
    wp_enqueue_script('textillate.min', 'https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js', [], '', true);
    wp_enqueue_script('animate', get_template_directory_uri() . '/js/animate.js', [], '', true);
} );

//特定のページにのみ好きなJSを読み込ませる。
add_action('wp_enqueue_scripts', function () {
    is_front_page() ? wp_enqueue_script( 'front-page', get_template_directory_uri() . '/js/front-page.js', [], '', true) : null ;
    is_page('company') ? wp_enqueue_script( 'page-company', get_template_directory_uri() . '/js/page-company.js', [], '', true) : null ;
    is_page('service') ? wp_enqueue_script( 'page-service', get_template_directory_uri() . '/js/page-service.js', [], '', true) : null ;
    //メール送信用2行。just-validate.jsとpost_mail.js。
	is_page('recruit') ? wp_enqueue_script( 'just-validate', 'https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js', [], '', false): null ;
    wp_enqueue_script('post_mail', get_template_directory_uri() . '/js/post_mail.js', [], '', true);
} );

include('inc/constant.php');






//ここからは独自PHPの読み込み。
//AJAXでwp_mailを起動させるスクリプトを読み込む
require_once("inc/post_mail.php");


//メール
add_action('phpmailer_init', function ($phpmailer) {
//    $phpmailer->isSMTP();  //SMTP有効設定
//    $phpmailer->SMTPAuth = true;  //SMTP認証の有無
//    $phpmailer->Host = 'grit-web.sakura.ne.jp';  //SMTPホスト名
//    $phpmailer->Port = '587';  //587 or 465
//    $phpmailer->SMTPSecure = 'tls';  //tls or ssl
//    $phpmailer->Username = 'inquery@grit-web.sakura.ne.jp';  //ユーザー名
//    $phpmailer->Password = '';  //パスワード
//    $phpmailer->SMTPDebug = 0;  //デバッグ
    $phpmailer->From = "wordpress@kaigo.grit-japan.co.jp";  //送信者メールアドレス
    $phpmailer->FromName = "介護ベストライフ";  //送信者名
});

//テストメールの送信用コード
//add_action('wp_head' , function () {
//    $test_mail_to   = "";
//    $subject   = "テスト送信です";
//    $mail_body = "テストは正常に送信されました";
//    $isMailed = wp_mail($test_mail_to, $subject, $mail_body);
//    $converted_res = $isMailed ? '成功！' : '送信できませんでした';
//    echo 'テストメールの結果: '.$converted_res;
//});