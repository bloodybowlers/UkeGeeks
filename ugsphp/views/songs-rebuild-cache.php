<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Song Index Rebuilt</title>
	<meta http-equiv="refresh" content="4;URL=<?php echo($model->SongbooktUri) ?>" />
	<link rel="stylesheet" href="<?php echo($model->StaticsPrefix); ?>css/ugsphp.css" />
</head>
<body class="songListPage">
	<section class="contentWrap">
		<h1><?php echo Lang::Get('cache_rebuilt');?></h1>
		<h3><?php printf(Lang::Get('cache_rebuilt_info'), $model->ElapsedTime, $model->SongCount);?></h3>
		<p><?php printf(Lang::Get('cache_rebuilt_redirect'), '<a href="'.$model->SongbooktUri.'">', '</a>');?></p>
	</section>
</body>
</html>
