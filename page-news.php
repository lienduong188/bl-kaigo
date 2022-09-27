<?php
/**
 * Template Name: 新着情報
 */
?>
<?php get_header(); ?>
<link href="<?= get_template_directory_uri(); ?>/css/common.css" rel="stylesheet" type="text/css">
<link href="<?= get_template_directory_uri(); ?>/css/news.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
		<?php get_template_part('nav'); ?>
		
		<main>
			<section id="ttl">
				<div class="ttl-wrap">
					<h2>新着情報</h2>
					<img class="ttl-icon" src="<?= get_template_directory_uri(); ?>/images/news-icon.png" alt="">
				</div>
			</section>
			<div class="content-wrap">
				<section id="news" class="content-item">
					<div class="sec-wrap">
						<div class="sec-ttl">
							<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">新着情報</span></span></h3>
							<br><hr>
						</div>
						<div class="news-sub">
						  <dl>
							<?php 
							  $news = new WP_Query(array('cat'=>3)); 
							  if($news->have_posts()): 
							  while($news->have_posts()):
							  $news->the_post(); 
							?>
								<a href="<?php the_permalink(); ?>">
								  <dt><?php the_time('Y.m.d'); ?></dt>
								  <dd><?php the_title(); ?></dd>
								</a>
							<?php 
							  endwhile;
							  endif;
							?>
							  <!-- <div class="btn"><a href="#">一覧を見る</a></div> -->
						  </dl>
						</div>
					</div>
				</section>

				<!-- <section id="blog" class="content-item">
					<div class="sec-wrap">
						<div class="sec-ttl">
							<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">ブログ</span></span></h3>
							<br><hr>
						</div>
						<div class="news-sub">
						  <dl>
							<?php 
							  $blog = new WP_Query(array('cat'=>4)); 
							  if($blog->have_posts()): 
							  while($blog->have_posts()):
							  $blog->the_post(); 
							?>
								<a href="<?php the_permalink(); ?>">
								  <dt><?php the_time('Y.m.d'); ?></dt>
								  <dd><?php the_title(); ?></dd>
								</a>
							<?php 
							  endwhile;
							  endif;
							?>
							   <div class="btn"><a href="#">一覧を見る</a></div>
						  </dl>
						</div>
					</div>
				</section> -->
			</div>
			
			
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
