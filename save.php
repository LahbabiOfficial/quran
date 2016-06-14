<?php
if(isset($_GET['type']) && $_GET['type'] != 0){ $type = intval($_GET['type']); }else{ $type = 1; }
if(isset($_GET['sora']) && $_GET['sora'] != 0 && $_GET['sora'] < 115){ $sora_id = intval($_GET['sora']); }else{ $sora_id = 1; }
if(isset($_GET['aya']) && $_GET['aya'] != 0){ $aya = intval($_GET['aya']); }else{ $aya = 1; }
$file_title = 'Type_'.$type.'_Sorah_'.$sora_id.'_Aya_'.$aya;
if(isset($_GET['save_type']) && $_GET['save_type'] == "html"){
	header('Content-Disposition: attachment; filename="'.$file_title.'.html"');
}elseif(isset($_GET['save_type']) && $_GET['save_type'] == "word"){
	header('(anti-spam-(anti-spam-content-type:)) application/msword');
	header('Content-Disposition: attachment; filename="'.$file_title.'.doc"');
}elseif(isset($_GET['save_type']) && $_GET['save_type'] == "multi_word"){
	$file_title = 'Type_'.$type.'_Sorah_'.$sora_id.'';
	header('(anti-spam-(anti-spam-content-type:)) application/msword');
	header('Content-Disposition: attachment; filename="'.$file_title.'.doc"');
}elseif(isset($_GET['save_type']) && $_GET['save_type'] == "notepad"){
	header('Content-Disposition: attachment; filename="'.$file_title.'.txt"');
}

include("includes/function.php");

if(isset($_GET['save_type']) && $_GET['save_type'] == "html"){
	echo $quranforall->save_to_html();
}elseif(isset($_GET['save_type']) && $_GET['save_type'] == "word"){
	echo '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word" xmlns="http://www.w3.org/TR/REC-html40">';
	echo $quranforall->save_to_doc();
}elseif(isset($_GET['save_type']) && $_GET['save_type'] == "multi_word"){
	echo '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word" xmlns="http://www.w3.org/TR/REC-html40">';
	echo $quranforall->save_to_multi_doc();
}elseif(isset($_GET['save_type']) && $_GET['save_type'] == "notepad"){
	echo $quranforall->save_to_notepad();
}else{
	echo $quranforall->print_page();
}
?>