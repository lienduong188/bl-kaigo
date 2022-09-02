			<footer>
				<div class="ft-wrap">
					<div class="ft-item ft-logo">
						<a href="<?= get_site_url(); ?>/"><img src="<?= get_template_directory_uri(); ?>/images/logo.png" alt="Bestlife"></a>
						<div class="">
							<a href="tel:<?= kPHONE ?>">
								<img src="<?= get_template_directory_uri(); ?>/images/phone.svg" style="display:inline-block;height:25px;vertical-align:middle;" />
								<p class="fc-pink fs-12" style="display:inline-block;vertical-align:middle;font-weight:bold;"><?= kPHONE ?></p>
							</a>
						</div>
						<p class="copyright"><small>&copy;2022 介護老人保健施設  <?= kPLATFORM_NAME ?></small></p>
					</div>
					<div class="ft-item sitemap">
						<div class="sitemap-item">
							<ul>
								<li><a href="<?= get_site_url(); ?>/about/"><span class="fw-bolder">私たちについて</span></a>
									<ul>
										<li><a href="<?= get_site_url(); ?>/about#about">初めての方へ</a></li>
										<li><a href="<?= get_site_url(); ?>/about#kodawari">こだわり</a></li>
										<li><a href="<?= get_site_url(); ?>/about#rinen">会社理念</a></li>
									</ul>
								</li>
								<li><a href="<?= get_site_url(); ?>/company/"><span class="fw-bolder">会社案内</span></a>
									<ul>
										<li><a href="<?= get_site_url(); ?>/company#company">会社概要</a></li>
										<li><a href="<?= get_site_url(); ?>/company#greeting">代表挨拶</a></li>
										<li><a href="<?= get_site_url(); ?>/company#staff">スタッフ紹介</a></li>
									</ul>
								</li>
							</ul>		
						</div>
						<div class="sitemap-item">
							<ul>
								<li><a href="<?= get_site_url(); ?>/service/"><span class="fw-bolder">サービス内容</span></a>
									<ul>
										<li><a href="<?= get_site_url(); ?>/service#homon">訪問介護</a></li>
										<li><a href="<?= get_site_url(); ?>/service#itaku">居宅介護支援</a></li>
										<li><a href="<?= get_site_url(); ?>/service#sodan">相談支援</a></li>
									</ul>
								</li>
								<li><a href="<?= get_site_url(); ?>/service#faq"><span class="fw-bolder">よくある質問</span></a></li>
							</ul>			
						</div>
						<div class="sitemap-item">
							<ul>
								<li><a href="<?= get_site_url(); ?>/news#news"><span class="fw-bolder">新着情報</span></a></li>
								<li><a href="<?= get_site_url(); ?>/news#blog"><span class="fw-bolder">ブログ</span></a></li>
								<li><a href="<?= get_site_url(); ?>/recruit#recuit"><span class="fw-bolder">採用情報</span></a></li>
								<li><a href="<?= get_site_url(); ?>/recruit#form"><span class="fw-bolder">お問い合わせ</span></a></li>
								<li><a href="<?= get_site_url(); ?>/privacy/"><span class="fw-bolder">プライバシーポリシー</span></a></li>
							</ul>		
						</div>
					</div><!--sitemap-->
				</div><!--ft-wrap-->
			</footer>
			<?php wp_footer(); ?>
			<div class="fx md:hidden hidden ">
				<div class="go-top">
					<a href="#wrapper">
						<i class="fas fa-angle-up"></i>
					</a>
				</div>
			</div>
		</div><!--body wrapper-->

	</body>
</html>