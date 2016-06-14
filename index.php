<?php
include("includes/function.php");
include("includes/readers.php");

$quranforall->check_files();
$surah_name = $quranforall->surah_name();
$Template->headercode .= $quranforall->get_hreflang('', $default_lang);

if(isset($_GET['sora']) && $_GET['sora'] < 115){
	$idsora = intval($_GET['sora']);
}else{
	$idsora = 1;
}

if(isset($_POST['change']) && intval($_POST['change']) == 1 && isset($_POST['sora'])){
	if(isset($_POST['sora']) && $_POST['sora'] < 115){ $sora_id = intval($_POST['sora']); }else{ $sora_id = 1; }
	if(isset($_POST['f']) && intval($_POST['f']) != 0){ $from = intval($_POST['f']); }else{ $from = 1; }
	if(isset($_POST['t']) && intval($_POST['t']) != 0){ $to = intval($_POST['t']); }else{ $to = count($QURAN[$sora_id]); }
	if ($htmlorphp=="1"){ $links = "view-".$sora_id.",from-".$from.",to-".$to.".html"; }else{ $links = "index.php?sora=".$sora_id."&f=".$from."&t=".$to.""; }
	echo "<meta http-equiv='refresh' content='0; url=".$links."' />";
	exit;
}

if(isset($_GET['reader']) && intval($_GET['reader']) == 1){
	$check = $quranforall->get_array_language();
	if (isset($_POST['l']) && in_array($_POST['l'], $check)){ $l = strip_tags($_POST['l']); }else{ $l = 'en'; }	
	if(isset($_POST['x']) && intval($_POST['x']) != 0){  $x = intval($_POST['x']); }else{ $x = 16; }
	if(isset($_POST['sora']) && intval($_POST['sora']) != 0 && intval($_POST['sora']) < 115){ $sora = intval($_POST['sora']); }else{ $sora = 1; }
	$url = $quranforall->url(24, $l, $sora, $x);
	if(isset($_POST['translate']) && intval($_POST['translate']) == 1){
	echo "<meta http-equiv='refresh' content='0; url=".$url."' />";
	}else{
	echo "<meta http-equiv='refresh' content='0; url=".$quranforall->url(18,$sora,$x)."' />";
	}
	exit;
}

if(isset($_GET['tafseet']) && intval($_GET['tafseet']) == 1){
	$sorax = intval($_POST['sora']);
	$ayax = intval($_POST['aya']);
	$typex = intval($_POST['type']);
	$ayanumber = intval($_POST['ayanumber']);
	$tafseernumber = intval($_POST['tafseernumber']);
	if(isset($sorax) AND $sorax != 0 AND $sorax <= 114){ $sora = $sorax; }else{ $sora = 1; }
	if(isset($ayax) AND $ayax != 0 AND $ayax < $ayanumber+1){ $aya = $ayax; }else{ $aya = 1; }
	if(isset($typex) AND $typex != 0 AND $typex < $tafseernumber){ $type = $typex; }else{ $type = 1; }
	$links = $quranforall->url(23, $sora, $type, $aya);
	echo "<meta http-equiv='refresh' content='0; url=".$links."' />";
	exit;
}

if(isset($_GET['sora']) && intval($_GET['sora']) != 0){
	include("includes/ayat.php");
	$body_title = word('surah').' '.$surah_name[$idsora];
	$page_title = word('surah').' '.$surah_name[$idsora].' | '.$sitename;
	//$titledesc = ''.word('surah').' '.$surah_name[$idsora].' ';
	$page_description = $quranforall->clean_text($quranforall->aya_loop($idsora));
	$page_keywords = str_replace(' ', ', ', $page_description);
	$view_sora = $quranforall->home_view_sora_with_option($idsora);
	$view_sora .= post_share($page_title, $quranforall->url(9, intval($_GET['sora'])));
	$breadcrumb = $quranforall->get_breadcrumb(word('surah').' '.$surah_name[$idsora]);
}else{
	$body_title = word('title');
	$page_title = $sitename;
	$page_description = $site_description;
	$page_keywords = $site_keywords;
	$view_sora = $quranforall->home_page();
	$breadcrumb = '';
}

$Template->description = $page_description;
$Template->keywords = $page_keywords;
$Template->title = $page_title;

$content = $Template->tpl_content($body_title, $view_sora);

$menu = '';
$menu .= $Template->tpl_menu(word('select_language'), $quranforall->languages_loop_select());
$menu .= $Template->tpl_menu(word('select_surah'), $quranforall->view_sora_loop());
if($quranforall->get_language() == "ar"){
$menu .= $Template->tpl_menu(word('select_tafseer'), $quranforall->home_tafseer_list());
}
if($booksviewinmenu==1){
$menu .= $Template->tpl_menu(word('random_books'), $quranforall->sidebar_books());
}

echo $Template->Template_view($content,$menu,$breadcrumb);
?>