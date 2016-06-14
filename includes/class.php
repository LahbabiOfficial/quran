<?php
include("ayat.php"); 

class QuranForAll {
	public $sitename = 'القرآن الكريم للجميع';
	public $sitename_en = 'The Holy Quran';
	public $version = '2';
	public $siteurl = 'http://www.nwahy.com';
	public $folder_translate = "includes/translate";
	public $folder_language = 'includes/language';
	public $folder_tafseer = 'includes/tafseer';
	public $folder = 'style/default';
	public $tafseers = array('','تفسير ابن كثر','تفسير الجلالين','تفسير الطبري','تفسير القرطبي','تفسير السعدي');
	public $tafseers_en = array('','Tafseer Ibn Khatheer','Tafseer Aljlalin','Tafseer Altabari','Tafseer Alqurtubi','Tafseer Alsaadi');
	public $aya_count = array('0', '7', '286', '200', '176', '120', '165', '206', '75', '129', '109', '123', '111', '43', '52', '99', '128', '111', '110', '98', '135', '112', '78', '118', '64', '77', '227', '93', '88', '69', '60', '34', '30', '73', '54', '45', '83', '182', '88', '75', '85', '54', '53', '89', '59', '37', '35', '38', '29', '18', '45', '60', '49', '62', '55', '78', '96', '29', '22', '24', '13', '14', '11', '11', '18', '12', '12', '30', '52', '52', '44', '28', '28', '20', '56', '40', '31', '50', '40', '46', '42', '29', '19', '36', '25', '22', '17', '19', '26', '30', '20', '15', '21', '11', '8', '8', '19', '5', '8', '8', '11', '11', '8', '3', '9', '5', '4', '7', '3', '6', '3', '5', '4', '5', '6');
	public $check_languages = array("ar", "en", "en_yusuf_ali", "en_transliteration", "fr", "nl", "tr", "ms", "id", "zh", "ja", "it", "ko", "ml", "pt", "es", "ur", "bn", "ta", "cs", "de", "fa", "ro", "ru", "sv", "sq", "az", "bs", "bg", "ha", "ku", "sj", "pl", "so", "sw", "tg", "tt", "th", "ug", "uz", "dv", "sd", "no");
	public $default_language = 'ar';
	public $mod_rewrite_allow = 1;
	public $random_books = 5;
	public $rtl_languages = array('ar', 'ur', 'fa', 'ku', 'ug', 'dv', 'sd');

	function get_version(){
		return $this->version; 
	}
	
	function get_rtl_languages(){
		return $this->rtl_languages; 
	}
	
	function get_default_language(){
		return $this->default_language; 
	}
	
	function get_theme_folder(){
		return $this->folder; 
	}

	function get_array_language(){
		return $this->check_languages; 
	}

