<?php
/**
 * The template for displaying 404 pages (not found)
 */
?>
<?php get_header(); ?>
<link href="<?= get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?= get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css">
<style>
	main{
		max-width: 1280px;
		width: 100%;
		margin: 10vh auto 0;
		height: 80vh;
		text-align: center;
		align-items: center;
	}
	h4{
		font-size: 1.8rem;
		margin-bottom: 20px;
	}
	.btn a{
		max-width: 270px;
		margin-top: 50px;
		font-size: 1rem;
		padding: 10px 40px;
	}
</style>
<?php get_template_part('nav'); ?>
<main>
	<div class="padding10">
		<h4>ご指定のページが見つかりません。</h4>

		<div style="height:30vw; min-height:200px; max-height:300px;">
			<img src="<?= get_template_directory_uri(); ?>/images/404.png" alt="" style="height:100%; object-fit:contain;">
		</div>

		<p>申し訳ございません。<br>
		お客様がお探しのページが見つかりませんでした。<br>
		削除されたか、入力したURLが間違っている可能性があります。<br>
		お手数ですが、上部メニューバーから目的のページをお探しください。</p>
		<div class="btn bounceInDownTrigger"><a href="<?= get_site_url(); ?>">トップページへ戻る</a></div>
	</div>
</main>

<?php get_footer(); ?>