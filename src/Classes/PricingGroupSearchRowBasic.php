<?php namespace Fungku\NetSuite\Classes;

class PricingGroupSearchRowBasic extends SearchRowBasic {
	public $externalId;
	public $internalId;
	public $isInactive;
	public $name;
	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}

