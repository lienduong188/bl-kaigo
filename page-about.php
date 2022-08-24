<?php
/**
 * Template Name: 私たちについて
 */
?>
<?php get_header(); ?>
<link href="<?= get_template_directory_uri(); ?>/css/common.css" rel="stylesheet" type="text/css">
<link href="<?= get_template_directory_uri(); ?>/css/about.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="wrapper">
		<?php get_template_part('nav'); ?>
		
		<main>
			<section id="ttl">
				<div class="ttl-wrap">
					<h2>私たちについて</h2>
					<img class="ttl-icon" src="<?= get_template_directory_uri(); ?>/images/about-icon.png" alt="">
				</div>
			</section>
			
			<section class="about-info">
				<div class="about-info-items">
					<a href="#about" class="about-info-item hvr-curl-bottom-right fadeUpTrigger">初めての方へ</a>
					<a href="#kodawari" class="about-info-item hvr-curl-bottom-right fadeUpTrigger delay-time03">強み・こだわり</a>
					<a href="#rinen" class="about-info-item hvr-curl-bottom-right fadeUpTrigger delay-time05">経営理念</a>
				</div>
			</section>
			
			<section id="about">
				<div class="sec-wrap">
					<div class="sec-ttl">
						<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">初めての方へ</span></span></h3>
						<br><hr>
					</div>
					<div class="about-sub">
						<p><?= kPLATFORM_NAME ?>は、<?= kCOMPANY_NAME ?>
							が運営する、訪問介護・居宅介護支援サービスです。2020年4月に大阪・堺市で事業を開始しました。地域に根付き、共に協力して社会を住み良くすることを目指しています。利用者様をはじめ、関係する全ての人々が幸せを感じながら日々の暮らしを
							送れるよう精一杯努めてまいります。 </p>
						<p><?= kCOMPANY_NAME ?>
							は、介護事業の他にも、財務コンサルティング、外国人材紹介、就労継続支援A型、オーダースーツ、次亜塩素酸水の事業を行なっています。それぞれの事業で得られた知見からの相乗効果で、サービスを発展させていきます。
						</p>
						<p>どうぞよろしくお願いいたします。</p>
						<img src="<?= get_template_directory_uri(); ?>/images/about1.png" alt="">
					</div>
				</div>
			</section>
			
			<section id="kodawari">
				<div class="sec-wrap">
					<div class="sec-ttl">
						<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">私たちの強み・こだわり</span></span></h3>
						<br><hr>
					</div>
					<div class="kodawari-sub">
						<p><?= kPLATFORM_NAME ?>は、利用者さまと<span>スタッフ</span>という<span>「人」を第一に考え、</span><br>すべての人が居心地の良い、<span>最高の事業を作り上げることを</span><span>目指しています。</span><br>利用者さまに充実した<span>サービスを受けていただくには、</span><span>私たちスタッフも</span><br>気力充実して<span>いなければなりません。</span><br>しっかり食べてよく眠り、<span>規則正しい生活を送りながら、</span><br>お互いを尊重して高めあえる<span>関係であるために、</span><br>コミュニケーションを<span>しっかり取ります。</span><br>万全の状態であることが<span>良いチームワークを生み、</span><br>利用者さまの信頼につながる<span>と信じています。</span><br>信頼で結ばれた関係は、<span>穏やかで心地良い日々を</span><br>過ごしていただくために<span>欠かせません。</span><br>また、毎日の中から新しいことを<span>学び、</span><span>成長していきます。</span><br>それはやりがいであり、<span>楽しみでもあります。</span></p>
						<figure style="display:flex;justify-content:center;margin:80px 0;"><img src="<?= get_template_directory_uri(); ?>/images/about2.jpg" alt=""></figure>
					</div>
				</div>
			</section>
			
			<section id="rinen">
				<div class="sec-wrap">
					<div class="sec-ttl">
						<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">経営理念</span></span></h3>
						<br><hr>
					</div>
					<div class="rinen-sub">
						<p><?= kPLATFORM_NAME ?>には<span>「無言のありがとう」</span><span>という理念があります。</span><br>言葉として口に出さなくても、<span>感謝の気持ちは<span>さまざまなところで</span></span><br>生まれています。<br>誰かの行動が、他の人の<span>役に立つ。</span><span>私たちの活動の結果として、</span><br>社会に無言のありがとうが<span>もっとたくさん生まれたら、</span><br>それは私たちとしても<span>とても幸せなことです。</span></p>
						<p>仕事をするにあたっては、老人福祉法の<span>理念を</span><span>尊重し、</span>	<br>介護保険法を守ります。<br>謙虚さと感謝の気持ち<span>を常に</span><span>持ち、</span><span>サービスの</span><span>向上に</span><span>努めます。</span><br>生活の質の向上と、<span>利用者の</span><span>主体性を</span><span>大切にします。</span><br>地域の高齢者のための<span>専門的社会資源で</span><span>あることを自覚し、</span><br>地域社会を支えます。<br>利用者さま中心の<span>安全・安心の介護を提供します。</span><br>知識・技術・人間性（倫理観）を<span>養うことに</span><span>努めます。</span></p>
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
