<?php
// You can do some initialization for the template here
@date_default_timezone_set(date_default_timezone_get());
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="theme-color" content="#0b1220" />
<link title="Rapidleech Style" href="templates/plugmod/styles/rl_style_pm.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Cdefs%3E%3ClinearGradient id='g' x1='0' y1='0' x2='1' y2='1'%3E%3Cstop offset='0' stop-color='%2322d3ee'/%3E%3Cstop offset='.55' stop-color='%233b82f6'/%3E%3Cstop offset='1' stop-color='%23818cf8'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='64' height='64' rx='15' fill='url(%23g)'/%3E%3Cpath d='M36 10 18 37h11l-4 17 19-28H32z' fill='%23fff'/%3E%3C/svg%3E" />

<title><?php
if (!isset($nn)) $nn = "\r\n";
if (!isset($page_title)) {
	echo 'Rapidleech v'.$GLOBALS['rl_version'];
} else {
	echo htmlspecialchars($page_title);
}
?></title>
<script type="text/javascript">
/* <![CDATA[ */
var php_js_strings = [];
php_js_strings[87] = " <?php echo lang(87); ?>";
php_js_strings[281] = "<?php echo lang(281); ?>";
pic1= new Image();
pic1.src="templates/plugmod/images/ajax-loading.gif";
/* ]]> */
</script>
<script type="text/javascript" src="classes/js.js"></script>
<?php
if ($GLOBALS['options']['ajax_refresh']) { echo '<script type="text/javascript" src="classes/ajax_refresh.js"></script>'.$nn; }
if ($GLOBALS['options']['flist_sort']) { echo '<script type="text/javascript" src="classes/sorttable.js"></script>'.$nn; }
?>

</head>

<body>
<div id="rl-shell">
<header class="rl-topbar">
	<div class="rl-brand">
		<svg class="rl-brand-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="RapidLeech">
			<defs>
				<linearGradient id="rlg" x1="0" y1="0" x2="1" y2="1">
					<stop offset="0" stop-color="#22d3ee"/>
					<stop offset=".55" stop-color="#3b82f6"/>
					<stop offset="1" stop-color="#818cf8"/>
				</linearGradient>
			</defs>
			<rect width="64" height="64" rx="15" fill="url(#rlg)"/>
			<path d="M36 10 18 37h11l-4 17 19-28H32z" fill="#fff"/>
		</svg>
		<div>
			<div class="rl-brand-name">RapidLeech</div>
			<div class="rl-brand-tag">PlugMod &middot; Transfer Script</div>
		</div>
	</div>
	<div class="rl-topbar-meta">
		<b>v<?php echo $GLOBALS['rl_version']; ?></b> <?php echo $GLOBALS['dev_name']; ?>
	</div>
</header>