	function surah_name(){
	global $_GET, $save_flie;
	$lang = $this->get_language();
	if($save_flie == 1){
		$q = array('Quran','Al-Fatihah ( The Opening )','Al-Baqarah ( The Cow )','Al-Imran ( The Famiy of Imran )','An-Nisa ( The Women )','Al-Maidah ( The Table spread with Food )','Al-An\'am ( The Cattle )','Al-A\'raf (The Heights )','Al-Anfal ( The Spoils of War )','At-Taubah ( The Repentance )','Yunus ( Jonah )','Hud','Yusuf (Joseph )','Ar-Ra\'d ( The Thunder )','Ibrahim ( Abraham )','Al-Hijr ( The Rocky Tract )','An-Nahl ( The Bees )','Al-Isra ( The Night Journey )','Al-Kahf ( The Cave )','Maryam ( Mary )','Taha','Al-Anbiya ( The Prophets )','Al-Hajj ( The Pilgrimage )','Al-Mu\'minoon ( The Believers )','An-Noor ( The Light )','Al-Furqan (The Criterion )','Ash-Shuara ( The Poets )','An-Naml (The Ants )','Al-Qasas ( The Stories )','Al-Ankaboot ( The Spider )','Ar-Room ( The Romans )','Luqman','As-Sajdah ( The Prostration )','Al-Ahzab ( The Combined Forces )','Saba ( Sheba )','Fatir ( The Orignator )','Ya-seen','As-Saaffat ( Those Ranges in Ranks )','Sad ( The Letter Sad )','Az-Zumar ( The Groups )','Ghafir ( The Forgiver God )','Fussilat ( Explained in Detail )','Ash-Shura (Consultation )','Az-Zukhruf ( The Gold Adornment )','Ad-Dukhan ( The Smoke )','Al-Jathiya ( Crouching )','Al-Ahqaf ( The Curved Sand-hills )','Muhammad','Al-Fath ( The Victory )','Al-Hujurat ( The Dwellings )','Qaf ( The Letter Qaf )','Adh-Dhariyat ( The Wind that Scatter )','At-Tur ( The Mount )','An-Najm ( The Star )','Al-Qamar ( The Moon )','Ar-Rahman ( The Most Graciouse )','Al-Waqi\'ah ( The Event )','Al-Hadid ( The Iron )','Al-Mujadilah ( She That Disputeth )','Al-Hashr ( The Gathering )','Al-Mumtahanah ( The Woman to be examined )','As-Saff ( The Row )','Al-Jumu\'ah ( Friday )','Al-Munafiqoon ( The Hypocrites )','At-Taghabun ( Mutual Loss &amp; Gain )','At-Talaq ( The Divorce )','At-Tahrim ( The Prohibition )','Al-Mulk ( Dominion )','Al-Qalam ( The Pen )','Al-Haaqqah ( The Inevitable )','Al-Ma\'arij (The Ways of Ascent )','Nooh','Al-Jinn ( The Jinn )','Al-Muzzammil (The One wrapped in Garments)','Al-Muddaththir ( The One Enveloped )','Al-Qiyamah ( The Resurrection )','Al-Insan ( Man )','Al-Mursalat ( Those sent forth )','An-Naba\' ( The Great News )','An-Nazi\'at ( Those who Pull Out )','Abasa ( He frowned )','At-Takwir ( The Overthrowing )','Al-Infitar ( The Cleaving )','Al-Mutaffifin (Those Who Deal in Fraud)','Al-Inshiqaq (The Splitting Asunder)','Al-Burooj ( The Big Stars )','At-Tariq ( The Night-Comer )','Al-A\'la ( The Most High )','Al-Ghashiya ( The Overwhelming )','Al-Fajr ( The Dawn )','Al-Balad ( The City )','Ash-Shams ( The Sun )','Al-Layl ( The Night )','Ad-Dhuha ( The Forenoon )','As-Sharh ( The Opening Forth)','At-Tin ( The Fig )','Al-\'alaq ( The Clot )','Al-Qadr ( The Night of Decree )','Al-Bayyinah ( The Clear Evidence )','Az-Zalzalah ( The Earthquake )','Al-\'adiyat ( Those That Run )','Al-Qari\'ah ( The Striking Hour )','At-Takathur ( The piling Up )','Al-Asr ( The Time )','Al-Humazah ( The Slanderer )','Al-Fil ( The Elephant )','Quraish','Al-Ma\'un ( Small Kindnesses )','Al-Kauther ( A River in Paradise)','Al-Kafiroon ( The Disbelievers )','An-Nasr ( The Help )','Al-Masad ( The Palm Fibre )','Al-Ikhlas ( Sincerity )','Al-Falaq ( The Daybreak )','An-Nas ( Mankind )');
	}else{
		if (in_array($lang, $this->check_languages)){
			if($lang == "ar"){
			$q = array('القرآن الكريم','الفاتحة','البقرة','آل عمران','النساء','المائدة','الأنعام','الأعراف','الأنفال','التوبة','يونس','هود','يوسف','الرعد','إبراهيم','الحجر','النحل','الإسراء','الكهف','مريم','طه','الأنبياء','الحج','المؤمنون','النور','الفرقان','الشعراء','النمل','القصص','العنكبوت','الروم','لقمان','السجدة','الأحزاب','سبأ','فاطر','يس','الصافات','ص','الزمر','غافر','فصلت','الشورى','الزخرف','الدخان','الجاثية','الأحقاف','محمد','الفتح','الحجرات','ق','الذاريات','الطور','النجم','القمر','الرحمن','الواقعة','الحديد','المجادلة','الحشر','الممتحنة','الصف','الجمعة','المنافقون','التغابن','الطلاق','التحريم','الملك','القلم','الحاقة','المعارج','نوح','الجن','المزمل','المدثر','القيامة','الإنسان','المرسلات','النبأ','النازعات','عبس','التكوير','الانفطار','المطففين','الانشقاق','البروج','الطارق','الأعلى','الغاشية','الفجر','البلد','الشمس','الليل','الضحى','الشرح','التين','العلق','القدر','البينة','الزلزلة','العاديات','القارعة','التكاثر','العصر','الهمزة','الفيل','قريش','الماعون','الكوثر','الكافرون','النصر','المسد','الإخلاص','الفلق','الناس');
			}elseif($lang == "en" OR $lang == "en_yusuf_ali" OR $lang == "en_transliteration"){
			$q = array('Quran','Al-Fatihah ( The Opening )','Al-Baqarah ( The Cow )','Al-Imran ( The Famiy of Imran )','An-Nisa ( The Women )','Al-Maidah ( The Table spread with Food )','Al-An\'am ( The Cattle )','Al-A\'raf (The Heights )','Al-Anfal ( The Spoils of War )','At-Taubah ( The Repentance )','Yunus ( Jonah )','Hud','Yusuf (Joseph )','Ar-Ra\'d ( The Thunder )','Ibrahim ( Abraham )','Al-Hijr ( The Rocky Tract )','An-Nahl ( The Bees )','Al-Isra ( The Night Journey )','Al-Kahf ( The Cave )','Maryam ( Mary )','Taha','Al-Anbiya ( The Prophets )','Al-Hajj ( The Pilgrimage )','Al-Mu\'minoon ( The Believers )','An-Noor ( The Light )','Al-Furqan (The Criterion )','Ash-Shuara ( The Poets )','An-Naml (The Ants )','Al-Qasas ( The Stories )','Al-Ankaboot ( The Spider )','Ar-Room ( The Romans )','Luqman','As-Sajdah ( The Prostration )','Al-Ahzab ( The Combined Forces )','Saba ( Sheba )','Fatir ( The Orignator )','Ya-seen','As-Saaffat ( Those Ranges in Ranks )','Sad ( The Letter Sad )','Az-Zumar ( The Groups )','Ghafir ( The Forgiver God )','Fussilat ( Explained in Detail )','Ash-Shura (Consultation )','Az-Zukhruf ( The Gold Adornment )','Ad-Dukhan ( The Smoke )','Al-Jathiya ( Crouching )','Al-Ahqaf ( The Curved Sand-hills )','Muhammad','Al-Fath ( The Victory )','Al-Hujurat ( The Dwellings )','Qaf ( The Letter Qaf )','Adh-Dhariyat ( The Wind that Scatter )','At-Tur ( The Mount )','An-Najm ( The Star )','Al-Qamar ( The Moon )','Ar-Rahman ( The Most Graciouse )','Al-Waqi\'ah ( The Event )','Al-Hadid ( The Iron )','Al-Mujadilah ( She That Disputeth )','Al-Hashr ( The Gathering )','Al-Mumtahanah ( The Woman to be examined )','As-Saff ( The Row )','Al-Jumu\'ah ( Friday )','Al-Munafiqoon ( The Hypocrites )','At-Taghabun ( Mutual Loss &amp; Gain )','At-Talaq ( The Divorce )','At-Tahrim ( The Prohibition )','Al-Mulk ( Dominion )','Al-Qalam ( The Pen )','Al-Haaqqah ( The Inevitable )','Al-Ma\'arij (The Ways of Ascent )','Nooh','Al-Jinn ( The Jinn )','Al-Muzzammil (The One wrapped in Garments)','Al-Muddaththir ( The One Enveloped )','Al-Qiyamah ( The Resurrection )','Al-Insan ( Man )','Al-Mursalat ( Those sent forth )','An-Naba\' ( The Great News )','An-Nazi\'at ( Those who Pull Out )','Abasa ( He frowned )','At-Takwir ( The Overthrowing )','Al-Infitar ( The Cleaving )','Al-Mutaffifin (Those Who Deal in Fraud)','Al-Inshiqaq (The Splitting Asunder)','Al-Burooj ( The Big Stars )','At-Tariq ( The Night-Comer )','Al-A\'la ( The Most High )','Al-Ghashiya ( The Overwhelming )','Al-Fajr ( The Dawn )','Al-Balad ( The City )','Ash-Shams ( The Sun )','Al-Layl ( The Night )','Ad-Dhuha ( The Forenoon )','As-Sharh ( The Opening Forth)','At-Tin ( The Fig )','Al-\'alaq ( The Clot )','Al-Qadr ( The Night of Decree )','Al-Bayyinah ( The Clear Evidence )','Az-Zalzalah ( The Earthquake )','Al-\'adiyat ( Those That Run )','Al-Qari\'ah ( The Striking Hour )','At-Takathur ( The piling Up )','Al-Asr ( The Time )','Al-Humazah ( The Slanderer )','Al-Fil ( The Elephant )','Quraish','Al-Ma\'un ( Small Kindnesses )','Al-Kauther ( A River in Paradise)','Al-Kafiroon ( The Disbelievers )','An-Nasr ( The Help )','Al-Masad ( The Palm Fibre )','Al-Ikhlas ( Sincerity )','Al-Falaq ( The Daybreak )','An-Nas ( Mankind )');
			}elseif($lang == "fr"){
			$q = array('Quran france', 'Prologue (Al-Fatiha)','La génisse (Al-Baqarah)','La famille d\'Imran (Al-Imran)','Les femmes (An-Nisa\')','La table servie (Al-Maydah)','Les bestiaux (Al-An’ame)','Al-A’raf','Le butin (Al-Anfâl)','Le repentir (At-Tawbah)','Jonas (Younouss)','Hud','Joseph (Yousoûf)','Le tonnerre (Ar-Raad)','Abraham (Ibrahim)','Al-Hijr','Les abeilles (An-Nahl)','Le voyage nocturne (Al-Israh)','La caverne (Al-Kahf)','Marie (Maryem)','Tâ-Hâ','Les prophètes (Al-Anbiya)','Le pèlerinage (Al-Hajj)','Les croyants (Al-Mouminoune)','La lumière (An-Nour)','Le discernement (Al Fourqane)','Les poètes (As-Chouaraa)','Les fourmis (An-Naml)','Le rècit (Al-Qassas)','L\'araignèe (Al-Ankabout)','Les romains (Ar-Roum)','Louqmane','La prosternation (As-Sajda)','Les coalisés (Al-Ahzab)','Sabaa','Le Créateur (Fatir)','Ya-Sin','Les rangés (As-Saffat)','Sâd','Les groupes (Az-Zoumar)','Le pardonneur (Ghafir)','Les versets détaillés (Foussil','La consultation (Achoura)','L\'ornement (Azzoukhrof)','La fumée (Ad-Doukhan)','L\'agenouillée (Al-Jathya)','Al-Ahqâf ','Mohammed ','La victoire éclatante (Al-Fath','Les appartements (Al-Houjourat','Qâf ','Qui éparpillent (Ad-Dariyat) ','At-Tûr ','L\'étoile (An-Najm) ','La lune (Al-Qamar)','Le Tout Miséricordieux (Ar-Rah','L\'evénement (Al-Waqi\'a) ','Le fer (Al-Hadid) ','La discussion (Al-Moujadalah) ','L\'exode (Al-Hasr) ','L\'éprouvée (Al-Moumtahina) ','Le rang (As-Saff)','Le vendredi (Al-Joumou’a) ','Les hypocrites (Al-Mounafiqoun','La grande perte (At-Tagaboun) ','Le divorce (At-Talaq) ','L\'interdiction (At-Tahrim) ','La royauté (Al-Moulk) ','La plume (Al-Qalam)','Celle qui montre la vérité (Al','Les voies d\'ascension (Al- Ma’','Noé (Nouh) ','Les djinns (Al-Jinn) ','L\'enveloppé (Al-Mouzzamil) ','Le revêtu d\'un manteau (Al-Mou','La résurrection (Al-Qiyamah) ','L\'homme (Al-Inssane) ','Les envoyés (Al-Moursalate)','La nouvelle (An-Nabaa) ','Les anges qui arrachent les âm','Il s\'est renfrogné (Abasa) ','L\'obscurcissement (At-Taqwir) ','La rupture (Al-Infitâr) ','Les fraudeurs (Al-Moutaffifine','La déchirure (Al-Insiqaq) ','Les constellations (Al-Bourouj','L\'astre nocturne (At-Tarîq) ','Le Très-Haut (Al-A’la)','L\'enveloppante (Al-Ghasiyah) ','L\'aube (Al-Fajr) ','La cité (Al-Balad) ','Le soleil (Ach-Chamss) ','La nuit (Al-Layl) ','Le jour montant (Ad-Douha) ','L\'ouverture (As-Sarh) ','Le figuier (At-Tin) ','L\'adhérence (Al-Alaq) ','La Destinée (Al-Qadr) ','La preuve (Al-Bayinah)','La secousse (Az-Zalzalah) ','Les coursiers (Al-Adiyate) ','Le fracas (Al-Qariah) ','La course aux richesses (At-Ta','Le temps (Al-Asr) ','Les calomniateurs (Al-Houmazah','L\'éléphant (Al-Fîl) ','Qoraïsh ','L\'ustensile (Al-Maoun) ','L\'abondance (Al-Kawtar) ','Les infidèles (Al-Qafiroune) ','Les secours (An-Nasr) ','Les fibres (Al-Masad) ','Le monothéisme pur (Al-Ikhlass','L\'aube naissante (Al-Falaq) ','Les hommes (An-Nass)');
			}elseif($lang == "tr"){
			$q = array('Quran turkey', '﻿Fatiha Suresi','Bakara Suresi','Âl-i Imran Suresi','Nisa Suresi','Maide Suresi','Enam Suresi','Araf Suresi','Enfal Suresi','Tevbe Suresi','Yunus Suresi','Hud Suresi','Yusuf Suresi','Rad Suresi','Ibrahim Suresi','Hicr Suresi','Nahl Suresi','Isra Suresi','Kehf Suresi','Meryem Suresi','Taha Suresi','Enbiya Suresi','Hac Suresi','Müminun Suresi','Nur Suresi','Furkan Suresi','Şuara Suresi','Neml Suresi','Kasas Suresi','Ankebut Suresi','Rum Suresi','Lokman Suresi','Secde Suresi','Ahzab Suresi','Sebe Suresi','Fatır Suresi','Yasin Suresi','Saffet Suresi','Sad Suresi','Zümer Suresi','Mümin Suresi','Fussilet Suresi','Şura Suresi','Zuhruf Suresi','Duhan Suresi','Casiye Suresi','Ahkaf Suresi','Muhammed Suresi','Fetih Suresi','Hucurat Suresi','Kaf Suresi','Zariyat Suresi','Tur Suresi','Necm Suresi','Kamer Suresi','Rahman Suresi','Vakia Suresi','Hadid Suresi','Mücadele Suresi','Hasr Suresi','Mümtehine Suresi','Saf Suresi','Cüma Suresi','Münafikun Suresi','Tegabun Suresi','Talak Suresi','Tahrim Suresi','Mülk Suresi','Kalem Suresi','Hakka Suresi','Mearic Suresi','Nuh Suresi','Cin Suresi','Müzemmil Suresi','Müdahhir Suresi','Kiyame Suresi','Insan Suresi','Mürselat Suresi','Nebe Suresi','Naziat Suresi','Abese Suresi','Tekvir Suresi','Infitar Suresi','Müteffifin Suresi','Inşikak Suresi','Büruc Suresi','Tarık Suresi','Ala Suresi','Gaşiye Suresi','Fecr Suresi','Beled Suresi','Şems Suresi','Leyl Suresi','Duha Suresi','Inşirah Suresi','Tin Suresi','Alak Suresi','Kadir Suresi','Beyyine Suresi','Zelzele Suresi','Adiat Suresi','Karia Suresi','Tekasür Suresi','Asr Suresi','Humeze Suresi','Fil Suresi','Kureyş Suresi','Maun Suresi','Kevser Suresi','Kafirun Suresi','Nasr Suresi','Tebbet Suresi','Ihlas Suresi','Felak Suresi','Nas Suresi');
			}elseif($lang == "id"){
			$q = array('Quran indonesia', 'Surah Al-Fatihah (Pembukaan)','Surah Al-Baqarah (Lembu Betina','Surah Ali ‘Imran (Keluarga Imr','Surah An-Nisaa’ (Wanita)','Surah Al-Maa’idah (Hidangan)','Surah Al-An’aam (Binatang Tern','Surah Al-A’raaf (Tempat Tertin','Surah Al-Anfaal (Rampasan Pera','Surah At-Taubah (Pengampunan)','Surah Yunus (Nabi Yunus a.s.)','Surah Hud (Nabi Hud a.s.)','Surah Yusuf (Nabi Yusuf a.s.)','Surah Ar-Ra’d (Guruh)','Surah Ibrahim (Nabi Ibrahim a.','Surah Al-Hijr (Kawasan Berbatu','Surah An-Nahl (Lebah)','Surah Al-Israa’ (Perjalanan Ma','Surah Al-Kahfi (Gua)','Surah Maryam (Siti Maryam)','Surah Taahaa','Surah Al-Anbiyaa’ (Para Nabi)','Surah Al-Hajj (Haji)','Surah Al-Mu’minun (Golongan ya','Surah An-Nuur (Cahaya)','Surah Al-Furqaan (Pembeza Kebe','Surah Asy-Syu’araa (Para Penya','Surah An-Naml (Semut)','Surah Al-Qasas (Cerita-cerita)','Surah Al-‘Ankabut (Labah-labah','Surah Ar-Rum (Bangsa Rom)','Surah Luqman (Luqman)','Surah As-Sajdah (Sujud)','Surah Al-Ahzab (Golongan yang ','Surah Saba’ (Kaum Saba’)','Surah Faatir (Pencipta)','Surah Yaasin','Surah As-Saaffat (Yang Teratur','Surah Saad','Surah Az-Zumar (Rombongan)','Surah Al-Ghafir / Al-Mu’min (O','Surah Fussilat (Dijelaskan)','Surah Asy-Syuraa (Permesyuarat','Surah Az-Zukhruf (Perhiasan Em','Surah Ad-Dukhaan (Kabut / Asap','Surah Al-Jatsiyah (Yang Berlut','Surah Al-Ahqaaf (Bukit-bukit P','Surah Muhammad (Nabi Muhammad ','Surah Al-Fath (Kemenangan)','Surah Al-Hujurat (Bilik-bilik)','Surah Qaaf','Surah Adz-Dzariyaat (Angin yan','Surah At-Tur (Bukit)','Surah An-Najm (Bintang)','Surah Al-Qamar (Bulan)','Surah Ar-Rahman (Yang Maha Pem','Surah Al-Waqi’ah (Peristiwa ya','Surah Al-Hadid (Besi)','Surah Al-Mujadilah (Perempuan ','Surah Al-Hasyr (Pengusiran)','Surah Al-Mumtahanah (Perempuan','Surah As-Saf (Barisan)','Surah Al-Jumu’ah (Hari Jumaat)','Surah Al-Munafiquun (Golongan ','Surah At-Taghabun (Dinampakkan','Surah At-Talaq (Cerai / Talak)','Surah At-Tahrim (Mengharamkan)','Surah Al-Mulk (Kerajaan)','Surah Al-Qalam (Pena / Kalam)','Surah Al-Haaqqah (Keadaan Sebe','Surah Al-Ma’arij (Tempat-tempa','Surah Nuh (Nabi Nuh a.s.)','Surah A-Jin (Jin)','Surah Al-Muzammil (Yang Bersel','Surah Al-Muddathir (Yang Berse','Surah Al-Qiyaamah (Hari Kebang','Surah Al-Insaan (Manusia)','Surah Al-Mursalat (Malaikat Ya','Surah An-Naba’ (Berita Besar)','Surah An-Naazi’aat (Malaikat Y','Surah ‘Abasa (Dia Bermasam Muk','Surah At-Takwiir (Menggulung)','Surah Al-Infitar (Terpecah & T','Surah Al-Mutaffifiin (Golongan','Surah Al-Insyiqaaq (Terbelah)','Surah Al-Buruj (Gugusan Bintan','Surah At-Taariq (Pengunjung Ma','Surah Al-A’laa (Yang Tertinggi','Surah Al-Ghaasyiah (Peristiwa ','Surah Al-Fajr (Fajar / Sinar M','Surah Al-Balad (Negeri)','Surah Asy-Syams (Matahari)','Surah Al-Lail (Malam)','Surah Adh-Dhuha (Pagi yang Cem','Surah Al-Insyirah/An-Nasyrah (','Surah At-Tin (Buah Tin / Buah ','Surah Al-‘Alaq (Segumpal Darah','Surah Al-Qadr (Kemuliaan)','Surah Al-Baiyinah (Bukti yang ','Surah Al-Zalzalah (Kegoncangan','Surah Al-‘Aadiyaat (Yang Berla','Surah Al-Qari’ah (Hari Yang Hi','Surah At-Takathur (Bermegah-me','Surah Al-‘Asr (Masa)','Surah Al-Humazah (Pengumpat)','Surah Al-Fiil (Gajah)','Surah Quraisy (Kaum Quraisy)','Surah Al-Ma’un (Barangan Bergu','Surah Al-Kauthar (Sungai Di Sy','Surah Al-Kafirun (Golongan Kaf','Surah An-Nasr (Pertolongan)','Surah Al-Masad / Al-Lahab (Nya','Surah Al-Ikhlas (Tulus Ikhlas ','Surah Al-Falaq (Waktu Subuh / ','Surah An-Naas (Manusia)');
			}elseif($lang == "zh"){
			$q = array('Quran china', '开端章','黄牛章','仪姆兰的家属章','妇女章','宴席章','牲畜章','高处章','战利品章','忏悔章','尤努斯章','呼德章','优素福章','雷霆章','易卜拉欣章','石谷章','蜜蜂章','夜行章','山洞章','麦尔彦章','塔哈章','众先知章','朝觐章','信士章','光明章','准则章','众诗人章','蚂蚁章','故事章','蜘蛛章','罗马人章','鲁格曼章','叩头章','同盟军章','赛伯邑章','创造者章','雅辛章','列班者章','萨德章','队伍章','赦宥者章','奉妥来特','协商章','金饰章','烟雾章','屈膝章','沙丘章','穆罕默德章','胜利章','寝室章','嘎弗章','播种者章','山岳章','星宿章','月亮章','至仁主章','大事章','铁章','辩诉着章','放逐章','受考验的妇人章','列阵章','聚礼章','伪信者章','相欺章','离婚章','禁戒章','国权章','笔章','真灾章','天梯章','努哈章','精灵章','披衣的人章','盖被的人章','复活章','人章','天使章','消息章','急掣章','皱眉章','黯黮章','破裂章','称量不公章','绽裂章','十二宫章','启明星章','至高章','大灾章','黎明章','地方章','太阳章','黑夜章','上午章','开拓章','无花果章','血块章','高贵章','明证章','地震章','奔驰的马队章','大难章','竞赛富庶章','时光章','诽谤章','象章','古莱氏章','什物章','多福章','不信道的人们章','援助章','火焰章','忠诚章','曙光章','世人章');
			}elseif($lang == "ko"){
			$q = array('꾸란', '개경장', '알-바까라(암소)장', '알루 이므란(이므란의 가족) 장', '안-니사(여성) 장', '알-마이다(잘 차려진 식탁) 장', '알-안암(가축) 장', '알-아으라프 장', '알-안팔(전리품) 장', '앗-타우바(참회) 장', '유누스(요나) 장', '후드 장', '유수프(요셉) 장', '알-라으드(천둥) 장', '이브라힘(아브라함) 장', '알-히즈르 장', '안-나흘(꿀벌) 장', '알-이스라 장', '알-카흐프(동굴) 장', '마르얌(마리아) 장', '따하 장', '알-안비야(예언자들) 장', '알-핫즈(성지순례) 장', '알-무으미눈(신앙인들) 장', '안-누르(빛) 장', '알-푸르깐(분별) 장', '앗-슈아라(시인들) 장', '안-나믈(개미) 장', '알-까싸쓰(이야기) 장', '알-안카부트(거미) 장', '알-룸(로마) 장', '루끄만 장', '앗-싸즈다(부복) 장', '알-아흐잡(동맹군) 장', '싸바 장', '파띠르(창조자) 장', '야씬 장', '앗-쌋파트(대열을 갖춘 무리) 장', '싸드 장', '앗-주마르(무리, 떼) 장', '알-가피르(용서하시는 분) 장', '풋씰라트(상세히 설명된) 장', '앗-슈라(협의회) 장', '앗-주크루프(화려한 장식) 장', '앗-두칸(연기) 장', '알-자씨야(엎드린) 장', '알-아흐까프(모래언덕) 장', '무함마드 장', '알-파트흐(승리) 장', '알-후주라트(방들) 장', '까프 장', '앗-다리야트(흩뜨리는 바람) 장', '앗-뚜르(산) 장', '안-나즘(별) 장', '알-까마르(달) 장', '알-라흐만(자비로우신 분) 장', '알-와끼아(피할 수 없는 날) 장', '알-하디드(철) 장', '알-무자딜라(탄원하는 여성) 장', '알-하슈르(추방) 장', '알-뭄타하나(시험받는 여성) 장', '앗-쌋프(대열) 장', '알-주므아(금요합동예배) 장', '알-무나피꾼(위선자들) 장', '앗-타가분(서로 주고받음) 장', '앗-딸라끄(이혼) 장', '앗-타흐림(금지) 장', '알-물크(주권) 장', '알-깔람(펜) 장', '알-학까(진실) 장', '알-마아리즈(하늘로 올라가는 길) 장', '누흐 장', '알-진 장', '알-뭇잠밀(이불에 덮힌 자) 장', '알-뭇닷씨르(담요로 덮힌 자) 장', '알-끼야마(부활) 장', '알-인싼(사람) 장', '알-무르쌀라트(연이은 바람)', '안-나바(소식) 장', '안-나지아트(잡아끄는 자들) 장', '아바싸(찌푸리다) 장', '앗-타크위르(말아올림) 장', '알-인피따르(갈라짐) 장', '알-무땃피핀(속여 파는 자들) 장', '알-인쉬까끄(쪼개짐) 장', '알-부루즈(커다른 별들) 장', '앗-따리끄(저녁에 솟는 별) 장', '알-아을라(지고하신) 장', '알-가쉬야(압도하는)', '알-파즈르(여명) 장', '알-발라드(도시) 장', '앗-샴스(태양) 장', '알-라일(밤) 장', '앗-두하(아침) 장', '앗-샤르흐(열어넓힘) 장', '앗-틴(무화과) 장', '알-알라끄(들러붙은 것) 장', '알-까드르(운명) 장', '알-바이이나(명백한 증거) 장', '앗-잘잘라(지진) 장', '알-아디야트(달리는 것들)장', '알-까리야(치명적 재앙) 장', '앗-타카쑤르(재산을 위한 경쟁)', '알-아쓰르(시간) 장', '알-후마자(비방하는 자) 장', '알-필(코끼리) 장', '꾸라이쉬 장', '알-마운(사소한 필수품) 장', '알-카우싸르(천국의 호수) 장', '알-카피룬(불신자들) 장', '안-나쓰르(도움) 장', '알-마사드(동아줄) 장', '알-이클라쓰(진실성) 장', '알-팔라끄(새벽) 장', '안-나스(인류) 장');
			}elseif($lang == "ml"){
			$q = array('Quran malabari', 'ഫാതിഹ','ബഖറ','ആലുഇംറാന്','നിസാഅ്','മാഇദ','അന്ആം','അഅ്റാഫ്','അന്ഫാല്','തൌബ','യൂനുസ','ഹൂദ്','യൂസുഫ്','റഅ്ദ്','ഇബ്റാഹീം','ഹിജ്റ്','നഹ് ല്','ഇസ് റാഅ്','കഹ്ഫ്','മറ് യം','ത്വഹാ','അന്പിയാ','ഹജ്ജ് ','മുഅ്മിനൂന്','നൂറ് ','ഷുഅറാ','നംല്','ഖസസ്','അന്കബൂത്ത്','റൂം','ലുഖ്മാന്','സജദ','അഹ്സാബ്','സബഅ്','സബഅ്','ഫാത്വിര്','യാസീന്','സ്വാഫാത്ത്','സ്വാദ്','സുമര്','ഗാഫിര്','ഫുസ്വിലത്ത്','ഷൂറാ','Az-Zukhruf ','ദുഖാന്','ജാസിയ','അഹ്ഖാഫ്','മുഹമ്മദ്','ഫതഹ്','ഹുജറാത്ത്','ഖാഫ്','ദ്ദാരിയാത്ത്','ത്വൂര്','നജ്മ്','ഖമറ്','റ്വഹ്മാന്','വാഖിഅ','ഹദീദ്','മുജാദല','ഹഷ്റ്','മുംതഹിന','സ്വഫ്','ജുമുഅ','മുനാഫിഖൂന്','തഗാബുന്','ത്വലാഖ്','തഹ് രീം','മുലക്','ഖലം','ഹാഖ','മആരിജ്','നൂഹ്','ജിന്ന്','മുസ്സമ്മില്','മുദ്ദസിര്','ഖിയാമ','ഇന്സാന്','മുര്സലാത്ത്','നബഅ്','നാസിആത്ത്','അബസ','തക് വീര്','ഇന്ഫിത്വാര്','മുതഫിഫീന്','ഇന്ഷിഖാഖ്','ബുറൂജ്','ത്വാരിഖ്','അഅ് ലാ','ഗാഷിയ','ഫജ്റ്','ബലദ്','ഷംസ്','ലൈല്','ദ്വുഹാ','ഇന്ഷിറാഹ്','തീന്','അലഖ്','ഖദ്റ്','ബയ്യിന','സല്സല','ആദിയാത്ത്','ഖാരിഅ','തകാഥുര്','അസ്വ് റ്','ഹുമസ','ഫീല്','ഖുറൈശ്','മാഊന്','കൌഥര്','കാഫിറൂന്','നസ്വറ്','മസദ്','ഇഖ് ലാസ്','ഫലഖ്','നാസ് ');
			}elseif($lang == "pt"){
			$q = array('Quran portuguese','A Abertura','A Vaca','A Família de Imran','As Mulheres','A Mesa Servida','O Gado','Os Cimos','Os Espólios','O Arrependimento','Jonas','Hud','José','O Trovão','Abraão','Alhijr','As Abelhas','A Viagem Noturna','A Caverna','Maria','Ta Ha','Os profetas','A Peregrinação','Os Fiéis','A luz','O Discernimento','Os poetas','As Formigas','As Narrativas','A Aranha','Os Bizantinos','Lucman','A Prostação','Os Partidos','Sabá','O Criador','Yá Sin','Os Enfileirados','A Letra Sad','Os Grupos','O Remissório','Os Detalhados','A Consulta','Os Ornamentos','A Fumaça','O Genuflexo','As Dunas','Mohammad','O Triunfo','Os Aposentos','A Letra Caf','Os Ventos Disseminadores','O Monte','A Estrela','A Lua','O Clemente','O Eventos Inevitável','O Ferro','A Discussão','O Desterro','A Examinada','As Fileiras','A Sexta-Feira','Os Hipócritas','As Defraudações Recíprocas','O Divórcio','As Proibições','A Soberania','O cálamo','A Realidade','As Vias de Ascensão','Noé','Os Gênios','O Acobertado','O Emantado','A Ressurreição','O Homem','Os Enviados','A Notícia','Os Arrebatadores','O Austero','O Enrolamento','O Fendimento','Os Fraudadores','A Fenda','As Constelações','O Visitante Noturno','O Altíssimo','O Evento Assolador','A Aurora','A Metrópole','O sol','A Noite','As Horas da Manhã','O Conforto','O Figo','O Coágulo','O Decreto','A Evidência','O Terremoto','Os Corcéis','A Calamidade','A Cobiça','A Era','O Difamador','O Elefante','Os Coraixitas','Os Obséquios','A Abundância','Os Incrédulos','O Socorro','O Esparto','A Unicidade','A Alvorada','Os Humanos');
			}elseif($lang == "es"){
			$q = array('Quran spain', '﻿La Apertura','La Vaca','La Familia de Imran','Las Mujeres','La Mesa Servida','Los Ganados','El Muro Divisorio','Los Botines','El Arrepentimiento','Jonás','Hud','José','El Trueno','Abraham','Al-Hiyr','Las Abejas','El Viaje Nocturno','La Caverna','María','Ta-Ha','Los Profetas','La Peregrinación','Los Creyentes','La Luz','El Criterio','Los Poetas','Las Hormigas','El Relato','La Araña','Los Bizantinos','Luqman','La Prosternación','Los Aliados','Saba','Originador','ia-sin','Los Ordenados en Filas','Sad','Los Tropeles','El Remisorio','Los Preceptos Detallados','El Consejo','Los Ornamentos de Oro','El Humo','La Arrodillada','Las Dunas','Muhammad','La Victoria','Los aposentos','Qaf','Los Vientos','El Monte','La Estrella','La Luna','El Clemente','El Suceso','El Hierro','La Discusión','El Destierro','La Examinada','Las Filas','El Viernes','Los Hipócritas','El Desengaño','El Divorcio','La Prohibición','El Reino','El Cálamo','La Verdad Inevitable','Las Vías de Ascensión','Noé','Los Genios','El Cobijado','El Envuelto en el Manto','La Resurrección','El Hombre','Los Ángeles Enviados','La Noticia','Los Ángeles Arrancadores','El Ceño','El Arrollamiento','La Hendidura','Los Defraudadores','La Rasgadura','Las Constelaciones','Los Astros Nocturnos','El Altísimo','El Día Angustiante','La Aurora','La Ciudad','El Sol','La Noche','La Mañana','La Abertura del Pecho','La Higuera','El Cigoto','El Decreto','La Evidencia','El Gran Terremoto','Los Corceles','El Día Aterrador','La Codicia','El Transcurso del Tiempo','Los que se Burlan del Prójimo','El Elefante','Quraish','La Ayuda Mínima','Al Kauzar','Los Incrédulos','El Socorro','Las Fibras de Palmeras','El Monoteísmo','La Alborada','Los Hombres');
			}elseif($lang == "ur"){
			$q = array('Quran Urdu', 'فاتحه','بقره','آل عمران','نساء','مائده','أنعام','أعراف','أنفال','توبه','یونس','هود','یوسف','رعد','إبراهیم','حجر','نحل','إسراء','كهف','مریم','طه','أنبیاء','حج','مؤمنون','نور','فرقان','شعراء','نمل','قصص','عنكبوت','روم','لقمان','سجده','أحزاب','سبأ','فاطر','یس','صافات','ص','زمر','غافر','فصلت','شورى','زخرف','دخان','جاثیه','أحقاف','محمد','فتح','حجرات','ق','ذاریات','طور','نجم','قمر','رحمن','واقعه','حدید','مجادله','حشر','ممتحنه','صف','جمعه','منافقون','تغابن','طلاق','تحریم','ملك','قلم','حاقه','معارج','نوح','جن','مزمل','مدثر','قیامه','إنسان','مرسلات','نبأ','نازعات','عبس','تكویر','انفطار','مطففین','انشقاق','بروج','طارق','أعلى ','غاشیه','فجر','بلد','شمس','لیل','ضحى','شرح','تین','علق','قدر','بینه','زلزله','عادیات','قارعه','تكاثر','عصر','همزه','فیل','قریش','ماعون','كوثر','كافرون','نصر','مسد','إخلاص','فلق','ناس');
			}elseif($lang == "bn"){
			$q = array('আল-ফাতেহা', 'আল-বাকারা', 'আলে ইমরান', 'আন-নিসা', 'আল-মায়েদা', 'আল-আনআম', 'আল-আরাফ', 'আল-আনফাল', 'আত-তাওবা', 'ইউনূছ', 'হুদ', 'ইউসূফ', 'আর-রাদ', 'ইবরাহীম', 'আল-হিজর', 'আন-নাহল', 'আল- ইসরা', 'আল-কাহাফ', 'মারইয়াম', 'ত্বা-হা', 'আল-আম্বিয়া', 'আল-হজ্ব', 'আল-মুমিনুন', 'আন-নূর', 'আল-ফোরকান', 'আশ-শুআরা', 'আন-নামল', 'আল-কাসাস', 'আল-আনকাবুত', 'আর-রূম', 'লুকমান', 'আস-সাজদাহ', 'আল-আহযাব', 'সাবা', 'ফাতির', 'ইয়াসীন', 'আস-সাফফাত', 'সা-দ', 'আয-যুমার', 'গাফের', 'ফুসসিলাত', 'আশ-শুরা', 'আয-যুখরুফ', 'আদ-দুখান', 'আল-জাসিয়া', 'আল-আহকাফ', 'মুহাম্মাদ', 'আল-ফাতহ', 'আল-হুজুরাত', 'ক্বাফ', 'আজ-জারিয়াত', 'আত-তূর', 'আন-নাজম', 'আল-কামার', 'আর-রাহমান', 'আল-ওয়াকিয়াহ', 'আল-হাদীদ', 'আল-মুজাদালাহ', 'আল-হাশর', 'আল-মুমতাহিনাহ', 'আস-সাফ', 'আল-জুমুআ', 'আল-মুনাফিকুন', 'আত-তাগাবুন', 'আত-তালাক', 'আত-তাহরীম', 'আল-মুলক', 'আল-কলম', 'আল-হাক্কাহ', 'আল-মাআরিজ', 'নূহ', 'আল-জীন', 'আল-মুযযাম্মিল', 'আল-মুদ্দাসসির', 'আল-কিয়ামাহ', 'আল-ইনসান', 'আল-মুরসালাত', 'আন-নাবা', 'আন-নাযেআত', 'আবাসা', 'আত-তাকবীর', 'আল-ইনফিতার', 'আল-মুতাফফিফীন', 'আল-ইনশিকাক', 'আল-বুরুজ', 'আত-তারেক', 'আল-আলা', 'আল-গাশিয়াহ', 'আল-ফাজর', 'আল-বালাদ', 'আশ-শামস', 'আল-লাইল', 'আদ-দুহা', 'আশ শারহ', 'আত-তীন', 'আল-আলাক', 'আল-কদর', 'আল-বাইয়েনাহ', 'আয-যালযালাহ', 'আল-আদিয়াত', 'আল-কারিআহ', 'আত-তাকাসুর', 'আল-আসর', 'আল-হুমাযাহ', 'আল-ফীল', 'কুরাইশ', 'আল-মাউন', 'আল-কাউসার', 'আল-কাফেরূন', 'আন-নাসর', 'আল-মাসাদ', 'আল-ইখলাছ', 'আল-ফালাক', 'আন-নাস');
			}elseif($lang == "de"){
			$q = array('Der Edle Qur\'an', 'al-Fatiha (Die Eröffnende)', 'al-Baqara (Die Kuh)', 'Al-i Imran (Das Haus Imrans)', 'an-Nisa (Die Frauen)', 'al-Ma\'ida (Der Tisch)', 'al-An\'am (Das Vieh)', 'al-A\'raf (Die Höhen)', 'al-Anfal (Die Beute)', 'at-Tauba (Die Reue)', 'Yunus (Jonas)', 'Hud', 'Yusuf', 'ar-Ra\'d (Der Donner)', 'Ibrahim (Abraham)', 'al-Hijr (Das Felsengebirge)', 'an-Nahl (Die Bienen)', 'al-Isra\' (Die Nachtreise)', 'al-Kahf (Die Höhle)', 'Maryam (Maria)', 'Ta-Ha', 'al-Anbiya\' (Die Propheten)', 'Al-Hajj (Die Pilgerfahrt)', 'al-Mu\'minun (Die Gläubigen)', 'an-Nur (Das Licht)', 'al-Furqan (Die Unterscheidung)', 'Asch-Schu\'ara (Die Dichter)', 'an-Naml (Die Ameisen)', 'Al-Qasas (Die Geschichten)', 'al-\'Ankabut (Die Spinne)', 'ar-Ruum (Die Römer)', 'Luqman', 'as-Sajda (Die Niederwerfung)', 'al-Ahzaab (Verbündeten)', 'Saba\' (Die Stadt Saba\')', 'Fatir (Der Erschaffer)', 'Ya-Sin', 'as-Saffat (Die sich Reihenden)', 'Sad', 'az-Zumar (Die Gruppen)', 'Ghafir (Der Vergebende)', 'Fussilat (Ausführlich dargelegt)', 'ash-Shura (Die Beratung)', 'az-Zukhruf (Die Verzierung)', 'ad-Dukhan (Der Rauch)', 'al-Jathia (Die Kniende)', 'al-Ahqaf', 'Muhammad', 'al-Fath (Der Sieg)', 'al-Hujurat (Die Gemächer)', 'Qaf', 'adh-Dhadiyat (Die Zerstörenden)', 'at-Tur (Der Berg)', 'an-Najm (Der Stern)', 'al-Qamar (Der Mond)', 'ar-Rahman (Der Erbarmer)', 'al-Uaqi\'a (Das eintreffende Ereignis)', 'al-Hadid (Das Eisen)', 'al-Mujadala (Die Diskussion)', 'al-Haschr (Die Versammlung)', 'al-Mumtahana (Die Geprüfte)', 'as-Saff (Die Reihe)', 'al-Jumu\'a (Der Freitag)', 'al-Munafiqun (die Heuchler)', 'at-Taghabun (Die Übervorteilung)', 'at-Talaq (Die Scheidung)', 'at-Tahrim (Das Verbot)', 'al-Mulk (Die Herrschaft)', 'al-Qalam (Der Stift)', 'al-Haqqa (Die fällig Werdende)', 'al-Ma\'arij (die Aufstiegswege)', 'Nuh (Noah)', 'al-Jinn', 'al-Muzzammil (Der Eingehüllte)', 'al-Muddathir (Der Zugedeckte)', 'al-Qiyama (Die Auferstehung)', 'al-Insan (Der Mensch)', 'al-Mursalat (Die Entsandten)', 'an-Naba\' (Die Kunde)', 'an-Nazi\'at (Die Entreißenden)', '\'Abasa (Der die Stirn runzelt)', 'at-Takuir (Das Umschlingen)', 'al-Infitar (Das Zerbrechen)', 'al-Mutaffifin (Die das Maß Kürzenden)', 'al-Inschiqaq (Das Spalten)', 'al-Buruj (Die Türme)', 'at-Tariq (Der Pochende)', 'al-A\'la (Der Höchste)', 'al-Ghashiya (Die Überdeckende)', 'al-Fajr (Die Morgendämmerung)', 'al-Balad (Die Ortschaft)', 'asch-Schams (Die Sonne)', 'al-Lail (Die Nacht)', 'ad-Duha (Die Morgenhelle)', 'asch-Scharh (Das Auftun)', 'at-Tin (Die Feige)', 'al-\'Alaq (Das Anhängsel)', 'al-Qadar (Die Bestimmung)', 'al-Bayyina (Der klare Beweis)', 'az-Zalzala (Das Beben)', 'al-\'Adiyat (Die Rennenden)', 'al-Qari\'a (Das Verhängnis)', 'at-Takathur (Die Vermehrung)', 'al-\'Asr (Das Zeitalter)', 'al-Humaza (Der Stichler)', 'al-Fil (Der Elefant)', 'Quraish', 'al-Ma\'un (Die Hilfeleistung)', 'al-Kauthar (Der Überfluss)', 'al-Kafirun (Die Ungläubigen)', 'an-Nasr (Die Hilfe)', 'al-Masad (Die Palmfasern)', 'al-Ikhlas (Die Aufrichtigkeit)', 'al-Falaq (Der Tagesanbruch)', 'an-Nas (Die Menschen)');
			}elseif($lang == "fa"){
			$q = array('قرآن كريم', 'فاتحه', 'بقره', 'آل عمران', 'نساء', 'مائده', 'انعام', 'اعراف', 'انفال', 'توبه', 'يونس', 'هود', 'يوسف', 'رعد', 'ابراهيم', 'حجر', 'نحل', 'اسراء', 'كهف', 'مريم', 'طه', 'انبياء', 'حج', 'مؤمنون', 'نور', 'فرقان', 'شعراء', 'نمل', 'قصص', 'عنكبوت', 'روم', 'لقمان', 'سجده', 'احزاب', 'سبأ', 'فاطر', 'يس', 'صافات', 'ص', 'زمر', 'غافر', 'فصلت', 'شورى', 'زخرف', 'دخان', 'جاثيه', 'احقاف', 'محمد', 'فتح', 'حجرات', 'ق', 'ذاريات', 'طور', 'نجم', 'قمر', 'رحمن', 'واقعه', 'حديد', 'مجادله', 'حشر', 'ممتحنه', 'صف', 'جمعه', 'منافقون', 'تغابن', 'طلاق', 'تحريم', 'ملك', 'قلم', 'حاقه', 'معارج', 'نوح', 'جن', 'مزمل', 'مدثر', 'قيامه', 'انسان', 'مرسلات', 'نبأ', 'نازعات', 'عبس', 'تكوير', 'انفطار', 'مطففين', 'انشقاق', 'بروج', 'طارق', 'اعلى', 'غاشيه', 'فجر', 'بلد', 'شمس', 'ليل', 'ضحى', 'شرح', 'تين', 'علق', 'قدر', 'بينه', 'زلزله', 'عاديات', 'قارعه', 'تكاثر', 'عصر', 'همزه', 'فيل', 'قريش', 'ماعون', 'كوثر', 'كافرون', 'نصر', 'مسد', 'اخلاص', 'فلق', 'ناس');
			}elseif($lang == "ru"){
			$q = array('Священный Коран', 'Открывающая Книгу', 'Корова', 'Семейство Имрана', 'Женщины', 'Трапеза', 'Скот', 'Преграды', 'Добыча', 'Покаяние', 'Йунус', 'Худ', 'Йуcуф', 'Гром', 'Ибpaxим', 'Aл-Xиджp', 'Пчелы', 'Перенес Ночью', 'Пещера', 'Мapйaм', 'Тa Xa', 'Пророки', 'Xaдж', 'Верующие', 'Свет', 'Различение', 'Поэты', 'Муравьи', 'Рассказ', 'Паук', 'Pумы', 'Лукмaн', 'Поклон', 'Сонмы', 'Caбa', 'Ангелы', 'Йa Cин', 'Стоящие в ряд', 'Сод', 'Толпы', 'Верующий', 'Разъяснены', 'Совет', 'Украшения', 'Дым', 'Коленопреклоненная', 'Пески', 'Муxaммaд', 'Победа', 'Комнаты', 'Кaф', 'Рассеивающие', 'Гора', 'Звезда', 'Месяц', 'Милостивый', 'Падающая', 'Железо', 'Препирательство', 'Собрание', 'Испытуемая', 'Ряды', 'аль-Джума', 'Лицемеры', 'Взаимное обманывание', 'Развод', 'Запрещение', 'Власть', 'Письменная трость', 'Неизбежное', 'Ступени', 'Нуx', 'Джинны', 'Закутавшийся', 'Завернувшийся', 'Воскресение', 'Человек', 'Посылаемые', 'Весть', 'Вырывающие', 'Нахмурился', 'Скручивание', 'Раскалывание', 'Обвешивающие', 'Развержение', 'Башни', 'Идущий ночью', 'Высочайший', 'Покрывающее', 'Заря', 'Город', 'Солнце', 'Ночь', 'Утро', 'Разве Мы не раскрыли', 'Смоковница', 'Сгусток', 'Ночь предопределения', 'Ясное знамение', 'Землетрясение', 'Мчащиеся', 'Великое бедствие', 'Страсть к приумножению', 'Предвечернее время', 'Хулитель', 'Слон', 'Куpaйш', 'Подаяние', 'Изобилие', 'Неверные', 'Помощь', 'Пальмовые волокна', 'Очищение (Веры)', 'Рассвет', 'Люди');
			}elseif($lang == "sq"){
			$q = array('Kurani Fisnik', 'El Fatiha', 'El Bekare', 'Ali Imran', 'En Nisa', 'El Maide', 'El Enam', 'El A\'raf', 'El Enfal', 'Et Tevbe', 'Junus', 'Hud', 'Jusuf', 'Er Rad', 'Ibrahim', 'El Hixhr', 'En Nahl', 'El Isra', 'El Kehf', 'Merjem', 'Taha', 'El Enbija', 'El Haxh', 'El Muminun', 'En Nur', 'El Furkan', 'Esh Shuara', 'En Neml', 'El Kasas', 'El Ankebut', 'Er Rrum', 'Lukman', 'Es Sexhde', 'El Ahzab', 'Sebe\'', 'Fatir', 'Jasin', 'Es Saffat', 'Sad', 'Zumer', 'Gafir', 'Fussilet', 'Esh Shura', 'Ez Zuhruf', 'Ed Duhan', 'El Xhathije', 'El Ahkaf', 'Muhamed', 'El Fet-h', 'El Huxhurat', 'Kaf', 'Edh Dharijat', 'Et Tur', 'En Nexhm', 'El Kamer', 'Err Rrahman', 'El Vakia', 'El Hadid', 'El Muxhadele', 'El Hashr', 'El Mumtehine', 'Es Saff', 'El Xhumua', 'El Munafikun', 'Et Tegabun', 'Et Talak', 'Et Tahrim', 'El Mulk', 'El Kalem', 'El Hakkah', 'El Mearixh', 'Nuh', 'El Xhinn', 'El Muzzemmil', 'El Mudethir', 'El Kijame', 'Kaptina El Insan', 'El Murselat', 'En Nebe\'', 'En Naziat', 'Abese', 'Et Tekvir', 'El Infitar', 'El Mutaffifin', 'El Inshikak', 'El Buruxh', 'Et Tarik', 'El A\'la', 'El Gashije', 'El Fexhr', 'El Beled', 'Esh Shems', 'El Lejl', 'Ed Duha', 'Esh Sherh', 'Et Tin', 'El Alak', 'El Kadr', 'El Bejjine', 'Ez Zelzele', 'El Adijat', 'El Karia', 'Et Tekathur', 'El Asr', 'El Hemze', 'El Fil', 'Kurejsh', 'El Maun', 'El Kevther', 'El Kafirun', 'En Nasr', 'El Mesed', 'El Ihlas', 'El Felek', 'En Nas');
			}elseif($lang == "bs"){
			$q = array('Kur\'an Časni', 'El Fatiha', 'El Bekara', 'Ali Imran', 'En Nisa', 'El Maida', 'El En\'am', 'El A\'raf', 'El Enfal', 'Et Tewba', 'Junus', 'Hud', 'Jusuf', 'Er Ra\'d', 'Ibrahim', 'El Hid&#382;r', 'En Nahl', 'El Isra', 'El Kehf', 'Merjem', 'Ta Ha', 'El Enbija', 'El Had&#382;d&#382;', 'El Mu\'minun', 'En Nur', 'El Furkan', 'E&#353; &#352;u\'ara', 'En Neml', 'El Kasas', 'El \'Ankebut', 'Er Rum', 'Lukman', 'Es Sed&#382;de', 'El Ahzab', 'Sebe', 'Fatir', 'Ja Sin', 'Es Saffat', 'Sad', 'Ez Zumer', 'Gafir', 'Fussilet', 'E&#353; &#352;ura', 'Ez Zuhruf', 'Ed Duhan', 'El D&#382;asije', 'El Ahkaf', 'Muhammed', 'El Feth', 'El Hud&#382;urat', 'Kaf', 'Ez Zarijat', 'Et Tur', 'En Ned&#382;m', 'El Kamer', 'Er Rahman', 'El Vakia', 'El Hadid', 'El Mud&#382;adela', 'El Ha&#353;r', 'El Mumtehina', 'Es Saff', 'El D&#382;umu\'a', 'El Munafikun', 'Et Tegabun', 'Et Talak', 'Et Tahrim', 'Mulk', 'El Kalem', 'El Hakka', 'El Mea\'rid&#382;', 'Nuh', 'El D&#382;in', 'El Muzemmil', 'El Muddesir', 'El Kijama', 'El Insan', 'El Murselat', 'En Nebe', 'En Nazi\'at', '\'Abese', 'Et Tekvir', 'El Infitar', 'El Mutaffifun', 'El In&#353;ikak', 'El Burud&#382;', 'Et Tarik', 'El \'Ala', 'El Ga&#353;ija', 'El Fed&#382;r', 'El Beled', 'E&#353; &#352;ems', 'El Lejl', 'Ed Duha', 'E&#353; &#352;erh', 'Et Tin', 'El \'Alek', 'El Kadr', 'El Bejjine', 'Ez Zelzele', 'El \'Adijat', 'El Kari\'ah', 'Et Tekasur', 'El \'Asr', 'El Humeze', 'El Fil', 'Kurej&#353;', 'El Ma\'un', 'El Kevser', 'El Kafirun', 'En Nasr', 'El Mesed', 'El Ihlas', 'El Felek', 'En Nas');
			}elseif($lang == "ku"){
			$q = array('قرآن کریم', 'الفاتحة‌', 'البقرة', 'آل عمران', 'النساء', 'المائدة', 'الأنعام', 'الأعراف', 'الأنفال', 'التوبة', 'يونس', 'هود', 'يوسف', ' الرعد', 'إبراهيم', 'الحجر', 'النحل', 'الإسراء', 'الكهف', 'مريم', 'طه', 'الأنبياء', 'الحج', 'المؤمنون', 'النور', 'الفرقان', 'الشعراء', 'النمل', 'القصص', 'العنكبوت', 'الروم', 'لقمان', 'السجدة', 'الأحزاب', 'سبأ', 'فاطر', 'يس', 'الصافات', 'ص', 'الزمر', 'غافر', 'فصلت', 'الشورى', 'سوره‌تی( الزخرف', 'الدخان', 'الجاثية', ' الأحقاف', 'محمد', 'الفتح', 'الحجرات', 'ق', 'الذاريات', 'الطور', 'النجم', 'القمر', 'الرحمن', 'الواقعة', 'الحديد', 'المجادلة', 'الحشر', 'الممتحنة', 'الصف', 'الجمعة', 'المنافقون', 'التغابن', 'الطلاق', 'التحریم', 'الملك', 'القلم', 'الحاقة', 'المعارج', 'نوح', 'الجن', 'المزمل', 'المدثر', 'القيامة', 'الإنسان', 'المرسلات', 'النبأ', 'النازعات', 'عبس', 'التكویر', 'الإنفطار', ' سوره‌تی( المطففين', 'الانشقاق', 'البروج', 'الطارق', 'الأعلى', 'الغاشية', 'الفجر', 'البلد', 'الشمس', 'اللیل', 'الضحى', 'الشرح', 'التین', 'العلق', 'القدر', 'البينة', 'الزلزلة', 'العادیات', 'القارعة', 'التكاثر', 'العصر', 'الهمزة', 'الفیل', 'قریش', 'الماعون', 'الكوثر', 'الكافرون', 'النصر', 'المسد', 'الإخلاص', 'الفلق', 'الناس');
			}elseif($lang == "th"){
			$q = array('อัลกุรอาน', 'อัล-ฟาติหะฮฺ', 'อัล-บะเกาะเราะฮ', 'อาล อิมรอน', 'อัน-นิสาอ์', 'อัล-มาอิดะฮฺ', 'อัล-อันอาม', 'อัล-อะอฺรอฟ', 'อัล-อันฟาล', 'อัต-เตาบะฮฺ', 'ยูนุส', 'ฮูด', 'ยูสุฟ', 'อัร-เราะอฺด์', 'อิบรอฮีม', 'อัล-หิจญ์รฺ', 'อัน-นะห์ลฺ', 'อัล-อิสรออ์', 'อัล-กะฮ์ฟฺ', 'มัรยัม', 'ฏอฮา', 'อัล-อันบิยาอ์', 'อัล-หัจญ์', 'อัล-มุอ์มินูน', 'อัน-นูร', 'อัล-ฟุรกอน', 'อัช-ชุอะรออ์', 'อัน-นัมล์', 'อัล-เกาะศ็อศ', 'อัล-อันกะบูต', 'อัร-รูม', 'ลุกมาน', 'อัส-สัจญ์ดะฮฺ', 'อัล-อะห์ซาบ', 'สะบะอ์', 'ฟาฏิร', 'ยาสีน', 'อัศ-ศอฟฟาต', 'ศอด', 'อัซ-ซุมัร', 'ฆอฟิร', 'ฟุศศิลัต', 'อัช-ชูรอ', 'อัช-ซุครุฟ', 'อัด-ดุคอน', 'อัล-ญาษิยะฮฺ', 'อัล-อะห์กอฟ', 'มุหัมมัด', 'อัล-ฟัตห์', 'อัล-หุญุรอต', 'กอฟ', 'อัซ-ซาริยาต', 'อัฏ-ฏูร', 'อัน-นัจญ์มฺ', 'อัล-เกาะมัร', 'อัร-เราะห์มาน', 'อัล-วากิอะฮฺ', 'อัล-หะดีด', 'อัล-มุญาดิละฮฺ', 'อัล-หัชร์', 'อัล-มุมตะหะนะฮฺ', 'อัศ-ศ็อฟ', 'อัล-ญุมุอะฮฺ', 'อัล-มุนาฟิกูน', 'อัต-ตะฆอบุน', 'อัฏ-เฏาะลาก', 'อัต-ตะห์รีม', 'อัล-มุลก์', 'อัล-เกาะลัม', 'อัล-ห๊ากเกาะฮฺ', 'อัล-มะอาริจญ์', 'นูหฺ', 'อัล-ญิน', 'อัล-มุซซัมมิล', 'อัล-มุดดัษษิร', 'อัล-กิยามะฮฺ', 'อัล-อินซาน', 'อัล-มุรสะลาต', 'อัน-นะบะอ์', 'อัน-นาซิอาต', 'อะบะสะ', 'อัต-ตักวีร', 'อัล-อินฟิฏอร', 'อัล-มุฏ็อฟฟิฟีน', 'อัล-อินชิกอก', 'อัล-บุรูจญ์', 'อัฏ-ฏอริก', 'อัล-อะอฺลา', 'อัล-ฆอชิยะฮฺ', 'อัล-ฟัจญ์รฺ', 'อัล-บะลัด', 'อัช-ชัมส์', 'อัล-ลัยล์', 'อัฎ-ฎุหา', 'อัช-ชัรห์', 'อัต-ตีน', 'อัล-อะลัก', 'อัล-ก็อดรฺ', 'อัล-บัยยินะฮฺ', 'อัซ-ซัลซะละฮฺ', 'อัล-อาดิยาต', 'อัล-กอริอะฮฺ', 'อัต-ตะกาษุร', 'อัล-อัศร์', 'อัล-ฮุมะซะฮฺ', 'อัล-ฟีล', 'กุร็อยช์', 'อัล-มาอูน', 'อัล-เกาษัร', 'อัล-กาฟิรูน', 'อัน-นัศร์', 'อัล-มะสัด', 'อัล-อิคลาศ', 'อัล-ฟะลัก', 'อัน-นาส');
			}elseif($lang == "ug"){
			$q = array(' قۇرئان كەرىم', 'پاتىھە', 'بەقەرە', 'ئال ئىمران', 'نىسا', 'مائىدە', 'ئەنئام', 'ئەئراپ', 'ئەنپال', 'تەۋبە', 'يۇنۇس', 'ھۇد', 'يۈسۈپ', 'رەئد', 'ئىبراھىم', 'ھىجر', 'نەھل', 'ئىسرا', 'كەھپ', 'مەريەم', 'تاھا', 'ئەنبىيا', 'ھەج', 'مۆمىنۇن', 'نۇر', 'پۇرقان', 'شۇئەرا', 'نەمل', 'قەسەس', 'ئەنكەبۇت', 'رۇم', 'لوقمان', 'سەجدە', 'ئەھزاب', 'سەبەئ', 'پاتىر', 'ياسىن', 'ساپپات', 'ساد', 'زۇمەر', 'غاپىر', 'پۇسسىلەت', 'شۇرا', 'زۇخرۇپ', 'دۇخان', 'جاسىيە', 'ئەھقاپ', 'مۇھەممەد', 'پەتىھ', 'ھۇجۇرات', 'قاپ', 'زارىيات', 'تۇر', 'نەجم', 'قەمەر', 'رەھمان', 'ۋاقىئە', 'ھەدىد', 'مۇجادەلە', 'ھەشر', 'مۇمتەھىنە', 'سەپ', 'جۇمۇئە', 'مۇناپىقۇن', 'تەغابۇن', 'تەلاق', 'تەھرىم', 'مۈلك', 'قەلەم', 'ھاققە', 'مائارىج', 'نۇھ', 'جىن', 'مۇزەممىل', 'مۇدەسسىر', 'قىيامەت', 'ئىنسان', 'مۇرسەلات', 'نەبەئ', 'نازىئات', 'ئەبەسە', 'تەكۋىر', 'ئىنپىتار', 'مۇتەپپىپىن', 'ئىنشىقاق', 'بۇرۇج', 'تارىق', 'ئەئلا', 'غاشىيە', 'پەجر', 'بەلەد', 'شەمس', 'لەيل', 'زۇھا', 'شەرھ', 'تىن', 'ئەلەق', 'قەدر', 'بەييىنە', 'زەلزەلە', 'ئادىيات', 'قارىئە', 'تەكاسۇر', 'ئەسر', 'ھۈمەزە', 'پىل', 'قۇرەيش', 'مائۇن', 'كەۋسەر', 'كاپىرۇن', 'نەسر', 'مەسەد', 'ئىخلاس', 'پەلەق', 'ناس');
			}elseif($lang == "dv"){
			$q = array('القرآن الكريم','الفاتحة','البقرة','آل عمران','النساء','المائدة','الأنعام','الأعراف','الأنفال','التوبة','يونس','هود','يوسف','الرعد','إبراهيم','الحجر','النحل','الإسراء','الكهف','مريم','طه','الأنبياء','الحج','المؤمنون','النور','الفرقان','الشعراء','النمل','القصص','العنكبوت','الروم','لقمان','السجدة','الأحزاب','سبأ','فاطر','يس','الصافات','ص','الزمر','غافر','فصلت','الشورى','الزخرف','الدخان','الجاثية','الأحقاف','محمد','الفتح','الحجرات','ق','الذاريات','الطور','النجم','القمر','الرحمن','الواقعة','الحديد','المجادلة','الحشر','الممتحنة','الصف','الجمعة','المنافقون','التغابن','الطلاق','التحريم','الملك','القلم','الحاقة','المعارج','نوح','الجن','المزمل','المدثر','القيامة','الإنسان','المرسلات','النبأ','النازعات','عبس','التكوير','الانفطار','المطففين','الانشقاق','البروج','الطارق','الأعلى','الغاشية','الفجر','البلد','الشمس','الليل','الضحى','الشرح','التين','العلق','القدر','البينة','الزلزلة','العاديات','القارعة','التكاثر','العصر','الهمزة','الفيل','قريش','الماعون','الكوثر','الكافرون','النصر','المسد','الإخلاص','الفلق','الناس');
			}elseif($lang == "sd"){
			$q = array('القرآن الكريم','الفاتحة','البقرة','آل عمران','النساء','المائدة','الأنعام','الأعراف','الأنفال','التوبة','يونس','هود','يوسف','الرعد','إبراهيم','الحجر','النحل','الإسراء','الكهف','مريم','طه','الأنبياء','الحج','المؤمنون','النور','الفرقان','الشعراء','النمل','القصص','العنكبوت','الروم','لقمان','السجدة','الأحزاب','سبأ','فاطر','يس','الصافات','ص','الزمر','غافر','فصلت','الشورى','الزخرف','الدخان','الجاثية','الأحقاف','محمد','الفتح','الحجرات','ق','الذاريات','الطور','النجم','القمر','الرحمن','الواقعة','الحديد','المجادلة','الحشر','الممتحنة','الصف','الجمعة','المنافقون','التغابن','الطلاق','التحريم','الملك','القلم','الحاقة','المعارج','نوح','الجن','المزمل','المدثر','القيامة','الإنسان','المرسلات','النبأ','النازعات','عبس','التكوير','الانفطار','المطففين','الانشقاق','البروج','الطارق','الأعلى','الغاشية','الفجر','البلد','الشمس','الليل','الضحى','الشرح','التين','العلق','القدر','البينة','الزلزلة','العاديات','القارعة','التكاثر','العصر','الهمزة','الفيل','قريش','الماعون','الكوثر','الكافرون','النصر','المسد','الإخلاص','الفلق','الناس');
			}else{
			$q = array('Quran','Al-Fatihah ( The Opening )','Al-Baqarah ( The Cow )','Al-Imran ( The Famiy of Imran )','An-Nisa ( The Women )','Al-Maidah ( The Table spread with Food )','Al-An\'am ( The Cattle )','Al-A\'raf (The Heights )','Al-Anfal ( The Spoils of War )','At-Taubah ( The Repentance )','Yunus ( Jonah )','Hud','Yusuf (Joseph )','Ar-Ra\'d ( The Thunder )','Ibrahim ( Abraham )','Al-Hijr ( The Rocky Tract )','An-Nahl ( The Bees )','Al-Isra ( The Night Journey )','Al-Kahf ( The Cave )','Maryam ( Mary )','Taha','Al-Anbiya ( The Prophets )','Al-Hajj ( The Pilgrimage )','Al-Mu\'minoon ( The Believers )','An-Noor ( The Light )','Al-Furqan (The Criterion )','Ash-Shuara ( The Poets )','An-Naml (The Ants )','Al-Qasas ( The Stories )','Al-Ankaboot ( The Spider )','Ar-Room ( The Romans )','Luqman','As-Sajdah ( The Prostration )','Al-Ahzab ( The Combined Forces )','Saba ( Sheba )','Fatir ( The Orignator )','Ya-seen','As-Saaffat ( Those Ranges in Ranks )','Sad ( The Letter Sad )','Az-Zumar ( The Groups )','Ghafir ( The Forgiver God )','Fussilat ( Explained in Detail )','Ash-Shura (Consultation )','Az-Zukhruf ( The Gold Adornment )','Ad-Dukhan ( The Smoke )','Al-Jathiya ( Crouching )','Al-Ahqaf ( The Curved Sand-hills )','Muhammad','Al-Fath ( The Victory )','Al-Hujurat ( The Dwellings )','Qaf ( The Letter Qaf )','Adh-Dhariyat ( The Wind that Scatter )','At-Tur ( The Mount )','An-Najm ( The Star )','Al-Qamar ( The Moon )','Ar-Rahman ( The Most Graciouse )','Al-Waqi\'ah ( The Event )','Al-Hadid ( The Iron )','Al-Mujadilah ( She That Disputeth )','Al-Hashr ( The Gathering )','Al-Mumtahanah ( The Woman to be examined )','As-Saff ( The Row )','Al-Jumu\'ah ( Friday )','Al-Munafiqoon ( The Hypocrites )','At-Taghabun ( Mutual Loss &amp; Gain )','At-Talaq ( The Divorce )','At-Tahrim ( The Prohibition )','Al-Mulk ( Dominion )','Al-Qalam ( The Pen )','Al-Haaqqah ( The Inevitable )','Al-Ma\'arij (The Ways of Ascent )','Nooh','Al-Jinn ( The Jinn )','Al-Muzzammil (The One wrapped in Garments)','Al-Muddaththir ( The One Enveloped )','Al-Qiyamah ( The Resurrection )','Al-Insan ( Man )','Al-Mursalat ( Those sent forth )','An-Naba\' ( The Great News )','An-Nazi\'at ( Those who Pull Out )','Abasa ( He frowned )','At-Takwir ( The Overthrowing )','Al-Infitar ( The Cleaving )','Al-Mutaffifin (Those Who Deal in Fraud)','Al-Inshiqaq (The Splitting Asunder)','Al-Burooj ( The Big Stars )','At-Tariq ( The Night-Comer )','Al-A\'la ( The Most High )','Al-Ghashiya ( The Overwhelming )','Al-Fajr ( The Dawn )','Al-Balad ( The City )','Ash-Shams ( The Sun )','Al-Layl ( The Night )','Ad-Dhuha ( The Forenoon )','As-Sharh ( The Opening Forth)','At-Tin ( The Fig )','Al-\'alaq ( The Clot )','Al-Qadr ( The Night of Decree )','Al-Bayyinah ( The Clear Evidence )','Az-Zalzalah ( The Earthquake )','Al-\'adiyat ( Those That Run )','Al-Qari\'ah ( The Striking Hour )','At-Takathur ( The piling Up )','Al-Asr ( The Time )','Al-Humazah ( The Slanderer )','Al-Fil ( The Elephant )','Quraish','Al-Ma\'un ( Small Kindnesses )','Al-Kauther ( A River in Paradise)','Al-Kafiroon ( The Disbelievers )','An-Nasr ( The Help )','Al-Masad ( The Palm Fibre )','Al-Ikhlas ( Sincerity )','Al-Falaq ( The Daybreak )','An-Nas ( Mankind )');
			}
		}else{
			$q = array('القرآن الكريم','الفاتحة','البقرة','آل عمران','النساء','المائدة','الأنعام','الأعراف','الأنفال','التوبة','يونس','هود','يوسف','الرعد','إبراهيم','الحجر','النحل','الإسراء','الكهف','مريم','طه','الأنبياء','الحج','المؤمنون','النور','الفرقان','الشعراء','النمل','القصص','العنكبوت','الروم','لقمان','السجدة','الأحزاب','سبأ','فاطر','يس','الصافات','ص','الزمر','غافر','فصلت','الشورى','الزخرف','الدخان','الجاثية','الأحقاف','محمد','الفتح','الحجرات','ق','الذاريات','الطور','النجم','القمر','الرحمن','الواقعة','الحديد','المجادلة','الحشر','الممتحنة','الصف','الجمعة','المنافقون','التغابن','الطلاق','التحريم','الملك','القلم','الحاقة','المعارج','نوح','الجن','المزمل','المدثر','القيامة','الإنسان','المرسلات','النبأ','النازعات','عبس','التكوير','الانفطار','المطففين','الانشقاق','البروج','الطارق','الأعلى','الغاشية','الفجر','البلد','الشمس','الليل','الضحى','الشرح','التين','العلق','القدر','البينة','الزلزلة','العاديات','القارعة','التكاثر','العصر','الهمزة','الفيل','قريش','الماعون','الكوثر','الكافرون','النصر','المسد','الإخلاص','الفلق','الناس');
		}
	}
	return $q;
	}

