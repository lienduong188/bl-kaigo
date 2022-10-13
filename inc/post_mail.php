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

    //お客さんに自動返信を行う。
    $to_customer = $formData["email"];
    $subject_customer = "介護ベストライフへの問い合わせが完了しました。";
    $body_customer =  $formData["name"] . "様" . "\n"
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
        . "\n";
    $header = 'Content-Type: text/plain; charset=UTF-8';
    // $send_auto_reply = wp_mail( $to_customer, $subject_customer, $body_customer, $header );
    $send_auto_reply = true;

    //自分とこにもメール送信する。
    $to_admin = get_option('admin_email');
    $subject = get_option('blogname') . 'の問い合わせ';
    $body = "介護ベストライフへのお問い合わせです" . "\n"
        . "\n"
        . "相談: " . $formData["category"] . "\n"
        . "名前: " . $formData["name"] . "\n"
        . "メール: " . $formData["email"] . "\n"
        . "電話番号: " . $formData["phone"] . "\n"
        . "件名: " . $formData["title"] . "\n"
        . "内容: " . $formData["message"] . "\n"
        . "\n"
        . "\n"
        . "\n"
        . "\n"
        . "\n"
        . "\n"
        . "---------------------------------"."\n"
        ."お客様には以下の自動返信が送信されています。"."\n"
        ."件名: ".$subject_customer."\n"
        ."本文"."\n"
        .$body_customer;
    $header = 'Content-Type: text/plain; charset=UTF-8';
    // $send_me = wp_mail( $to_admin, $subject, $body, $header );
    $send_me = true;

    // 送信完了したことをフロントエンドに返す。エラーがあればサーバーエラーであったことを返す。
    header("Content-Type: application/json; charset=utf-8");
    if($send_me && $send_auto_reply){
        echo '<p>送信が完了しました。<br>自動返信メールが届いていることをご確認の上、ご連絡お待ちください。</p>';
    } else {
        echo '<p>サーバー処理でエラーが発生しました。<br>お電話でのお問い合わせをお願いします。</p>';
    }
    // dieしておかないと末尾に余計なデータ「0」が付与されるので注意
    die();
}
add_action( 'wp_ajax_send_mail', 'send_mail' );
add_action( 'wp_ajax_nopriv_send_mail', 'send_mail' );