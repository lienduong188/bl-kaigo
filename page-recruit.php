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
						
				</div>
			</section>
			<div role="form" class="wpcf7" id="wpcf7-f18-o1" lang="ja" dir="ltr">
				<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true">ありがとうございます。メッセージは送信されました。</p> <ul></ul></div>
				<form action="/recruit/#wpcf7-f18-o1" method="post" class="wpcf7-form sent" novalidate="novalidate" data-status="sent" id="form">
				<div style="display: none;">
				<input type="hidden" name="_wpcf7" value="18" />
				<input type="hidden" name="_wpcf7_version" value="5.6" />
				<input type="hidden" name="_wpcf7_locale" value="ja" />
				<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f18-o1" />
				<input type="hidden" name="_wpcf7_container_post" value="0" />
				<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
				</div>
				<div class="Form-Item">
				 <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>ご用件</p>
				 <div class="fr"><select name="select" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required Form-Item-Select" aria-required="true" aria-invalid="false"><option value="">選んでください</option><option value="介護保険サービスについて">介護保険サービスについて</option><option value="障害福祉サービスについて">障害福祉サービスについて</option><option value="採用情報について">採用情報について</option><option value="その他">その他</option></select></div>
				</div>
				<div class="Form-Item">
				 <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>お名前</p>
				 <div class="fr"><input type="text" name="namae" value=""  class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required Form-Item-Input" aria-required="true" aria-invalid="false" placeholder="例）山田 太郎" /></div>
				</div>
				<div class="Form-Item">
				 <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
				 <div class="fr"><input type="email" name="email" value=""  class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email Form-Item-Input" aria-required="true" aria-invalid="false" placeholder="例）example@gmail.com" /></div>
				</div>
				<div class="Form-Item">
				 <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
				 <div class="fr"><input type="tel" name="tel" value=""  class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel Form-Item-Input" aria-required="true" aria-invalid="false" placeholder="例）000-0000-0000" /></div>
				</div>
				<div class="Form-Item">
				 <p class="Form-Item-Label">件名</p>
				 <div class="fr"><input type="text" name="label" value=""  class="wpcf7-form-control wpcf7-text Form-Item-Input" aria-invalid="false" /></div>
				</div>
				<div class="Form-Item">
				 <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
				 <div class="fr"><textarea name="isMsg"   class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required Form-Item-Textarea" aria-required="true" aria-invalid="false"></textarea></div>
			</div>
			<input type="submit" value="送信する" class="wpcf7-form-control has-spinner wpcf7-submit btn Form-Btn" /><div class="wpcf7-response-output" aria-hidden="true">ありがとうございます。メッセージは送信されました。</div></form></div>	
		</main>
		
		<?php get_footer(); ?>
