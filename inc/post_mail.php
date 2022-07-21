<?php

add_action( 'wp_head', function () {
    ?>
    <script>
        const MAIL_FORM_URL = '<?php echo admin_url('admin-ajax.php'); ?>';
    </script>
    <?php
}, 1 );


//IDEではエラーが出るけど未使用の関数ではなく、javascriptからGETパラメータで呼び出している関数。
function send_mail(){
    // POSTされたJSON文字列を取り出し
    $json = file_get_contents("php://input");
    // JSON文字列をobjectに変換 ⇒ 第2引数をtrueにしないとハマるので注意
    $formData = json_decode($json, true);

    //メール送信をする。
    define("TO", get_option('admin_email'));
    define("SUBJECT", get_option('blogname') . 'の問い合わせ');
    define("BODY", "介護ベストライフへのお問い合わせです" . "\n"
        . "\n"
        . "相談: " . $formData["category"] . "\n"
        . "名前: " . $formData["name"] . "\n"
        . "メール: " . $formData["email"] . "\n"
        . "電話番号: " . $formData["phone"] . "\n"
        . "件名: " . $formData["title"] . "\n"
        . "内容: " . $formData["message"] . "\n");
    define("HEADER", array('Content-Type: text/plain; charset=UTF-8', 'From: me Myself '));
    wp_mail( TO, SUBJECT, BODY, HEADER );

    //お客さんにも自動返信を行う。
    define("CUSTOMER_MAIL", $formData["email"]);
    define("REPRY_TITLE", "介護ベストライフへの問い合わせが完了しました。");
    define("REPLY_BODY", $formData["name"] . "様" . "\n"
        . "この度は介護ベストライフへのお問い合わせへお問い合わせいただきありがとうございます。" . "\n"
        . "\n"
        . "以下のお問い合わせ内容を受け付けました。" . "\n"
        . "\n"
        . "\n"
        . "相談項目: " . $formData["category"] . "\n"
        . "名前: " . $formData["name"] . "\n"
        . "メール: " . $formData["email"] . "\n"
        . "電話: " . $formData["phone"] . "\n"
        . "件名: " . $formData["title"] . "\n"
        . "内容: " . $formData["message"] . "\n"
        . "\n"
        . "\n"
        . "3営業日以内に当社担当からご連絡を差し上げます。" . "\n"
        . "今しばらくお待ちください" . "\n"
        . "\n"
        . "\n"
        . "\n"
        . "\n"
        . "\n"
        . "\n"
        . "\n"
    );
    define("HEADER", array('Content-Type: text/plain; charset=UTF-8'));
    $send = wp_mail( CUSTOMER_MAIL, REPRY_TITLE, REPLY_BODY, HEADER );

    // 送信完了したことをフロントエンドに返す。エラーがあればサーバーエラーであったことを返す。
    header("Content-Type: application/json; charset=utf-8");
    if($send){
        echo '<p>送信が完了しました。<br>自動返信メールが届いていることをご確認の上、ご連絡お待ちください。</p>';
    } else {
        echo '<p>サーバー処理でエラーが発生しました。<br>お電話でのお問い合わせをお願いします。</p>';
    }

    // dieしておかないと末尾に余計なデータ「0」が付与されるので注意
    die();
}
add_action( 'wp_ajax_send_mail', 'send_mail' );
add_action( 'wp_ajax_nopriv_send_mail', 'send_mail' );