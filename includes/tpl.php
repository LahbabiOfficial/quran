<?php
class Template {

	public $sitename;
	public $siteurl;
	public $title;
	public $description;
	public $keywords;
	public $Templatefolder;
	public $footercode;
	public $headercode;
	public $headertext;
	public $bodycode;
	public $nav;
	public $copyright;
	public $lang;

	function tpl_replace($text=""){
		$clean = str_replace(array('"', "'", "-", "_", ".", "]", "[", "(", ")", "{", "}", "`", "!", ",", "|", "  ", ";"), array('', "", "", "", "", "", "", "", "", "", "", "", "", "", "", " ", ""), $this->title);
		if($this->description == ""){ $pagedescription = htmlentities($this->title); }else{ $pagedescription = $this->description; }
		if($this->keywords == ""){ $pagekeywords = str_replace(" ",", ",$clean); }else{ $pagekeywords = $this->keywords; }
		$search  = array('{title}', '{sitename}', '{description}', '{keywords}', '{style}', '{js}', '{bodycode}', '{footercode}', '{code}', '{nav}', '{copyright}', '{lang}');
		$replace = array($this->title, $this->sitename, $pagedescription, $pagekeywords, $this->Templatefolder, $this->headercode, $this->bodycode, $this->footercode, $this->headertext, $this->nav, $this->copyright, $this->lang);
		return str_replace($search, $replace, $text);
	}
	
	function tpl_check($filename=""){
		$full_path = $this->Templatefolder.'/'.$filename;
		$report = '';
		$error = 0;
		if(!file_exists($this->Templatefolder)){ 
			$report .= '<div style="text-align:center;">FOLDER TEMPLATES <b>'.$this->Templatefolder.'</b> NOT FOUND</div>'; 
			$error = 1;
		}
		
		if (!file_exists($full_path)){ 
			$report .= '<div style="text-align:center;">FILE TEMPLATE '.strip_tags($filename).' NOT FOUND INSIDE FOLDER '.$this->Templatefolder.'</div>'; 
			$error = 1;
		}
		
		if($error == 1){
			return $report;
		}else{
			return $error;
		}
	}
	
	function tpl_header(){
		$filename = 'header.htm';
		if($this->tpl_check($filename) == 0){
			$full_path = $this->Templatefolder.'/'.$filename;
			$writefile = fopen($full_path, "r");
			$read = fread($writefile,filesize($full_path));
			$text = preg_replace('/LANG\[([0-9a-z_]*?)\]/e','word(\\1)',$read);
			$code = $this->tpl_replace($text);
			fclose ($writefile);
		}else{
			$code = $this->tpl_check($filename);
		}
		return $code;
	}

	function tpl_footer(){
		$filename = 'footer.htm';
		if($this->tpl_check($filename) == 0){
			$full_path = $this->Templatefolder.'/'.$filename;
			$writefile = fopen($full_path, "r");
			$read = fread($writefile,filesize($full_path));
			$text = preg_replace('/LANG\[([0-9a-z_]*?)\]/e','word(\\1)',$read);
			$code .= $this->tpl_replace($text);
			fclose($writefile);
		}else{
			$code = $this->tpl_check($filename);
		}
		return $code;
	}

	function tpl_content($title, $content){
		$filename = 'content.htm';
		if($this->tpl_check($filename) == 0){
			$full_path = $this->Templatefolder.'/'.$filename;
			$writefile = fopen($full_path, "r");
			$read = fread($writefile,filesize($full_path));
			$code = str_replace(array('{title}', '{content}', '{style}'), array($title, $content, $this->Templatefolder), $read);
			fclose($writefile);
		}else{
			$code = $this->tpl_check($filename);
		}
		return $code;
	}

	function tpl_menu($title, $content){
		$filename = 'menu.htm';
		if($this->tpl_check($filename) == 0){
			$full_path = $this->Templatefolder.'/'.$filename;
			$writefile = fopen($full_path, "r");
			$read = fread($writefile,filesize($full_path));
			$code = str_replace(array('{title}', '{content}', '{style}'), array($title, $content, $this->Templatefolder), $read);
			fclose($writefile);
		}else{
			$code = $this->tpl_check($filename);
		}
		return $code;
	}

	function Template_view($right="", $left="", $breadcrumb=""){
		$code = $this->tpl_header();
		$code .= '<div class="row">';
		$code .= $breadcrumb;
		$code .= '<div class="col-md-8">';
		$code .= $right;
		$code .= '</div>';
		$code .= '<div class="col-md-4">';
		$code .= $left;
		$code .= '</div>';
		$code .= '</div>';
		$code .= $this->tpl_footer();
		return $code;
	}
}
?>