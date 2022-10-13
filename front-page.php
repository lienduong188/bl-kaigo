<?php
/**
 * Template Name: HomePage
 */
?>
<?php get_header(); ?>
<link href="<?= get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?= get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="particles-js"></div>
	<div id="wrapper">
		<?php get_template_part('nav'); ?>
		<main>	
			<div class="main-visual">
				<div class="h2 onInitHidden">
					<h2 class="randomAnime">住み慣れた環境で</h2>
					<h2 class="randomAnime">安心して過ごしたいという願いを叶えます</h2>
				</div>
			</div>
			
			<section id="about">
				<div class="about-wrap container">
					<div class="sec-ttl fadeUpTrigger">
						<p class="ttl-en">ABOUT</p>
						<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger"><?= kPLATFORM_NAME ?>について</span></span></h3>
					</div>
					<div class="about-sub fadeUpTrigger">
						<p>利用者が可能な限り自立した在宅生活を続けられるよう、<br>
1.　身体介護、家事支援等による利用者の心身機能の低下防止、維持向上<br>
2.　利用者とのふれあいの中での社会的孤立感解消、楽しい人生を支援<br>
3.　家族介護者の身体的、精神的負担の軽減<br>
<br><br>
・・・そして、「ベストライフのホームヘルパーに来てもらって良かった。安心だ。」と<br>
利用者、家族に思ってもらえるヘルパー事業を目指しています。</p>
						<div class="btn bounceInDownTrigger"><a href="<?php get_template_directory_uri(); ?>/about">詳細はこちら</a></div>
					</div>
				</div>
			</section><!--about-->
			
			<section id="service">
				<div class="service-wrap container bounceInLeftTrigger">
					<div class="service-inner">
						<div class="sec-ttl">
							<p class="ttl-en">SERVICE</p>
							<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">サービスのご紹介</span></span></h3>
						</div>
						<div class="service-sub">
							<p class="bounceInLeftTrigger animated.slower">高齢者や病気を抱える方々を、地域全体で各々が役割を担って支え合う時代になりました
。</p>
							<div class="btn-list">
								<div class="btn-sv btn-blue bounceInLeftTrigger"><a href="<?php get_template_directory_uri(); ?>/service#homon">訪問介護</a></div>
								<div class="btn-sv btn-yellow bounceInLeftTrigger"><a href="<?php get_template_directory_uri(); ?>service#itaku">居宅介護支援</a></div>
								<div class="btn-sv btn-green bounceInLeftTrigger"><a href="<?php get_template_directory_uri(); ?>service#sodan">相談支援</a></div>
							</div>
						</div><!--service-sub-->
					</div><!--service-inner-->
					<div class="triangle-r fl-l pc"></div>
				</div><!--sec-wrap-->
				<div class="service-bg container pc"></div>
			</section><!--service-->
			
			<section id="company">
				<div class="company-wrap container bounceInRightTrigger">
					<div class="company-inner">
						<div class="sec-ttl">
							<p class="ttl-en">COMPANY</p>
							<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">会社概要</span></span></h3>
						</div>
						<div class="company-sub">
							<p class="bounceInRightTrigger animated.slower"><?= kPLATFORM_NAME ?>は、『無言のありがとう』 という理念のもと、2020年4月に堺市で 在宅生活支援サービスの提供を開始しました。</p>
							<div class="btn bounceInRightTrigger"><a href="<?php get_template_directory_uri(); ?>company#greeting">詳細はこちら</a></div>
						</div><!--company-sub-->
					</div><!--company-inner-->
					<div class="triangle-l fl-r pc"></div>
				</div><!--sec-wrap-->
				<div class="company-bg container pc"></div>
			</section><!--company-->
			
			<section id="news">
				<div class="news-wrap container bounceInLeftTrigger">
					<div class="news-inner" style="margin-top: 300px;">
						<div class="sec-ttl">
							<p class="ttl-en">INFORMATION</p>
							<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">新着情報</span></span></h3>
						</div>
						<div class="news-sub">
							<?php $the_query = new WP_Query(['posts_per_page' => 4, 'post_status' => 'publish' ,'category_name' => 'news']); ?>
							<?php if ( $the_query->have_posts() ) : ?>
							  <?php while ( $the_query->have_posts() ) : ?>
								<?php $the_query->the_post(); ?>
								<a class="news-label" href="<?php the_permalink(); ?>">
								  <dt class="bounceInLeftTrigger animated.slower"><?php the_time('Y.m.d'); ?>
									<span><?= get_the_category()[0]->cat_name ?></span>  
								  </dt>
								  <dd><?php the_title(); ?></dd>
								</a>
							  <?php endwhile; ?>
							<?php endif; ?>
							<div class="btn bounceInLeftTrigger"><a href="<?php get_template_directory_uri(); ?>news">一覧を見る</a></div>
						</div><!--news-sub-->
					</div><!--news-inner-->
					<div class="triangle-r fl-news pc"></div>
				</div><!--sec-wrap-->
				<div class="news-bg container pc"></div>
			</section><!--news-->
			
			<section id="contact">
				<div class="contact-wrap bounceInTrigger">
					<div class="sec-ttl">
						<p class="ttl-en">CONTACT</p>
						<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">お問合わせ</span></span></h3>
					</div>
					<div class="contact-sub bounceInTrigger">
						<p>お問合わせはお電話、または<br>フォームにてお受けしております。</p>
						<div class="btn bounceInDownTrigger"><a href="<?= get_site_url(); ?>/recruit#form">詳細はこちら</a></div>
					</div>
				</div>
			</section><!--contact-->
		</main>
		<?php get_footer(); ?>