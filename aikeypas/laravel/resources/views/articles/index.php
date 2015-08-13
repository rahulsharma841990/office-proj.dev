<!DOCTYPE html>
<html>
<head>
	<title>This is My Article Page</title>
</head>
<body>
	<h1>Articles</h1>
	<hr/>
<?php
	foreach($articles as $article):
?>
	<articles>
		<a href="#"><h1><?=$article->title?></h1></a>
		<p><?=$article->body?></p>
	</articles>

<?php
	endforeach;
?>
</body>
</html>