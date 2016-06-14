<?php
include("includes/function.php");

function createfile($filename,$content){

if (!$handle = fopen($filename, 'w')) {
$text = '<div class="alert">Can not open this file ('.$filename.')</div>';
}

if (fwrite($handle, $content) === FALSE) {
$text = '<div class="alert">can not write on this file ('.$filename.')</div>';
}

$text = '<div class="alert">SiteMap is created<br /><a href="'.$filename.'">'.$filename.'</a></div>';
fclose($handle);

return $text;
}
$file_name = 'sitemap.xml';
$create_xml = $quranforall->create_xml();

if(file_exists($file_name)){
	$MSG = word('sitemap_found');
}else{
	if(isset($_POST['action']) AND $_POST['action'] == "create_sitemap"){
		$MSG = createfile($file_name, $create_xml);
	}else{
		$MSG = word('create_stemap_form');
	}
}

$page_title = word('create_stemap');

$Template->description = $m1;
$Template->keywords = $m2;
$Template->title = $page_title.' | '.$sitename;
$breadcrumb = $quranforall->get_breadcrumb($page_title);

$menu = '';
if($quranforall->get_language() == "ar"){
$menu .= $Template->tpl_menu(word('select_tafseer'), $quranforall->home_tafseer_list());
}
$menu .= $Template->tpl_menu(word('select_surah'), $quranforall->view_sora_loop());
if($booksviewinmenu==1){
$menu .= $Template->tpl_menu(word('random_books'), $quranforall->sidebar_books());
}
$menu .= $Template->tpl_menu(word('select_language'), $quranforall->languages_loop_select());

$content = $Template->tpl_content($page_title, $MSG);

echo $Template->Template_view($content, $menu, $breadcrumb);
?>