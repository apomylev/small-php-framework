<!DOCTYPE HTML>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" >
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="700">
    <title><?php echo $model->title; ?></title>
    <meta name="Keywords" content="<?php echo $model->keywords; ?>">
    <meta name="Description" content="<?php echo $model->description; ?>">
    <link rel="stylesheet" href="/css/main.css" type="text/css">
    <?php echo $model->addscript; ?>
    <?php echo $model->addcss; ?>
 </head>

<body>
	<div id="menu" class="shadow">
        	<?php if (method_exists($model, 'menu')) $model->menu(); ?>	
	</div>
	<div id="content">
		<?php if (method_exists($model, 'content')) $model->content(); ?>
	</div>
	<div id="footer"></div>
</body>
</html>