<?php
	include('protection/clt.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="fr-CH">

	<head>
		<meta http-equiv="content-language" content="fr-CH" />
		<meta name="language" content="fr-CH" />
		<meta charset="utf-8">
		<link rel="alternate" hreflang="ch" href="http://<?php echo $url;?>"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $titre; ?></title>
		<meta name="robot" content="index,follow;">
		<link rel="canonical" href="<?php echo $urlfinale ?>" />
		<meta name="description" content="<?php echo $titre; ?> - <?php echo $slogan; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<?php echo $author; ?>
		<?php echo $favicon; ?>
		<?php echo $css; ?>
		<?php echo $cssBase; ?>
	</head>

	<body>
		<?php echo $loader; ?>
			<?php include('private/et.php');?>
			<?php include('private/banner.php');?>
			<?php include('private/body-index.php');?>
			<?php include('private/pdp.php');?>
			<!-- <div class="container-fluid">
			<div id="textepp">	
				<details>
					<summary class="text-center">Plan du site</summary>				<div id="pp"><?php //include('private/pp.php');?></div>
				</details>
			</div> 
			</div>  -->
			<?php echo $totop; ?>
			<?php echo $jsBase; ?>
			<?php echo $js; ?>
	</body>
	
</html>
