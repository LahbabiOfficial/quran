<?php
include("includes/function.php");

$Template->description = $quranforall->language_keywords(1);
$Template->keywords = $quranforall->language_keywords(0);
$Template->title = word('select_language').' | '.$sitename;
$breadcrumb = $quranforall->get_breadcrumb(word('select_language'));

$menu = '';
$menu .= $Template->tpl_menu(word('select_language'), $quranforall->languages_loop_select());
$menu .= $Template->tpl_menu(word('select_surah'), $quranforall->view_sora_loop());
if($quranforall->get_language() == "ar"){
$menu .= $Template->tpl_menu(word('select_tafseer'), $quranforall->home_tafseer_list());
}
if($booksviewinmenu==1){
$menu .= $Template->tpl_menu(word('random_books'), $quranforall->sidebar_books());
}
$content = $Template->tpl_content(word('select_language'), $quranforall->flags());

echo $Template->Template_view($content, $menu, $breadcrumb);
?>