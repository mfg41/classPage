<?php
include "class.page.php";
$page = new Page();
$page->description = "Sayfa tanımlaması";
$page->keywords = "Anahtar kelimeler";
$page->title = "Sayfa başlığı";
$page->styles = array('style.css');
$page->scripts = array('jquery-1.11.3.min.js');
$page->getPage(false);
// $page->getHeader();
// $page->getSidebar();
// $page->getFooter();
?>