	function get_language(){
	global $_GET;

	if(isset($_GET['l']) && $_GET['l'] != ""){ 
		if (in_array($_GET['l'], $this->check_languages)){
			$l = strip_tags($_GET['l']);
		}else{
			$l = 'ar';
		}
	}else{
		if (in_array($this->default_language, $this->check_languages)){
			$l = $this->default_language;
		}else{
			$l = 'ar';
		}
	}

	return $l; 
	}

	function home_tafseer_list() {
	global $_GET;

	$tafseer = $this->tafseers;

	$tafseercount = count($tafseer);
	$n=0;
	$code = '<ul>';
	for($i=1; $i<$tafseercount; $i++){
	++$n;
	if(intval($_GET['type'])==$i){ $op = 'class="act"'; }else{ $op = ''; }

	if(isset($_GET['type']) && $_GET['type'] == $i){ 
	$title = '<mark>'.$tafseer[$i].'</mark>';
	}else{
	$title = $tafseer[$i];
	}

	$code .= '<li><a href="'.$this->url(6,$i,"").'">'.$title.'</a></li>';
	}
	$code .= '</ul>';

	return $code;
	}

	function translate_include(){
	global $_GET;

	$key = $this->get_language();

	$languages = $this->languages();
	$id = $languages[$key]['id'];
	$name = $languages[$key]['name'];
	$name_ar = $languages[$key]['name_ar'];
	$name_en = $languages[$key]['name_en'];
	$include_file = $languages[$key]['file'];
	$book = $languages[$key]['book'];
	$more = $languages[$key]['more'];

	if(file_exists("".$this->folder_translate."/".$include_file.".php")){ 
		return $this->folder_translate."/".$include_file.".php"; 
	}else{ 
		return $this->folder_translate."/English_Sahih_International.php"; 
	}
	}

