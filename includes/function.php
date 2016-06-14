<?php
include("current-page.php");
include("setting.php");
include("class.php");
$quranforall = new QuranForAll();
$siteurl = rtrim($current_page->baseurl, "/");
$quranforall->sitename = $sitename;
$quranforall->sitename_en = $sitename_en;
$quranforall->siteurl = $siteurl;
$quranforall->folder_translate = $folder_translate;
$quranforall->folder_language = $folder_language;
$folder_tafseer = $folder_tafseer;
$quranforall->folder = $folder;
$quranforall->default_language = $default_lang;
$quranforall->mod_rewrite_allow = $htmlorphp;
$quranforall->random_books = 5;

if(isset($_GET['l']) && $_GET['l'] != "" && in_array($_GET['l'], $quranforall->get_array_language())){
	if(file_exists("includes/language/".strip_tags($_GET['l']).".php")){
		include("language/".strip_tags($_GET['l']).".php");
	}else{
		include("language/en.php");
	}
}else{
	if(in_array($quranforall->get_default_language(), $quranforall->get_array_language())){
		if(file_exists("includes/language/".$quranforall->get_default_language().".php")){
			include('language/'.$quranforall->get_default_language().'.php');
		}else{
			include("language/en.php");
		}
	}else{
		include("language/en.php");
	}
}

include("tpl.php");
$Template = new Template();
$Template->sitename = $sitename;
$Template->siteurl = $siteurl;
$Template->footercode = $textfooter;
$Template->headercode = $headercode;
$Template->headertext = $textheader;
$Template->bodycode = $bodycode;
$Template->Templatefolder = $quranforall->get_theme_folder();
$Template->nav = $quranforall->get_navbar();
$Template->lang = $quranforall->get_language();

if(in_array($quranforall->get_language(), $quranforall->get_rtl_languages())){
	$Template->headercode .= '<link rel="stylesheet" type="text/css" href="'.$quranforall->get_theme_folder().'/css/rtl.css" />';
}else{
	if(!isset($_GET['l'])){
		if(in_array($quranforall->get_default_language(), $quranforall->get_rtl_languages())){
			$Template->headercode .= '<link rel="stylesheet" type="text/css" href="'.$quranforall->get_theme_folder().'/css/rtl.css" />';
		}
	}
}

$Template->headercode .= $quranforall->get_hreflang($quranforall->get_language());
$Template->copyright = 'Powered by <a href="http://www.nwahy.com">Quran For All</a> version '.$quranforall->get_version().'';

