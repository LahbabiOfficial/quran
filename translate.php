<?php
include("includes/function.php");
include("includes/readers.php");

include( $quranforall->translate_include() ); 

if(isset($_GET['sora']) && $_GET['sora'] < 115){ 
	$sora_id = intval($_GET['sora']); 
}else{ 
	$sora_id = 1; 
}

if(isset($_GET['x'])){ 
	$x = intval($_GET['x']); 
}else{ 
	$x = $default_reader; 
}

if(isset($_GET['l']) AND $_GET['l'] != ""){

//Start check Sora Value
if(isset($_GET['sora']) AND intval($_GET['sora']) != 0){
	$title = $quranforall->language_info_by_key("name");
	$title_en = $quranforall->language_info_by_key("name_en");
	$title_ar = $quranforall->language_info_by_key("name_ar");
	$pdf_file = $quranforall->language_info_by_key("book");
	$sound_folder = $quranforall->language_info_by_key("sound");
	$source = $quranforall->language_info_by_key("source");
	$surah_name = $quranforall->surah_name();

	$body_title = word('surah').' '.$surah_name[$sora_id];
	$page_title = $title.' - '.word('surah').' '.$surah_name[$sora_id].' | '.$sitename;
	$page_description = htmlentities($quranforall->loop_translate());
	
	$body_text = '';

	if($sound_folder == ""){
		if($allw_readerform==1){ 
			$reader_menu = word('select_qaria').$quranforall->home_readers_form($sora_id,$source,$x).'<br />'; 
		}
		$audio_url = $quranforall->home_check_sora($sora_id, $x);
	}else{
		$audio_url = $quranforall->home_check_sora($sora_id, $x, $sound_folder);
	}

	if($allw_listensora==1){ $body_text .= '<div class="listensora">'.$reader_menu.''.$quranforall->audio_player($audio_url, 1).'</div>'; }
	
	$body_text .= $quranforall->view_translate($page_title);
	$body_text .= post_share($page_title, $quranforall->url(8, $sora_id, $quranforall->get_language()));
	
	$morelink = array(
	    1 => array($title, $quranforall->url(10,$source,""), 0),
	    2 => array(''.word('surah').' '.$surah_name[$sora_id].'', '', 0)
	);
	$breadcrumb = $quranforall->get_breadcrumb($morelink);
}else{
	$title = $quranforall->language_info_by_key("name");
	$title_en = $quranforall->language_info_by_key("name_en");
	$title_ar = $quranforall->language_info_by_key("name_ar");
	$body_title = $title;
	$page_title = $title.' | '.$sitename;
	$page_description = $title.' | '.$sitename;
	$pdf_file = $quranforall->language_info_by_key("book");
	if($pdf_file==""){ $pdf = ''; }else{ $pdf = '<div class="pdfquran"><a title="'.$title.' - '.$title_en.' - '.$title_ar.'" href="'.$pdf_file.'"><img title="'.word('title').' '.$title.' pdf" src="'.$quranforall->folder.'/icons/pdf.png" alt="'.word('title').' '.$title.' pdf" /><br />'.word('title').': '.$title.'</a></div>'; }
	$body_text = $pdf;
	$body_text .= post_share($page_title, $quranforall->url(10, $quranforall->get_language()));
	$body_text .= $quranforall->sora_loop();
	$breadcrumb = $quranforall->get_breadcrumb($title);
}
//End check Sora Value

}else{
$body_text = $quranforall->sora_loop();
$page_title = $sitename;
$page_description = $sitename;
}

$Template->description = $page_description;
$Template->title = $page_title;

$content = $Template->tpl_content($body_title, $body_text);
if($booksview==1){
if($l != 0){ $content .= $Template->tpl_content(word('random_books'), $quranforall->books(0)); }
}
$menu = $Template->tpl_menu(word('select_language'), $quranforall->languages_loop_select());
$menu .= $Template->tpl_menu(word('select_surah'), $quranforall->view_sora_loop());
if($quranforall->get_language() == "ar"){
$menu .= $Template->tpl_menu(word('select_tafseer'), $quranforall->home_tafseer_list());
}
if($booksviewinmenu==1){
$menu .= $Template->tpl_menu(word('random_books'), $quranforall->sidebar_books());
}

echo $Template->Template_view($content, $menu, $breadcrumb);
?>