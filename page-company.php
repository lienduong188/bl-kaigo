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
						<img class="gazo" src="<?= get_template_directory_uri(); ?>/images/daihyo_heart.png" alt="">
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
								<div class="staff-ttl"><h5>宮澤 華</h5>
								<p>責任者</p></div>
								<p class="staff-ttl-sub">利用者さんとの何気ない日常の会話が大好きです</p>
								<p>忙しい中でも、利用者さんとの会話の中で笑顔を見ることが出来たときにやりがいを感じます。ご家族様より「『いつも良くやってくれる。』とお母さんが言っていました。ありがとうございます。」と話して下さった事があり、すごくうれしかったです。また、お客様からも「あなたの顔を見て安心した。」と声をかけていただいたことがあり、感動しました。</p>
							</div>
							<div class="slick-item">
								<img src="<?= get_template_directory_uri(); ?>/images/staff2.png" alt="メンバーの顔アイコン">
								<div class="staff-ttl"><h5>高野 郁代</h5>
								<p>一般職員</p></div>
								<p class="staff-ttl-sub">人と人とのつながりにやりがいを感じています</p>
								<p>お客様に帰り際に「大変なのにありがとうね！」「また来てね！」とおっしゃっていただいたり、「今日あなたがいてくれて良かったわ！」とおっしゃっていただいたり、本当にやりがいのある仕事だと思っています。また利用者様が私を「高野さん！」と呼んで名前を覚えて下さったことがあり、この仕事をしていてとても嬉しく思いました。</p>
							</div>
							<div class="slick-item">
								<img src="<?= get_template_directory_uri(); ?>/images/staff3.png" alt="メンバーの顔アイコン">
								<div class="staff-ttl"><h5>荻野 真</h5>
								<p>一般職員</p></div>
								<p class="staff-ttl-sub">難しい仕事ですが、その分、日々成長を感じられます。</p>
								<p>わたしたちの仕事は、性質上、利用者様のところに常駐するわけではありません。その分、利用者様一人ひとりの容態変化及び現在の容態観察が大変です。また、安定しているお客様ばかりではないため、おろそかにできない問題に対する看護職の判断を迫られたときに難しいと感じますが、その分、働いていて様々なやりがいを日々感じられます。</p>
							</div>
							<div class="slick-item">
								<img src="<?= get_template_directory_uri(); ?>/images/staff4.png" alt="メンバーの顔アイコン">
								<div class="staff-ttl"><h5>岩村 友紀</h5>
								<p>新入社員</p></div>
								<p class="staff-ttl-sub">指導がきっちりしていて、安心して働けています。</p>
								<p>介護業界にははじめて入社しましたが、わからないことだらけだったのですが、周りの方に助けていただき、いろんな経験ができました。この仕事を続けていくなかで、いちばんのやりがいを感じるところは、先輩方の言葉と似ていますが、「感謝の言葉をかけてくださる方がいて誰かの役に立てる仕事だ」ということです。利用者様の笑顔が日々の励みです。</p>
							</div>
							<div class="slick-item">
								<img src="<?= get_template_directory_uri(); ?>/images/staff5.png" alt="メンバーの顔アイコン">
								<div class="staff-ttl"><h5>花岡 美和</h5>
								<p>一般職員</p></div>
								<p class="staff-ttl-sub">ご家族の一員となって施設探しに参加します</p>
								<p>日々、ご家族様にとって一番の解決策はなにか、を考えることが私にとってはやりがいを感じるところです。ご家族が何に困っているかとか、どうすればご本人もご家族も落ち着いて暮らしていけるのか、という目線でいつもご案内しています。だからこそ、何事もはっきりと表現して、特にご予算ははっきり聞いています。</p>
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
