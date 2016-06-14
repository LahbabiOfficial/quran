<?php
function word($key=''){
	$Q_W['title'] = 'The Noble Quran';
	$Q_W['surah_with_dash'] = '- Surah -';
	$Q_W['surah'] = 'Surah';
	$Q_W['select_surah'] = 'Select surah';
	$Q_W['select_tafseer'] = 'Select tafseer';
	$Q_W['select_language'] = 'Select language';
	$Q_W['share'] = 'Share';
	$Q_W['surah_in_title'] = '- Surah';
	$Q_W['not_found_tafseer'] = '<div class="alert alert-danger" role="alert" style="margin-bottom:0;">Not found tafseer for aya!</div>';
	$Q_W['go'] = 'Go';
	$Q_W['surah_in_breadcrumbs'] = '&raquo; Surah';
	$Q_W['saved_date'] = 'Saved date: ';
	$Q_W['source'] = 'Source: ';
	$Q_W['not_found_tafseer_file'] = '<div class="alert alert-danger" role="alert" style="margin-bottom:0;">Not found tafseer file!</div>';
	$Q_W['aya'] = 'Aya';
	$Q_W['select_qaria'] = 'Select reciter';
	$Q_W['change'] = 'Chamge';
	$Q_W['the_surah'] = 'Surah';
	$Q_W['from'] = 'From';
	$Q_W['to'] = 'To';
	$Q_W['select_aya_number'] = 'Select aya number';
	$Q_W['save_by_word'] = 'Word';
	$Q_W['save_by_notepad'] = 'Notepad';
	$Q_W['save_by_html'] = 'HTML';
	$Q_W['print'] = 'Print';
	$Q_W['save_options'] = 'Save options';
	$Q_W['save_tafseer_full_surah'] = 'Save full surah with tafsser';
	$Q_W['save'] = 'Save';
	$Q_W['aya_count'] = 'Aya count';
	$Q_W['book_source'] = '<span>Source:</span>';
	$Q_W['book_author'] = '<span>Author:</span>';
	$Q_W['book_translator'] = '<span>Translators:</span>';
	$Q_W['book_checker'] = '<span>Reveiwers:</span>';
	$Q_W['book_publisher'] = '<span>Publisher:</span>';
	$Q_W['random_books'] = 'Random books';
	$Q_W['books'] = 'Books';
	$Q_W['book_downlaod'] = '<span>Download:</span>';
	$Q_W['books_by'] = 'Books by';
	$Q_W['create_stemap'] = 'Create Sitemap';
	$Q_W['sitemap_found'] = '<div class="alert alert-success" role="alert" style="margin-bottom:0;">Found sitemap on your site<br /><a href="sitemap.xml">here</a><br />If you want create new sitemap file just delete file from your site and refresh this page.</div>';
	$Q_W['create_stemap_form'] = '<div class="xmlcreate">
	<h2>Create <strong>sitemap.xml</strong> file</h2>
	<form name="FormName" action="" method="post">
	<input name="action" type="hidden" value="create_sitemap" />
	<input type="submit" value=" Create " class="input2" />
	</form></div>';
	$Q_W['more'] = 'More';
	$Q_W['home'] = 'Home';
return $Q_W[$key];
}
?>