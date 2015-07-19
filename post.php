<!DOCTYPE HTML>
<?php
	include("script/common.php");
	include("cms/modules/blog.php");
	$blogData = new blog;
	$blogData->getPost($_GET["p"]);
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?= $blogData->data["title"] ?> - Heirloom Earth</title>
	<meta charset="UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<base href="<?= findBase() ?>"/>
	<?php include("templates/resources.php") ?>
</head>
<body>
	<?php
		include("templates/header.php");
		include("templates/blog-post.php");
		include("templates/footer.php");
	?>
</body>
</html>