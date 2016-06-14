<?php
include("includes/function.php");

$l = $quranforall->get_language();

	$title_l = $quranforall->language_info_by_key("name");

	if(isset($_GET['id']) AND intval($_GET['id']) != 0){
		$contentview = $quranforall->books_info();
		if($l == "ar"){
			$title = $quranforall->books_info_by_key(2);
			$description = $quranforall->books_info_by_key(3);
			$keywords = str_replace(' ', ', ', $quranforall->books_info_by_key(2));
		}else{
			$title = $quranforall->books_info_by_key(4);
			$description = $quranforall->books_info_by_key(5);
			$keywords = str_replace(' ', ', ', $quranforall->books_info_by_key(4));
		}
		$contentview .= post_share($title, $quranforall->url(11, intval($_GET['id']), $l));
		$content = $Template->tpl_content($title, $contentview);
		if($booksview==1){
		$content .= $Template->tpl_content(word('random_books'), $quranforall->books(0));
		}
		$morelink = array(
		    1 => array(''.word('books_by').' '.$title_l.'', $quranforall->url(12,$l,""), 0),
		    2 => array($title, '', 0)
		);
		$breadcrumb = $quranforall->get_breadcrumb($morelink);
	}else{
		$contentview = $quranforall->books(1);
		$title = word('books_by').' '.$title_l;
		$description = word('books_by').' '.$title_l;
		$keywords = $title_l.', '.word('books');
		$content = $Template->tpl_content(word('books_by').' '.$title_l, $contentview);
		$breadcrumb = $quranforall->get_breadcrumb(''.word('books_by').' '.$title_l.'');
	}

$Template->title = $title.' | '.$sitename;
$Template->description = $description;
$Template->keywords = $keywords;

$menu = $Template->tpl_menu(word('select_language'), $quranforall->languages_loop_select());
$menu .= $Template->tpl_menu(word('select_surah'), $quranforall->view_sora_loop());
if($quranforall->get_language() == "ar"){
$menu .= $Template->tpl_menu(word('select_tafseer'), $quranforall->home_tafseer_list());
}
echo $Template->Template_view($content, $menu, $breadcrumb);
?>