<?php
class UrlHelper {
	
	public static function getHeaderPath() {
		return "$_SERVER[DOCUMENT_ROOT]/assessoriati/views/shared/header.php";
	}
	
	public static function getFooterPath() {
		return "$_SERVER[DOCUMENT_ROOT]/assessoriati/views/shared/footer.php";
	}
	
	public static function getStylesheetPath($stylesheet) {
		return "http://$_SERVER[SERVER_NAME]/assessoriati/static/css/$stylesheet.css";
	}
	
	public static function getJavascriptPath($javascript) {
		return "http://$_SERVER[SERVER_NAME]/assessoriati/static/js/$javascript.js";
	}	
}