	function languages(){

	$lang_info['ar'] = array(
	'id' => '1', 
	'name' => 'العربية', 
	'name_ar' => 'العربية', 
	'name_en' => 'Arabic', 
	'book' => 'http://www.muslim-library.com/books/ar_altafsier_almoiasar.pdf', 
	'sound' => 'http://server8.mp3quran.net/afs/', 
	'file' => '', 
	'source' => 'ar',
	'lang' => 'ar'
	);

	$lang_info['en'] = array(
	'id' => '1', 
	'name' => 'English', 
	'name_ar' => 'إنجليزي - صحيح انترناشيونال', 
	'name_en' => 'English - Sahih International', 
	'book' => 'http://www.muslim-library.com/dl/books/English_Translation_of_the_Holy_Quran_meanings_in_English.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/English/Mishary_Al-Afasy/', 
	'file' => 'English_Sahih_International', 
	'source' => 'en',
	'lang' => 'en'
	);

	$lang_info['en_yusuf_ali'] = array(
	'id' => '2', 
	'name' => 'English - Yusuf Ali', 
	'name_ar' => 'إنجليزي - يوسف علي', 
	'name_en' => 'English - Yusuf Ali', 
	'book' => 'http://www.qurandownload.com/english-quran-with-commentaries(yusuf-ali).pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/English/Mishary_Al-Afasy/', 
	'file' => 'English_Yusuf_Ali', 
	'source' => 'en_yusuf_ali',
	'lang' => 'en'
	);

	$lang_info['en_transliteration'] = array(
	'id' => '3', 
	'name' => 'English - Transliteration', 
	'name_ar' => 'إنجليزي معرّب', 
	'name_en' => 'English - Transliteration', 
	'book' => 'http://www.qurandownload.com/quran-transliteration.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/English/Mishary_Al-Afasy/', 
	'file' => 'English_Transliteration', 
	'source' => 'en_transliteration',
	'lang' => 'en'
	);

	$lang_info['fr'] = array(
	'id' => '4', 
	'name' => 'Français', 
	'name_ar' => 'فرنسي', 
	'name_en' => 'French', 
	'file' => 'French', 
	'book' => 'http://www.muslim-library.com/dl/books/fr1250.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/French/Abdour-Rahman_Al-Houdhaifi/', 
	'source' => 'fr',
	'lang' => 'fr'
	);

	$lang_info['nl'] = array(
	'id' => '5', 
	'name' => 'Nederlands', 
	'name_ar' => 'هولندي', 
	'name_en' => 'Dutch', 
	'file' => 'Dutch', 
	'book' => 'http://www.qurandownload.com/dutch-quran.pdf', 
	'sound' => '', 
	'source' => 'nl',
	'lang' => 'nl'
	);

	$lang_info['tr'] = array(
	'id' => '6', 
	'name' => 'Türkçe', 
	'name_ar' => 'تركي', 
	'name_en' => 'Turkish', 
	'file' => 'Turkish', 
	'book' => 'http://www.muslim-library.com/dl/books/tr1111.pdf', 
	'sound' => 'http://d1.plaintruth.org/data/ar/ih_quran/ar_SaadAlGhamidi_With_Turkish_Trans/ar_SaadAlGhamidi_With_Turkish_Trans_', 
	'source' => 'tr',
	'lang' => 'tr'
	);

	$lang_info['ms'] = array(
	'id' => '7', 
	'name' => 'Melayu', 
	'name_ar' => 'ماليزي', 
	'name_en' => 'Malay', 
	'file' => 'Malay', 
	'book' => 'http://www.muslim-library.com/dl/books/ms2392.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Malawi/Holy_Quran_in_the_Malawi_Language/', 
	'source' => 'ms',
	'lang' => 'ms'
	);

	$lang_info['id'] = array(
	'id' => '8', 
	'name' => 'Indonesia', 
	'name_ar' => 'اندونيسي', 
	'name_en' => 'Indonesian', 
	'file' => 'Indonesian', 
	'book' => 'http://www.muslim-library.com/dl/books/in4144.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Indonesian/Holy_Quran_in_the_Indonesia_Language_Mashari/', 
	'source' => 'id',
	'lang' => 'id'
	);

	$lang_info['zh'] = array(
	'id' => '9', 
	'name' => '中文', 
	'name_ar' => 'صيني', 
	'name_en' => 'Chinese', 
	'file' => 'Chinese', 
	'book' => 'http://www.muslim-library.com/dl/books/ch4165.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Chinese/Holy_Quran_in_the_Chinese_Language_1/', 
	'source' => 'zh',
	'lang' => 'zh'
	);

	$lang_info['ja'] = array(
	'id' => '10', 
	'name' => '日本語', 
	'name_ar' => 'ياباني', 
	'name_en' => 'Japanese', 
	'file' => 'Japanese', 
	'book' => 'http://www.muslim-library.com/dl/books/jp4166.pdf', 
	'sound' => '', 
	'source' => 'ja',
	'lang' => 'ja'
	);

	$lang_info['it'] = array(
	'id' => '11', 
	'name' => 'Italiano', 
	'name_ar' => 'ايطالي', 
	'name_en' => 'Italian', 
	'file' => 'Italian', 
	'book' => 'http://www.muslim-library.com/dl/books/it4137.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Italiano/Italiano-e-arabo/', 
	'source' => 'it',
	'lang' => 'it'
	);

	$lang_info['ko'] = array(
	'id' => '12', 
	'name' => '한국어', 
	'name_ar' => 'كوري', 
	'name_en' => 'Korean', 
	'file' => 'Korean', 
	'book' => 'http://www.muslim-library.com/dl/books/ko4167.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Korean/Holy_Quran_in_the_Korean_Language/', 
	'source' => 'ko',
	'lang' => 'ko'
	);

	$lang_info['ml'] = array(
	'id' => '13', 
	'name' => 'മലയാളം', 
	'name_ar' => 'مالايالام', 
	'name_en' => 'Malayalam', 
	'file' => 'Malayalam', 
	'book' => 'http://www.qurandownload.com/malayalam-quran-t2.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Hindi/Holy_Quran_in_the_Malayalam_Language/', 
	'source' => 'ml',
	'lang' => 'ml'
	);

	$lang_info['pt'] = array(
	'id' => '14', 
	'name' => 'Português', 
	'name_ar' => 'برتغالي', 
	'name_en' => 'Portuguese', 
	'file' => 'Portuguese', 
	'book' => 'http://www.muslim-library.com/dl/books/po4138.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Portuguese/Saad_Al-Ghamdi/', 
	'source' => 'pt',
	'lang' => 'pt'
	);

	$lang_info['es'] = array(
	'id' => '15', 
	'name' => 'Español', 
	'name_ar' => 'إسباني', 
	'name_en' => 'Spanish', 
	'file' => 'Spanish', 
	'book' => 'http://www.muslim-library.com/dl/books/es0701.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Spanish/Mishary_Alafasy/', 
	'source' => 'es',
	'lang' => 'es'
	);

	$lang_info['ur'] = array(
	'id' => '16', 
	'name' => 'اردو', 
	'name_ar' => 'أردو', 
	'name_en' => 'Urdu', 
	'file' => 'Urdu', 
	'book' => 'http://www.qurantranslations.net/quran/pdf/ur_Translation_of_the_meaning_of_the_Holy_Quran_in_Urdu.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Urdu/Sudais_and_Shuraym/', 
	'source' => 'ur',
	'lang' => 'ur'
	);

	$lang_info['bn'] = array(
	'id' => '17', 
	'name' => 'বাংলা', 
	'name_ar' => 'بنغالي', 
	'name_en' => 'Bangali', 
	'file' => 'Bangali', 
	'book' => 'http://www.qurandownload.com/bangla-quran-pdfs.rar', 
	'sound' => 'http://www.qurantranslations.net/sound/Bengali/Ali_Abdur-Rahman_Al-Huthaify/', 
	'source' => 'bn',
	'lang' => 'bn'
	);

	$lang_info['ta'] = array(
	'id' => '18', 
	'name' => 'தமிழ்', 
	'name_ar' => 'تاميلي', 
	'name_en' => 'Tamil', 
	'file' => 'Tamil', 
	'book' => 'http://www.qurantranslations.net/quran/pdf/ta_quran_kareem_ma3aneh.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Hindi/Holy_Quran_in_the_Tamil_Language/', 
	'source' => 'ta',
	'lang' => 'ta'
	);

	$lang_info['cs'] = array(
	'id' => '19', 
	'name' => 'České', 
	'name_ar' => 'تشيكي', 
	'name_en' => 'Czech', 
	'file' => 'Czech', 
	'book' => 'http://www.muslim-library.com/dl/books/cz4172.pdf', 
	'sound' => '', 
	'source' => 'cs',
	'lang' => 'cs'
	);

	$lang_info['de'] = array(
	'id' => '20', 
	'name' => 'Deutsch', 
	'name_ar' => 'الماني', 
	'name_en' => 'German', 
	'file' => 'German', 
	'book' => 'http://www.muslim-library.com/wp-content/uploads/2015/01/de_translation_of_the_meaning_of_the_holy_quran_in_deutsch.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Deutsch/DER_QURAN_IN_DEUTSCHER_UBERSETZUNG-Saod_Alshurim/', 
	'source' => 'de',
	'lang' => 'de'
	);

	$lang_info['fa'] = array(
	'id' => '21', 
	'name' => 'فارسى', 
	'name_ar' => 'فارسي', 
	'name_en' => 'Persian', 
	'file' => 'Persian', 
	'book' => 'http://www.muslim-library.com/dl/books/fa4145.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Farsi/Holy_Quran_in_the_Farsi_Language/', 
	'source' => 'fa',
	'lang' => 'fa'
	);

	$lang_info['ro'] = array(
	'id' => '22', 
	'name' => 'Română', 
	'name_ar' => 'روماني', 
	'name_en' => 'Romanian', 
	'file' => 'Romanian', 
	'book' => 'http://www.muslim-library.com/dl/books/ro2349.pdf', 
	'sound' => '', 
	'source' => 'ro',
	'lang' => 'ro'
	);

	$lang_info['ru'] = array(
	'id' => '23', 
	'name' => 'Русский', 
	'name_ar' => 'روسي', 
	'name_en' => 'Russian', 
	'file' => 'Russian', 
	'book' => 'http://www.muslim-library.com/books/ru_quran_russian.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Russian/Holy_Quran_in_the_Russian_Language_1/', 
	'source' => 'ru',
	'lang' => 'ru'
	);

	$lang_info['sv'] = array(
	'id' => '24', 
	'name' => 'Svenska', 
	'name_ar' => 'سويدي', 
	'name_en' => 'Swedish', 
	'file' => 'Swedish', 
	'book' => 'http://www.muslim-library.com/dl/books/sw2146.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Swedish/', 
	'source' => 'sv',
	'lang' => 'sv'
	);

	$lang_info['sq'] = array(
	'id' => '25', 
	'name' => 'Shqip', 
	'name_ar' => 'الباني', 
	'name_en' => 'Albanian', 
	'file' => 'Albanian', 
	'book' => 'http://www.muslim-library.com/dl/books/al4140.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Albanian/Holy_Quran_in_the_Albanian_Language/', 
	'source' => 'sq',
	'lang' => 'sq'
	);

	$lang_info['az'] = array(
	'id' => '26', 
	'name' => 'Azəri', 
	'name_ar' => 'أذري', 
	'name_en' => 'Azerbaijani', 
	'file' => 'Azerbaijani', 
	'book' => 'http://muslim-library.com/books/az_Quran_oxumagin_savabi.pdf', 
	'sound' => '', 
	'source' => 'az',
	'lang' => 'az'
	);

	$lang_info['bs'] = array(
	'id' => '27', 
	'name' => 'Bosanski', 
	'name_ar' => 'بوسني', 
	'name_en' => 'Bosnian', 
	'file' => 'Bosnian', 
	'book' => 'http://www.muslim-library.com/dl/books/bs4139.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Bosnian/Mahmoud_Khalil_Al-Husari/', 
	'source' => 'bs',
	'lang' => 'bs'
	);
	$lang_info['bg'] = array(
	'id' => '28', 
	'name' => 'Български', 
	'name_ar' => 'بلغاري', 
	'name_en' => 'Bulgarian', 
	'file' => 'Bulgarian', 
	'book' => 'http://www.muslim-library.com/dl/books/bu4142.pdf', 
	'sound' => '', 
	'source' => 'bg',
	'lang' => 'bg'
	);

	$lang_info['ha'] = array(
	'id' => '29', 
	'name' => 'Hausa', 
	'name_ar' => 'الهاوسا', 
	'name_en' => 'Hausa', 
	'file' => 'Hausa', 
	'book' => 'http://www.qurandownload.com/hausa-quran.pdf', 
	'sound' => '', 
	'source' => 'ha',
	'lang' => 'ha'
	);
	$lang_info['ku'] = array(
	'id' => '30', 
	'name' => 'كوردی', 
	'name_ar' => 'كردي', 
	'name_en' => 'Kurdish', 
	'file' => 'Kurdish', 
	'book' => '', 
	'sound' => 'http://www.qurantranslations.net/sound/Kurdish/Saad_Al_Ghamedi_with_Kurdish_Translation/', 
	'source' => 'ku',
	'lang' => 'ku'
	);

	$lang_info['no'] = array(
	'id' => '31', 
	'name' => 'Norwegian', 
	'name_ar' => 'نرويجي', 
	'name_en' => 'Norwegian', 
	'file' => 'Norwegian', 
	'book' => 'http://www.muslim-library.com/dl/books/no4173.pdf', 
	'sound' => '', 
	'source' => 'no',
	'lang' => 'no'
	);

	$lang_info['pl'] = array(
	'id' => '32', 
	'name' => 'Polski', 
	'name_ar' => 'بولندا', 
	'name_en' => 'Polish', 
	'file' => 'Polish', 
	'book' => 'http://www.qurandownload.com/polish-quran-wb.pdf', 
	'sound' => '', 
	'source' => 'pl',
	'lang' => 'pl'
	);

	$lang_info['so'] = array(
	'id' => '33', 
	'name' => 'soomaali', 
	'name_ar' => 'صومالي', 
	'name_en' => 'Somali', 
	'file' => 'Somali', 
	'book' => 'http://www.muslim-library.com/dl/books/so2380.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Soomaali/Holy_Quran_in_the_Soomaali_Language/', 
	'source' => 'so',
	'lang' => 'so'
	);

	$lang_info['sw'] = array(
	'id' => '34', 
	'name' => 'Swahili', 
	'name_ar' => 'كيني', 
	'name_en' => 'Swahili', 
	'file' => 'Swahili', 
	'book' => 'http://www.muslim-library.com/dl/books/sw4170.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Swahili/', 
	'source' => 'sw',
	'lang' => 'sw'
	);

	$lang_info['tg'] = array(
	'id' => '35', 
	'name' => 'Тоҷикӣ', 
	'name_ar' => 'طاجيكي', 
	'name_en' => 'Tajik', 
	'file' => 'Tajik', 
	'book' => '', 
	'sound' => '', 
	'source' => 'tg',
	'lang' => 'tg'
	);

	$lang_info['tt'] = array(
	'id' => '36', 
	'name' => 'Татарча', 
	'name_ar' => 'تتاري', 
	'name_en' => 'Tatar', 
	'file' => 'Tatar', 
	'book' => '', 
	'sound' => '', 
	'source' => 'tt',
	'lang' => 'tt'
	);

	$lang_info['th'] = array(
	'id' => '37', 
	'name' => 'ไทย', 
	'name_ar' => 'تايلندي', 
	'name_en' => 'Thailand', 
	'file' => 'Thailand', 
	'book' => 'http://www.muslim-library.com/dl/books/th4164.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Thai/Saad_El_Ghamidi/', 
	'source' => 'th',
	'lang' => 'th'
	);

	$lang_info['ug'] = array(
	'id' => '38', 
	'name' => 'ئۇيغۇرچە', 
	'name_ar' => 'أيغوري', 
	'name_en' => 'Uyghur', 
	'file' => 'Uyghur', 
	'book' => 'http://www.muslim-library.com/dl/books/gy2439.pdf', 
	'sound' => 'http://www.qurantranslations.net/sound/Uyghur/Holy_Quran_in_the_Uyghur_Language/', 
	'source' => 'ug',
	'lang' => 'ug'
	);

	$lang_info['uz'] = array(
	'id' => '39', 
	'name' => 'Ўзбек', 
	'name_ar' => 'أوزبكي', 
	'name_en' => 'Uzbek', 
	'file' => 'Uzbek', 
	'book' => '', 
	'sound' => '', 
	'source' => 'uz',
	'lang' => 'uz'
	);

	$lang_info['dv'] = array(
	'id' => '40', 
	'name' => 'ދިވެހި', 
	'name_ar' => 'مالديفي', 
	'name_en' => 'Divehi', 
	'file' => 'Divehi', 
	'book' => '', 
	'sound' => '', 
	'source' => 'dv',
	'lang' => 'dv'
	);

	$lang_info['sd'] = array(
	'id' => '41', 
	'name' => 'Sindhi', 
	'name_ar' => 'سندي', 
	'name_en' => 'Sindhi', 
	'file' => 'Sindhi', 
	'book' => 'http://www.qurandownload.com/sindhi-quran.pdf', 
	'sound' => '', 
	'source' => 'sd',
	'lang' => 'sd'
	);

	return $lang_info;
	}