function post_share($titles="", $page_url=""){
global $current_page, $folder;

	$just_image = 1;
	$icons_path = ''.$folder.'/icons/share/';

	$title = htmlentities(urlencode($titles));
	$url = rtrim($current_page->baseurl, "/").'/'.urlencode($page_url).'';

	$code = '<div class="post_share">';

	if($just_image == 1){
		$code .= '<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$url.'&title='.$title.'"><img src="'.$icons_path.'/fb-share.png" alt="Facebook" /></a> ';
		$code .= '<a target="_blank" href="http://twitter.com/home?status='.$title.'+'.$url.'"><img src="'.$icons_path.'/twitter-share.png" alt="Twitter" /></a> ';
		$code .= '<a target="_blank" href="https://plus.google.com/share?url='.$url.'"><img src="'.$icons_path.'/google-share.png" alt="Google+" /></a> ';
		$code .= '<a target="_blank" href="http://pinterest.com/pin/create/bookmarklet/?media=[MEDIA]&url='.$url.'&is_video=false&description='.$title.'"><img src="'.$icons_path.'/pin-share.png" alt="Pinterest" /></a> ';
		$code .= '<a target="_blank" href="http://www.reddit.com/submit?url='.$url.'&title='.$title.'"><img src="'.$icons_path.'/reddit-share.png" alt="Reddit" /></a> ';
		$code .= '<a target="_blank" href="http://www.stumbleupon.com/submit?url='.$url.'&title='.$title.'"><img src="'.$icons_path.'/stumble-share.png" alt="StumbleUpon" /></a> ';
		$code .= '<a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url='.$url.'&title='.$title.'&source="><img src="'.$icons_path.'/linkedin-share.png" alt="Linkedin" /></a> ';
		$code .= '<a target="_blank" href="http://www.tumblr.com/share?v=3&u='.$url.'&t='.$title.'"><img src="'.$icons_path.'/tumblr-share.png" alt="Tumblr" /></a> ';
		$code .= '<a target="_blank" href="http://www.google.com/bookmarks/mark?op=edit&bkmk='.$url.'&title='.$title.'&annotation="><img src="'.$icons_path.'/googleb-share.png" alt="Google Bookmarks" /></a> ';
		$code .= '<a href="mailto:?subject=I wanted you to see this Link&amp;body=Check out this site '.$url.'."><img src="'.$icons_path.'/email-share.png" alt="Email" /></a>';
		$code .= '<br /><a href="whatsapp://send" data-text="'.strip_tags($titles).'" data-href="'.$url.'" class="wa_btn wa_btn_m whatsapp_share"style="display:none">Share</a>';
		$code .= '<script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="'.$folder.'/js/whatsapp-button.js";h.appendChild(s);}</script>';
	}else{
		$code .= '<span title="Facebook" class="tip_s">
		        <i class="fb-share"></i>
		        <a target="_new" href="https://www.facebook.com/sharer/sharer.php?u='.$url.'&title='.$title.'">Facebook</a>
		</span>';
		$code .= '<span title="Twitter" class="tip_s">
		        <i class="twitter-share"></i>
		        <a target="_new" href="http://twitter.com/home?status='.$title.'+'.$url.'">Twitter</a>
		    </span>';
		$code .= '<span title="Google+" class="tip_s">
		        <i class="google-share"></i>
		        <a target="_new" href="https://plus.google.com/share?url='.$url.'">Google+</a>
		    </span>';
		$code .= '<span title="Pinterest" class="tip_s">
		        <i class="pin-share"></i>
		        <a target="_new" href="http://pinterest.com/pin/create/bookmarklet/?media=[MEDIA]&url='.$url.'&is_video=false&description='.$title.'">Pinterest</a>
		    </span>';
		$code .= '<span title="Reddit" class="tip_s">
		        <i class="reddit-share"></i>
		        <a target="_new" href="http://www.reddit.com/submit?url='.$url.'&title='.$title.'">Reddit</a>
		    </span>';
		$code .= '<span title="StumbleUpon" class="tip_s">
		        <i class="stumble-share"></i>
		        <a target="_new" href="http://www.stumbleupon.com/submit?url='.$url.'&title='.$title.'">StumbleUpon</a>
		    </span>';
		$code .= '<span title="Linkedin" class="tip_s">
		        <i class="linkedin-share"></i>
		        <a target="_new" href="http://www.linkedin.com/shareArticle?mini=true&url='.$url.'&title='.$title.'&source=">Linkedin</a>
		    </span>';
		$code .= '<span title="Tumblr" class="tip_s">
		        <i class="tumblr-share"></i>
		        <a target="_new" href="http://www.tumblr.com/share?v=3&u='.$url.'&t='.$title.'">Tumblr</a>
		    </span>';
		$code .= '<span title="Google Bookmarks" class="tip_s">
		        <i class="googleb-share"></i>
		        <a target="_new" href="http://www.google.com/bookmarks/mark?op=edit&bkmk='.$url.'&title='.$title.'&annotation=">Google Bookmarks</a>
		    </span>';
		$code .= '<span title="Email" class="tip_s">
		        <i class="email-share"></i>
		        <a href="mailto:?subject=I wanted you to see this Link&amp;body=Check out this site '.$url.'.">Email</a>
		    </span>';
	}
	$code .= '</div>';

	return $code;
}
?>