<?php
include("includes/function.php");
include("includes/readers.php");

$surah_name = $quranforall->surah_name();
$aya_count = $quranforall->aya_count;

if(isset($_GET['sora']) && $_GET['sora'] != 0){
	$sora = intval($_GET['sora']);
}else{
	$sora = 1;
}

if(isset($_GET['aya']) && $_GET['aya'] != 0){
	$aya = intval($_GET['aya']);
}else{
	$aya = 1;
}

if(!isset($_GET['x'])){ $x = $default_reader_aya; }else{ $x = intval($_GET['x']); }

$l = $quranforall->get_language();

if($sora > 114){ $sora = 114; }
if($aya > $aya_count[$sora_id]){ $aya = 1; }

$surah_name = $quranforall->surah_name();

$sudio_file = $quranforall->sound_check_aya($sora,$aya,$x);

$html = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>'.$surah_name[$sora].'</title>

    <link href="'.$quranforall->folder.'/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="'.$quranforall->folder.'/css/style.css">
    <link rel="stylesheet" type="text/css" href="'.$quranforall->folder.'/css/rtl.css">
    	
	<meta name="description" content="'.$surah_name[$sora].'">
	<meta name="keywords" content="'.$surah_name[$sora].'">
  </head>
  <body>';

$html .= '<div class="container">';

$html .= '<div class="panel panel-default" style="margin-top:15px;">
	<div class="panel-heading">
	<h3 class="panel-title">'.$surah_name[$sora].'</h3>
	</div>
	<div class="panel-body">
		<div class="listensora_window">'.$quranforall->audio_player($sudio_file,1).'</div>
		'.$quranforall->listen_form($sora,$aya,$x,$l).'
	</div>
</div>';

$html .= '</div>';
    
$html .= '<script src="'.$quranforall->folder.'/js/jquery.min.js"></script>
    <script src="'.$quranforall->folder.'/js/bootstrap.min.js"></script>
  </body>
</html>';
		
echo $html;
?>