	function languages_loop(){
	global $_GET;

	$languages = $this->languages();

	$code = '<ul>';
	foreach($languages as $key=>$value){
	$id = $languages[$key]['id'];
	$name = $languages[$key]['name'];
	$name_ar = $languages[$key]['name_ar'];
	$name_en = $languages[$key]['name_en'];
	$file = $languages[$key]['file'];
	$book = $languages[$key]['book'];
	$more = $languages[$key]['more'];
	$source = $languages[$key]['source'];

	$code .= '<li>';
	$code .= $id.'. '.$name;
	 if ( is_array($more) ){ 
	$code .= '<ul>';
	for($i=0; $i < count($more); ++$i){
	$code .= '<li>'.$more[$i]['name'].'</li>';
	}
	$code .= '</ul>';
	}
	$code .= '</li>';
	}

	$code .= '</ul>';

	return $code;
	}

	function languages_loop_select(){
	$languages = $this->languages();
		
	$code = '<div class="sorabox_en">';
	$code .= '<select name="forma" onchange="location = this.options[this.selectedIndex].value;">';
	$code .= '<option value="#">&nbsp;Select language ...</option>';
	foreach($languages as $key=>$value){
	$id = $languages[$key]['id'];
	$name = $languages[$key]['name'];
	$name_ar = $languages[$key]['name_ar'];
	$name_en = $languages[$key]['name_en'];
	$book = $languages[$key]['book'];
	$more = $languages[$key]['more'];
	$source = $languages[$key]['source'];

	if($_GET['l'] == $source){ $op = ' selected="selected"'; }else{ $op = ''; }

	$code .= '<option title="'.$name_en.' - '.$name.' - '.$name_ar.'" value="'.$this->url(10,$source,"").'"'.$op.'>'.$name.'</option>';

	if ( is_array($more) ){ 
		for($i=0; $i < count($more); ++$i){
		$code .= '<option value="'.$this->url(10,$more[$i]['source'],"").'"> -- '.$more[$i]['name'].'</option>';
		}
	}

	}
	$code .= '</select>';
	$code .= '</div>';
	return $code;
	}

	function language_info($key=""){
	global $_GET;
	$languages = $this->languages();
	$id = $languages[$key]['id'];
	$name = $languages[$key]['name'];
	$name_ar = $languages[$key]['name_ar'];
	$name_en = $languages[$key]['name_en'];
	$include_file = $languages[$key]['file'];
	$book = $languages[$key]['book'];
	$more = $languages[$key]['more'];

	$code = '<ul>';
	$code .= '<li>';
	$code .= $id.'. '.$name;

	if ( is_array($more) ){ 
	$code .= '<ul>';
	for($i=0; $i < count($more); ++$i){
	$code .= '<li>'.$more[$i]['name'].'</li>';
	}
	$code .= '</ul>';
	}

	$code .= '</li>';
	$code .= '</ul>';
	return $code;
	}

	function language_info_by_key($mata=""){
	global $_GET;

	$key = $this->get_language();

	$languages = $this->languages();
	return $languages[$key][$mata];
	}

	function view_translate($share_title='') {
	global $_GET, $QURAN, $TRANSLATE;

	$key = $this->get_language();

	if(isset($_GET['sora']) && intval($_GET['sora']) != 0){ 
		$sora_id = intval($_GET['sora']);
	}else{
		$sora_id = 1;
	}

	if($sora_id > 114){
		$sora = 1;
	}else{
		$sora = $sora_id;
	}

	if($sora_id == 0){
		$sora = 1;
	}

	$languages = $this->languages();
	$id = $languages[$key]['id'];
	$name = $languages[$key]['name'];
	$name_ar = $languages[$key]['name_ar'];
	$name_en = $languages[$key]['name_en'];
	$include_file = $languages[$key]['file'];
	$book = $languages[$key]['book'];
	$more = $languages[$key]['more'];

	$ayatnumbers = count($QURAN[$sora]);

	$surah_name = $this->surah_name();

	$prints = '<div id="translateindex">';
	$prints .= '<h1>'.$name.'</h1>';
	$prints .= '<div class="englishtext">'.word('surah').' '.$surah_name[$sora].' - '.word('aya_count').' '.$ayatnumbers.'</div>';
	$prints .= post_share($share_title, $this->url(8, $sora, $this->get_language()));

	$n=0;
	for($i=1; $i<$ayatnumbers+1; $i++){
	++$n;
	$links = $this->url(15, $sora, $i, $key);
	if($n==1){ $classname='ayat'; }else{ $classname='ayat2'; $n=0; }
	$sound = '<a href="'.$links.'" rel="gb_page_center[500, 350]"><img src="'.$this->folder.'/icons/mp3.png" alt="'.$surah_name[$sora].' - '.word('aya').' '.$i.'" title="'.$name.' - '.$surah_name[$sora].' - '.word('aya').' '.$i.'" /></a>';

	$button = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-'.$i.'">Lestin</button>
	<div class="modal fade bs-example-modal-'.$i.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      '.$i.'
	    </div>
	  </div>
	</div>';
		
	$prints .= '<div class="'.$classname.'">'.$QURAN[$sora][$i].' <span>( '.$i.' )</span> '.$sound.'';
	$prints .= '<div class="translate">'.$TRANSLATE[$sora][$i].'</div>';
	$prints .= '</div>';
	}
	$prints .= "</div>";
	return $prints;
	}

	function loop_translate() {
	global $_GET, $QURAN, $TRANSLATE;

	$key = $this->get_language();
	$surah_name = $this->surah_name();
	if(isset($_GET['sora']) && intval($_GET['sora']) != 0){ $sora_id = intval($_GET['sora']); }else{ $sora_id = 1; }
	if($sora_id > 114){ $sora = 1; }else{ $sora = intval($sora_id); }
	if($sora_id == 0){ $sora = 1; }

	$ayatnumbers = count($QURAN[$sora]);
	if($ayatnumbers > 10){ $ayatnumbers = 10; }
	$n=0;
	for($i=1; $i<$ayatnumbers+1; $i++){
	++$n;
	$prints .= $TRANSLATE[$sora][$i];
	if($n != $i){
	$prints .= ' - ';
	}
	}
	return $prints;
	}

	function books_download($links, $name){
	$url = explode(",",$links);
	$files = count($url);
	$download = '<p class="downloadicons">'.word('book_downlaod').'';
	for($i=0;$i<$files;$i++){
	if ($i >= 2) { break; }
	$download .= '<a itemprop="url" target="_blank" href="'.$url[$i].'">'.$this->file_type($url[$i], $name).'</a>';
	}
	$download .= '</p>';
	return $download;
	}

	function books_info_by_key($key=1) {
	global $_GET, $BOOKS;

	$bookscount = count($BOOKS);
	if(isset($_GET['id']) && intval($_GET['id']) != 0){	$id = intval($_GET['id']); }else{ $id = 1; }
	if($id > $bookscount){ $id=1; }

	return $BOOKS[$id][$key];
	}

	function books_info() {
	global $_GET, $BOOKS;

	$lang = $this->get_language();
	
	if(in_array($lang, $this->get_rtl_languages())){
		$bookclass = 'books_ar';
	}else{
		$bookclass = 'books';
	}

	if(file_exists("includes/books/".$lang.".php")){ 
		include("books/".$lang.".php"); 
	}else{ 
		include("books/en.php"); 
	}

	$bookscount = count($BOOKS);

	if(isset($_GET['id']) && intval($_GET['id']) != 0){
		$id = intval($_GET['id']);
	}else{
		$id = 1;
	}

	if($id > $bookscount){ $id=1; }

	$s = '<div class="'.$bookclass.' borderbox" itemscope itemtype="http://schema.org/Book">';
	$s .= '<ul>';

	$bookinfo = $BOOKS[$id];

	if($bookinfo[5] == ""){ $description = ''; }else{ $description = '<p itemprop="description" class="description">'.$bookinfo[5].'</p>'; }
	if($bookinfo[3] == ""){ $descriptionxx = ''; }else{ $descriptionxx = '<p itemprop="description" class="description">'.$bookinfo[3].'</p>'; }
	if($bookinfo[3] == ""){ $description_ar = ''; }else{ $description_ar = "\n".$bookinfo[3]; }
	if($bookinfo[6] == ""){ $source = ''; }else{ $source = '<p>'.word('book_source').' <a target="_blank" href="'.$bookinfo[6].'">'.$bookinfo[6].'</a></p>'; }
	if($bookinfo[8] == ""){ $formation = ''; }else{ $formation = '<p itemprop="author" itemscope itemtype="http://schema.org/Person">'.word('book_author').' <span itemprop="name">'.$bookinfo[8].'</span></p>'; }
	if($bookinfo[9] == ""){ $translators = ''; }else{ $translators = '<p>'.word('book_translator').' '.$bookinfo[9].'</p>'; }
	if($bookinfo[10] == ""){ $reveiwers = ''; }else{ $reveiwers = '<p>'.word('book_checker').' '.$bookinfo[10].'</p>'; }
	if($bookinfo[11] == ""){ $fromissues = ''; }else{ $fromissues = '<p>'.word('book_publisher').' '.$bookinfo[11].'</p>'; }

	if($lang == "ar"){
	$s .= '<li>';
	$s .= '<h4 itemprop="name"><a href="'.$this->url(11,$bookinfo[0],$lang).'" class="bookstitle">'.$bookinfo[2].'</a></h4>';
	$s .= $descriptionxx;
	$s .= $formation;
	$s .= $reveiwers;
	$s .= $translators;
	$s .= $fromissues;
	$s .= $source;
	$s .= $this->books_download($bookinfo[7],$bookinfo[4]);
	$s .= '</li>';
	}else{
	if($bookinfo[4] != ""){
	$s .= '<li>';
	$s .= '<h4 itemprop="name"><a href="'.$this->url(11,$bookinfo[0],$lang).'" class="bookstitle">'.$bookinfo[4].'</a></h4>';
	$s .= $description;
	$s .= $formation;
	$s .= $reveiwers;
	$s .= $translators;
	$s .= $fromissues;
	$s .= $source;
	$s .= $this->books_download($bookinfo[7],$bookinfo[4]);
	$s .= '</li>';
	}
	}

	$s .= '</ul>';
	$s .= '</div>';
	return $s;
	}

