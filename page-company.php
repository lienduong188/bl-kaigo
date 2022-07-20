<?php
/**
 * Template Name: 会社案内
 */
?>
<!doctype html>
<?php get_header(); ?>
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link href="<?= get_template_directory_uri(); ?>/css/common.css" rel="stylesheet" type="text/css">
<link href="<?= get_template_directory_uri(); ?>/css/slick.css" rel="stylesheet" type="text/css">
<link href="<?= get_template_directory_uri(); ?>/css/slick-theme.css" rel="stylesheet" type="text/css">
<link href="<?= get_template_directory_uri(); ?>/css/company.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
		<?php get_template_part('nav'); ?>
		
		<main>
			<section id="ttl">
				<div class="ttl-wrap">
					<h2>会社案内</h2>
					<img class="ttl-icon" src="<?= get_template_directory_uri(); ?>/images/company-icon.png" alt="">
				</div>
			</section>
			<section id="company">
				<div class="sec-wrap">
					<div class="sec-ttl">
						<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">会社概要</span></span></h3>
						<br><hr>
					</div>
					<div class="company-sub">
						<img src="<?= get_template_directory_uri(); ?>/images/logo.png" alt="Bestlife">
						<dl>
							<dt>社名</dt>
							<dd><?= kCOMPANY_NAME ?></dd>
							<dt>代表取締役</dt>
							<dd><?= kPRESIDENT_NAME ?></dd>
							<dt>本社</dt>
							<dd><?= kCOMPANY_ZIPCODE ?> <br class="sp"><?= kCOMPANY_ADDRESS ?></dd>
							<dt>電話番号</dt>
							<dd><?= kPHONE ?></dd>
							<dt>FAX</dt>
							<dd><?= kFAX ?></dd>
							<dt>Email</dt>
							<dd><?= kEMAIL ?></dd>
						</dl>
					</div>
				</div>
			</section>
			
			<section id="greeting">
				<div class="sec-wrap">
					<div class="sec-ttl">
						<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">代表挨拶</span></span></h3>
						<br><hr>
					</div>
					<div class="greeting-sub">
						<div class="greeting-ct">
							<h4>無言のありがとう</h4>
							<p><?= kPLATFORM_NAME ?>は、『無言のありがとう』 という理念のもと、2020年4月に堺市で 在宅生活支援サービスの提供を開始しました。 我々は、老人福祉法の理念を尊重し、 介護保険法を守ります。 謙虚さと感謝の気持ちを常に持ち、 サービスの向上に努めます。 QOLの向上と、利用者の主体性を大切にします。 地域の高齢者のための専門的社会資源であることを自覚し、地域社会を支えます。 ご利用者さまにとって安心・安全・快適・安らぎのある新たな生活の実現のため、従業員一同真心を込めてお力添えをさせていただきます。<br><br> 
								<span class="fs-s">代表取締役</span><br>
								<span class="fw-bolder name">藤村 寛史</span></p>
						</div>
						<img class="gazo" src="<?= get_template_directory_uri(); ?>/images/daihyo.png" alt="">
					</div>
				</div>
			</section>
			
			<section id="staff">
				<div class="staff-wrap">
					<div class="sec-ttl staff-inner">
						<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">スタッフ紹介</span></span></h3>
						<br><hr>
					</div>
					<div class="staff-sub">
						<div class="slick-items">
							<div class="slick-item">
								<img src="<?= get_template_directory_uri(); ?>/images/staff1.png" alt="メンバーの顔アイコン">
								<div class="staff-ttl"><h5>名前</h5>
								<p>ポジション</p></div>
								<p class="staff-ttl-sub">タイトル</p>
								<p>コンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツ</p>
							</div>
							<div class="slick-item">
								<img src="<?= get_template_directory_uri(); ?>/images/staff2.png" alt="メンバーの顔アイコン">
								<div class="staff-ttl"><h5>名前</h5>
								<p>ポジション</p></div>
								<p class="staff-ttl-sub">タイトル</p>
								<p>コンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツ</p>
							</div>
							<div class="slick-item">
								<img src="<?= get_template_directory_uri(); ?>/images/staff3.png" alt="メンバーの顔アイコン">
								<div class="staff-ttl"><h5>名前</h5>
								<p>ポジション</p></div>
								<p class="staff-ttl-sub">タイトル</p>
								<p>コンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツ</p>
							</div>
							<div class="slick-item">
								<img src="<?= get_template_directory_uri(); ?>/images/staff1.png" alt="メンバーの顔アイコン">
								<div class="staff-ttl"><h5>名前</h5>
								<p>ポジション</p></div>
								<p class="staff-ttl-sub">タイトル</p>
								<p>コンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツ</p>
							</div>
							<div class="slick-item">
								<img src="<?= get_template_directory_uri(); ?>/images/staff2.png" alt="メンバーの顔アイコン">
								<div class="staff-ttl"><h5>名前</h5>
								<p>ポジション</p></div>
								<p class="staff-ttl-sub">タイトル</p>
								<p>コンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツコンテンツ</p>
							</div>
						</div>	
					</div>
				</div>
			</section>
			
			<section id="contact">
				<div class="contact-wrap">
					<div class="zoomInTrigger">
						<p class="ttl-en">CONTACT</p>
						<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">お問合わせ</span></span></h3>
					</div>
					<div class="contact-sub zoomInTrigger">
						<p>お問合わせはお電話、または<br>フォームにてお受けしております。</p>
						<div class="btn bounceInDownTrigger"><a href="<?= get_site_url(); ?>/recruit#form">詳細はこちら</a></div>
					</div>
				</div>
			</section><!--contact-->
		</main>
		
		<?php get_footer(); ?>
