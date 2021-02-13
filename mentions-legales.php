<?php
	include('protection/clt.php');
?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="mentions légales">
	<?php echo $author; ?>
	<title>Mentions légales - <?php echo $titre; ?> </title>
	<meta name="robot" content="index,follow;">
	<link rel="canonical" href="<?php echo $urlfinale ?>/mentions-legales.php" />
    <meta name="description" content="<?php echo $titre; ?>">
    <?php echo $author; ?>
    <?php echo $favicon; ?>
	<?php echo $og; ?>
    <?php echo $cssBase; ?>
    <?php echo $css; ?>

</head>
<body>
		<?php echo $loader; ?>
		<div id="wrapper" class="wrapper">


		<?php include('private/et.php');?>
			<?php include('private/banner.php');?>
			<?php include('private/body-mention.php');?>
			<?php include('private/pdp.php');?>
			<!-- <div class="container-fluid">
			<div id="textepp">	
				<details>
					<summary class="text-center">Plan du site</summary>				<div id="pp"><?php include('private/pp.php');?></div>
				</details>
			</div> 
			</div>  -->
			<?php echo $totop; ?>

		</div><!-- #wrapper end -->

			<?php echo $jsBase; ?>
			<?php echo $js; ?>
	</body>
	

    </html>