	function books($all_books=0) {
	global $BOOKS,$_GET;

	$lang = $this->get_language();

	if(in_array($lang, $this->get_rtl_languages())){
		$bookclass = 'books_ar';
	}else{
		$bookclass = 'books';
	}

	if(file_exists("includes/books/".$lang.".php")){ 
		include("books/".$lang.".php"); 
	}else{ 
		include("books/en.php"); 
	}

	$bookscount = count($BOOKS);

	if($all_books == 1){
	$view_books = $bookscount;
	}else{
	$view_books = $this->random_books;
	}


	$n=0;
	$s = '<div class="'.$bookclass.' borderbox">';
	$s .= '<ul>';
	//for($i=1; $i<=$view_books; $i++){
	foreach($BOOKS as $i=>$row){ 
	++$n;
	/*
	$bookscount[0]  -> Numbers
	$bookscount[1]  -> Language Name
	$bookscount[2]  -> Title AR
	$bookscount[3]  -> Description AR
	$bookscount[4]  -> Title EN
	$bookscount[5]  -> Description EN
	$bookscount[6]  -> Source (URL)
	$bookscount[7]  -> Download (URL)
	$bookscount[8]  -> Formation
	$bookscount[9]  -> Translators
	$bookscount[10] -> Reveiwers
	$bookscount[11] -> Fromissues
	*/

	if($all_books == 1){
	$random = $BOOKS[$i];
	}else{
	if( $n == $view_books+1 ) break;
	$random = $BOOKS[rand(1,$bookscount)];
	}

	if($view_books == $i){ $border = ''; }else{ $border = '<div class="booksborder"></div>'; }

	if($random[5] == ""){ $description = ''; }else{ $description = '<p itemprop="description" class="description">'.$random[5].'</p>'; }
	if($random[3] == ""){ $descriptionxx = ''; }else{ $descriptionxx = '<p itemprop="description" class="description">'.$random[3].'</p>'; }
	if($random[3] == ""){ $description_ar = ''; }else{ $description_ar = "\n".$random[3]; }
	if($random[6] == ""){ $source = ''; }else{ $source = '<p>'.word('book_source').' <a target="_blank" href="'.$random[6].'">'.$random[6].'</a></p>'; }
	if($random[8] == ""){ $formation = ''; }else{ $formation = '<p itemprop="author" itemscope itemtype="http://schema.org/Person">'.word('book_author').' <span itemprop="name">'.$random[8].'</span></p>'; }
	if($random[9] == ""){ $translators = ''; }else{ $translators = '<p>'.word('book_translator').' '.$random[9].'</p>'; }
	if($random[10] == ""){ $reveiwers = ''; }else{ $reveiwers = '<p>'.word('book_checker').' '.$random[10].'</p>'; }
	if($random[11] == ""){ $fromissues = ''; }else{ $fromissues = '<p>'.word('book_publisher').' '.$random[11].'</p>'; }

	if($lang == "ar"){
	$s .= '<li itemscope itemtype="http://schema.org/Book">';
	$s .= '<h4 itemprop="name"><a href="'.$this->url(11,$random[0],$lang).'" class="bookstitle">'.$random[2].'</a></h4>';
	$s .= $descriptionxx;
	$s .= $formation;
	$s .= $reveiwers;
	$s .= $translators;
	$s .= $fromissues;
	$s .= $source;
	$s .= $this->books_download($random[7],$random[4]);
	$s .= $border;
	$s .= '</li>';
	}else{
	if($random[4] != ""){
	$s .= '<li itemscope itemtype="http://schema.org/Book">';
	$s .= '<h4 itemprop="name"><a href="'.$this->url(11,$random[0],$lang).'" class="bookstitle">'.$random[4].'</a></h4>';
	$s .= $description;
	$s .= $formation;
	$s .= $reveiwers;
	$s .= $translators;
	$s .= $fromissues;
	$s .= $source;
	$s .= $this->books_download($random[7],$random[4]);
	$s .= $border;
	$s .= '</li>';
	}
	}

	}
	$s .= '</ul>';
	$s .= '</div>';
	return $s;
	}

	function sidebar_books() {
	global $BOOKS;

	$lang = $this->get_language();

	if(in_array($lang, $this->get_rtl_languages())){
		$bookclass = 'books_ar_sidebar';
	}else{
		$bookclass = 'books_sidebar';
	}

	if(file_exists("includes/books/".$lang.".php")){ 
		include("books/".$lang.".php"); 
	}else{ 
		include("books/en.php"); 
	}

	$bookscount = count($BOOKS);
	$n=0;
	$s = '<div class="'.$bookclass.'">';
	$s .= '<ul>';
	for($i=1; $i<=$this->random_books; $i++){
	++$n;

	$random = $BOOKS[rand(1,$bookscount)];

	if($random[5] == ""){ $description = ''; }else{ $description = '<p class="description">'.$random[5].'</p>'; }
	if($random[3] == ""){ $descriptionxx = ''; }else{ $descriptionxx = '<p class="description">'.$random[3].'</p>'; }
	if($random[3] == ""){ $description_ar = ''; }else{ $description_ar = "\n".$random[3]; }
	if($random[5] == ""){ $description_en = ''; }else{ $description_en = "\n".$random[5]; }
	if($random[6] == ""){ $source = ''; }else{ $source = '<p>'.word('book_source').' <a target="_blank" href="'.$random[6].'">'.$random[6].'</a></p>'; }
	if($random[8] == ""){ $formation = ''; }else{ $formation = '<p>'.word('book_author').' '.$random[8].'</p>'; }
	if($random[9] == ""){ $translators = ''; }else{ $translators = '<p>'.word('book_translator').' '.$random[9].'</p>'; }
	if($random[10] == ""){ $reveiwers = ''; }else{ $reveiwers = '<p>'.word('book_checker').' '.$random[10].'</p>'; }
	if($random[11] == ""){ $fromissues = ''; }else{ $fromissues = '<p>'.word('book_publisher').' '.$random[11].'</p>'; }

	if($lang=="ar"){
	$s .= '<li>';
	$s .= '<a href="'.$this->url(11,$random[0],$lang).'">'.$random[2].'</a>';
	$s .= '</li>';
	}else{
	if($random[4] != ""){
	$s .= '<li>';
	$s .= '<a href="'.$this->url(11,$random[0],$lang).'">'.$random[4].'</a>';
	$s .= '</li>';
	}
	}

	}
	$s .= '</ul>';
	$s .= '</div>';
	return $s;
	}

	function file_type($url, $name){

	$exx = explode(".",$url);
	$typefile = $exx[count($exx)-1];

	if($typefile == 'pdf' OR $typefile == 'PDF'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/pdf.gif" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'doc' OR $typefile == 'DOC' OR $typefile == 'docx' OR $typefile == 'DOCX'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/doc.gif" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'mp3' OR $typefile == 'MP3'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/mp3.gif" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'ram' OR $typefile == 'ra'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/ram.gif" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == '3gp'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/3gp.png" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'rm' OR $typefile == 'RM'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/audios.gif" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'exe' OR $typefile == 'EXE'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/exe.gif" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'zip' OR $typefile == 'ZIP'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/zip.gif" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'rar' OR $typefile == 'RAR'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/rar.gif" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'jpg' OR $typefile == 'JPG' OR $typefile == 'jpeg' OR $typefile == 'JPEG'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/jpg.png" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'gif' OR $typefile == 'GIF'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/image.gif" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'png' OR $typefile == 'PNG'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/image.gif" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'html' OR $typefile == 'HTML' OR $typefile == 'htm' OR $typefile == 'HTM'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/html.gif" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'swf' OR $typefile == 'SWF'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/swf.png" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'txt' OR $typefile == 'TXT'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/txt.gif" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'psd' OR $typefile == 'PSD'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/psd.gif" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'pps' OR $typefile == 'PPS'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/pps.png" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'wav' OR $typefile == 'WAV'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/audios.gif" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}elseif($typefile == 'chm' OR $typefile == 'CHM'){
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/chm.png" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}else{
	$filetypeimage = '<img src="'.$this->folder.'/icons/typefile/other.gif" alt="'.$name.'"title="'.$name.'" class="iconstypefile" />';
	}
	return $filetypeimage;
	}

	function view_sora_loop() {
	global $_GET;

	$l = $this->get_language();
	$surah_name = $this->surah_name();

	if($l == "ar"){
		$url = 9;
		$classname = 'soraoverflow';
	}else{
		$url = 8;
		$classname = 'soraoverflow_en';
	}

	$code = '<div class="'.$classname.'">';
	$n=0;
	for($i=1; $i<=114; $i++){
	++$n;
	if(isset($_GET['sora']) && $_GET['sora'] == $i){ 
	$title = '<mark>'.$i.'- '.$surah_name[$i].'</mark>';
	}else{
	$title = ''.$i.'- '.$surah_name[$i].'';
	}

	$code .= '<div class="links4sora"><a title="'.word('surah').' '.$surah_name[$i].'" href="'.$this->url($url,$i,$l).'">'.$title.'</a></div>';
	}
	$code .= '</div>';
	return $code;
	}

	function sora_loop() {
	global $_GET;

	if(isset($_GET['l']) AND $_GET['l'] != ""){
		$l = $this->get_language();

		if($l == "ar"){
			$link_number = 9;
			$classname = 'col-xs-12 col-sm-6 col-md-4';
		}else{
			$link_number = 8;
			$classname = 'col-xs-12 col-sm-6 col-md-6';
		}
	}else{
		$l = 'en';
		$classname = 'col-xs-12 col-sm-6 col-md-4';
		$link_number = 9;
	}

	$surah_name = $this->surah_name();

	$prints = '<div class="row">';
	for($i=1; $i<=114; $i++){
	$prints .= '<div class="'.$classname.'">';
	$prints .= '<div class="spacer">';
	$prints .= '<h5><a title="'.word('surah').' '.$surah_name[$i].' - '.word('aya_count').' '.$this->aya_count[$i].'" href="'.$this->url($link_number,$i,$l).'">'.$i.'- '.$surah_name[$i].'</a></h5>';
	$prints .= '</div>';
	$prints .= '</div>';
	}
	$prints .= '</div>';
	return $prints;
	}

	function tafseer_form($sora, $aya, $type){
	global $_GET, $QURAN;

	$tafseer = $this->tafseers;

	$ayatnumbers = count($QURAN[''.$sora.'']);
	$tafseercount = count($tafseer);

	$allayat = '<label for="tafseer_1">'.word('select_aya_number').'</label> <select class="se" id="tafseer_1" size="1" name="aya">';
	for($i2=1; $i2<$ayatnumbers+1; $i2++){
		if($aya == $i2){
		$allayat .= '<option value="'.$i2.'" selected="selected">'.$i2.'</option>';
		}else{
		$allayat .= '<option value="'.$i2.'">'.$i2.'</option>';
		}
	}
	$allayat .= '</select>';


	$alltafseer = '<label for="tafseer_2">'.word('select_tafseer').'</label> <select class="se" id="tafseer_2" size="1" name="type">';
	for($i2x=1; $i2x<$tafseercount; $i2x++){
		if($type == $i2x){
		$alltafseer .= '<option value="'.$i2x.'" selected="selected">'.$tafseer[$i2x].'</option>';
		}else{
		$alltafseer .= '<option value="'.$i2x.'">'.$tafseer[$i2x].'</option>';
		}
	}
	$alltafseer .= '</select>';


	$s = '<form method="post" action="'.$this->url(14,0,"").'">';
	$s .= '<input name="sora" type="hidden" value="'.$sora.'" />';
	$s .= '<input name="ayanumber" type="hidden" value="'.$ayatnumbers.'" />';
	$s .= '<input name="tafseernumber" type="hidden" value="'.$tafseercount.'" />';
	$s .= ''.$allayat.' '.$alltafseer.' <input name="send" type="submit" value=" '.word('go').' " class="ser" />';
	$s .= '</form>';
	return $s;
	}

	function tafseer_view($sora,$aya,$type,$share_title=''){
	global $quran_type_view,$QURAN,$allw_optionsave;

	if(file_exists($this->tafseer_include($sora,$aya,$type))){
	include($this->tafseer_include($sora,$aya,$type));
	$err = '';
	}else{
	$err = word('not_found_tafseer_file');
	}

	$surah_name = $this->surah_name();

	$text_tafseer = $TAFSEER[$type][$sora][$aya];
	$ayatext = '<span itemprop="headline">'.$QURAN[$sora][$aya].'</span>';
	$ayaorders = $aya;

	if($text_tafseer == ""){ $text = word('not_found_tafseer'); }else{ $text = nl2br($text_tafseer); }

	if($allw_optionsave == 1){ $savetofilex = $this->tafseer_tools($sora,$type,$aya); }else{ $savetofilex = ''; }

	$s = $err;
	$s .= '<div class="tafseer" itemscope itemtype="http://schema.org/Article">';
	$s .= '<div class="changesoraform">'.$this->tafseer_form($sora,$aya,$type).''.$savetofilex.''.post_share($share_title, $this->url(23, $sora, $type, $aya)).'</div>';
	$s .= '<div class="ayat4tafseer">'.$ayatext.' <a href="'.$this->url(9,$sora,"").'"><span class="number">('.$ayaorders.') ('.$surah_name[$sora].')</span></a> <a href="'.$this->url(15,$sora,$ayaorders,$this->get_language()).'" title="'.$surah_name[$sora].' '.word('aya').' '.$ayaorders.'" rel="gb_page_center[465, 450] nofollow"><img src="'.$this->folder.'/icons/mp3.png" alt="mp3" /></a> <span class="author" itemprop="author">'.$this->tafseers[$type].'</span></div>';
	$s .= '<div class="ayat4tafseer_text" id="TAFSEER" itemprop="articleBody">'.$text.'</div>';
	$s .= '<img style="display:none; height:1px; width:1px;" itemprop="image" src="images/none.gif" alt="none" />';
	$s .= '<meta itemprop="datePublished" content="'.date("c", time()).'" />';
	$s .= '</div>';

	return $s;
	}

	function tafseer_save($sora,$aya,$type,$file_type=0){
	global $QURAN;

	if(file_exists($this->tafseer_include($sora,$aya,$type))){
	include($this->tafseer_include($sora,$aya,$type));
	$err = '';
	}else{
	$err = word('not_found_tafseer_file');
	}

	$surah_name = $this->surah_name();

	$text_tafseer = $TAFSEER[$type][$sora][$aya];
	$ayatext = $QURAN[$sora][$aya];
	$ayaorders = $aya;

	if($text_tafseer == ""){ 
		$text = word('not_found_tafseer'); 
	}else{ 
		$text = $text_tafseer; 
	}

	if($file_type == 1){
		$crlf="\r\n";
		$s = ''.$ayatext.' ('.$ayaorders.') ('.$surah_name[$sora].')'.$crlf.$crlf;
		$s .= $err.$text.$crlf.$crlf;
	}else{
		$s = '<p style="color:green; font-size:22px;">'.$ayatext.' <a href="'.$this->siteurl.'/'.$this->url(9,$sora,"").'"><span>('.$ayaorders.') ('.$surah_name[$sora].')</span></a></p>';
		$s .= '<p>'.$err.''.nl2br($text).'</p>';
	}

	return $s;
	}

	function tafseer_multi_save($sora,$type){
	global $quran_type_view,$QURAN;

	if($type==3 OR $type == 4){
		if($sora == 1 OR $sora == 2){
			include($this->tafseer_include($sora,1,$type));
			include($this->tafseer_include($sora,160,$type));
		}else{
			if(file_exists($this->tafseer_include($sora,$aya,$type))){
			include($this->tafseer_include($sora,1,$type));
			}else{
			$err = word('not_found_tafseer_file');
			}
		}
	}else{
		if(file_exists($this->tafseer_include($sora,$aya,$type))){
		include($this->tafseer_include($sora,1,$type));
		}else{
		$err = word('not_found_tafseer_file');
		}
	}

	$surah_name = $this->surah_name();
	$ayatnumbers = count($QURAN[$sora]);

	$s = '<br />';
	for($i=1; $i<$ayatnumbers+1; ++$i){
		$text_tafseer = $TAFSEER[$type][$sora][$i];
		if($text_tafseer == ""){
			$text = word('not_found_tafseer');
		}else{
			$text = nl2br($text_tafseer);
		}
		$s .= '<div style="color:#CC0000;">'.$QURAN[$sora][$i].' ( '.$i.' )</div>';
		$s .= '<div>'.$err.''.$text.'</div>';
		$s .= '<div style="padding:30px 0 30px 0; text-align:center;"><br />- - - - - - - - - - - - - - - - - - - - - - - - - -<br /><br /></div>';
	}

	return $s;
	}


	function tafseer_tools($sora,$type,$aya) {
	global $allw_save_word,$allw_save_txt,$allw_save_html,$allw_print;

	$linksd = $this->url(19,$sora,$type,$aya);
	$linksdx = $this->url(20,$sora,$type,$aya);
	$linksdh = $this->url(21,$sora,$type,$aya);
	$linksdp = $this->url(22,$sora,$type,$aya);

	if($allw_save_word != 1 AND $allw_save_txt != 1 AND $allw_save_html != 1 AND $allw_print != 1){
		$prints = '';
	}else{
		$prints = '<div class="saveoption"><p>'.word('save_options').'</p>';
		if($allw_save_word==1){
		$prints .= '<a rel="nofollow" href="'.$linksd.'"><img title="'.word('save_by_word').'" src="'.$this->folder.'/icons/word.png" alt="'.word('save_by_word').'" /></a>';
		}
		if($allw_save_txt==1){
		$prints .= '<a rel="nofollow" href="'.$linksdx.'"><img title="'.word('save_by_notepad').'" src="'.$this->folder.'/icons/txt.png" alt="'.word('save_by_notepad').'" /></a>';
		}
		if($allw_save_html==1){
		$prints .= '<a rel="nofollow" href="'.$linksdh.'"><img title="'.word('save_by_html').'" src="'.$this->folder.'/icons/html.png" alt="'.word('save_by_html').'" /></a>';
		}
		if($allw_print==1){
		$prints .= '<a rel="nofollow" href="'.$linksdp.'"><img title="'.word('print').'" src="'.$this->folder.'/icons/print.png" alt="'.word('print').'" /></a>';
		}
		$prints .= '</div>';
	}
	return $prints;
	}

	function tafseer_sora_loop($type) {

	$surah_name = $this->surah_name();

	$prints = '<div class="row">';
	for($i=1; $i<=114; $i++){
	$prints .= '<div class="col-xs-12 col-sm-6 col-md-4">';
	$prints .= '<div class="spacer">';
	$prints .= '<h5><a title="'.$surah_name[$i].'" href="'.$this->url(13,$i,$type).'" >'.$i.''.word('surah_in_title').' '.$surah_name[$i].'</a></h5>';
	$prints .= '</div>';
	$prints .= '</div>';
	}
	$prints .= '</div>';
	return $prints;
	}

