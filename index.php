<?php
include_once('config/symbini.php');
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
<style>
#quicksearchdiv {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 60px;
}

#quicksearch {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
}

#searchstring {
    width: 700px;
    max-width: 90%;
    padding: 14px 20px;
    font-size: 16px;
    border-radius: 24px;
    border: 1px solid #dcdcdc;
    outline: none;
    box-shadow: 0 1px 6px rgba(32, 33, 36, 0.1);
    transition: box-shadow 0.2s ease;
}

#searchstring:focus {
    box-shadow: 0 2px 8px rgba(32, 33, 36, 0.2);
}

#quicksearchbutton {
	border: none;
    border-radius: 10px;
    margin-top: 20px;
    padding: 10px 22px;
    font-size: 14px;
    color: var(--darkest-color);
    background-color: var(--bright-color);
    cursor: pointer;
    transition: background 0.2s ease, box-shadow 0.2s ease;
}

#quicksearchbutton:hover {
    background: var(--medium-color);
	color: var(--light-color);
    box-shadow: 0 1px 2px rgba(0,0,0,0.1);
}
</style>

<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath"></div>
	<main id="innertext">
		<h1 style="display: flex; justify-content: center">Welcome to PILSBRy!</h1>
		<div id="quicksearchdiv">
			<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/collections/list.php" method="get" onsubmit="return verifyQuickSearch(this);">
				<div id="quicksearchtext" ><?php echo (''); ?></div>
				<input id="searchstring" type="text" name="searchstring" />
				<input type="hidden" name="reset" value="0" />
				<input type="hidden" name="alldatasearch" value="1" />
				<input type="hidden" name="usethes" value="1" />
				<input type="hidden" name="taxontype" value="2" />
				<input type="hidden" name="db" value="allspec" />
				<button id="quicksearchbutton" type="submit" value="Search Terms">Search</button>
			</form>
		</div>
		<section class="container" style="vertical-align: middle;">

			<div style="padding: 0px 10px;width: 50%;display: inline;">
				<p style="font-size:18px;">
				PILSBRy (<b>P</b>acific <b>I</b>sland <b>L</b>and <b>S</b>nails <b>B</b>iodiversity <b>R</b>epositor<b>y</b>) is a collaborative online resource dedicated to documenting and conserving Pacific Island land snails—one of the most diverse and imperiled groups of animals on Earth.
				</p>
				
				<p style="font-size:18px;">
				This site brings together historical collections and current research to provide:
				</p>
				
				<ul style="font-size:18px; line-height:1.2;">
					<li>Specimen records from six major U.S. malacology collections</li>
					<li>Integrated data from museum holdings and ongoing scientific research</li>
					<li>High-resolution photographs of live animals and preserved shells</li>
					<li>Digitized collection maps spanning more than 100 years</li>
					<li>Georeferenced occurrence records across Pacific islands, including remote and historically under-documented locations</li>
					<li>Distribution data supporting taxonomic study and conservation assessment</li>
				</ul>
				
				<p style="font-size:18px;">
				Many Pacific Island land snail species are already extinct, and many more are at risk due to habitat loss, invasive species, and climate change. PILSBRy supports ongoing research to document remaining diversity and provide the data necessary to guide conservation action.
				</p>
				
				<p style="font-size:18px;">
				PILSBRy recognizes the use of diacritical markings in modern Pacific languages, including the glottal stop (ʻ) and the macron (ō). However, these markings have been omitted throughout our website to ensure the best possible online experience for our local, national, and international users. We acknowledge the importance of preserving language and culture through accurate orthography and respectfully use diacritical marks in all printed communications beyond the online platform.
				</p>

			<?php
				//$count_my_page = ("hitcounter.txt");
				//$hits = file($count_my_page);
				//$hits[0] = $hits[0] + 1;
				//$fp = fopen($count_my_page , "w");
				//fputs($fp , "$hits[0]");
				//fclose($fp);
				//echo "<p style='font-size:12'>This site has been accessed ".$hits[0]." times</p>";
			?>
			</div>
		</section>
	</main>
	<?php if($GLOBALS['DONATE_LINK'] && file_exists($SERVER_ROOT . '/includes/donationButton.php')): ?>
		<?php include($SERVER_ROOT . '/includes/donationButton.php') ?>
	<?php endif ?>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
