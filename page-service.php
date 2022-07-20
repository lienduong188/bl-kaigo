<?php
/**
 * Template Name: サービス
 */
?>
<?php get_header(); ?>
<link href="<?= get_template_directory_uri(); ?>/css/common.css" rel="stylesheet" type="text/css">
<link href="<?= get_template_directory_uri(); ?>/css/service.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
		<?php get_template_part('nav'); ?>
		
		<main>
			<section id="ttl">
				<div class="ttl-wrap">
					<h2>サービス内容</h2>
					<img class="ttl-icon" src="<?= get_template_directory_uri(); ?>/images/service-icon.png" alt="">
				</div>
			</section>
			
			<div class="tap-wrap">
				<ul>
					<li class="tap tab1 active"><a href="#tab1">訪問介護</a></li>
					<li class="tap tab2"><a href="#tab2">居宅介護支援</a></li>
					<li class="tap tab3"><a href="#tab3">相談支援</a></li>
				</ul>
			</div>
			<div>
				<div id="tab1" class="tab-content">
					<section id="homon">
						<div class="homon-sub">
							<div class="inner-bg">
								<h4>高齢者や病気を抱える人たちを、地域全体で各々が役割を<br>
									担って支え合う時代になりました。</h4>
								<p><?= kPLATFORM_NAME ?>は、介護サービスを通じて地域社会に貢献してまいります。<br>
									訪問介護サービスでは、ご利用者様が可能な限りご自宅で自立した<br>
									日常生活を送ることができるよう、<br>
									訪問介護員（ホームヘルパー）がご利用者さまのご自宅を訪問し、<br>
									食事・排泄・入浴などの介護（身体介護）や、 <br>
									掃除・洗濯・買い物・調理などの生活を支援します。<br>
									身体介護と生活援助の両面からサポートさせていただきますので、<br>
									安心して快適な日々を送っていただけます。<br>
									住み慣れた地域で活き活きと暮らしていけるよう、<br>
									その人らしさを尊重し、<br>
									心を込めてお手伝いさせていただきます。</p>
							</div>
						</div>
						<div class="naiyo">
							<div class="sec-ttl sec-wrap">
								<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">サービス内容</span></span></h3>
								<br><hr>
							</div>
							<div class="naiyo-sub">
								<div class="naiyo-items">
									<div class="naiyo-item">
										<p class="naiyo-ttl fw-bolder">身体介護</p>
										<ul>
											<li>● 入浴（清拭）・ 排泄の介助 ・ 食事の介助</li>
											<li>● 体位を変えるサポート ・ 着替えのお手伝い</li>
											<li>● 通院時のサポート</li>
										</ul> 
									</div>
									<div class="naiyo-item">
										<p class="naiyo-ttl fw-bolder">生活援助</p>
										<ul>
											<li>● 掃除 ・ 洗濯 ・ ご飯の準備などの家事</li>
											<li>● 買い物やお薬の受け取り</li>
											<li>※（単身やご家族が障害などのため、ご本人やご家族が家事を行うことが困難な場合にサポートするものです</li>
										</ul>

									</div>
									<div class="naiyo-item">
										<p class="naiyo-ttl fw-bolder">自費のサービス</p>
										<ul>
											<li>● 病院内の介助 ・ 見守り</li>
											<li>● 外出時の付き添い</li>
											<li>● 大掃除</li>
											<li>● 同居されている動物のお世話</li>
											<li>● その他の介護保険に準じたサービス</li>
										</ul>  
									</div>
								</div>
								<div class="naiyo-items">
									※（ご家族と同居していて介護保険による生活援助が受けられない場合や、保険適用外のサービスを受けられたい場合、又は限度額を超過してしまった場合にご利用いただけます）
								</div>	
							</div>
						</div>
						<div class="sec-wrap nagare">
							<div class="sec-ttl">
								<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">ご利用の流れ</span></span></h3>
								<br><hr>
							</div>
							<div class="nagare-chart homon-step">
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_homon_step1.jpg" alt="STEP1 サービスのご依頼 利用者さま、ご家族、居宅介護支援事業所又は高齢者相談センターからベストライフに依頼があります。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_homon_step2.jpg" alt="STEP2 お宅訪問 スタッフが利用者さまのお宅を訪問します。サービスの内容やベストライフについての説明をさせていただきます。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_homon_step3.jpg" alt="STEP3 サービス担当者会議の開催 利用者さまと関係事業所が集まり、サービス計画についての会議をします。ベストライフのサービス内容を訪問介護計画書として作成し、説明させていただいてから同意を得ます。同意をいただけましたら、契約を行います"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_homon_step4.jpg" alt="STEP4 サービス開始 初回は、サービス内容を細かく確認しながら、ホームヘルパーが訪問介護計画書に従って行います。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_homon_step5.jpg" alt="STEP5 定期訪問 責任者が定期的にご自宅へ訪問し、サービス内容・ご利用状況についてご意見をうかがい、サービスの質を向上に活用させていただきます。	"></figure>
							</div>
						</div>
						<div class="sec-wrap taishou">
							<div class="sec-ttl">
								<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">ご利用対象</span></span></h3>
								<br><hr>
							</div>
							<div class="taishou-sub">
								<p>● 要介護1～5の認定受けている方。<br>
								● 要支援1～2または事業対象者の方は介護予防訪問サービスを利用できます。<br>
								● 障害があり支給決定を受けた方 ※介護予防は、要介護状態にならないために行うもので、ヘルパーとの共同作業が中心です。<br>
								※要支援1の場合は一部利用制限があります。</p>
							</div>
						</div>
					</section><!--homon-->
				</div>
				
				<div id="tab2" class="tab-content">
					<section id="itaku">
						<div class="itaku-sub">
							<div class="inner-bg">
								<h4>訪問介護との素早い情報共有・連携を実現します</h4>
								<p>介護保険の認定を受けたご本人や、ご家族からの相談に応じ、<br>
									心身の状態や生活環境などに合わせて居宅サービス計画（ケアプラン）を<br>
									作成する専門員（ケアマネジャー）が在籍しています。<br>
									訪問介護ステーションとの併設により、<br>
									情報共有・連携が図りやすいことが強みです。<br>
									そのため状態の変化にタイムリーに対応し、必要かつ適切なサービスを<br>
									プランニングすることが可能です。<br>
									また、市区町村や各サービス提供事業所、介護保険施設など<br>
									との連絡・調整も行います。</p>
							</div>
						</div>
						<div class="naiyo">
							<div class="sec-ttl sec-wrap">
								<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">サービス内容</span></span></h3>
								<br><hr>
							</div>
							<div class="naiyo-sub">
								<div class="naiyo-items">
									<div class="naiyo-item">
										<p class="naiyo-ttl fw-bolder">居宅サービス計画書の作成</p>
										<p>利用者さまやご家族さまからヒアリングをさせていただき、ケアプランを作成します。月間・週間のサ－ビス計画をはじめ、サ－ビスの導入するうえでの生活目標や、期間、回数なども決めます。個人個人の生活スタイルに合った最適なプランで、各事業所と連携を行いながら在宅生活を支えます。</p>   
									</div>
									<div class="naiyo-item">
										<p class="naiyo-ttl fw-bolder">モニタリング</p>
										<p>サ－ビスが計画通り実施されているかや、問題点が生じていないか、目標が達成されているかなど継続的にチェックしていきます。必要に応じてケアプランの見直しや変更、事業所への連絡調整をおこないます。</p>   
									</div>
								</div>
							</div>
						</div>
						<div class="sec-wrap nagare">
							<div class="sec-ttl">
								<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">ご利用の流れ</span></span></h3>
								<br><hr>
							</div>
							<div class="nagare-chart itaku-step">
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_itaku_step1.jpg" alt="STEP1 相談受付 相談は電話または来所にて承ります。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_itaku_step2.jpg" alt="STEP2 市町村に介護保険の申請 介護保険のご利用には、まずは市町村へ申請が必要です。ベストライフでは申請代行もいたします。ご質問やご不安な点についても、わかりやすく説明させていただきます。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_itaku_step3.jpg" alt="STEP3 居宅介護支援業とご契約 ベストライフと契約していただき、担当ケアマネジャーを選任します。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_itaku_step4.jpg" alt="STEP4 ケアプランの作成 介護認定が決まりましたら、ケアプランを作成いたします。お客様やご家族様のご要望を取り入れ、ご自宅での日常生活を重視したプランを作成します。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_itaku_step5.jpg" alt="STEP5 利用者さまの現状把握 ご自宅に訪問し、ご本人やご家族の抱えている問題点や課題などをヒアリングします。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_itaku_step6.jpg" alt="STEP6 居宅サービス ご本人の希望や心身の状況を考慮しながら、どのようなサービスを利用するか計画をたてます。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_itaku_step7.jpg" alt="STEP7 介護事業所との連絡調整 サービス提供に関する連絡調整をし、利用開始前に担当者会議を行います。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_itaku_step8.jpg" alt="STEP8 サービスの利用開始 担当ケアマネジャーが毎月訪問し、ニーズに合致しているか、不都合はないか等のモニタリングを実施します。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_itaku_step9.jpg" alt="STEP9 ケアプランの見直し 月に一度、ご自宅に訪問し、問題はないか・手直ししたほうが良いか、ご本人・ご家族様とともに見直しをいたします。見直したプランに基づき、行政・サービス事業所と調整を図ります。"></figure>
							</div>
						</div>
						<div class="sec-wrap taishou">
							<div class="sec-ttl">
								<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">ご利用対象</span></span></h3>
								<br><hr>
							</div>
							<div class="taishou-sub">
								<p>● 要介護1～5の認定受けている方。<br>
								● 高齢者相談センターから委託された要支援1～2または事業対象者の方。</p>
							</div>
						</div>
					</section><!--itaku-->
				</div>
				
				<div id="tab3" class="tab-content">
					<section id="sodan">
						<div class="sodan-sub">
							<div class="inner-bg">
								<h4>相談支援の専門家がお悩みを丁寧にヒアリングし、<br>
									望まれる生活の実現へサポートさせていただきます。</h4>
								<p>計画相談支援とは、障がい福祉サービス及び地域相談支援を<br>
									利用する障がいのある人に対して、サービス利用支援と、<br>
									継続サービス利用支援を提供するものをいいます。<br>
									サービス利用支援では、支給決定の前または支給決定の変更前に、<br>
									利用者さまの心身の状況や環境を踏まえてサービス等利用計画案を作成します。<br>
									支給決定の後または支給決定の変更後に、<br>
									サービス事業者等と連絡調整してサービス担当者会議を開催し、<br>
									サービス等利用計画を作成します。<br>
									継続サービス利用支援では、決められた期間ごとに、<br>
									サービス等の利用状況の検証を行い、計画の見直しを行います。<br>
									サービス事業者等との連絡調整、支給決定または<br>
									支給決定の変更に係る申請勧奨を行います。<br>
									また、困ったことがあったときは相談支援専門員に相談することができます。</p>
							</div>
						</div>
						<div class="naiyo">
							<div class="sec-ttl sec-wrap">
								<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">サービス内容</span></span></h3>
								<br><hr>
							</div>
							<div class="naiyo-sub">
								<div class="naiyo-items">
									<div class="naiyo-item">
										<p class="naiyo-ttl fw-bolder">特定相談支援</p>
										<p>障害のある方が、就労支援や在宅介護サービスを利用するための受給者証の申請や更新の際に、「計画相談支援」が必要となります。介護保険を利用している方には、ケアマネジャーさんがケアプランを立ててくれますが、これと同じように、障害福祉の分野でも相談支援事業所の相談支援専門員がその人がどんな暮らしをしたいのか、そのために何のサービスをどのように利用するか、といった個人に応じた「サービス等利用計画（ケアプラン）」を作成することになっています。この手続きを「計画相談支援」といいます。</p>   
									</div>
								</div>
								<div class="naiyo-items">
									<div class="naiyo-item">
										<p class="naiyo-ttl fw-bolder">サービス利用支援</p>
										<p>利用者の心身の状況や環境、利用者または保護者の意向などを踏まえて「サービス等利用計画案」の作成を行います。利用が決定した際は、サービス事業者等との連絡調整、決定内容に基づく「サービス等利用計画」の作成を行います。</p>   
									</div>
									<div class="naiyo-item">
										<p class="naiyo-ttl fw-bolder">継続サービス利用支援</p>
										<p>利用しているサービス等について、その内容が適切かどうか一定期間ごとに利用状況の検証を行い、「サービス等利用計画」の見直しを行います。また、モニタリングの結果に基づき、計画の変更申請などを検討します。</p>   
									</div>
								</div>
							</div>
						</div>
						<div class="sec-wrap nagare">
							<div class="sec-ttl">
								<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">ご利用の流れ</span></span></h3>
								<br><hr>
							</div>
							<div class="nagare-chart sodan-step">
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_sodan_step1.jpg" alt="STEP1 受付申請 障害福祉サービスの利用を希望する場合は、役所でサービス利用の申請をしてください。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_sodan_step2.jpg" alt="STEP2 障害程度区分の認定 役所の担当者が聞き取りをして区分認定をします。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_sodan_step3.jpg" alt="STEP3 利用契約 相談支援事業所と、計画の作成やその後のモニタリングをするための契約を締結します。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_sodan_step4.jpg" alt="STEP4 サービス等利用計画案の作成 ご本人やご家族の意向を聞き、計画案を作成します。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_sodan_step5.jpg" alt="STEP5 支給決定 役所が区分認定とサービス利用計画案をもとに、サービス内容の支給決定をします。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_sodan_step6.jpg" alt="STEP6 サービス等利用計画 サービス等利用計画（ケアプラン）を作成します。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_sodan_step7.jpg" alt="STEP7 サービスの利用開始 作業書の通所や居宅介護（ホームヘルパー）・ケアホームなどの利用ができます。"></figure>
								<figure class="chart-item"><img src="<?= get_template_directory_uri()?>/images/service_sodan_step8.jpg" alt="STEP8 モニタリング ご本人・ご家族から定期的に意向を聴き、計画の見直しをします。"></figure>
							</div>
						</div>
						<div class="sec-wrap taishou">
							<div class="sec-ttl">
								<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">ご利用対象</span></span></h3>
								<br><hr>
							</div>
							<div class="taishou-sub">
								<ul>
									<li>● 身体障害者</li>
									<li>● 知的障害者</li>
									<li>● 精神障害者</li>
									<li>● 難病等対象者</li>
								</ul>
							</div>
						</div>
					</section><!--sodan-->
				</div>
			</div>
			
			<section id="faq">
				<div class="sec-wrap">
					<div class="sec-ttl">
						<h3><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">よくある質問</span></span></h3>
						<br><hr>
					</div>
					<div class="faq-sub">
						<p class="faq-ttl fw-bolder">訪問介護について</p>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">サービスを利用するとどれくらい費用がかかりますか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">介護保険をご利用の方は、 原則としてサービス内容と利用時間によって定められた介護保険利用料の1割が自己負担となります。</div>
							</div>
						</div>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">訪問介護サービスとはどのようなものですか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">食事や排泄の介助、清拭や入浴介助、体位交換や移動・移乗介助、 起床や就寝の介助、外出介助などの「身体介護」と、調理、掃除、洗濯、生活必需品の買い物や薬の受け取りなどの「生活援助」に大別されます。 同居のご家族がいる場合は、原則的には「生活援助」は受けられません。ただし同居のご家族が障がいや病気などのため家事を行うことが難しい場合は、利用できることがあります。詳しくはご相談ください。</div>
							</div>
						</div>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">どんな人が来てくれるんですか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">当事業所では、女性比率が9割以上となっており、20代から70代まで幅広い年齢層の方が勤務しております。その中から、利用者さまの希望するサービス等に適したヘルパーを選び、訪問させていただきます。</div>
							</div>
						</div>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">ホームヘルパーには何でもやってもらえますか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">申し訳ありませんが、何でもというわけにはいきません。例えば、ご家族と生活している方と独り暮らしの方では行えるサービスが変わってきます。また、高齢者向けのサービスと、障害者向けのサービスでも内容は異なります。詳しくは担当させていただくスタッフ、もしくは相談支援専門員様にお問い合わせいただくか、当事業所まで直接問い合わせください。</div>
							</div>
						</div>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">外出したい時は、ヘルパーの車に乗せて行ってもらえ ますか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">申し訳ありません。制度上、ヘルパーの運転する車への同乗はお断りさせていただいております。</div>
							</div>
						</div>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">ヘルパーの指名はできますか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">当事業所では、固定制ではなく複数名でローテーションを組ませていただいています。 但し、利用者様の状況によっては固定のヘルパーが担当させていただく場合もございます。</div>
							</div>
						</div>
						<p class="faq-ttl fw-bolder">居宅介護支援について</p>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">介護保険を使うにはどうすればいいですか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">介護認定を受けていることが必要となります。まだ認定を受けていない場合には、弊社のケアマネジャーが申請のお手伝いをさせていただきますので、遠慮なくお申し付けください。申請に費用はかかりません。</div>
							</div>
						</div>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">どのようなサービスを受けられますか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">在宅介護には様々なサービスがございます。自宅に来て受けられるサービスや、自宅から外出して受けられる通所系のサービス、他にも外泊や、ベッドや車いすのレンタルなど多岐にわたります。ケアマネジャーが、ご利用者様、ご家族様のご希望を伺った上で、最適なサービスをご提案させていただきます。</div>
							</div>
						</div>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">ケアマネージャーは何をする人ですか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">介護を必要とされる方が、適切なサービスを受けられるよう支援します。利用計画(ケアプラン)を作成したり、お客様とご家族様のご希望をうかがいながら、介護事業者(サービス提供者)への連絡や市長村の手続きなどを行います。</div>
							</div>
						</div>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">ケアマネージャーには資格はあるのですか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">保健・医療・福祉の分野で５年以上の実務経験を持っている人で、筆記試験、実務研修を終了した有資格者をいいます。</div>
							</div>
						</div>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">ケアマネジャーがいないと介護保険のサービスは 使えないのですか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">ケアマネジャーは必須というわけではありません。しかし、介護保険サービスを使う上で、サービス計画書は必要になります。ケアマネジャーに依頼をしない場合はご自身、またはキーパーソンの方が計画書を作成する必要があります。</div>
							</div>
						</div>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">どんな人が利用できますか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">要介護認定１～５までの方が、居宅介護支援(ケアマネジメント)をご利用いただけます。また、要支援認定を受けた方でも、地域包括支援センターからの委託を受けて、ご利用いただくことは可能です。まずはご相談ください。</div>
							</div>
						</div>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">費用はどうなりますか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">原則的に、お客様のご負担はございません。 法定代理受領により、当事業所の居宅介護支援に対して介護給付が支払われます。</div>
							</div>
						</div>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">担当者を変更したり、事業所を変更したりできますか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">はい、可能です。契約の際に担当を決めさせていただきますが、変更をご希望される場合にはお申し出ください。 また、途中で他事業所へ変更をすることもできます。</div>
							</div>
						</div>
						<p class="faq-ttl fw-bolder">相談支援について</p>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">相談支援のサービスを使うにはどうすればいいですか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">区役所にて支給決定を受けていただく必要があります。支給決定がされますと、受給者証が発行され、 そこに記載されたサービスをご利用いただくことができます。</div>
							</div>
						</div>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">支給決定は簡単に出ますか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">障害があり、日常生活に支障をきたしている方でしたら受けることは可能であると思いますが、自治体の判断となります。 サービス利用をお考えでしたら一度面談をさせていただき、ご希望の方には無料で申請のお手伝いをさせていただいております。</div>
							</div>
						</div>
						<div class="qa__box fadeUpTrigger">
							<div class="qa__ttl">
								<div class="icon-quesion">Q</div>
								<div class="ttl-quesion">事業所の変更はできますか？</div>
							</div>
							<div class="qa__sub">
								<div class="icon-answer">A</div>
								<div class="ttl-answer">はい、可能です。ご利用中のサービスや、担当している相談支援専門員にご不満がある場合には遠慮なくお申し出ください。他事業所へ変更される場合、責任持って引継ぎを行い、サービスに支障が出ないよう対応いたします。</div>
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
