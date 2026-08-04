# CyberSource\MerchantCapabilitiesApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateMerchantKey**](MerchantCapabilitiesApi.md#activateMerchantKey) | **POST** /icc/v1/merchants/{merchantId}/keys/{keyId}/activate | Activate a merchant key
[**addMerchantKey**](MerchantCapabilitiesApi.md#addMerchantKey) | **POST** /icc/v1/merchants/{merchantId}/keys | Add a key to a merchant
[**deactivateMerchantKey**](MerchantCapabilitiesApi.md#deactivateMerchantKey) | **DELETE** /icc/v1/merchants/{merchantId}/keys/{keyId} | Deactivate a merchant key
[**getAllProducts**](MerchantCapabilitiesApi.md#getAllProducts) | **GET** /icc/v1/products | Get All Products
[**getMerchant**](MerchantCapabilitiesApi.md#getMerchant) | **GET** /icc/v1/merchants/{merchantId} | Get a merchant
[**getMerchantKey**](MerchantCapabilitiesApi.md#getMerchantKey) | **GET** /icc/v1/merchants/{merchantId}/keys/{keyId} | Get a key by merchant and key ID
[**getProduct**](MerchantCapabilitiesApi.md#getProduct) | **GET** /icc/v1/products/{product_id} | Get Product by ID
[**ingestProductFeedJson**](MerchantCapabilitiesApi.md#ingestProductFeedJson) | **POST** /icc/v1/products/feed | Ingest Product Feed
[**listMerchantKeys**](MerchantCapabilitiesApi.md#listMerchantKeys) | **GET** /icc/v1/merchants/{merchantId}/keys | List keys for a merchant
[**registerMerchant**](MerchantCapabilitiesApi.md#registerMerchant) | **POST** /icc/v1/merchants | Register a merchant
[**updateMerchant**](MerchantCapabilitiesApi.md#updateMerchant) | **PUT** /icc/v1/merchants/{merchantId} | Update a merchant
[**updateMerchantKey**](MerchantCapabilitiesApi.md#updateMerchantKey) | **PUT** /icc/v1/merchants/{merchantId}/keys/{keyId} | Update a merchant key


# **activateMerchantKey**
> \CyberSource\Model\ActivateMerchantKeyResponse200 activateMerchantKey($merchantId, $keyId)

Activate a merchant key

Activate a deactivated key. Raises 403 if merchant is deactivated, 404 if merchant or key not found, 409 if key is already active.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantCapabilitiesApi();
$merchantId = "merchantId_example"; // string | Unique merchant identifier (UUID)
$keyId = "keyId_example"; // string | Unique key identifier (UUID)

try {
    $result = $api_instance->activateMerchantKey($merchantId, $keyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCapabilitiesApi->activateMerchantKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| Unique merchant identifier (UUID) |
 **keyId** | **string**| Unique key identifier (UUID) |

### Return type

[**\CyberSource\Model\ActivateMerchantKeyResponse200**](../Model/ActivateMerchantKeyResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addMerchantKey**
> \CyberSource\Model\ActivateMerchantKeyResponse200 addMerchantKey($merchantId, $keyRequest)

Add a key to a merchant

Add a new encryption key for a merchant. Raises 401 if not authenticated, 403 if caller does not own the merchant, 404 if merchant not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantCapabilitiesApi();
$merchantId = "merchantId_example"; // string | Unique merchant identifier (UUID)
$keyRequest = new \CyberSource\Model\KeyRequest1(); // \CyberSource\Model\KeyRequest1 | Key creation request

try {
    $result = $api_instance->addMerchantKey($merchantId, $keyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCapabilitiesApi->addMerchantKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| Unique merchant identifier (UUID) |
 **keyRequest** | [**\CyberSource\Model\KeyRequest1**](../Model/KeyRequest1.md)| Key creation request |

### Return type

[**\CyberSource\Model\ActivateMerchantKeyResponse200**](../Model/ActivateMerchantKeyResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deactivateMerchantKey**
> \CyberSource\Model\DeactivateMerchantKeyResponse200 deactivateMerchantKey($merchantId, $keyId)

Deactivate a merchant key

Deactivate a key (soft delete). Raises 401 if not authenticated, 403 if caller does not own the merchant, 404 if key not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantCapabilitiesApi();
$merchantId = "merchantId_example"; // string | Unique merchant identifier (UUID)
$keyId = "keyId_example"; // string | Unique key identifier (UUID)

try {
    $result = $api_instance->deactivateMerchantKey($merchantId, $keyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCapabilitiesApi->deactivateMerchantKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| Unique merchant identifier (UUID) |
 **keyId** | **string**| Unique key identifier (UUID) |

### Return type

[**\CyberSource\Model\DeactivateMerchantKeyResponse200**](../Model/DeactivateMerchantKeyResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllProducts**
> \CyberSource\Model\InlineResponse20020 getAllProducts($getAllProductsRequest, $page, $size)

Get All Products

Returns the full product catalog stored in ACG.  **Note:** This endpoint is intended for catalog verification and merchant tooling. It is not a real-time product discovery API for end buyers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantCapabilitiesApi();
$getAllProductsRequest = new \stdClass; // object | Empty request body.
$page = 0; // int | Page number to retrieve (0-based). Defaults to 0.
$size = 300; // int | Number of products per page. Defaults to 300. Server enforces a maximum of 1000; values above 1000 are capped.

try {
    $result = $api_instance->getAllProducts($getAllProductsRequest, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCapabilitiesApi->getAllProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **getAllProductsRequest** | **object**| Empty request body. |
 **page** | **int**| Page number to retrieve (0-based). Defaults to 0. | [optional] [default to 0]
 **size** | **int**| Number of products per page. Defaults to 300. Server enforces a maximum of 1000; values above 1000 are capped. | [optional] [default to 300]

### Return type

[**\CyberSource\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMerchant**
> \CyberSource\Model\MerchantRegistrationResponse201 getMerchant($merchantId)

Get a merchant

Get merchant by ID with all associated keys. Raises 404 if merchant not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantCapabilitiesApi();
$merchantId = "merchantId_example"; // string | Unique merchant identifier (UUID)

try {
    $result = $api_instance->getMerchant($merchantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCapabilitiesApi->getMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| Unique merchant identifier (UUID) |

### Return type

[**\CyberSource\Model\MerchantRegistrationResponse201**](../Model/MerchantRegistrationResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMerchantKey**
> \CyberSource\Model\ActivateMerchantKeyResponse200 getMerchantKey($merchantId, $keyId)

Get a key by merchant and key ID

Get a specific key by merchant ID and key ID. Raises 401 if not authenticated, 404 if key not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantCapabilitiesApi();
$merchantId = "merchantId_example"; // string | Unique merchant identifier (UUID)
$keyId = "keyId_example"; // string | Unique key identifier (UUID)

try {
    $result = $api_instance->getMerchantKey($merchantId, $keyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCapabilitiesApi->getMerchantKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| Unique merchant identifier (UUID) |
 **keyId** | **string**| Unique key identifier (UUID) |

### Return type

[**\CyberSource\Model\ActivateMerchantKeyResponse200**](../Model/ActivateMerchantKeyResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProduct**
> \CyberSource\Model\InlineResponse20021 getProduct($productId, $getProductRequest)

Get Product by ID

Retrieves a single product from the ACG catalog by its unique product identifier (SKU).  Use this to verify that a product was ingested correctly, inspect its current field values, or check its syndication-eligibility flags (`is_eligible_search`, `is_eligible_checkout`).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantCapabilitiesApi();
$productId = "productId_example"; // string | The unique product identifier (SKU) assigned by the merchant and provided during feed ingestion. Example: `SKU-1001`.
$getProductRequest = new \stdClass; // object | Empty request body.

try {
    $result = $api_instance->getProduct($productId, $getProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCapabilitiesApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **string**| The unique product identifier (SKU) assigned by the merchant and provided during feed ingestion. Example: &#x60;SKU-1001&#x60;. |
 **getProductRequest** | **object**| Empty request body. |

### Return type

[**\CyberSource\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ingestProductFeedJson**
> \CyberSource\Model\InlineResponse20019 ingestProductFeedJson($productFeedRequest)

Ingest Product Feed

Uploads a merchant product catalog to ACG and triggers asynchronous syndication to all configured protocol backends (e.g. Google Merchant Center).  **Processing pipeline:** 1. Each product is validated against UCP/ACP schema requirements (required fields, format rules) 2. Valid products are saved to the ACG catalog 3. An async syndication job is triggered to push the catalog to configured backends 4. A `feed_id` is returned — use this with the Syndication Status endpoint to monitor progress  **Supported content types:** `application/json` (this endpoint). CSV and JSONL uploads are also supported via file upload endpoints.  **Partial success:** If some products fail validation, the response status is `PARTIAL_SUCCESS` and the `errors` array lists the per-product validation failures. Successfully validated products are still ingested and syndicated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantCapabilitiesApi();
$productFeedRequest = new \CyberSource\Model\ProductFeedRequest(); // \CyberSource\Model\ProductFeedRequest | Product feed payload. The `products` array is required and must contain at least one product. See `ProductInput` for the full list of required fields.

try {
    $result = $api_instance->ingestProductFeedJson($productFeedRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCapabilitiesApi->ingestProductFeedJson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productFeedRequest** | [**\CyberSource\Model\ProductFeedRequest**](../Model/ProductFeedRequest.md)| Product feed payload. The &#x60;products&#x60; array is required and must contain at least one product. See &#x60;ProductInput&#x60; for the full list of required fields. |

### Return type

[**\CyberSource\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMerchantKeys**
> \CyberSource\Model\ListMerchantKeysResponse200 listMerchantKeys($merchantId, $status)

List keys for a merchant

List all keys for a specific merchant with optional filtering by status. Raises 404 if merchant not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantCapabilitiesApi();
$merchantId = "merchantId_example"; // string | Unique merchant identifier (UUID)
$status = "status_example"; // string | Filter by key status: 'active', 'deactivated', or 'expired'. Omit to return all keys.

try {
    $result = $api_instance->listMerchantKeys($merchantId, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCapabilitiesApi->listMerchantKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| Unique merchant identifier (UUID) |
 **status** | **string**| Filter by key status: &#39;active&#39;, &#39;deactivated&#39;, or &#39;expired&#39;. Omit to return all keys. | [optional]

### Return type

[**\CyberSource\Model\ListMerchantKeysResponse200**](../Model/ListMerchantKeysResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerMerchant**
> \CyberSource\Model\MerchantRegistrationResponse201 registerMerchant($merchantRequest)

Register a merchant

Onboard a new merchant into the VMRS. The merchant declares how they want payment data delivered: cryptogram type (TAVV or DAVV), transaction indicator (TAP, ACG, or Both), whether credentials should be encrypted, and their public encryption key if encryption is enabled. Raises 409 if merchantUrl or vmid already exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantCapabilitiesApi();
$merchantRequest = new \CyberSource\Model\MerchantRequest(); // \CyberSource\Model\MerchantRequest | Merchant registration request

try {
    $result = $api_instance->registerMerchant($merchantRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCapabilitiesApi->registerMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantRequest** | [**\CyberSource\Model\MerchantRequest**](../Model/MerchantRequest.md)| Merchant registration request |

### Return type

[**\CyberSource\Model\MerchantRegistrationResponse201**](../Model/MerchantRegistrationResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMerchant**
> \CyberSource\Model\MerchantRegistrationResponse201 updateMerchant($merchantId, $merchantUpdate)

Update a merchant

Update merchant configuration. Updatable fields: merchantName, merchantUrl, cryptogramType, acceptanceRelationships, protocolInteractions, webIntegrations, apiIntegrations. Partial updates are supported — only provided fields are changed. The vmid, indicator, and paymentPayloadType fields are not updatable here; use the enable/disable-payment-encryption endpoints for encryption changes. Raises 404 if merchant not found, 403 if merchant is deactivated, 409 if new merchantUrl already exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantCapabilitiesApi();
$merchantId = "merchantId_example"; // string | Unique merchant identifier (UUID)
$merchantUpdate = new \CyberSource\Model\MerchantUpdate(); // \CyberSource\Model\MerchantUpdate | Merchant update request

try {
    $result = $api_instance->updateMerchant($merchantId, $merchantUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCapabilitiesApi->updateMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| Unique merchant identifier (UUID) |
 **merchantUpdate** | [**\CyberSource\Model\MerchantUpdate**](../Model/MerchantUpdate.md)| Merchant update request |

### Return type

[**\CyberSource\Model\MerchantRegistrationResponse201**](../Model/MerchantRegistrationResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMerchantKey**
> \CyberSource\Model\ActivateMerchantKeyResponse200 updateMerchantKey($merchantId, $keyId, $keyUpdate)

Update a merchant key

Update key information. Updatable fields are keyName, encryptionKey, algorithm, encryptionType, and expirationDate. Raises 401 if not authenticated, 403 if caller does not own the merchant or if merchant/key is deactivated, 404 if merchant or key not found, 409 if new keyName already exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\MerchantCapabilitiesApi();
$merchantId = "merchantId_example"; // string | Unique merchant identifier (UUID)
$keyId = "keyId_example"; // string | Unique key identifier (UUID)
$keyUpdate = new \CyberSource\Model\KeyUpdate1(); // \CyberSource\Model\KeyUpdate1 | Key update request

try {
    $result = $api_instance->updateMerchantKey($merchantId, $keyId, $keyUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantCapabilitiesApi->updateMerchantKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| Unique merchant identifier (UUID) |
 **keyId** | **string**| Unique key identifier (UUID) |
 **keyUpdate** | [**\CyberSource\Model\KeyUpdate1**](../Model/KeyUpdate1.md)| Key update request |

### Return type

[**\CyberSource\Model\ActivateMerchantKeyResponse200**](../Model/ActivateMerchantKeyResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