	function tafseer_include($sora,$aya,$type){

	if($type==1){
		if($sora >= 1 AND $sora <= 2){
		$includepath = "".$this->folder_tafseer."/1-1.php";
		}elseif($sora >= 3 AND $sora <= 5){
		$includepath = "".$this->folder_tafseer."/1-2.php";
		}elseif($sora >= 6 AND $sora <= 10){
		$includepath = "".$this->folder_tafseer."/1-3.php";
		}elseif($sora >= 11 AND $sora <= 20){
		$includepath = "".$this->folder_tafseer."/1-4.php";
		}elseif($sora >= 21 AND $sora <= 30){
		$includepath = "".$this->folder_tafseer."/1-5.php";
		}elseif($sora >= 31 AND $sora <= 50){
		$includepath = "".$this->folder_tafseer."/1-6.php";
		}elseif($sora >= 51 AND $sora <= 80){
		$includepath = "".$this->folder_tafseer."/1-7.php";
		}elseif($sora >= 81 AND $sora <= 114){
		$includepath = "".$this->folder_tafseer."/1-8.php";
		}else{
		$includepath = "".$this->folder_tafseer."/1-1.php";
		}
	}elseif($type==2){
		$includepath = "".$this->folder_tafseer."/2.php";
	}elseif($type==3){
		if($sora >= 1 AND $sora <= 2){
			if($aya >=1 AND $aya <= 159){
			$includepath = "".$this->folder_tafseer."/3-1-1.php";
			}elseif($aya >=160 AND $aya <= 286){
			$includepath = "".$this->folder_tafseer."/3-1-2.php";	
			}
		}elseif($sora == 3){
		$includepath = "".$this->folder_tafseer."/3-2.php";
		}elseif($sora == 4){
		$includepath = "".$this->folder_tafseer."/3-3.php";
		}elseif($sora == 5){
		$includepath = "".$this->folder_tafseer."/3-4.php";
		}elseif($sora == 6 OR $sora <= 7){
		$includepath = "".$this->folder_tafseer."/3-5.php";
		}elseif($sora >= 8 AND $sora <= 10){
		$includepath = "".$this->folder_tafseer."/3-6.php";
		}elseif($sora >= 11 AND $sora <= 16){
		$includepath = "".$this->folder_tafseer."/3-7.php";
		}elseif($sora >= 17 AND $sora <= 20){
		$includepath = "".$this->folder_tafseer."/3-8.php";
		}elseif($sora >= 21 AND $sora <= 25){
		$includepath = "".$this->folder_tafseer."/3-9.php";
		}elseif($sora >= 26 AND $sora <= 36){
		$includepath = "".$this->folder_tafseer."/3-10.php";
		}elseif($sora >= 37 AND $sora <= 44){
		$includepath = "".$this->folder_tafseer."/3-11.php";
		}elseif($sora >= 45 AND $sora <= 55){
		$includepath = "".$this->folder_tafseer."/3-12.php";
		}elseif($sora >= 56 AND $sora <= 75){
		$includepath = "".$this->folder_tafseer."/3-13.php";
		}elseif($sora >= 76 AND $sora <= 114){
		$includepath = "".$this->folder_tafseer."/3-14.php";
		}else{
		$includepath = "".$this->folder_tafseer."/3-1-1.php";
		}
	}elseif($type==4){
		if($sora >= 1 AND $sora <= 2){
			if($aya >=1 AND $aya <= 159){
			$includepath = "".$this->folder_tafseer."/4-1-1.php";
			}elseif($aya >=160 AND $aya <= 286){
			$includepath = "".$this->folder_tafseer."/4-1-2.php";	
			}
		}elseif($sora == 3 OR $sora == 4){
		$includepath = "".$this->folder_tafseer."/4-2.php";
		}elseif($sora == 5 OR $sora == 6){
		$includepath = "".$this->folder_tafseer."/4-3.php";
		}elseif($sora == 7 OR $sora == 8 OR $sora == 9){
		$includepath = "".$this->folder_tafseer."/4-4.php";
		}elseif($sora >= 10 AND $sora <= 15){
		$includepath = "".$this->folder_tafseer."/4-5.php";
		}elseif($sora >= 16 AND $sora <= 19){
		$includepath = "".$this->folder_tafseer."/4-6.php";
		}elseif($sora >= 20 AND $sora <= 24){
		$includepath = "".$this->folder_tafseer."/4-7.php";
		}elseif($sora >= 25 AND $sora <= 33){
		$includepath = "".$this->folder_tafseer."/4-8.php";
		}elseif($sora >= 34 AND $sora <= 43){
		$includepath = "".$this->folder_tafseer."/4-9.php";
		}elseif($sora >= 44 AND $sora <= 63){
		$includepath = "".$this->folder_tafseer."/4-10.php";
		}elseif($sora >= 64 AND $sora <= 114){
		$includepath = "".$this->folder_tafseer."/4-11.php";
		}else{
		$includepath = "".$this->folder_tafseer."/4-1-1.php";
		}
	}elseif($type==5){
		$includepath = "".$this->folder_tafseer."/5.php";
	}else{
		$includepath = "".$this->folder_tafseer."/1-1.php";
	}

	return $includepath;
	}

	function print_page(){
		global $_GET;
		
		$surah_name = $this->surah_name();
		$aya_count = $this->aya_count;

		if(isset($_GET['aya']) && $_GET['aya'] != 0){
			$aya = intval($_GET['aya']);
		}else{
			$aya = 1;
		}

		if(isset($_GET['type']) && $_GET['type'] != 0){
			$type = intval($_GET['type']);
			if($type > count($this->tafseers)-1){ $type = 1; }
		}else{
			$type = 1;
		}

		if(isset($_GET['sora']) && $_GET['sora'] != 0 && $_GET['sora'] < 115){
			$sora_id = intval($_GET['sora']);
			if($aya > $aya_count[$sora_id]){ $aya = 1; }
			$txt = $this->tafseer_save($sora_id,$aya,$type);
			$soratitle = '&raquo; <a href="'.$this->url(6,$type,"").'">'.$this->tafseers[$type].'</a> '.word('surah_in_breadcrumbs').' '.$surah_name[$sora_id].'';
			
			$linksp = $this->siteurl.'/'.$this->url(23,$sora_id,$type,$aya);

			$titlepage = "".word('print')." | ".$this->tafseers[$type]." ".word('surah_in_title')." ".$surah_name[$sora_id]." - ".word('aya')." ".$aya."";
			$save_flie = 1;
			$surah_name2 = $this->surah_name();
			$titlepage_en = "".$this->tafseers_en[$type]." Sorah ".$surah_name2[$sora_id]." Aya ".$aya."";

			$dates = date("j/n/Y g:i:s",time());

			$texts = $this->clean_text($QURAN[$sora_id][$aya]);
			$m1 = $this->tafseers[$type]." - ".$texts;
			$m2 = str_replace(" ",",",$texts).", ".$this->tafseers[$type];
			
			$source = '<div style="text-align:center; padding:50px 0 10px 0;">'.$dates.'</div>';
			$source .= '<div style="text-align:center; padding:10px 0 10px 0;">'.word('source').' <a href="'.$linksp.'">'.$linksp.'</a></div>';
		}else{
			$sora_id = 1;
			if($aya > $aya_count[$sora_id]){ $aya = 1; }
			$titlepage = word('print');
			$txt = $this->tafseer_sora_loop($type);
			$soratitle = '&raquo; '.$this->tafseers[$type].'';
			$source = '';
		}

		$html = '<!DOCTYPE html>
		<html lang="en">
		  <head>
		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <title>'.$titlepage.'</title>

		    <link href="'.$this->folder.'/css/bootstrap.min.css" rel="stylesheet">
		    <link rel="stylesheet" href="'.$this->folder.'/css/print.css" type="text/css">
		    <link rel="stylesheet" type="text/css" href="'.$this->folder.'/css/rtl.css">
		    	
			<meta name="description" content="'.word('print').' | '.$m1.'">
			<meta name="keywords" content="'.word('print').', '.$m2.'">

		  </head>
		  <body>';

		$html .= '<div class="container">';

		$html .= '<div class="panel panel-default">
			<div class="panel-heading">
			<h3 class="panel-title">'.$titlepage.'</h3>
			</div>
			<div class="panel-body">
				<div class="tafseer">
					<div class="ayat4tafseer">'.$txt.'</div>
				</div>
			
			'.$source.'
			
			</div>
		</div>';

		$html .= '</div>';
		    
		$html .= '<script src="'.$this->folder.'/js/jquery.min.js"></script>
		    <script src="'.$this->folder.'/js/bootstrap.min.js"></script>
		  </body>
		</html>';
				
		return $html;
	}
	
	function save_to_html(){
	global $_GET;
		
		$surah_name = $this->surah_name();
		
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
			$txt = $this->tafseer_save($sora_id,$aya,$type);
			$soratitle = '&raquo; <a href="'.$this->url(6,$type,"").'">'.$this->tafseers[$type].'</a> '.word('surah_in_breadcrumbs').' '.$surah_name[$sora_id].'';
		}else{
			$sora_id = 1;
			if($type > count($this->tafseers)-1){ $type = 1; }
			$txt = $this->tafseer_sora_loop($type);
			$soratitle = '&raquo; '.$this->tafseers[$type].'';
		}

		$siteurl = $this->siteurl;
		$linksp = $siteurl.'/'.$this->url(23,$sora_id,$type,$aya);

		$titlepage = "".$this->tafseers[$type]." ".word('surah_in_title')." ".$surah_name[$sora_id]." - ".word('aya')." ".$aya."";
		$save_flie = 1;
		$surah_name2 = $this->surah_name();
		$titlepage_en = "".$this->tafseers_en[$type]." Sorah ".$surah_name2[$sora_id]." Aya ".$aya."";

	$dates = date("j/n/Y g:i:s",time());
	$doc = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html dir="rtl" xmlns="http://www.w3.org/1999/xhtml" xml:lang="ar" lang="ar">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>'.$titlepage.'</title>
	<style type="text/css">
	<!--

	* { margin: 0;	padding: 0; }

	body {
		margin: 0;
		font: bold 15px Arial, Helvetica, sans-serif;
		background-color: #fff;
	}


	a {
	color:#333; 
	text-decoration:none;
	}
	a:hover 
	{text-decoration:underline;
	}


