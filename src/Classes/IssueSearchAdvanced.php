<?php namespace Fungku\NetSuite\Classes;

class IssueSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "IssueSearch",
		"columns" => "IssueSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

