<?php
function word($key=''){
	$Q_W['title'] = 'القرآن الكريم';
	$Q_W['surah_with_dash'] = '- سورة -';
	$Q_W['surah'] = 'سورة';
	$Q_W['select_surah'] = 'اختر سوره';
	$Q_W['select_tafseer'] = 'اختر التفسير';
	$Q_W['select_language'] = 'اختر اللغة';
	$Q_W['share'] = 'المشاركه';
	$Q_W['surah_in_title'] = '- سورة';
	$Q_W['not_found_tafseer'] = '<div class="alert alert-danger" role="alert" style="margin-bottom:0;">لايوجد تفسير لهذه الآية</div>';
	$Q_W['go'] = 'اذهب';
	$Q_W['surah_in_breadcrumbs'] = '&raquo; سورة';
	$Q_W['saved_date'] = 'تاريخ الحفظ: ';
	$Q_W['source'] = 'المصدر: ';
	$Q_W['not_found_tafseer_file'] = '<div class="alert alert-danger" role="alert" style="margin-bottom:0;">عذرا ... ملف التفسير غير موجود على السيرفر</div>';
	$Q_W['aya'] = 'الآية';
	$Q_W['select_qaria'] = 'اختر القاريء';
	$Q_W['change'] = 'تغيير';
	$Q_W['the_surah'] = 'السورة';
	$Q_W['from'] = 'من';
	$Q_W['to'] = 'إلى';
	$Q_W['select_aya_number'] = 'اختر رقم الآية';
	$Q_W['save_by_word'] = 'حفظ الصفحة بصيغة وورد';
	$Q_W['save_by_notepad'] = 'حفظ الصفحة بصيغة النوت باد أو بملف نصي';
	$Q_W['save_by_html'] = 'حفظ الصفحة بصيغة html';
	$Q_W['print'] = 'طباعة الصفحة';
	$Q_W['save_options'] = 'خيارات حفظ الصفحة والطباعة';
	$Q_W['save_tafseer_full_surah'] = 'احفظ السورة مع التفسير الكامل لها فقط قم بإختيار التفسير ثم اضغط على حفظ';
	$Q_W['save'] = 'حـفـظ';
	$Q_W['aya_count'] = 'عدد الآيات';
	$Q_W['book_source'] = '<span>المصدر:</span>';
	$Q_W['book_author'] = '<span>المؤلف:</span>';
	$Q_W['book_translator'] = '<span>المترجم:</span>';
	$Q_W['book_checker'] = '<span>المدقق/المراجع:</span>';
	$Q_W['book_publisher'] = '<span>الناشر:</span>';
	$Q_W['random_books'] = 'كتب عشوائيه';
	$Q_W['books'] = 'الكتب';
	$Q_W['book_downlaod'] = '<span>التحميل:</span>';
	$Q_W['books_by'] = 'كتب اللغة';
	$Q_W['create_stemap'] = 'إنشاء ملف sitemap';
	$Q_W['sitemap_found'] = '<div class="alert alert-success" role="alert" style="margin-bottom:0;">ملف خريطة الموقع موجود بموقعك<br /><a href="sitemap.xml">من هنا</a><br />إن كنت تريد انشاء ملف جديد فقط غيّر تسمية الملف أو قم بحذفه حتى تتمكن من إنشاء ملف جديد لخريطة الموقع</div>';
	$Q_W['create_stemap_form'] = '<div class="xmlcreate">
	<h2>انشاء ملف خريطة الموقع sitemap.xml</h2>
	<form name="FormName" action="" method="post">
	<input name="action" type="hidden" value="create_sitemap" />
	<input type="submit" value=" إبدأ في إنشاء الملف " class="input2" />
	</form></div>';
	$Q_W['more'] = 'المزيد';
	$Q_W['home'] = 'الرئيسية';
return $Q_W[$key];
}
?>