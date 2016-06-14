<?php
include("includes/function.php");
include("includes/ayat.php");

if(isset($_GET['aya']) && $_GET['aya'] != 0){
	$aya = intval($_GET['aya']);
}else{
	$aya = 1;
}

if(isset($_GET['type']) && $_GET['type'] != 0){
	$type = intval($_GET['type']);
}else{
	$type = 1;
}

if(isset($_GET['sora']) && $_GET['sora'] != 0 && $_GET['sora'] < 115){
	$sora_id = intval($_GET['sora']);
	if($aya > $quranforall->aya_count[$sora_id]){
		$aya = 1;
	}
	$surah_name = $quranforall->surah_name();
	$body_title = $quranforall->tafseers[$type].' - '.word('surah').' '.$surah_name[$sora_id].' - '.word('aya').' '.$aya.'';
	$page_title = $quranforall->tafseers[$type].' - '.word('surah').' '.$surah_name[$sora_id].' '.word('aya').' '.$aya.''.' | '.$sitename;
	$page_description = $quranforall->tafseers[$type].' | '.word('surah').' '.$surah_name[$sora_id].' '.word('aya').' '.$aya.''.' | '.$quranforall->clean_text($QURAN[$sora_id][$aya]);
	$page_keywords = str_replace(' ', ', ', $quranforall->clean_text($QURAN[$sora_id][$aya]));
	$morelink = array(
	    1 => array($quranforall->tafseers[$type], $quranforall->url(6, $type, ""), 0),
	    2 => array(''.word('surah').' '.$surah_name[$sora_id].' '.word('aya').' '.$aya.'', '', 0)
	);
	$get_text = $quranforall->tafseer_view($sora_id,$aya,$type,$body_title);
	$get_text .= post_share($body_title, $quranforall->url(23, $sora_id, $type, $aya));
	$breadcrumb = $quranforall->get_breadcrumb($morelink);
}else{
	$sora_id = 1;
	if($type > count($quranforall->tafseers)-1){ $type = 1; }
	$get_text = $quranforall->tafseer_sora_loop($type);
	$body_title = $quranforall->tafseers[$type];
	$page_title = $quranforall->tafseers[$type].' | '.$sitename;
	$breadcrumb = $quranforall->get_breadcrumb($quranforall->tafseers[$type]);
}

$Template->description = $page_description;
$Template->keywords = $page_keywords;
$Template->title = $page_title;

$menu = '';
if($quranforall->get_language() == "ar"){
$menu .= $Template->tpl_menu(word('select_tafseer'), $quranforall->home_tafseer_list());
}
$menu .= $Template->tpl_menu(word('select_surah'), $quranforall->view_sora_loop());
if($booksviewinmenu==1){
$menu .= $Template->tpl_menu(word('random_books'), $quranforall->sidebar_books());
}
$menu .= $Template->tpl_menu(word('select_language'), $quranforall->languages_loop_select());

$content = $Template->tpl_content($body_title, $get_text);
if($booksview==1){
$content .= $Template->tpl_content(word('random_books'), $quranforall->books(0));
}

echo $Template->Template_view($content, $menu, $breadcrumb);
?>