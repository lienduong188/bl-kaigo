<?php
/**
 * Template Name: 採用情報
 */
?>
<?php get_header(); ?>
<link href="<?= get_template_directory_uri(); ?>/css/common.css" rel="stylesheet" type="text/css">
<link href="<?= get_template_directory_uri(); ?>/css/recruit.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
		<?php get_template_part('nav'); ?>

		<main>
			<section id="ttl">
				<div class="ttl-wrap">
					<h2>採用情報</h2>
					<img class="ttl-icon" src="<?= get_template_directory_uri(); ?>/images/recruit-icon.png" alt="">
				</div>
			</section>

			<section id="recuit">
				<div class="wrap">
					<div class="sec-ttl sec-wrap">
						<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger"><?= kPLATFORM_NAME ?>が求める人財像</span></span></h3>
						<br><hr>
					</div>
					<div class="recruit-sub">
						<div class="recruit-sub-wrap">
							<h4>働く仲間を募集！</h4>
							<p>現在、30代～のスタッフ5名でアットホームな職場です。<br>
							緊急時の対応に備え社用車でも通勤が可能なところが魅力。<br>
							現地への直行直帰も可能です。 <br><br>
							看護師、ケアマネージャー、リハビリ職員、事務員として一緒に働く仲間<br>
							を募集しています。 詳しくはお問い合わせくださいませ。</p>
						</div>
					</div>
				</div>
			</section>

            <section id="form">
                <div class="sec-wrap">
                    <div class="sec-ttl">
                        <h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">お問合わせ</span></span></h3>
                        <br><hr>
                    </div>
                    <p class="ta-ct">気軽にお問い合わせください。</p>
                    <form action="" id="ajaxForm" method="post">
                        <div class="Form-Item">
                            <p class="Form-Item-Label">
                                <span class="Form-Item-Label-Required">必須</span>ご用件
                            </p>
                            <select class="Form-Item-Select" name="choice" id="yoken-select">
                                <option class="Form-Item-Select" value="" hidden>選んでください</option>
                                <option class="Form-Item-Select" value="介護保険サービスについて">介護保険サービスについて</option>
                                <option class="Form-Item-Select" value=" 障害福祉サービスについて">障害福祉サービスについて</option>
                                <option class="Form-Item-Select" value=" 採用情報について">採用情報について</option>
                                <option class="Form-Item-Select" value="  その他">その他</option>
                            </select>
                        </div>
                        <div class="Form-Item">
                            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>お名前</p>
                            <input type="text" id="name" class="Form-Item-Input" placeholder="例）山田 太郎">
                        </div>
                        <div class="Form-Item">
                            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
                            <input type="email" id="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
                        </div>
                        <div class="Form-Item">
                            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
                            <input type="text" id="phone" class="Form-Item-Input" placeholder="例）000-0000-0000">
                        </div>
                        <div class="Form-Item">
                            <p class="Form-Item-Label">件名</p>
                            <input type="text" id="title" class="Form-Item-Input">
                        </div>
                        <div class="Form-Item">
                            <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
                            <textarea class="Form-Item-Textarea" id="message"></textarea>
                        </div>
                        <input type="submit" id="submit" class="btn Form-Btn" value="送信する">
                    </form>
                </div>
            </section>
		</main>

		<?php get_footer(); ?>
