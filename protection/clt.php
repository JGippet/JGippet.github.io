<?php
	$titre='Jérôme M. W. Gippet';
	$shortname='Gippet JMW';
	$gerant="GIPPET Jérôme"; // nom du gérant de type Prénom NOM
	$slogan="Urban ecology - Biological invasions - Spatial ecology - Myrmecology";
	$annee="2021"; // Date de creation du site
	$anneecreation="2021"; // année de création de la société
	$anneeencours=date("Y");
	$duree=$anneeencours-$anneecreation;
	if($annee==$anneeencours){
	$copyright = ''.$titre.' &copy '.$anneeencours.'';}else{
	$copyright = ''.$titre.' &copy '.$annee.' - '.$anneeencours.'';}
	
	$texte="Urban ecology - Biological invasions - Spatial ecology - Myrmecology"; // texte accueil
	$paragraphe="Urban ecology - Biological invasions - Spatial ecology - Myrmecology";// paragraphe pour og et schema.org 200 caracteres max

	$tel=''; //  XX XX XX XX XX
	$telsansespace='0216924193';//  XXXXXXXXXX
	$tel33=''; // +33XXXXXXXXXX
	$fax=''; // XX XX XX XX XX
	$fax33=''; // +33XXXXXXXXXX
	$mob='021 692 41 93'; // XX XX XX XX XX
	$mob33='+41216924193'; // +336XXXXXXXXX ou +337XXXXXXXXX
	$mail='jgippet@gmail.com';

	$rue="Université de Lausanne";
	$cp="1015";
	$ville="Lausanne";
	$pays="Suisse";
	$departement="Vaud";
	$adresse="$rue<br/>$cp $ville";
	$adresseligne="$rue - $cp $ville";

	$url='jgippet.github.io'; // url du site en www.site.fr
	$urlfinale=""; // url du site en http(s)://www.site.fr

	$rcs='RAS';
	$rs='RAS'; // raison sociale de la société
	$formejuridique='RAS'; // SARL au capital de €, Affaire personnelle commerçant, EURL, EIRL, SAS, ETC
	$NAF='RAS'; // Code Naf
	$siren='RAS'; // siren de la forme 000 000 000
	$siret='RAS'; // siret de la forme 000 000 000 00000
	$id='RAS'; // siren sans espace
	$tva=''; // FRXX SIREN www.tva-intra.fr

	$fb=''; // url facebook
	$tw=''; // url twitter
	$insta=''; // url instagram
	$pagejaune=''; // url page jaune

	$horaire='';

	$gga=''; // google analytics ou google tag manager

	$repfavicon = 'favicon'; // répertoire des favicons à partir de la racine
	$favicon='<link rel="apple-touch-icon-precomposed" sizes="57x57" href="'.$repfavicon.'/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="'.$repfavicon.'/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="'.$repfavicon.'/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="'.$repfavicon.'/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="'.$repfavicon.'/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="'.$repfavicon.'/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="'.$repfavicon.'/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="'.$repfavicon.'/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="'.$repfavicon.'/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="'.$repfavicon.'/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="'.$repfavicon.'/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="'.$repfavicon.'/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="'.$repfavicon.'/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="&nbsp;"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
	'; // favicon généré sur https://www.favicon-generator.org
	$author='<meta name="author" content="'.$titre.' - Pia">';
	
	
	$cssBase='<link href="css/magic.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.min.css" rel="stylesheet" type="text/css" />
	<link href="css/custom.css" rel="stylesheet" type="text/css" />';
	// Ajouter à cssBase si template en bootstrap 3 : 
	//<link href="css/add-boot.css" rel="stylesheet" type="text/css" /> 
	$css='<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">';


	$jsBase='<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/wow.js"></script>
	<script>
	new WOW().init();
	</script>
	<script src="js/all.js"></script>';
	$js='<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="js/main.js"></script';


	$loader='';
	$fancy='<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>';
	$navclose='<script>
	function hideNav(){window.innerWidth<768&&$(".navbar-collapse>ul>li>a").click(function(){$(".navbar-collapse").collapse("hide")})}window.onload=function(){hideNav()},window.onresize=function(){hideNav()};
	</script>';
	$totop='<button class="logo-gradient" onclick="topFunction()" id="myBtn" title="Remonter en haut de la page"><i class="fas fa-arrow-up"></i></button>
	<script>function scrollFunction(){document.body.scrollTop>20||document.documentElement.scrollTop>20?mybutton.style.display="block":mybutton.style.display="none"}function topFunction(){document.body.scrollTop=0,document.documentElement.scrollTop=0}mybutton=document.getElementById("myBtn"),window.onscroll=function(){scrollFunction()};</script>';
	$paralax='<script>$(document).ready(function(){var o=function(){var o=$(this).scrollTop();$(".paralax-image").each(function(n,a){var i=$(a);i.find("img").css("top",o-i.offset().top)})};o.apply(window),$(window).on("scroll",o)});</script>';
	$filter='<script>$(document).ready(function(){$(".filter-button").click(function(){var t=$(this).attr("data-filter");"all"==t?$(".filter").show("1000"):($(".filter").not("."+t).hide("3000"),$(".filter").filter("."+t).show("3000"))}),$(".filter-button").removeClass("active")&&$(this).removeClass("active"),$(this).addClass("active")});</script>';


	$schema='<script type="application/ld+json">
	{"@context": "http://schema.org",
		"@type": "Corporation",
		"name": "'.$titre.'",
		"description": "'.$paragraphe.'",
		"image": "'.$urlfinale.'/img/siteweb.jpg",
		"logo": "'.$urlfinale.'/img/logo.png",
		"url": "'.$urlfinale.'/",
		"telephone": "'.$telsansespace.'",
		"sameAs": ["'.$fb.'","'.$insta.'"],
		"address": {"@type": "PostalAddress","streetAddress": "'.$rue.'","addressLocality": "'.$ville.'","postalCode": "'.$cp.'","addressCountry": "France"}}</script>';
		// ATTENTION , CHANGER SI HTTPS !!!!!!!!!!!!!

	$idreseau=''; // @nomdelentreprisesurlesreseausociaux

	
	$twittercard='<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="'.$idreseau.'" />
	<meta name="twitter:title" content="'.$titre.'" />
	<meta name="twitter:description" content="'.$paragraphe.'" />
	<meta name="twitter:image" content="'.$urlfinale.'/img/siteweb.jpg" />';

	$og='<meta property="og:title" content="Venez découvrir '.$titre.'" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="'.$urlfinale.'/img/siteweb.jpg" />
	<meta property="og:url" content="'.$urlfinale.'" />
	<meta property="og:description" content="'.$paragraphe.'" />
	<meta property="og:video" content="" />
	<meta property="og:locale" content="fr_FR" />
	<meta property="og:site_name" content="'.$titre.'" />'; // balise Open Graph pensez à copier ca avant le head: <html xmlns:og="http://ogp.me/ns#">
	// ATTENTION , CHANGER SI HTTPS !!!!!!!!!!!!!

	$gmap=''; //maps google -> partager -> copier lien 
	$map=''; // maps google -> partager -> copier lien map -> iframe google maps avec width 100% 


	$MotCle = array('','','','','','');
	$Localite = array('','','','');
	
?>
