<?php
class current_page{
	public $protocol;
	public $site;
	public $thisfile;
	public $real_directories;
	public $num_of_real_directories;
	public $virtual_directories = array();
	public $num_of_virtual_directories = array();
	public $baseurl;
	public $thisurl;

	function current_page(){
	$this->protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
	$this->site = $this->protocol . '://' . $_SERVER['HTTP_HOST'];
	$this->thisfile = basename($_SERVER['SCRIPT_FILENAME']);
	$this->real_directories = $this->cleanUp(explode("/", str_replace($this->thisfile, "", $_SERVER['PHP_SELF'])));
	$this->num_of_real_directories = count($this->real_directories);
	$this->virtual_directories = array_diff($this->cleanUp(explode("/", str_replace($this->thisfile, "", $_SERVER['REQUEST_URI']))),$this->real_directories);
	$this->num_of_virtual_directories = count($this->virtual_directories);
	$this->baseurl = $this->site . "/" . implode("/", $this->real_directories) . "";
	$this->thisurl = $this->baseurl . implode("/", $this->virtual_directories) . "";
	}

	function cleanUp($array){
	$cleaned_array = array();
	foreach($array as $key => $value){
	$qpos = strpos($value, "?");
	if($qpos !== false){ break; }
	if($key != "" && $value != ""){ $cleaned_array[] = $value; }
	}
	return $cleaned_array;
	}
}
$current_page = new current_page();
?>