	#wrap {
		margin: 0 auto; 
		width: 800px;
	}


	.title { 
	padding: 10px;
	margin: 15px 0 15px 0;
	text-align:center;
	border: 1px solid #a1cd3a;
	background-color:#fff;
	}

	.title h1 { 
	padding: 10px;
	margin: 0;
	text-align:center;
	font: bold 30px arial,tahoma;
	}


	div.ayat4tafseer { 
	padding: 10px;
	margin: 15px 0 15px 0;
	border: 1px solid #a1cd3a;
	background-color:#fff;
	color:#333;
	font: bold 15px arial,tahoma;
	line-height:25px;
	text-align:justify;
	}

	div.ayat4tafseer span { 
	font: normal 12px tahoma;
	color:#A3B926;
	}

	div.footer p{
	text-align:center;
	padding: 10px 0 10px 0;
	}

	div.copyright { 
	padding: 15px 0 15px 0;
	margin: 0;
	text-align:center;
	font: normal 12px tahoma;
	clear:both;
	}
	-->
	</style>

	</head>
	 
	<body>
	 
	 
	<div id="wrap">
	
	<div class="title"><h1>'.$titlepage.'</h1></div>
	 	 
	<div class="tafseer">
	<div class="ayat4tafseer">'.$txt.'</div>
	</div>

	<div style="text-align:center; padding:50px 0 10px 0;">'.word('saved_date').' '.$dates.'</div>
	<div style="text-align:center; padding:10px 0 10px 0;">'.word('source').' <a href="'.$linksp.'">'.$linksp.'</a></div>
	<div class="footer"><p><a href="'.$this->siteurl.'">'.$this->siteurl.'</a></p></div>
	 
	</div>
	 
	</body>
	 
	</html>';
	return $doc;
	}

	function convert_symbol($text=""){
		$text = str_replace("&quot;",'"',$text);
		$text = str_replace("&copy;","©",$text);
		$text = str_replace("&reg;","®",$text);
		$text = str_replace("&trade;","™",$text);
		$text = str_replace("&euro;","€",$text);
		$text = str_replace("&pound;","£",$text);
		$text = str_replace("&bdquo;","„",$text);
		$text = str_replace("&ldquo;","“",$text);
		$text = str_replace("&laquo;","«",$text);
		$text = str_replace("&raquo;","»",$text);
		$text = str_replace("&gt;",">",$text);
		$text = str_replace("&lt;","<",$text);
		$text = str_replace("&amp;","&",$text);
		return $text;
	}

	function save_to_notepad(){
		$surah_name = $this->surah_name();

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
			$txt = $this->tafseer_save($sora_id,$aya,$type,1);
		}else{
			$sora_id = 1;
			if($type > count($this->tafseers)-1){ $type = 1; }
			$txt = $this->tafseer_sora_loop($type);
		}
		return $this->convert_symbol($txt);
	}
	
	function save_to_multi_doc(){
		$surah_name = $this->surah_name();

		if(isset($_GET['type']) && $_GET['type'] != 0){
			$type = intval($_GET['type']);
		}else{
			$type = 1;
		}

		if(isset($_GET['sora']) && $_GET['sora'] != 0 && $_GET['sora'] < 115){
			$sora_id = intval($_GET['sora']);
			$txt = $this->tafseer_multi_save($sora_id,$type);
		}else{
			$sora_id = 1;
			if($type > count($this->tafseers)-1){ $type = 1; }
			$txt = $this->tafseer_sora_loop($type);
		}

		$titlepage = "".$this->tafseers[$type]." ".word('surah_in_title')." ".$surah_name[$sora_id]."";

		$dates = date("j/n/Y g:i:s",time());

		$doc = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>'.$titlepage.'</title>
		</head>
		<body>
		<div style="width:800px; margin:0 auto; padding:20px; font:normal 12px tahoma; line-height:22px; direction: rtl;">

		<h1 style="font:bold 30px arial; text-align:center; padding:20px 0 50px 0;">'.$titlepage.'</h1>
		<div style="font:bold 15px arial; padding:20px 0 20px 0; line-height:30px; text-align:right;">'.$txt.'</div>
		<div style="text-align:center; padding:50px 0 20px 0;">'.$dates.'</div>
		<div style="text-align:center; padding:0 0 20px 0;"><a href="'.$this->siteurl.'">'.$this->siteurl.'</a></div>

		</div>
		</body>
		</html>';
		return $doc;
	}

	function save_to_doc(){
		$surah_name = $this->surah_name();

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
			$txt = $this->tafseer_save($sora_id,$aya,$type);
			$soratitle = '&raquo; <a href="'.$this->url(6,$type,"").'">'.$this->tafseers[$type].'</a> '.word('surah_in_breadcrumbs').' '.$surah_name[$sora_id].'';
		}else{
			$sora_id = 1;
			if($type > count($this->tafseers)-1){ $type = 1; }
			$txt = $this->tafseer_sora_loop($type);
			$soratitle = '&raquo; '.$this->tafseers[$type].'';
		}

		$siteurl = $this->siteurl;
		$linksp = $siteurl.'/'.$this->url(23,$sora_id,$type,$aya);

		$titlepage = "".$this->tafseers[$type]." ".word('surah_in_title')." ".$surah_name[$sora_id]." - ".word('aya')." ".$aya."";
		$surah_name2 = $this->surah_name();
		$titlepage_en = "".$this->tafseers_en[$type]." Sorah ".$surah_name2[$sora_id]." Aya ".$aya."";
	
		$dates = date("j/n/Y g:i:s",time());

		$doc = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>'.$titlepage.'</title>
		</head>
		<body>
		<div style="width:800px; margin:0 auto; padding:20px; font:normal 12px tahoma; line-height:22px; direction: rtl;">

		<h1 style="font:bold 30px arial; text-align:center; padding:20px 0 50px 0;">'.$titlepage.'</h1>
		<div style="font:bold 16px arial; padding:20px 0 20px 0; line-height:30px;">'.$txt.'</div>
		<div style="text-align:center; padding:50px 0 20px 0;">'.$dates.'</div>
		<div style="text-align:center; padding:0 0 20px 0;"><a href="'.$linksp.'">'.$linksp.'</a></div>

		</div>
		</body>
		</html>';
	return $doc;
	}

	function home_save_sora($sora) {
	global $_GET;

	$tafseer = $this->tafseers;

	$tafseercount = count($tafseer);

	$code = '<div class="changesoraform">';
	$code .= '<p>'.word('save_tafseer_full_surah').'</p>';
	$code .= '<form name="formname" action="'.$this->url(2,0,"").'" method="get">';
	$code .= '<input type="hidden" name="sora" value="'.$sora.'" />';
	$code .= '<input type="hidden" name="save_type" value="multi_word" />';
	$code .= '<select size="1" name="type" class="se">';
	$n=0;
	for($i=1; $i<$tafseercount; $i++){
	++$n;
	$code .= '<option value="'.$i.'">&nbsp;'.$tafseer[$i].'</option>';
	}
	$code .= '</select>';
	$code .= ' <input type="submit" value=" '.word('save').' " class="ser" />';
	$code .= '</form>';
	$code .= '</div>';
	return $code;
	}


	function listen_form($sora,$aya,$x,$l){
	global $readers_ayat, $_GET;

	$s_number = count($readers_ayat);

	$code = '<div class="selectbox_sound">';
	$code .= '<form name="FormName" action="'.$this->url(17,0,0).'" method="get">';
	$code .= '<input name="sora" type="hidden" value="'.$sora.'" />';
	$code .= '<input name="aya" type="hidden" value="'.$aya.'" />';
	$code .= '<input name="l" type="hidden" value="'.$l.'" />';
	$code .= ''.word('select_qaria').'<br /><select size="10" name="x" class="se">';
	for($i=1; $i<$s_number+1; $i++){
		if(in_array($this->get_language(), $this->get_rtl_languages())){
			$names = $readers_ayat[$i]['name_ar'];
			$title = $readers_ayat[$i]['name_en'];
		}else{
			$names = $readers_ayat[$i]['name_en'];
			$title = $readers_ayat[$i]['name_ar'];
		}

		if($x==$i){
			$code .= '<option value="'.$i.'" selected="selected" title="'.$title.'">'.$names.'</option>';
		}else{
			$code .= '<option value="'.$i.'" title="'.$title.'">'.$names.'</option>';
		}
	}
	$code .= '</select><br /><br />';

	$code .= ' <input type="submit" value=" '.word('change').' " class="ser" />';
	$code .= '</form></div>';
	return $code;
	}



	function home_readers_form($sora, $l, $x){
	global $readers_sora, $_GET;

	$links = $this->url(3,0,"");
	$s_number = count($readers_sora);

	$code = '<div class="selectbox_sound">';
	$code .= '<form name="FormName" action="'.$links.'" method="post">';
	$code .= '<input name="sora" type="hidden" value="'.$sora.'" />';
	if($l != ""){
	$code .= '<input name="l" type="hidden" value="'.$l.'" />';
	$code .= '<input name="translate" type="hidden" value="1" />';
	}else{
	$code .= '';
	}
	$code .= '<select size="1" name="x" class="se">';
	for($i=1; $i<$s_number+1; $i++){

		if(in_array($this->get_language(), $this->get_rtl_languages())){
			$names = $readers_sora[$i]['name_ar'];
			$title = ''.$readers_sora[$i]['name_ar'].' '.$readers_sora[$i]['description_ar'].'';
		}else{
			$names = $readers_sora[$i]['name_en'];
			$title = ''.$readers_sora[$i]['name_ar'].' '.$readers_sora[$i]['description_en'].'';
		}

		if($x==$i){
			$code .= '<option value="'.$i.'" selected="selected" title="'.$title.'">'.$names.'</option>';
		}else{
			$code .= '<option value="'.$i.'" title="'.$title.'">'.$names.'</option>';
		}
	}
	$code .= '</select>';

	$code .= ' <input type="submit" value=" '.word('change').' " class="ser" />';
	$code .= '</form>';
	$code .= '</div>';
	return $code;
	}

	function home_check_sora($sora,$n,$translatesound=""){
	global $readers_sora;

	$sora_number = strlen($sora);

	if($sora_number==1){
	$s1 = '00'.$sora.'';
	}elseif($sora_number==2){
	$s1 = '0'.$sora.'';
	}elseif($sora_number==3){
	$s1 = $sora;
	}

	if($translatesound == ""){
		if(preg_match('/:N:/i', $readers_sora[$n]['folder'])) {
			$s = str_replace(":N:",$s1,$readers_sora[$n]['folder']).".mp3";
		}else{
			$s = ''.$readers_sora[$n]['folder'].''.$s1.'.mp3';
		}
	}else{
		if(preg_match('/:N:/i', $translatesound)) {
			$s = str_replace(":N:",$s1,$translatesound).".mp3";
		}else{
			$s = ''.$translatesound.''.$s1.'.mp3';
		}
	}
	return $s;
	}

	function sound_check_aya($sora,$aya,$n){
	global $readers_ayat;

	$sora_number = strlen($sora);
	$aya_number = strlen($aya);

	if($sora_number==1){
	$s1 = '00'.$sora.'';
	}elseif($sora_number==2){
	$s1 = '0'.$sora.'';
	}elseif($sora_number==3){
	$s1 = $sora;
	}

	if($aya_number==1){
	$s2 = '00'.$aya.'';
	}elseif($aya_number==2){
	$s2 = '0'.$aya.'';
	}elseif($aya_number==3){
	$s2 = $aya;
	}

	$s = ''.$readers_ayat[$n]['folder'].'/'.$s1.''.$s2.'.mp3';
	return $s;
	}

	function home_form_change_aya($sora,$from,$to){
	global $_GET,$QURAN;

	$surah_name = $this->surah_name();

	if(isset($_GET['x']) || intval($_GET['x']) != 0){
	$reader = '<input type="hidden" name="x" value="'.intval($_GET['x']).'" />';
	}else{
	$reader = '';
	}

	$ayatnumbers = count($QURAN[''.$sora.'']);

	$s = '<div class="changesoraform">';
	$s .= '<form name="formname" action="'.$this->url(1,0,"").'" method="post">';
	$s .= '<input type="hidden" name="change" value="1" />';
	$s .= '<input type="hidden" name="sora" value="'.$sora.'" />';
	$s .= ''.$reader.'';
	$s .= '<label for="qq1">'.word('the_surah').'</label> <select id="qq1" size="1" name="sora_link" class="se" onchange="location = this.options[this.selectedIndex].value;">';
	for($i=1; $i<=114; $i++){
		if($sora==$i){ 
			$s .= '<option value="'.$this->url(9,$i,"").'" selected="selected">'.$surah_name[$i].'</option>'; 
		}else{ 
			$s .= '<option value="'.$this->url(9,$i,"").'">'.$surah_name[$i].'</option>'; 
		}
	}
	$s .= '</select> ';

	$s .= '<label for="qq2">'.word('from').'</label> <select id="qq2" size="1" name="f" class="se2">';
	for($i2=1; $i2<$ayatnumbers+1; $i2++){
	if(intval($from)==$i2){ $s .= '<option value="'.$i2.'" selected="selected">'.$i2.'</option>'; }else{ $s .= '<option value="'.$i2.'">'.$i2.'</option>'; }
	}
	$s .= '</select> ';

	$s .= '<label for="qq3">'.word('to').'</label> <select id="qq3" size="1" name="t" class="se2">';
	for($i3=1; $i3<$ayatnumbers+1; $i3++){
	if($to == 0){
	$to = $ayatnumbers;
	}else{
	$to = $to;
	}
	if(intval($to)==$i3){ $s .= '<option value="'.$i3.'" selected="selected">'.$i3.'</option>'; }else{ $s .= '<option value="'.$i3.'">'.$i3.'</option>'; }
	}
	$s .= '</select> ';

	$s .= ' <input type="submit" value=" '.word('change').' " class="ser" />';
	$s .= '</form>';
	$s .= '</div>';
	return $s;
	}

	function audio_player($url,$auto){

	if($auto==1){ $au = ' autoplay'; }else{ $au = ''; }

	$s = '<audio controls'.$au.'>
	  <source src="'.$url.'" type="audio/mpeg">
	  Your browser does not support the audio element.
	</audio>';
	return $s;
	}

	function home_view_sora($sora,$from=1,$to=7){
	global $QURAN;

	$surah_name = $this->surah_name();
	$ayatnumbers = count($QURAN[$sora]);

	if($from > $to){ $from=1; $to=$ayatnumbers; }
	if($from == 0){ $from=1; }
	if($to == 0){ $to=$ayatnumbers; }
	if($to > $ayatnumbers){ $to = $ayatnumbers; }

	$s = '';
	for($i=$from; $i<=$to; ++$i){
	$s .= '<a title="'.word('aya').' '.$i.'" href="'.$this->url(7,$sora,$i).'"><span class="ayat">'.$QURAN[$sora][$i].'</span></a><img class="ayatnumber" src="images/numbers/'.$i.'.gif" alt="'.word('surah').' '.$surah_name[$sora].' - '.word('aya_count').' '.$ayatnumbers.' - '.word('aya').' '.$i.'" title="'.word('surah').' '.$surah_name[$sora].' - '.word('aya_count').' '.$ayatnumbers.' - '.word('aya').' '.$i.'" />';
	}
	return $s;
	}

	function home_view_sora_with_option($idsora=0){
	global $_GET, $QURAN, $allw_readerform, $default_reader, $allw_listensora, $allw_formchangesoran, $allw_savealltafseer;

	if($idsora > 114){ $idsora = 114; }
	if(isset($_GET['f']) && intval($_GET['f']) != 0){ $from = intval($_GET['f']); }else{ $from = 1; }
	if(isset($_GET['t']) && intval($_GET['t']) != 0){ $to = intval($_GET['t']); }else{ $to = count($QURAN[$idsora]); }
	if(!isset($_GET['x'])){ $x = $default_reader; }else{ $x = intval($_GET['x']); }

	if($allw_readerform==1){
		$readers_form = $this->home_readers_form($idsora, 0, $x);
	}

	$audio_url = $this->home_check_sora($idsora,$x);
	$code = '';
	if($allw_listensora==1){ 
	$code .= '<div class="listensora">'.$this->audio_player($audio_url,1).''.$readers_form.'</div>'; 
	}
	if($allw_formchangesoran==1){ 
	$code .= $this->home_form_change_aya($idsora,$from,$to); 
	}
	if($allw_savealltafseer==1){ 
	$code .= $this->home_save_sora($idsora); 
	}
	$code .= $this->home_view_sora($idsora,$from,$to);

	return $code;
	}

	function home_page(){
	global $_GET;

	$languages = $this->languages();

	$code = '<div class="row">';
	foreach($languages as $key=>$value){
	$id = $languages[$key]['id'];
	$name = $languages[$key]['name'];
	$name_ar = $languages[$key]['name_ar'];
	$name_en = $languages[$key]['name_en'];
	$file = $languages[$key]['file'];
	$book = $languages[$key]['book'];
	$more = $languages[$key]['more'];
	$source = $languages[$key]['source'];
	$lang = $languages[$key]['lang'];

	if(file_exists(''.$this->get_theme_folder().'/flags/'.$key.'.png')){ 
		$flag = ''.$this->get_theme_folder().'/flags/'.$key.'.png'; 
	}else{ 
		$flag = ''.$this->get_theme_folder().'/flags/other.png';
	}
	$get_flags = '<img src="'.$flag.'" alt="'.$name.'" />';

	if($key == "ar"){
		$code .= '<div class="col-xs-12 col-sm-4 col-md-4"><div class="spacer"><h5><a title="'.$name.' - '.$name_en.'" href="'.$this->url(9,1,"").'">'.$get_flags.' '.$name.'</a></h5></div></div>';
	}else{
		$code .= '<div class="col-xs-12 col-sm-4 col-md-4"><div class="spacer"><h5><a title="'.$name_en.' - '.$name_ar.'" href="'.$this->url(10,$key,"").'">'.$get_flags.' '.$name.'</a></h5></div></div>';
	}

	}

	$code .= '</div>';

	return $code;
	}

	function get_hreflang($language_code='', $notin=''){
		$languages = $this->languages();
		if($language_code == ""){
			$code = '';
			foreach($languages as $key=>$value){
				$id = $languages[$key]['id'];
				$name = $languages[$key]['name'];
				$name_ar = $languages[$key]['name_ar'];
				$name_en = $languages[$key]['name_en'];
				$file = $languages[$key]['file'];
				$book = $languages[$key]['book'];
				$more = $languages[$key]['more'];
				$source = $languages[$key]['source'];
				$lang = $languages[$key]['lang'];
				if($notin != $source){
				$code .= '<link rel="alternate" hreflang="'.$lang.'" title="'.$name.'" href="'.$this->siteurl.'/'.$this->url(10, $source).'" />';
				}
			}
		}else{
			$code .= '<link rel="alternate" hreflang="'.$languages[$language_code]['lang'].'" title="'.$languages[$language_code]['name'].'" href="'.$this->siteurl.'/'.$this->url(10, $languages[$language_code]['source']).'" />';
		}
		return $code;
	}
	
	function flags(){
	global $_GET;

	$languages = $this->languages();

	$code = '<div class="row">';
	foreach($languages as $key=>$value){
	$id = $languages[$key]['id'];
	$name = $languages[$key]['name'];
	$name_ar = $languages[$key]['name_ar'];
	$name_en = $languages[$key]['name_en'];
	$file = $languages[$key]['file'];
	$book = $languages[$key]['book'];
	$more = $languages[$key]['more'];
	$source = $languages[$key]['source'];

	if(file_exists(''.$this->get_theme_folder().'/flags/'.$key.'.png')){ 
		$flag = ''.$this->get_theme_folder().'/flags/'.$key.'.png'; 
	}else{ 
		$flag = ''.$this->get_theme_folder().'/flags/other.png';
	}
	$get_flags = '<img src="'.$flag.'" alt="'.$name.'" />';

	if($key == "ar"){
	$code .= '<div class="col-xs-12 col-sm-4 col-md-4"><div class="spacer"><h5><a title="'.$name.' - '.$name_en.'" href="'.$this->url(9,1,"").'">'.$get_flags.' '.$name.'</a></div></h5></div>';
	}else{
	$code .= '<div class="col-xs-12 col-sm-4 col-md-4"><div class="spacer"><h5><a title="'.$name.' - '.$name_en.'" href="'.$this->url(10,$key,"").'">'.$get_flags.' '.$name.'</a></div></h5></div>';
	}

	}

	$code .= '</div>';

	return $code;
	}

	function language_keywords($type){
	$languages = $this->languages();

	$code = '';
	foreach($languages as $key=>$value){
	$id = $languages[$key]['id'];
	$name = $languages[$key]['name'];
	$name_ar = $languages[$key]['name_ar'];
	$name_en = $languages[$key]['name_en'];
	$file = $languages[$key]['file'];
	$book = $languages[$key]['book'];
	$more = $languages[$key]['more'];
	$source = $languages[$key]['source'];

	if($type == 1){
		$code .= ''.$name.' | '.$name_en.' | '.$name_ar.', ';
	}else{
		$code .= ''.$name.', '.$name_en.', '.$name_ar.', ';
	}
	}
	return rtrim($code, ', ');
	}

	function check_files(){

	$folder_tafseer = $this->folder_tafseer;

	$MSG = '';

	/* Start Check Tafseer Files (1) */
	if(!file_exists("".$folder_tafseer."/1-1.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/1-1.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/1-2.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/1-2.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/1-3.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/1-3.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/1-4.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/1-4.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/1-5.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/1-5.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/1-6.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/1-6.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/1-7.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/1-7.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/1-8.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/1-7.php</li>';
	$err = 1;
	}
	/* End Check Tafseer Files (1) */

	/* Start Check Tafseer Files (2) */
	if(!file_exists("".$folder_tafseer."/2.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/2.php</li>';
	$err = 1;
	}
	/* End Check Tafseer Files (2) */

	/* Start Check Tafseer Files (3) */
	if(!file_exists("".$folder_tafseer."/3-1-1.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/3-1-1.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/3-1-2.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/3-1-2.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/3-3.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/3-3.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/3-4.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/3-4.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/3-5.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/3-5.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/3-6.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/3-6.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/3-7.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/3-7.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/3-8.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/3-8.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/3-9.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/3-9.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/3-10.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/3-10.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/3-11.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/3-11.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/3-12.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/3-12.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/3-13.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/3-13.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/3-14.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/3-14.php</li>';
	$err = 1;
	}
	/* End Check Tafseer Files (3) */

	/* Start Check Tafseer Files (4) */
	if(!file_exists("".$folder_tafseer."/4-1-1.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/4-1-1.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/4-1-2.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/4-1-2.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/4-2.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/4-2.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/4-3.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/4-3.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/4-4.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/4-4.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/4-5.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/4-5.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/4-6.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/4-6.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/4-7.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/4-7.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/4-8.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/4-8.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/4-9.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/4-9.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/4-10.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/4-10.php</li>';
	$err = 1;
	}

	if(!file_exists("".$folder_tafseer."/4-11.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/4-11.php</li>';
	$err = 1;
	}
	/* End Check Tafseer Files (4) */

	/* Start Check Tafseer Files (5) */
	if(!file_exists("".$folder_tafseer."/5.php")){
	$MSG .= '<li>Not Found This File '.$folder_tafseer.'/5.php</li>';
	$err = 1;
	}
	/* End Check Tafseer Files (5) */

	if($err==1){
	$txt = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>E R R O R</title>
	<style type="text/css">
	body {
		margin: 0;
		padding:15px 0 15px 0;
		font: bold 15px Arial, Helvetica, sans-serif;
		background-color: #fff;
	}

	#wrap {
		margin: 0 auto;
		padding:15px;
		width: 800px;
		border: 5px solid #cccccc;
		background-color: #f2f2f2;
	}

	h2 { 
	padding: 10px;
	margin: 0;
	font: bold 22px arial,tahoma;
	text-align:center;
	color:red;
	}

	ul { 
	padding: 10px;
	margin: 0;
	font: normal 15px arial,tahoma;
	}

	li { 
	padding: 5px;
	margin: 0;
	}
	</style>
	</head>
	<body><div id="wrap"><h2>الملفات التاليه غير موجوده على موقعك ويجب عليك رفعها الى موقعك حتى يعمل السكربت بدون مشاكل</h2><ul>';
	$txt .= $MSG;
	$txt .= '</ul></div></body></html>';
	echo $txt;
	exit;
	}else{
	echo $txt = '';
	}

	}

	function get_navbar(){
		$navbar_links = array('ar', 'en', 'fr', 'de', 'es', 'pt', 'ru', 'zh', 'ko', 'id');
		$languages = $this->languages();
		$code = '<ul class="nav navbar-nav">';
		for($i=0; $i < count($navbar_links); ++$i){
			$key = $navbar_links[$i];
			$name = $languages[$key]['name'];
			$flag = ''.$this->get_theme_folder().'/flags/'.$key.'.png';
			if($this->get_language() == $key){
				$addclass = ' class="active"';
			}else{
				$addclass = '';
			}
			$code .= '<li'.$addclass.'><a href="'.$this->url(10, $key).'"><img src="'.$flag.'" alt="'.$name.'" /> '.$name.'</a></li>';
		}
		$code .= '<li><a href="language.html"><img src="'.$this->get_theme_folder().'/flags/other.png" alt="'.word('more').'" /> '.word('more').'</a></li>';
		$code .= '</ul>';
		return $code;
	}
	
	function url($type, $id, $more="", $more2=""){

	$mod_rewrite = $this->mod_rewrite_allow;
	$languages = $this->languages();

	if($type==1){
	if ($mod_rewrite=="1"){ $url = "index.html"; }else{ $url = "index.php"; }
	}elseif($type==2){
	if ($mod_rewrite=="1"){ $url = "save.php"; }else{ $url = "save.php"; }
	}elseif($type==3){
	if ($mod_rewrite=="1"){ $url = "reader.html"; }else{ $url = "index.php?reader=1"; }
	}elseif($type==6){
	if ($mod_rewrite=="1"){ $url = "tafseer-".$id.".html"; }else{ $url = "tafseer.php?type=".$id.""; }
	}elseif($type==7){
	if ($mod_rewrite=="1"){ $url = "t-".$id."-1-".$more.".html"; }else{ $url = "tafseer.php?sora=".$id."&type=1&aya=".$more.""; }
	}elseif($type==8){
	if ($mod_rewrite=="1"){ $url = "translate-".$more."-".$id.".html"; }else{ $url = "translate.php?l=".$more."&sora=".$id.""; }
	}elseif($type==9){
	if ($mod_rewrite=="1"){ $url = "sora-".$id.".html"; }else{ $url = "index.php?sora=".$id.""; }
	}elseif($type==10){
	if ($mod_rewrite=="1"){ $url = "language-".$id.".html"; }else{ $url = "translate.php?l=".$id.""; }
	}elseif($type==11){
	if ($mod_rewrite=="1"){ $url = "book-details-".$id."-".$more.".html"; }else{ $url = "book.php?id=".$id."&l=".$more.""; }
	}elseif($type==12){
	if ($mod_rewrite=="1"){ $url = "books-".$id.".html"; }else{ $url = "book.php?l=".$id.""; }
	}elseif($type==13){
	if ($mod_rewrite=="1"){ $url = "tafseer-".$more."-".$id.".html"; }else{ $url = "tafseer.php?type=".$more."&sora=".$id.""; }
	}elseif($type==14){
	if ($mod_rewrite=="1"){ $url = 'location.html'; }else{ $url = 'index.php?tafseet=1'; }
	}elseif($type==15){
	if ($mod_rewrite=="1"){ $url = "listen-".$id."-".$more."-".$more2.".html"; }else{ $url = "listen.php?sora=".$id."&amp;aya=".$more."&amp;l=".$more2.""; }
	}elseif($type==16){
	$url = 'contact.php?send=1';
	}elseif($type==17){
	$url = 'listen.php';
	}elseif($type==18){
	if ($mod_rewrite=="1"){ $url = "reader-".$id."-".$more.".html"; }else{ $url = "index.php?sora=".$id."&x=".$more.""; }
	}elseif($type==19){
	if ($mod_rewrite=="1"){ $url = 'word-'.$id.'-'.$more.'-'.$more2.'.html'; }else{ $url = 'save.php?sora='.$id.'&type='.$more.'&aya='.$more2.'&save_type=word'; }
	}elseif($type==20){
	if ($mod_rewrite=="1"){ $url = 'notepad-'.$id.'-'.$more.'-'.$more2.'.html'; }else{ $url = 'save.php?sora='.$id.'&type='.$more.'&aya='.$more2.'&save_type=notepad'; }
	}elseif($type==21){
	if ($mod_rewrite=="1"){ $url = 'html-'.$id.'-'.$more.'-'.$more2.'.html'; }else{ $url = 'save.php?sora='.$id.'&type='.$more.'&aya='.$more2.'&save_type=html'; }
	}elseif($type==22){
	if ($mod_rewrite=="1"){ $url = 'copy-'.$id.'-'.$more.'-'.$more2.'.html'; }else{ $url = 'save.php?sora='.$id.'&type='.$more.'&aya='.$more2.'&save_type=print'; }
	}elseif($type==23){
	if ($mod_rewrite=="1"){ $url = "t-".$id."-".$more."-".$more2.".html"; }else{ $url = "tafseer.php?sora=".$id."&type=".$more."&aya=".$more2.""; }
	}elseif($type==24){
	if ($mod_rewrite=="1"){ $url = "s-".$id."-".$more."-".$more2.".html"; }else{ $url = "translate.php?l=".$id."&sora=".$more."&x=".$more2.""; }

	}
	return $url;
	}

	function get_breadcrumb($morelink=''){
	global $word;
	$code = '<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">';
	$code .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
	<a itemprop="item" href="'.$this->siteurl.'"><span itemprop="name">'.word('home').'</span></a>
	<meta itemprop="position" content="1" />
	</li>';

	if($morelink == ""){
		$code .= '';
	}else{
		if(is_array($morelink)){
			$i=1;
			foreach ($morelink as $k => $v) {
			++$i;
			if($morelink[$k][0] == ""){
				$code .= '';
			}else{
				if($morelink[$k][2] == 1){
					$active = ' class="active"';
				}else{
					$active = '';
				}
				$code .= '<li'.$active.' itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
					if($morelink[$k][1] == ""){
						$code .= '<span itemprop="name">'.$morelink[$k][0].'</span>';
					}else{
						$code .= '<a itemprop="item" href="'.$morelink[$k][1].'"><span itemprop="name">'.$morelink[$k][0].'</span></a>';
					}
				$code .= '<meta itemprop="position" content="'.$i.'" />';
				$code .= '</li>';
				}
			}
		}else{
			$code .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			'.$morelink.'
			<meta itemprop="position" content="2" />
			</li>';
		}
	}
	$code .= '</ol>';
	return $code;
	}
	
	function aya_loop($sora=1){
	global $QURAN;

	$surah_name = $this->surah_name();
	$ayatnumbers = count($QURAN[$sora]);
	if($ayatnumbers > 10){
		$ayatnumbers = 10;
	}
	$s = '';
	for($i=1; $i<=$ayatnumbers; ++$i){
	$s .= $QURAN[$sora][$i];
	if($ayatnumbers != $i ){ 
	$s .= ' - '; 
	}
	}
	return $s;
	}
	
	function clean_text($text=''){
		$code = preg_replace('/ّ|َ|ً|ُ|ٌ|ِ|ٍ|ْ|ٰ/', '', $text);
		return $code; 
	}
	
	function create_xml(){
		$code = '<?xml version="1.0" encoding="utf-8"?>
		<urlset
		      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
		      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
		      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
		            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
		<url>
		  <loc>'.$this->siteurl.'</loc>
		</url>'."\n";

		for($i=1; $i<=114; ++$i){
			$code .= '<url>'."\n";
			$code .= '<loc>'.$this->siteurl.'/'.$this->url(9, $i).'</loc>'."\n";
			$code .= '</url>'."\n";
		}

		for($ii=1; $ii<=5; ++$ii){
			$code .= '<url>'."\n";
			$code .= '<loc>'.$this->siteurl.'/'.$this->url(6, $ii).'</loc>'."\n";
			$code .= '</url>'."\n";
		}

		for($i=1; $i<=5; ++$i){
			for($i2=1; $i2<=114; ++$i2){
				$code .= '<url>'."\n";
				$code .= '<loc>'.$this->siteurl.'/'.$this->url(13, $i2, $i).'</loc>'."\n";
				$code .= '</url>'."\n";
			}
		}

		for($i=1; $i<=5; ++$i){
			for($i2=1; $i2<=114; ++$i2){
				for($i3=1; $i3<=$this->aya_count[$i2]; ++$i3){
					$code .= '<url>'."\n";
					$code .= '<loc>'.$this->siteurl.'/'.$this->url(23, $i2, $i, $i3).'</loc>'."\n";
					$code .= '</url>'."\n";
				}
			}
		}

		$languages = $this->languages();
		foreach($languages as $key=>$value){
			$id = $languages[$key]['id'];
			$name = $languages[$key]['name'];
			$source = $languages[$key]['source'];
			if($key != "ar"){
				$code .= '<url>'."\n";
				$code .= '<loc>'.$this->siteurl.'/'.$this->url(10, $source).'</loc>'."\n";
				$code .= '</url>'."\n";
			}
		}
		
		foreach($languages as $key=>$value){
			$id = $languages[$key]['id'];
			$name = $languages[$key]['name'];
			$source = $languages[$key]['source'];
			if($key != "ar"){
				for($i2=1; $i2<=114; ++$i2){
					$code .= '<url>'."\n";
					$code .= '<loc>'.$this->siteurl.'/'.$this->url(8, $i2, $source).'</loc>'."\n";
					$code .= '</url>'."\n";
				}
			}
		}
	$code .= '</urlset>';
	return $code;
	}
	
	function navbar($lang=0){
		if(in_array($this->get_language(), $this->get_rtl_languages())){
			$navbar = $this->url(4,0,"");
		}else{
			$navbar = $this->url(5,0,"");
		}
	return $navbar;
	}
}
?>