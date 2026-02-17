<?php
include_once('../config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/templates/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
	<title><?php echo $DEFAULT_TITLE; ?> <?php echo $LANG['HOME']; ?></title>
	<?php
	include_once($SERVER_ROOT . '/includes/head.php');
	include_once($SERVER_ROOT . '/includes/googleanalytics.php');
	?>
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?>	
	<div id="innertext">
		<h1>Contact</h1>
		<h3>Bernice P. Bishop Museum</h3>
		<ul>
			<li><a href="mailto:norine@bishopmuseum.org">Norine Yeung</a> - PI</li>
			<li><a href="mailto:kenneth.hayes@bishopmuseum.org">Kenneth Hayes</a> - Co-PI</li>
			<li><a href="mailto:Deepreef@bishopmuseum.org">Rich Pyle</a> - Associate Scientist</li>
			<li><a href="mailto:carlcc@hawaii.rr.com">Carl Christensen</a> - Associate Scientist</li>
			<li><a href="mailto:chandra.earl@bishopmuseum.org">Chandra Earl</a> - Postdoc</li>
		</ul>
		<h3>University of Michigan Ann Arbor</h3>
		<ul>
			<li><a href="mailto:diarmaid@umich.edu">Diarmaid O'Foighil</a> - PI</li>
			<li><a href="mailto:taehwanl@umich.edu">Taehwan Lee</a> - Co-PI</li>
		</ul>
		<h3>University of Florida</h3>
		<ul>
			<li><a href="mailto:slapcin@flmnh.ufl.edu">John Slapcinsky</a> - PI</li>
		</ul>
		<h3>Harvard University</h3>
		<ul>
			<li><a href="mailto:jwtrimble@oeb.harvard.edu">Jennifer Trimble</a></li>
			<li><a href="mailto:arivera@oeb.harvard.edu">Alana Rivera</a></li>
		</ul>
		<h3>Field Museum</h3>
		<ul>
			<li><a href="mailto:rbieler@fieldmuseum.org">Rüdiger Bieler</a></li>
			<li><a href="mailto:jgerber@fieldmuseum.org">Jochen Gerber</a></li>
			<li><a href="mailto:psierwald@fieldmuseum.org">Petra Sierwald</a></li>
		</ul>
		<h3>The Academy of Natural Sciences of Drexel University</h3>
		<ul>
			<li><a href="mailto:rosenberg.ansp@drexel.edu">Gary Rosenberg</a></li>
			<li><a href="mailto:prc44@drexel.edu">Paul Callomon</a></li>
		</ul>
	</div>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>