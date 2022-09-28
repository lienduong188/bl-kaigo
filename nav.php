<header>
			<div class="h-wrap">
				<div class="h-item h-logo">
					<div style="display: flex;justify-content:space-between;">
						<a href="<?= get_site_url(); ?>/">
							<img src="<?= get_template_directory_uri(); ?>/images/logo.png" alt="Bestlife" class="h-logo-img">
						</a>
						<div style="width: 100px;"></div>
					</div>
				</div>
				
				<div class="sp_tab">
					<div class="openbtn"><span></span><span></span><span></span></div>
						<nav id="g-nav">
							<div id="g-nav-list">
								<ul>
									<li>
										<a href="<?= get_site_url(); ?>/about/" class="animoBubble5">
											<img src="<?= get_template_directory_uri(); ?>/images/about.png" alt="私たちについて">
											<p class="text-pink">私たちについて</p>
										</a>
									</li>
									<li>
										<a href="<?= get_site_url(); ?>/service/" class="animoBubble5">
											<img src="<?= get_template_directory_uri(); ?>/images/service.png" alt="サービス">
											<p class="text-pink">サービス</p>
										</a>
									</li>
									<li>
										<a href="<?= get_site_url(); ?>/company/" class="animoBubble5">
											<img src="<?= get_template_directory_uri(); ?>/images/company.png" alt="会社案内">
											<p class="text-pink">会社案内</p>
										</a>
									</li>
									<li>
										<a href="<?= get_site_url(); ?>/news/" class="animoBubble5">
											<img src="<?= get_template_directory_uri(); ?>/images/news.png" alt="新着情報">
											<p class="text-pink">新着情報</p>
										</a>
									</li>
									<li>
										<a href="<?= get_site_url(); ?>/recruit/" class="animoBubble5">
											<img src="<?= get_template_directory_uri(); ?>/images/recruit.png" alt="採用情報">
											<p class="text-pink">採用情報</p>
										</a>
									</li>
									<li>
										<a href="<?= get_site_url(); ?>/recruit#form" class="animoBubble5">
											<img src="<?= get_template_directory_uri(); ?>/images/mail-sp.png" alt="メール相談">
											<p class="text-pink">メール相談</p>
										</a>
									</li>
									<li>
										<a href="tel:<?= kPHONE ?>" class="animoBubble5">
											<img src="<?= get_template_directory_uri(); ?>/images/tel-sp.png" alt="<?= kPHONE ?>">
											<p class="text-pink"><?= kPHONE ?></p>
										</a>
									</li>
								</ul>
						</div>
						</nav>
					<div class="circle-bg"></div>
				</div><!--ここまでmoblie_nav-->
				
				<div class="h-item h-nav pc_nav">
					<h1 style="font-size:0.9rem; color: #333333; font-weight: bold;">介護のことなら<?= kPLATFORM_NAME ?></h1>
					<nav>
						<ul>
							<li>
								<a href="<?= get_site_url(); ?>/about/" class="animoBubble5">
									<img src="<?= get_template_directory_uri(); ?>/images/about.png" alt="私たちについて">
									<p>私たちについて</p>
								</a>
							</li>
							<li>
								<a href="<?= get_site_url(); ?>/service/" class="animoBubble5">
									<img src="<?= get_template_directory_uri(); ?>/images/service.png" alt="サービス">
									<p>サービス</p>
								</a>
							</li>
							<li>
								<a href="<?= get_site_url(); ?>/company/" class="animoBubble5">
									<img src="<?= get_template_directory_uri(); ?>/images/company.png" alt="会社案内">
									<p>会社案内</p>
								</a>
							</li>
							<li>
								<a href="<?= get_site_url(); ?>/news/" class="animoBubble5">
									<img src="<?= get_template_directory_uri(); ?>/images/news.png" alt="新着情報">
									<p>新着情報</p>
								</a>
							</li>
							<li>
								<a href="<?= get_site_url(); ?>/recruit/" class="animoBubble5">
									<img src="<?= get_template_directory_uri(); ?>/images/recruit.png" alt="採用情報">
									<p>採用情報</p>
								</a>
							</li>
						</ul>
					</nav>
				</div><!--h-nav-->
				
				<div class="h-item h-contact pc">
					<div class="h-contact-txt">
						<div class="contact-item">
							<p class="fc-pink ci1"><span class="fw-bolder text-pink" style="display:inline-block;">お問い合わせ</span>・<span class="fw-bolder text-pink" style="display:inline-block;">ご相談</span></p>
						</div>
						<div class="contact-item">
							<div class="heartbeat">
								<a href="tel:<?= kPHONE ?>">
								<img src="<?= get_template_directory_uri(); ?>/images/phone.svg" style="height:25px;display:inline-block;vertical-align:middle;" />
									<p class="fc-pink" style="display:inline-block;vertical-align:middle;font-weight:bold;"><?= kPHONE ?></p>
								</a>
							</div>
							<div class="ci3">
								<p>(受付10:00~16:00/土日・祝定休)</p>
							</div>
						</div>	
					</div>	
					<div class="h-mail btnshine" style="min-width:85px;">
						<a href="<?= get_site_url(); ?>/recruit#form"><img src="<?= get_template_directory_uri(); ?>/images/mail.png" alt="メール相談">
						<p style="color:#eeeeee">メール<br class="sm-pc">相談</p></a>
					</div>
				</div><!--h-contact-->
			</div><!--h-wrap-->
		</header>