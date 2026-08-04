# Iccv1productsfeedProducts

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**itemId** | **string** | Your unique product identifier (SKU). Must be unique within your merchant catalog. Max 100 characters. | 
**title** | **string** | Product display name. Max 150 characters. | 
**description** | **string** | Detailed product description. Max 5000 characters. | 
**url** | **string** | Canonical URL to the product page on your storefront. Max 1000 characters. | 
**imageUrl** | **string** | URL to the primary product image. Must be publicly accessible (HTTPS). Max 1000 characters. | 
**additionalImageUrls** | **string** | Optional. Additional product image URLs (comma-separated or single URL). Must be HTTPS. | [optional] 
**videoUrl** | **string** | Optional. URL to a product video. Must be HTTPS and publicly accessible. | [optional] 
**model3dUrl** | **string** | Optional. URL to a 3D model asset for the product (GLTF/GLB format preferred). | [optional] 
**availability** | **string** | Current stock status: - &#x60;in_stock&#x60; — available for immediate purchase - &#x60;out_of_stock&#x60; — temporarily unavailable - &#x60;preorder&#x60; or &#x60;pre_order&#x60; — not yet released - &#x60;backorder&#x60; — out of stock but accepting orders - &#x60;unknown&#x60; — availability status is not determined   Possible values: - in_stock - out_of_stock - preorder - pre_order - backorder - unknown | 
**availabilityDate** | [**\DateTime**](\DateTime.md) | Optional. Date when the product becomes available (for preorder/backorder). | [optional] 
**expirationDate** | [**\DateTime**](\DateTime.md) | Optional. Date after which the product listing expires. | [optional] 
**price** | **double** | Product price as a positive decimal number. Pair with &#x60;currency&#x60; for full price representation. Must be greater than zero. | 
**currency** | **string** | 3-letter ISO 4217 currency code for the product price (e.g. \&quot;USD\&quot;, \&quot;EUR\&quot;, \&quot;GBP\&quot;). | 
**salePrice** | **double** | Optional. Discounted sale price. Only shown when lower than &#x60;price&#x60;. | [optional] 
**salePriceStartDate** | [**\DateTime**](\DateTime.md) | Optional. Start date of the sale price window. | [optional] 
**salePriceEndDate** | [**\DateTime**](\DateTime.md) | Optional. End date of the sale price window. | [optional] 
**unitPricingMeasure** | **string** | Optional. Unit measure for unit-priced items (e.g. \&quot;1kg\&quot;, \&quot;750ml\&quot;). Used for per-unit price display. | [optional] 
**baseMeasure** | **string** | Optional. Base measure used for unit pricing comparison (e.g. \&quot;100g\&quot;, \&quot;1L\&quot;). Enables price-per-unit comparison. | [optional] 
**pricingTrend** | **string** | Optional. Pricing trend indicator (e.g. \&quot;dropping\&quot;, \&quot;rising\&quot;). Max 80 characters. | [optional] 
**geoPrice** | **string** | Optional. Geography-specific pricing overrides (JSON or structured string). | [optional] 
**geoAvailability** | **string** | Optional. Geography-specific availability overrides (JSON or structured string). | [optional] 
**brand** | **string** | Product brand or manufacturer name. Max 70 characters. | 
**gtin** | **string** | Optional. Global Trade Item Number (UPC, EAN, ISBN). Must be 8–14 digits. Required for Google Merchant Center syndication. | [optional] 
**mpn** | **string** | Optional. Manufacturer Part Number. Max 70 characters. | [optional] 
**productCategory** | **string** | Optional. Product category hierarchy. Used for UCP validation and Google Merchant Center syndication. Max 255 characters. | [optional] 
**condition** | **string** | Optional. Product condition. Typical values: &#x60;new&#x60;, &#x60;used&#x60;, &#x60;refurbished&#x60;. Used for UCP syndication and Google Merchant Center feed. | [optional] 
**material** | **string** | Optional. Primary material of the product. Max 100 characters. | [optional] 
**weight** | **string** | Optional. Product weight (e.g. \&quot;1.2kg\&quot;). Max 100 characters. | [optional] 
**dimensions** | **string** | Optional. Combined dimension string (e.g. \&quot;10x5x3 cm\&quot;). Max 100 characters. | [optional] 
**length** | **string** | Optional. Product length. | [optional] 
**width** | **string** | Optional. Product width. | [optional] 
**height** | **string** | Optional. Product height. | [optional] 
**dimensionsUnit** | **string** | Optional. Unit for dimension values (e.g. \&quot;cm\&quot;, \&quot;in\&quot;). | [optional] 
**itemWeightUnit** | **string** | Optional. Unit for weight value (e.g. \&quot;kg\&quot;, \&quot;lb\&quot;). | [optional] 
**ageGroup** | **string** | Optional. Target age group (e.g. \&quot;adult\&quot;, \&quot;kids\&quot;, \&quot;infant\&quot;, \&quot;toddler\&quot;, \&quot;newborn\&quot;). | [optional] 
**color** | **string** | Optional. Product color. Max 40 characters. | [optional] 
**size** | **string** | Optional. Product size (e.g. \&quot;M\&quot;, \&quot;42\&quot;, \&quot;XL\&quot;). Max 20 characters. Used for variant filtering. | [optional] 
**sizeSystem** | **string** | Optional. Size standard used (e.g. \&quot;US\&quot;, \&quot;EU\&quot;, \&quot;UK\&quot;, \&quot;AU\&quot;). | [optional] 
**gender** | **string** | Optional. Target gender (e.g. \&quot;male\&quot;, \&quot;female\&quot;, \&quot;unisex\&quot;). | [optional] 
**groupId** | **string** | Product variant group ID — links products that are variations of the same item. Max 70 characters. | 
**listingHasVariations** | **bool** | Whether this listing has product variations. | 
**itemGroupTitle** | **string** | Optional. Display title for the variant group. Max 150 characters. | [optional] 
**offerId** | **string** | Optional. Merchant-assigned offer identifier for marketplace deduplication. | [optional] 
**variantDict** | **map[string,string]** | Optional. Key-value map of variant attribute names to values (e.g. color, size). | [optional] 
**customVariant1Category** | **string** | Optional. Custom variant 1 category label. | [optional] 
**customVariant1Option** | **string** | Optional. Custom variant 1 option value. | [optional] 
**customVariant2Category** | **string** | Optional. Custom variant 2 category label. | [optional] 
**customVariant2Option** | **string** | Optional. Custom variant 2 option value. | [optional] 
**customVariant3Category** | **string** | Optional. Custom variant 3 category label. | [optional] 
**customVariant3Option** | **string** | Optional. Custom variant 3 option value. | [optional] 
**sellerName** | **string** | Merchant or seller display name. Max 70 characters. | 
**sellerUrl** | **string** | URL to the seller&#39;s storefront. Max 1000 characters. | 
**marketplaceSeller** | **string** | Optional. Marketplace seller identifier for multi-seller platforms. Max 70 characters. | [optional] 
**sellerPrivacyPolicy** | **string** | Optional. URL to the seller&#39;s privacy policy page. | [optional] 
**sellerTos** | **string** | Optional. URL to the seller&#39;s terms of service page. | [optional] 
**shippingPrice** | **string** | Optional. Shipping price for this product (e.g. \&quot;5.99 USD\&quot; or \&quot;Free\&quot;). | [optional] 
**deliveryEstimate** | [**\DateTime**](\DateTime.md) | Optional. Estimated delivery date. | [optional] 
**pickupMethod** | **string** | Optional. Available pickup method (e.g. \&quot;in-store\&quot;, \&quot;curbside\&quot;, \&quot;locker\&quot;). | [optional] 
**pickupSla** | **string** | Optional. Pickup SLA commitment (e.g. \&quot;same-day\&quot;, \&quot;2 hours\&quot;, \&quot;next-day\&quot;). | [optional] 
**isDigital** | **bool** | Optional. Whether this product is a digital/downloadable item. | [optional] 
**returnPolicy** | **string** | Human-readable return policy description. | 
**acceptsReturns** | **bool** | Optional. Whether the product is eligible for returns. | [optional] 
**returnDeadlineInDays** | **int** | Optional. Number of days within which a return is accepted. Must be a positive integer. | [optional] 
**acceptsExchanges** | **bool** | Optional. Whether the product is eligible for exchanges. | [optional] 
**isEligibleSearch** | **bool** | Controls whether this product appears in AI agent product discovery and search results. | 
**isEligibleCheckout** | **bool** | Controls whether this product can be added to cart and purchased via AI agents. | 
**popularityScore** | **double** | Optional. Numeric popularity score (higher is more popular). | [optional] 
**returnRate** | **string** | Optional. Product return rate indicator (e.g. \&quot;low\&quot;, \&quot;medium\&quot;, \&quot;high\&quot;, or \&quot;5%\&quot;). | [optional] 
**warning** | **string** | Optional. Safety or compliance warning text for the product (e.g. Prop 65, choking hazard). | [optional] 
**warningUrl** | **string** | Optional. URL to a detailed warning or compliance information page. | [optional] 
**ageRestriction** | **int** | Optional. Minimum age required to purchase this product (e.g. 18). | [optional] 
**reviewCount** | **int** | Optional. Total number of customer reviews for this product. | [optional] 
**starRating** | **string** | Optional. Average star rating for this product (e.g. \&quot;4.5\&quot;). | [optional] 
**storeReviewCount** | **int** | Optional. Total number of store-level reviews. | [optional] 
**storeStarRating** | **string** | Optional. Average star rating for the store (e.g. \&quot;4.8\&quot;). | [optional] 
**relatedProductId** | **string** | Optional. Item ID of a related product (e.g. accessory, replacement). | [optional] 
**relationshipType** | **string** | Optional. Type of relationship to &#x60;related_product_id&#x60; (e.g. \&quot;accessory\&quot;, \&quot;replacement\&quot;, \&quot;bundle\&quot;). | [optional] 
**targetCountries** | **string[]** | List of ISO 3166-1 alpha-3 country codes where this product is available. | 
**storeCountry** | **string** | ISO 3166-1 alpha-2 country code of the merchant&#39;s store. Max 2 characters. | 
**qAndA** | [**map[string,object][]**](map.md) | Optional. List of Q&amp;A entries for this product. | [optional] 
**qandA** | [**map[string,object][]**](map.md) | Optional. Alias for &#x60;q_and_a&#x60;. Included for compatibility with alternate field naming conventions. | [optional] 
**reviews** | [**map[string,object][]**](map.md) | Optional. List of customer review objects for this product. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


