<?php
class Page
{
	public $title;
	public $description;
	public $keywords;
	public $styles = array();
	public $scripts = array();
	
	private $siteurl;
	
	function __construct() {
		$this->siteurl = $_SERVER["HTTP_HOST"];
	}
	
	function getPage($sbar = true){
		$this->getHeader();
		if($sbar == true){
			$this->getSidebar();
		}
		$this->getFooter();
	}
	
	public function getHeader(){
		echo '<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>'. $this->title .'</title>
<meta name="description" content="'. $this->description .'">
<meta name="keywords" content="'. $this->keywords .'">
<base href="'. $this->siteurl .'">';
if(!empty($this->scripts)){
			foreach($this->styles as $sty) {
				echo '<link rel="stylesheet" href="'. $sty .'">';
			}
		}
		echo '
</head>
<body>
<div id="container">
<header>

</header>
<nav>

</nav>
<section>
</section>
';
	}
	
	public function getSidebar(){
		echo '<aside>
		</aside>
';
	}
	
	public function getFooter(){
		if(!empty($this->scripts)){
			foreach($this->scripts as $scr) {
				echo '<script src="'. $scr .'"></script>';
			}
		}
		echo '
<div class="clear"></div>
<footer></footer>
</div>
</body>
</html>
';
	}
	
}
?>