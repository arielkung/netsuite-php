<?php namespace Fungku\NetSuite\Classes;

class ReturnAuthorization extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $currency;
	public $entity;
	public $vatRegNum;
	public $tranDate;
	public $tranId;
	public $source;
	public $department;
	public $class;
	public $location;
	public $subsidiary;
	public $intercoTransaction;
	public $intercoStatus;
	public $job;
	public $partner;
	public $otherRefNum;
	public $leadSource;
	public $memo;
	public $drAccount;
	public $fxAccount;
	public $salesEffectiveDate;
	public $createdFrom;
	public $revRecSchedule;
	public $totalCostEstimate;
	public $estGrossProfit;
	public $estGrossProfitPercent;
	public $revRecStartDate;
	public $revRecEndDate;
	public $excludeCommission;
	public $exchangeRate;
	public $currencyName;
	public $discountItem;
	public $discountRate;
	public $taxItem;
	public $taxRate;
	public $toBePrinted;
	public $toBeEmailed;
	public $toBeFaxed;
	public $messageSel;
	public $message;
	public $billingAddress;
	public $billAddressList;
	public $shipAddressList;
	public $shipAddress;
	public $salesGroup;
	public $syncSalesTeams;
	public $revenueStatus;
	public $recognizedRevenue;
	public $deferredRevenue;
	public $revRecOnRevCommitment;
	public $revCommitStatus;
	public $paymentMethod;
	public $creditCard;
	public $ccNumber;
	public $altSalesTotal;
	public $ccExpireDate;
	public $ccName;
	public $ccStreet;
	public $ccZipCode;
	public $ccApproved;
	public $pnRefNum;
	public $subTotal;
	public $discountTotal;
	public $total;
	public $creditCardProcessor;
	public $payPalAuthId;
	public $payPalProcess;
	public $email;
	public $fax;
	public $debitCardIssueNo;
	public $isTaxable;
	public $promoCode;
	public $status;
	public $taxTotal;
	public $tax2Total;
	public $validFrom;
	public $orderStatus;
	public $salesRep;
	public $giftCert;
	public $contribPct;
	public $giftCertTotal;
	public $giftCertApplied;
	public $giftCertAvailable;
	public $tranIsVsoeBundle;
	public $vsoeAutoCalc;
	public $syncPartnerTeams;
	public $itemList;
	public $salesTeamList;
	public $partnersList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"currency" => "RecordRef",
		"entity" => "RecordRef",
		"vatRegNum" => "string",
		"tranDate" => "dateTime",
		"tranId" => "string",
		"source" => "string",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"intercoTransaction" => "RecordRef",
		"intercoStatus" => "IntercoStatus",
		"job" => "RecordRef",
		"partner" => "RecordRef",
		"otherRefNum" => "string",
		"leadSource" => "RecordRef",
		"memo" => "string",
		"drAccount" => "RecordRef",
		"fxAccount" => "RecordRef",
		"salesEffectiveDate" => "dateTime",
		"createdFrom" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"totalCostEstimate" => "float",
		"estGrossProfit" => "float",
		"estGrossProfitPercent" => "float",
		"revRecStartDate" => "dateTime",
		"revRecEndDate" => "dateTime",
		"excludeCommission" => "boolean",
		"exchangeRate" => "float",
		"currencyName" => "string",
		"discountItem" => "RecordRef",
		"discountRate" => "string",
		"taxItem" => "RecordRef",
		"taxRate" => "float",
		"toBePrinted" => "boolean",
		"toBeEmailed" => "boolean",
		"toBeFaxed" => "boolean",
		"messageSel" => "RecordRef",
		"message" => "string",
		"billingAddress" => "Address",
		"billAddressList" => "RecordRef",
		"shipAddressList" => "RecordRef",
		"shipAddress" => "string",
		"salesGroup" => "RecordRef",
		"syncSalesTeams" => "boolean",
		"revenueStatus" => "RevenueStatus",
		"recognizedRevenue" => "float",
		"deferredRevenue" => "float",
		"revRecOnRevCommitment" => "boolean",
		"revCommitStatus" => "RevenueCommitStatus",
		"paymentMethod" => "RecordRef",
		"creditCard" => "RecordRef",
		"ccNumber" => "string",
		"altSalesTotal" => "float",
		"ccExpireDate" => "dateTime",
		"ccName" => "string",
		"ccStreet" => "string",
		"ccZipCode" => "string",
		"ccApproved" => "boolean",
		"pnRefNum" => "string",
		"subTotal" => "float",
		"discountTotal" => "float",
		"total" => "float",
		"creditCardProcessor" => "RecordRef",
		"payPalAuthId" => "string",
		"payPalProcess" => "boolean",
		"email" => "string",
		"fax" => "string",
		"debitCardIssueNo" => "string",
		"isTaxable" => "boolean",
		"promoCode" => "RecordRef",
		"status" => "string",
		"taxTotal" => "float",
		"tax2Total" => "float",
		"validFrom" => "dateTime",
		"orderStatus" => "ReturnAuthorizationOrderStatus",
		"salesRep" => "RecordRef",
		"giftCert" => "RecordRef",
		"contribPct" => "string",
		"giftCertTotal" => "float",
		"giftCertApplied" => "float",
		"giftCertAvailable" => "float",
		"tranIsVsoeBundle" => "boolean",
		"vsoeAutoCalc" => "boolean",
		"syncPartnerTeams" => "boolean",
		"itemList" => "ReturnAuthorizationItemList",
		"salesTeamList" => "ReturnAuthorizationSalesTeamList",
		"partnersList" => "ReturnAuthorizationPartnersList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

