<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<?php // Start session.
		session_start();
		// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
		$security_token=$_SESSION['security_token']=uniqid(rand());
		if(!isset($_SESSION['formMessage'])) {
			$_SESSION['formMessage']='Fill in the form below to send me an email.';
		}
		if(!isset($_SESSION['formFooter'])) {
			$_SESSION['formFooter']='';
		}
		if(!isset($_SESSION['form'])) {
			$_SESSION['form']=array();
		}
		function check($field,$type='',$value='') {
			$string="";
			if(isset($_SESSION['form'][$field])) {
				switch($type) {
					case 'checkbox':
						$string='checked="checked"';
						break;
					case 'radio':
						if($_SESSION['form'][$field]===$value) {
							$string='checked="checked"';
						}
						break;
					case 'select':
						if($_SESSION['form'][$field]===$value) {
						$string='selected="selected"';
						}
						break;
					default:
						$string=$_SESSION['form'][$field];
				}
			}
			return $string;
		}
	?>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="generator" content="RapidWeaver" />
		<title>Contacte</title>

		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/japanese_fantasy/styles.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/japanese_fantasy/colour_tags-page3.css" />
		<link rel="stylesheet" type="text/css" media="print" href="../rw_common/themes/japanese_fantasy/print.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/japanese_fantasy/css/banner/1.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/japanese_fantasy/css/accent/red.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/japanese_fantasy/css/sidebar/right.css" />

		<script type="text/javascript" src="../rw_common/themes/japanese_fantasy/javascript.js"></script><!--[if lt IE 7]>
		<style type="text/css" media="all">
		#featureImage div {
		background:none;
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#66000000,endColorstr=#66000000);
		}
		</style>
		<![endif]-->
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div class="floatLeft">
					<div id="featureImage">
						<div>
							<h1>Cossos tòxics</h1>
							<h2 />
						</div>
					</div>
				</div><!-- #floatLeft-->
				<div id="nav" class="floatRight">
					<img src="../rw_common/images/LogoCossosToxics.jpg" alt="Site logo" height="50" width="60" />
					<ul>
						<li>
							<a href="../" rel="self">Inici<span /></a>
						</li>
						<li>
							<a href="../styled/" rel="self">Membres del grup<span /></a>
						</li>
						<li>
							<a href="../activitats/" rel="self">Activitats<span /></a>
						</li>
						<li>
							<a href="../styled-2/" rel="self">Publicacions<span /></a>
						</li>
						<li>
							<a href="./" rel="self" class="current">Contacte<span /></a>
						</li>
					</ul>
				</div>
			</div><!-- #header-->

			<div id="container" style="height: 583px">
				<div id="content">

					<div class="album-description">
						<p>
							Cossos Tòxics.
						</p>
						<p>
							Etnoepidemiologia Sociocultural de la Contaminació Interna
							per Compostos Tòxics Persistents a Espanya.
						</p>
						<p>
							&nbsp;
						</p>
						<p>
							Departament d’Antropologia Social, Universitat de Barcelona.
						</p>
						<p>
							Montalegre 1-6, 08001 Barcelona.
						</p>
						<p>
							Tel. 93 403 77 55
						</p>
						<p>
							toxicbodyctp@gmail.com
						</p>
					</div>
					<br />

				</div> <!-- #content-->
				<div id="sidebar">
					<h2></h2>
				</div> <!-- #sideabar-->
 				<div class="clear"></div>
			</div> <!-- #container-->
			<div id="footer">
				© 2011 Jordi Masramon 
				<script type="text/javascript">
					var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":jm";var _rwObsfuscatedHref3 = "asr";var _rwObsfuscatedHref4 = "amo";var _rwObsfuscatedHref5 = "n@a";var _rwObsfuscatedHref6 = "gen";var _rwObsfuscatedHref7 = "bol";var _rwObsfuscatedHref8 = "sa.";var _rwObsfuscatedHref9 = "com";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9; document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;
				</script>
			</div> <!-- #footer-->
		</div> <!-- #wrapper-->
	</body>
</html>
