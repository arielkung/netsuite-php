<?php namespace Fungku\NetSuite\Classes;

class VendorSearchBasic extends SearchRecordBasic {
	public $accountNumber;
	public $address;
	public $addressee;
	public $addressLabel;
	public $addressPhone;
	public $attention;
	public $balance;
	public $billAddress;
	public $category;
	public $city;
	public $comments;
	public $contact;
	public $country;
	public $county;
	public $creditLimit;
	public $currency;
	public $currentExchangeRate;
	public $dateCreated;
	public $eligibleForCommission;
	public $email;
	public $emailPreference;
	public $emailTransactions;
	public $entityId;
	public $expenseAccount;
	public $externalId;
	public $externalIdString;
	public $fax;
	public $faxTransactions;
	public $firstName;
	public $fxBalance;
	public $fxUnbilledOrders;
	public $giveAccess;
	public $globalSubscriptionStatus;
	public $group;
	public $hasDuplicates;
	public $image;
	public $internalId;
	public $internalIdNumber;
	public $is1099Eligible;
	public $isDefaultBilling;
	public $isDefaultShipping;
	public $isInactive;
	public $isJobResourceVend;
	public $isPerson;
	public $laborCost;
	public $language;
	public $lastModifiedDate;
	public $lastName;
	public $level;
	public $middleName;
	public $otherRelationships;
	public $payablesAccount;
	public $pec;
	public $permission;
	public $phone;
	public $phoneticName;
	public $printTransactions;
	public $purchaseOrderAmount;
	public $purchaseOrderQuantity;
	public $purchaseOrderQuantityDiff;
	public $receiptAmount;
	public $receiptQuantity;
	public $receiptQuantityDiff;
	public $salutation;
	public $shipAddress;
	public $state;
	public $subsidiary;
	public $taxIdNum;
	public $title;
	public $unbilledOrders;
	public $url;
	public $vatRegNumber;
	public $workCalendar;
	public $zipCode;
	public $customFieldList;
	static $paramtypesmap = array(
		"accountNumber" => "SearchStringField",
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"attention" => "SearchStringField",
		"balance" => "SearchDoubleField",
		"billAddress" => "SearchStringField",
		"category" => "SearchMultiSelectField",
		"city" => "SearchStringField",
		"comments" => "SearchStringField",
		"contact" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"creditLimit" => "SearchDoubleField",
		"currency" => "SearchMultiSelectField",
		"currentExchangeRate" => "SearchDoubleField",
		"dateCreated" => "SearchDateField",
		"eligibleForCommission" => "SearchBooleanField",
		"email" => "SearchStringField",
		"emailPreference" => "SearchEnumMultiSelectField",
		"emailTransactions" => "SearchBooleanField",
		"entityId" => "SearchStringField",
		"expenseAccount" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"faxTransactions" => "SearchBooleanField",
		"firstName" => "SearchStringField",
		"fxBalance" => "SearchDoubleField",
		"fxUnbilledOrders" => "SearchDoubleField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"group" => "SearchMultiSelectField",
		"hasDuplicates" => "SearchBooleanField",
		"image" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"is1099Eligible" => "SearchBooleanField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isJobResourceVend" => "SearchBooleanField",
		"isPerson" => "SearchBooleanField",
		"laborCost" => "SearchDoubleField",
		"language" => "SearchEnumMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"lastName" => "SearchStringField",
		"level" => "SearchEnumMultiSelectField",
		"middleName" => "SearchStringField",
		"otherRelationships" => "SearchEnumMultiSelectField",
		"payablesAccount" => "SearchMultiSelectField",
		"pec" => "SearchStringField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"printTransactions" => "SearchBooleanField",
		"purchaseOrderAmount" => "SearchDoubleField",
		"purchaseOrderQuantity" => "SearchDoubleField",
		"purchaseOrderQuantityDiff" => "SearchDoubleField",
		"receiptAmount" => "SearchDoubleField",
		"receiptQuantity" => "SearchDoubleField",
		"receiptQuantityDiff" => "SearchDoubleField",
		"salutation" => "SearchStringField",
		"shipAddress" => "SearchStringField",
		"state" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"taxIdNum" => "SearchStringField",
		"title" => "SearchStringField",
		"unbilledOrders" => "SearchDoubleField",
		"url" => "SearchStringField",
		"vatRegNumber" => "SearchStringField",
		"workCalendar" => "SearchMultiSelectField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

