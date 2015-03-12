<?php

class Principal{

	var $_URI;
	var $_root = "/Test_jquery/index.php/";
	var $_path;
	
	function __construct(){
		$this->_URI = urldecode($_SERVER['REQUEST_URI']);
		$this->_path = str_replace($this->_root, "", $this->_URI);
		echo $this->_path;
		include($this->_path.".php");
		new $this->_path();

	}
}

?>