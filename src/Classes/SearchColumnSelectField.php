<?php namespace Fungku\NetSuite\Classes;

class SearchColumnSelectField extends SearchColumnField {
	public $searchValue;
	static $paramtypesmap = array(
		"searchValue" => "RecordRef",
	);
}

