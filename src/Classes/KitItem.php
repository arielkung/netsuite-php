<?php namespace Fungku\NetSuite\Classes;

class KitItem extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $itemId;
	public $upcCode;
	public $displayName;
	public $parent;
	public $printItems;
	public $isOnline;
	public $isGcoCompliant;
	public $offerSupport;
	public $isInactive;
	public $availableToPartners;
	public $department;
	public $subsidiaryList;
	public $class;
	public $includeChildren;
	public $location;
	public $description;
	public $incomeAccount;
	public $taxSchedule;
	public $shippingCost;
	public $handlingCost;
	public $isTaxable;
	public $deferRevRec;
	public $salesTaxCode;
	public $weight;
	public $weightUnit;
	public $rate;
	public $billingSchedule;
	public $deferredRevenueAccount;
	public $revRecSchedule;
	public $stockDescription;
	public $producer;
	public $manufacturer;
	public $mpn;
	public $multManufactureAddr;
	public $manufactureraddr1;
	public $manufacturerCity;
	public $manufacturerState;
	public $manufacturerZip;
	public $countryOfManufacture;
	public $defaultItemShipMethod;
	public $itemCarrier;
	public $itemShipMethodList;
	public $manufacturerTaxId;
	public $scheduleBNumber;
	public $scheduleBQuantity;
	public $scheduleBCode;
	public $manufacturerTariff;
	public $preferenceCriterion;
	public $issueProduct;
	public $minimumQuantity;
	public $enforceMinQtyInternally;
	public $softDescriptor;
	public $isFulfillable;
	public $pricesIncludeTax;
	public $quantityPricingSchedule;
	public $useMarginalRates;
	public $costEstimateType;
	public $isHazmatItem;
	public $hazmatId;
	public $hazmatShippingName;
	public $hazmatHazardClass;
	public $hazmatPackingGroup;
	public $hazmatItemUnits;
	public $hazmatItemUnitsQty;
	public $costEstimate;
	public $overallQuantityPricingType;
	public $pricingGroup;
	public $vsoePrice;
	public $vsoeSopGroup;
	public $vsoeDeferral;
	public $vsoePermitDiscount;
	public $vsoeDelivered;
	public $shipIndividually;
	public $shipPackage;
	public $storeDisplayName;
	public $storeDisplayThumbnail;
	public $outOfStockMessage;
	public $storeDisplayImage;
	public $storeDescription;
	public $storeDetailedDescription;
	public $storeItemTemplate;
	public $pageTitle;
	public $urlComponent;
	public $metaTagHtml;
	public $excludeFromSitemap;
	public $sitemapPriority;
	public $searchKeywords;
	public $itemOptionsList;
	public $isDonationItem;
	public $showDefaultDonationAmount;
	public $maxDonationAmount;
	public $dontShowPrice;
	public $noPriceMessage;
	public $shoppingDotComCategory;
	public $shopzillaCategoryId;
	public $outOfStockBehavior;
	public $nexTagCategory;
	public $productFeedList;
	public $relatedItemsDescription;
	public $onSpecial;
	public $specialsDescription;
	public $featuredDescription;
	public $pricingMatrix;
	public $siteCategoryList;
	public $memberList;
	public $accountingBookDetailList;
	public $translationsList;
	public $presentationItemList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"itemId" => "string",
		"upcCode" => "string",
		"displayName" => "string",
		"parent" => "RecordRef",
		"printItems" => "boolean",
		"isOnline" => "boolean",
		"isGcoCompliant" => "boolean",
		"offerSupport" => "boolean",
		"isInactive" => "boolean",
		"availableToPartners" => "boolean",
		"department" => "RecordRef",
		"subsidiaryList" => "RecordRefList",
		"class" => "RecordRef",
		"includeChildren" => "boolean",
		"location" => "RecordRef",
		"description" => "string",
		"incomeAccount" => "RecordRef",
		"taxSchedule" => "RecordRef",
		"shippingCost" => "float",
		"handlingCost" => "float",
		"isTaxable" => "boolean",
		"deferRevRec" => "boolean",
		"salesTaxCode" => "RecordRef",
		"weight" => "float",
		"weightUnit" => "RecordRef",
		"rate" => "float",
		"billingSchedule" => "RecordRef",
		"deferredRevenueAccount" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"stockDescription" => "string",
		"producer" => "boolean",
		"manufacturer" => "string",
		"mpn" => "string",
		"multManufactureAddr" => "boolean",
		"manufactureraddr1" => "string",
		"manufacturerCity" => "string",
		"manufacturerState" => "string",
		"manufacturerZip" => "string",
		"countryOfManufacture" => "Country",
		"defaultItemShipMethod" => "RecordRef",
		"itemCarrier" => "ItemCarrier",
		"itemShipMethodList" => "RecordRefList",
		"manufacturerTaxId" => "string",
		"scheduleBNumber" => "string",
		"scheduleBQuantity" => "integer",
		"scheduleBCode" => "RecordRef",
		"manufacturerTariff" => "string",
		"preferenceCriterion" => "ItemPreferenceCriterion",
		"issueProduct" => "RecordRef",
		"minimumQuantity" => "integer",
		"enforceMinQtyInternally" => "boolean",
		"softDescriptor" => "RecordRef",
		"isFulfillable" => "boolean",
		"pricesIncludeTax" => "boolean",
		"quantityPricingSchedule" => "RecordRef",
		"useMarginalRates" => "boolean",
		"costEstimateType" => "ItemCostEstimateType",
		"isHazmatItem" => "boolean",
		"hazmatId" => "string",
		"hazmatShippingName" => "string",
		"hazmatHazardClass" => "string",
		"hazmatPackingGroup" => "HazmatPackingGroup",
		"hazmatItemUnits" => "string",
		"hazmatItemUnitsQty" => "float",
		"costEstimate" => "float",
		"overallQuantityPricingType" => "ItemOverallQuantityPricingType",
		"pricingGroup" => "RecordRef",
		"vsoePrice" => "float",
		"vsoeSopGroup" => "VsoeSopGroup",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"shipIndividually" => "boolean",
		"shipPackage" => "RecordRef",
		"storeDisplayName" => "string",
		"storeDisplayThumbnail" => "RecordRef",
		"outOfStockMessage" => "string",
		"storeDisplayImage" => "RecordRef",
		"storeDescription" => "string",
		"storeDetailedDescription" => "string",
		"storeItemTemplate" => "RecordRef",
		"pageTitle" => "string",
		"urlComponent" => "string",
		"metaTagHtml" => "string",
		"excludeFromSitemap" => "boolean",
		"sitemapPriority" => "SitemapPriority",
		"searchKeywords" => "string",
		"itemOptionsList" => "ItemOptionsList",
		"isDonationItem" => "boolean",
		"showDefaultDonationAmount" => "boolean",
		"maxDonationAmount" => "float",
		"dontShowPrice" => "boolean",
		"noPriceMessage" => "string",
		"shoppingDotComCategory" => "string",
		"shopzillaCategoryId" => "integer",
		"outOfStockBehavior" => "ItemOutOfStockBehavior",
		"nexTagCategory" => "string",
		"productFeedList" => "ProductFeedList",
		"relatedItemsDescription" => "string",
		"onSpecial" => "boolean",
		"specialsDescription" => "string",
		"featuredDescription" => "string",
		"pricingMatrix" => "PricingMatrix",
		"siteCategoryList" => "SiteCategoryList",
		"memberList" => "ItemMemberList",
		"accountingBookDetailList" => "ItemAccountingBookDetailList",
		"translationsList" => "TranslationList",
		"presentationItemList" => "PresentationItemList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

