<?php
class CommonComponent extends Object{
	//called before Controller::beforeFilter()
	function initialize(&$controller, $settings = array()) {
// saving the controller reference for later use
		$this->controller =& $controller;
	}
//called after Controller::beforeFilter()
	function startup(&$controller) {
	}
//called after Controller::beforeRender()
	function beforeRender(&$controller) {
	}
//called after Controller::render()
	function shutdown(&$controller) {
	}
//called before Controller::redirect()
	function beforeRedirect(&$controller, $url, $status=null, $exit=true) {
	}
	function redirectSomewhere($value) {
// utilizing a controller method
	}
	function unicode_convert($str){
		if(!$str) return false;
		$unicode = array(
			'a'=>array(
				'á','à','ả','ã','ạ','ă','ắ','ặ','ằ','ẳ','ẵ','â','ấ','ầ','ẩ','ẫ','ậ'),
			'A'=>array(
				'Á','À','Ả','Ã','Ạ','Ă','Ắ','Ặ','Ằ','Ẳ','Ẵ','Â','Ấ','Ầ','Ẩ','Ẫ','Ậ'),
			'd'=>array('đ'),
			'D'=>array('Đ'),
			'e'=>array('é','è','ẻ','ẽ','ẹ','ê','ế','ề','ể','ễ','ệ'),
			'E'=>array('É','È','Ẻ','Ẽ','Ẹ','Ê','Ế','Ề','Ể','Ễ','Ệ'),
			'i'=>array('í','ì','ỉ','ĩ','ị'),
			'I'=>array('Í','Ì','Ỉ','Ĩ','Ị'),
			'o'=>array(
				'ó','ò','ỏ','õ','ọ','ô','ố','ồ','ổ','ỗ','ộ','õ','ớ','ờ','ở','ỡ','ợ'),
			'0'=>array(
				'Ó','Ò','Ỏ','Õ','Ọ','Ô','Ố','Ồ','Ổ','Ỗ','Ộ','Õ','Ớ','Ờ','Ở','Ỡ','Ợ'),
			'u'=>array('ú','ù','ủ','ũ','ụ','ý','ứ','ừ','ử','ữ','ự'),
			'U'=>array('Ú','Ù','Ủ','Ũ','Ụ','Ý','Ứ','Ừ','Ử','Ữ','Ự'),
			'y'=>array('ý','ỳ','ỷ','ỹ','ỵ'),
			'Y'=>array('Ý','Ỳ','Ỷ','Ỹ','Ỵ'),
			'-'=>array(' ','.','/','\'','’','(',')',',','!','"','"','"','%','&','@','#','$'),
			);
		foreach($unicode as $nonUnicode=>$uni){
			foreach($uni as $value)
				$str = str_replace($value,$nonUnicode,$str);
		}
		return $str;
	}
}
?>