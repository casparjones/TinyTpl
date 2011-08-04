<?php

class TinyTpl {
	
	private $_sTemplate;
	private $_aData;
	
	public function __construct($_sTemplate) {
		$this->_sTemplate = $_sTemplate;
	}
	
	public function assign($mKeyOrValue, $mValue = null) {
		if(is_array($mKeyOrValue)) {
			foreach($mKeyOrValue as $sKey => $mValue) {
				$this->assign($sKey, $mValue);
			}
		}
		
		if(is_string($mKeyOrValue) && !empty($mKeyOrValue))
			$this->_aData[$mKeyOrValue] = $mValue;		
	}
	
	public function get($sKey, $sDefault = false) {
		if(isset($this->_aData[$sKey]))
			return $this->_aData[$sKey];
		else
			return $sDefault;
	}
	
	public function parse() {
		extract($this->_aData);
		include_once($this->_sTemplate);
	}
	
}
