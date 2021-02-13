<?php
	include('protection/clt.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="fr-CH">

	<head>
		<meta http-equiv="content-language" content="fr-CH" />
		<meta name="language" content="fr-CH" />
		<meta charset="utf-8">
		<link rel="alternate" hreflang="ch" href="http://<?php echo $url;?>/research.php"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Research - <?php echo $titre; ?></title>
		<meta name="robot" content="index,follow;">
		<link rel="canonical" href="<?php echo $urlfinale ?>/research.php" />
		<meta name="description" content="Research - <?php echo $titre; ?> - <?php echo $slogan; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<?php echo $author; ?>
		<?php echo $favicon; ?>
		<?php echo $css; ?>
		<?php echo $cssBase; ?>
	</head>

	<body class="services">
		<?php echo $loader; ?>
			<?php include('private/et.php');?>
			<?php include('private/body-research.php');?>
			<?php include('private/pdp.php');?>
			<?php echo $totop; ?>
			<?php echo $jsBase; ?>
			<?php echo $js; ?>
	</body>
	
</html>
