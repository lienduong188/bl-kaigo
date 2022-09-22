<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>介護サービス<?= kPLATFORM_NAME ?> | 
	<?php 
		$page_name = single_post_title();
		if(is_page()){
			echo $page_name;
		}else{
			echo 'トップ';
		}
	?>
</title>
<?php wp_head(); ?>
<meta name="keywords" content="訪問介護,老人介護,居宅,サービス,老人,福祉,認知,症,介護,生活,相談,支援,ケア,訪問,入浴,訪問,介護,と,は,事業,所,近く の, 施設,訪問介護員,ホームヘルパー" />
<meta name="description" content="訪問介護のことなら<?= kPLATFORM_NAME ?>。住み慣れた環境で安心して過ごしたいという願いを叶えます。" />
<link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri() ?>/images/favicon//apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/images/favicon//favicon-16x16.png">
<link rel="manifest" href="<?= get_template_directory_uri() ?>/images/favicon//site.webmanifest">
<link rel="mask-icon" href="<?= get_template_directory_uri() ?>/images/favicon//safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c" />
<meta name="theme-color" content="#fee7e7" />
<!-- javascriptファイルへカスタムデータ属性を使って、イメージが格納されているディレクトリを渡すだけのscriptタグ -->
<script id="data-bridge" data-themeuri="<?= get_template_directory_uri() ?>"></script>	