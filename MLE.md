[![Generic badge](https://img.shields.io/badge/MLE-NEW-GREEN.svg)](https://shields.io/)

# Message Level Encryption (MLE) Feature 

This feature provides an implementation of Message Level Encryption (MLE) for APIs provided by CyberSource, integrated within our SDK. This feature ensures secure communication by encrypting messages at the application level before they are sent over the network.

MLE supports both **Request Encryption** (encrypting outgoing request payloads) and **Response Decryption** (decrypting incoming response payloads).

## Authentication Requirements

- **Request MLE**: Only supported with `JWT (JSON Web Token)` authentication type
- **Response MLE**: Only supported with `JWT (JSON Web Token)` authentication type

### MLE with JWT Key Types

MLE works with both JWT key types:

| JWT Key Type | MLE Support | Request MLE Certificate Source |
|---|---|---|
| `P12` (default) | Supported | Auto-extracted from the P12 file (using `requestMleKeyAlias`), or from a separate file via `mleForRequestPublicCertPath` |
| `SHARED_SECRET` | Supported | **Must** be provided via `mleForRequestPublicCertPath` (since there is no P12 file to extract from) |

> **Important:** When using `jwtKeyType=SHARED_SECRET` with MLE, the `mleForRequestPublicCertPath` property is **required** for request MLE. The SDK cannot auto-extract the MLE certificate from a P12 file because shared secret authentication does not use one. The request MLE public certificate can be downloaded from the CyberSource Business Center ([Test](https://businesscentertest.cybersource.com/ebc2) | [Production](https://businesscenter.cybersource.com/ebc2)).

<br/>

## Configuration

## 1. Request MLE Configuration 

#### 1.1 Global Request MLE Configuration

Configure global settings for request MLE using these properties in your `merchantConfig`:

##### (i) Primary Configuration

- **Variable**: `enableRequestMLEForOptionalApisGlobally`
- **Type**: `Boolean`
- **Default**: `false`
- **Description**: Enables request MLE globally for all APIs that have optional MLE support when set to `true`.

---

##### (ii) Deprecated Configuration (Backward Compatibility)

- **Variable**: `useMLEGlobally` ⚠️ **DEPRECATED**
- **Type**: `Boolean`
- **Default**: `false`
- **Description**: **DEPRECATED** - Use `enableRequestMLEForOptionalApisGlobally` instead. This field is maintained for backward compatibility and will be used as an alias for `enableRequestMLEForOptionalApisGlobally`.

---

##### (iii) Advanced Configuration

- **Variable**: `disableRequestMLEForMandatoryApisGlobally`
- **Type**: `Boolean`
- **Default**: `false`
- **Description**: Disables request MLE for APIs that have mandatory MLE requirement when set to `true`.

---

#### 1.2 Request MLE Certificate Configuration [Optional Params]

##### (i) Certificate File Path (Optional)

- **Variable**: `mleForRequestPublicCertPath`
- **Type**: `String`
- **Optional**: `true`
- **Description**: Path to the public certificate file used for request encryption. Supported formats: `.pem`, `.crt`. 
  - **Note**: This parameter is optional when using JWT authentication. If not provided, the request MLE certificate will be automatically fetched from the JWT authentication P12 file using the `requestMleKeyAlias`.

---

##### (ii) Key Alias Configuration (Optional)

- **Variable**: `requestMleKeyAlias`
- **Type**: `String`
- **Optional**: `true`
- **Default**: `CyberSource_SJC_US`
- **Description**: Key alias used to retrieve the MLE certificate from the certificate file. When `mleForRequestPublicCertPath` is not provided, this alias is used to fetch the certificate from the JWT authentication P12 file. If not specified, the SDK will automatically use the default value `CyberSource_SJC_US`.

---

##### (iii) Deprecated Key Alias (Backward Compatibility) (Optional)

- **Variable**: `mleKeyAlias` ⚠️ **DEPRECATED**
- **Type**: `String`
- **Optional**: `true`
- **Default**: `CyberSource_SJC_US`
- **Description**: **DEPRECATED** - Use `requestMleKeyAlias` instead. This field is maintained for backward compatibility and will be used as an alias for `requestMleKeyAlias`.

<br />

## 2. Response MLE Configuration

#### 2.1 Global Response MLE Configuration

- **Variable**: `enableResponseMleGlobally`
- **Type**: `boolean`
- **Default**: `false`
- **Description**: Enables response MLE globally for all APIs that support MLE responses when set to `true`.

----

#### 2.2 Response MLE Private Key Configuration

##### (i) Option 1: Provide Private Key Object

- **Variable**: `responseMlePrivateKey`
- **Type**: `OpenSSLAsymmetricKey`
- **Description**: Direct private key object for response decryption.

---

##### (ii) Option 2: Provide Private Key File Path

- **Variable**: `responseMlePrivateKeyFilePath`
- **Type**: `string`
- **Description**: Path to the private key file. Supported formats: `.p12`, `.pfx`, `.pem`, `.key`, `.p8`. Recommendation use encrypted private Key (password protection) for MLE response.

---

##### (iii) Private Key File Password

- **Variable**: `responseMlePrivateKeyFilePassword`
- **Type**: `string`
- **Description**: Password for the private key file (required for `.p12/.pfx` files or encrypted private keys).

---

#### 2.3 Response MLE Additional Configuration

- **Variable**: `responseMleKID`
- **Type**: `string`
- **Optional**: `true` (when using CyberSource-generated P12 file)
- **Required**: `true` (when using PEM files or private key object)
- **Description**: Key ID value for the MLE response certificate (provided in merchant portal).  
- **Note**: This parameter is optional when `responseMlePrivateKeyFilePath` points to a CyberSource-generated P12 file. If not provided, the SDK will automatically fetch the Key ID from the P12 file. If provided, the SDK will use the user-provided value instead of the auto-fetched value.
- **Required** when using PEM format files (`.pem`, `.key`, `.p8`) or when providing `responseMlePrivateKey` object directly.

<br/>

## 3. API-level MLE Control for Request and Response MLE

### Map Configuration

- **Variable**: `mapToControlMLEonAPI`
- **Type**: `Map<String, String>`
- **Description**: Overrides global MLE settings for specific APIs. The key is the API function name, and the value controls both request and response MLE.
- **Example**: `Map<'apiFunctionName', 'true::true'>`

#### Structure of Values in Map:

(i) **"requestMLE::responseMLE"** - Control both request and response MLE
   - `"true::true"` - Enable both request and response MLE
   - `"false::false"` - Disable both request and response MLE
   - `"true::false"` - Enable request MLE, disable response MLE
   - `"false::true"` - Disable request MLE, enable response MLE
   - `"::true"` - Use global setting for request, enable response MLE
   - `"true::"` - Enable request MLE, use global setting for response
   - `"::false"` - Use global setting for request, disable response MLE
   - `"false::"` - Disable request MLE, use global setting for response

(ii) **"requestMLE"** - Control request MLE only (response uses global setting)
   - `"true"` - Enable request MLE
   - `"false"` - Disable request MLE

<br/>

## 4. Example Configurations

### (i) Minimal Request MLE Configuration

```php
// Array-based configuration - Uses defaults (most common scenario)
$merchantConfig = new MerchantConfiguration();
$merchantConfig->setEnableRequestMLEForOptionalApisGlobally(true);
// Both mleForRequestPublicCertPath and requestMleKeyAlias are optional
// SDK will use JWT P12 file with default alias "CyberSource_SJC_US"
```

### (ii) Request MLE with Deprecated Parameters (Backward Compatibility)

```php
// Using deprecated parameters - still supported but not recommended
$merchantConfig = new MerchantConfiguration();
$merchantConfig->setUseMLEGlobally(true);  // Deprecated - use setEnableRequestMLEForOptionalApisGlobally
$merchantConfig->setMleKeyAlias('Custom_Key_Alias');  // Deprecated - use setRequestMleKeyAlias
```

### (iii) Request MLE with Custom Key Alias

```php
// Configuration - With custom key alias only
$merchantConfig = new MerchantConfiguration();
$merchantConfig->setEnableRequestMLEForOptionalApisGlobally(true);
$merchantConfig->setRequestMleKeyAlias('Custom_Key_Alias');
// Will fetch from JWT P12 file using custom alias
```

### (iv) Request MLE with Separate Certificate File

```php
// Configuration - With separate MLE certificate file
$merchantConfig = new MerchantConfiguration();
$merchantConfig->setEnableRequestMLEForOptionalApisGlobally(true);
$merchantConfig->setMleForRequestPublicCertPath('/path/to/public/cert.pem');
$merchantConfig->setRequestMleKeyAlias('Custom_Key_Alias');

// API-specific control
$mleControlMap = [
    'createPayment' => 'true',     // Enable request MLE for this API
    'capturePayment' => 'false'    // Disable request MLE for this API
];
$merchantConfig->setMapToControlMLEonAPI($mleControlMap);
```

### (v) Response MLE Configuration with Private Key File

```php
// Configuration with CyberSource-generated P12 file
$merchantConfig = new MerchantConfiguration();
$merchantConfig->setEnableResponseMleGlobally(true);
$merchantConfig->setResponseMlePrivateKeyFilePath('/path/to/private/key.p12');
$merchantConfig->setResponseMlePrivateKeyFilePassword('password');
// responseMleKID is optional for CyberSource-generated P12 files - SDK will auto-fetch if not provided
// $merchantConfig->setResponseMleKID('your-key-id'); // Optional - overrides auto-fetched value

// API-specific control
$mleControlMap = [
    'createPayment' => '::true'  // Enable response MLE only for this API
];
$merchantConfig->setMapToControlMLEonAPI($mleControlMap);
```

```php
// Configuration with PEM file (responseMleKID is required)
$merchantConfig = new MerchantConfiguration();
$merchantConfig->setEnableResponseMleGlobally(true);
$merchantConfig->setResponseMlePrivateKeyFilePath('/path/to/private/key.pem');
$merchantConfig->setResponseMleKID('your-key-id'); // Required for PEM files

// API-specific control
$mleControlMap = [
    'createPayment' => '::true'  // Enable response MLE only for this API
];
$merchantConfig->setMapToControlMLEonAPI($mleControlMap);
```

### (vi) Response MLE Configuration with Private Key Object

```php
// Load private key programmatically
$privateKey = openssl_pkey_get_private(file_get_contents('/path/to/private/key.pem'), 'password');

// Create MerchantConfig with private key object
$merchantConfig = new MerchantConfiguration();
$merchantConfig->setEnableResponseMleGlobally(true);
$merchantConfig->setResponseMleKID('your-key-id'); // Required when using private key object
$merchantConfig->setResponseMlePrivateKey($privateKey);

// API-specific control
$mleControlMap = [
    'createPayment' => '::true'  // Enable response MLE only for this API
];
$merchantConfig->setMapToControlMLEonAPI($mleControlMap);
```

### (vii) Both Request and Response MLE Configuration

```php
// Complete configuration for both request and response MLE (with CyberSource-generated P12 file)
$merchantConfig = new MerchantConfiguration();

// Request MLE settings (minimal - uses defaults)
$merchantConfig->setEnableRequestMLEForOptionalApisGlobally(true);

// Response MLE settings (with CyberSource-generated P12 file)
$merchantConfig->setEnableResponseMleGlobally(true);
$merchantConfig->setResponseMlePrivateKeyFilePath('/path/to/private/key.p12');
$merchantConfig->setResponseMlePrivateKeyFilePassword('password');
// responseMleKID is optional for CyberSource-generated P12 files
// $merchantConfig->setResponseMleKID('your-key-id'); // Optional - overrides auto-fetched value

// API-specific control for both request and response
$mleControlMap = [
    'createPayment' => 'true::true',      // Enable both request and response MLE for this API
    'capturePayment' => 'false::true',    // Disable request, enable response MLE for this API
    'refundPayment' => 'true::false',     // Enable request, disable response MLE for this API
    'createCredit' => '::true'            // Use global request setting, enable response MLE for this API
];
$merchantConfig->setMapToControlMLEonAPI($mleControlMap);
```

### (viii) Mixed Configuration (New and Deprecated Parameters)

```php
// Example showing both new and deprecated parameters (deprecated will be used as aliases)
$merchantConfig = new MerchantConfiguration();

// If both are set with same value, it works fine
$merchantConfig->setEnableRequestMLEForOptionalApisGlobally(true);
$merchantConfig->setUseMLEGlobally(true);  // Deprecated but same value

// If both are set with different values, it will cause InvalidArgumentException
// $merchantConfig->setEnableRequestMLEForOptionalApisGlobally(true);
// $merchantConfig->setUseMLEGlobally(false);  // Do not set different values in enableRequestMLEForOptionalApisGlobally and useMLEGlobally

// Key alias - both are synchronized via delegation pattern
$merchantConfig->setRequestMleKeyAlias('New_Alias');
$merchantConfig->setMleKeyAlias('Old_Alias');  // This delegates to setRequestMleKeyAlias, both will have value 'Old_Alias'
```

### (ix) Request MLE with Shared Secret (JWT Symmetric Key) Authentication

```php
// MLE with JWT SHARED_SECRET authentication — requires mleForRequestPublicCertPath
$merchantConfig = new MerchantConfiguration();

// JWT authentication with SHARED_SECRET key type
$merchantConfig->setAuthenticationType('JWT');
$merchantConfig->setMerchantID('your_merchant_id');
$merchantConfig->setRunEnvironment('apitest.cybersource.com');
$merchantConfig->setJwtKeyType('SHARED_SECRET');
$merchantConfig->setApiKeyID('your_key_id');
$merchantConfig->setSecretKey('your_base64_encoded_shared_secret');

// Request MLE settings
$merchantConfig->setEnableRequestMLEForOptionalApisGlobally(true);
// mleForRequestPublicCertPath is REQUIRED for SHARED_SECRET since there is no P12 file
$merchantConfig->setMleForRequestPublicCertPath('/path/to/mle/public/cert.pem');
$merchantConfig->setRequestMleKeyAlias('CyberSource_SJC_US');  // Optional, defaults to CyberSource_SJC_US
```

> **Note:** When using `jwtKeyType=SHARED_SECRET`, the MLE certificate cannot be auto-extracted from a P12 file. You **must** provide the certificate via `mleForRequestPublicCertPath`. The request MLE public certificate can be downloaded from the CyberSource Business Center ([Test](https://businesscentertest.cybersource.com/ebc2) | [Production](https://businesscenter.cybersource.com/ebc2)).

### (x) Response MLE with MetaKey

When using MetaKey (`useMetaKey=true`) with Response MLE, the response MLE private key and KID must belong to the **portfolio (parent account)**, not the transacting merchant.

```php
// MetaKey + Response MLE — portfolio's response MLE key is required
$merchantConfig = new MerchantConfiguration();

// JWT authentication with MetaKey
$merchantConfig->setAuthenticationType('JWT');
$merchantConfig->setJwtKeyType('SHARED_SECRET');
$merchantConfig->setMerchantID('your_transacting_merchant_id');
$merchantConfig->setApiKeyID('your_metakey_portfolio_KeyId');
$merchantConfig->setSecretKey('your_metakey_portfolio_shared_secret_key');
$merchantConfig->setPortfolioID('your_portfolio_id');
$merchantConfig->setUseMetaKey(true);
$merchantConfig->setRunEnvironment('apitest.cybersource.com');

// Response MLE — use the portfolio's response MLE key, not the transacting merchant's
$merchantConfig->setEnableResponseMleGlobally(true);
$merchantConfig->setResponseMlePrivateKeyFilePath('/path/to/portfolio/response/mle/private/key.p12');
$merchantConfig->setResponseMlePrivateKeyFilePassword('portfolio_private_key_password');
// responseMleKID is optional when using a CyberSource-generated P12 file (auto-fetched from P12)
// Required when using PEM files or responseMlePrivateKey object
// $merchantConfig->setResponseMleKID('your_portfolio_response_mle_kid');
```

> **Important:** In MetaKey mode, the portfolio is the transaction submitter. The response is encrypted using the portfolio's MLE certificate, so the decryption key must also be the portfolio's.

<br/>

## 5. JSON Configuration Examples

### (i) Minimal Request MLE

```json
{
  "merchantConfig": {
    "enableRequestMLEForOptionalApisGlobally": true
  }
}
```

### (ii) Request MLE with Deprecated Parameters

```json
{
  "merchantConfig": {
    "useMLEGlobally": true,
    "mleKeyAlias": "Custom_Key_Alias"
  }
}
```

### (iii) Request MLE with Custom Configuration

```json
{
  "merchantConfig": {
    "enableRequestMLEForOptionalApisGlobally": true,
    "mleForRequestPublicCertPath": "/path/to/public/cert.pem",
    "requestMleKeyAlias": "Custom_Key_Alias",
    "mapToControlMLEonAPI": {
      "createPayment": "true",
      "capturePayment": "false"
    }
  }
}
```

### (iv) Response MLE Only (CyberSource-generated P12 file)

```json
{
  "merchantConfig": {
    "enableResponseMleGlobally": true,
    "responseMlePrivateKeyFilePath": "/path/to/private/key.p12",
    "responseMlePrivateKeyFilePassword": "password",
    "mapToControlMLEonAPI": {
      "createPayment": "::true"
    }
  }
}
```
Note: `responseMleKID` is optional for CyberSource-generated P12 files - SDK will auto-fetch if not provided

### (iv-a) Response MLE Only (PEM file)

```json
{
  "merchantConfig": {
    "enableResponseMleGlobally": true,
    "responseMlePrivateKeyFilePath": "/path/to/private/key.pem",
    "responseMleKID": "your-key-id",
    "mapToControlMLEonAPI": {
      "createPayment": "::true"
    }
  }
}
```
Note: `responseMleKID` is required for PEM files

### (v) Both Request and Response MLE

```json
{
  "merchantConfig": {
    "enableRequestMLEForOptionalApisGlobally": true,
    "enableResponseMleGlobally": true,
    "responseMlePrivateKeyFilePath": "/path/to/private/key.p12",
    "responseMlePrivateKeyFilePassword": "password",
    "mapToControlMLEonAPI": {
      "createPayment": "true::true",
      "capturePayment": "false::true",
      "refundPayment": "true::false",
      "createCredit": "::true"
    }
  }
}
```
Note: `responseMleKID` is optional for CyberSource-generated P12 files - SDK will auto-fetch if not provided

<br/>

## 6. Supported Private Key File Formats

For Response MLE private key files, the following formats are supported:

- **PKCS#12**: `.p12`, `.pfx` (requires password)
- **PEM**: `.pem`, `.key`, `.p8` (supports both encrypted and unencrypted)

<br/>

## 7. Important Notes

### (i) Request MLE
- Both `mleForRequestPublicCertPath` and `requestMleKeyAlias` are **optional** parameters
- If `mleForRequestPublicCertPath` is not provided, the SDK will automatically fetch the MLE certificate from the JWT authentication P12 file
- If `requestMleKeyAlias` is not provided, the SDK will use the default value `CyberSource_SJC_US`
- The SDK provides flexible configuration options: you can use defaults, customize the key alias only, or provide a separate certificate file
- If `enableRequestMLEForOptionalApisGlobally` is set to `true`, it enables request MLE for all APIs that have optional MLE support
- APIs with mandatory MLE requirements are enabled by default unless `disableRequestMLEForMandatoryApisGlobally` is set to `true`
- If `mapToControlMLEonAPI` doesn't contain a specific API, the global setting applies
- When using `jwtKeyType=SHARED_SECRET`, the `mleForRequestPublicCertPath` parameter is **required** because the SDK cannot auto-extract the MLE certificate from a P12 file. See [Example (ix)](#ix-request-mle-with-shared-secret-jwt-symmetric-key-authentication) for a complete configuration.
- For HTTP Signature authentication, request MLE will fall back to non-encrypted requests with a warning. **Note:** HTTP Signature is being deprecated — migrate to JWT with Shared Secret (`jwtKeyType=SHARED_SECRET`) to enable full MLE support using the same credentials. See [Example (ix)](#ix-request-mle-with-shared-secret-jwt-symmetric-key-authentication) for details.

### (ii) Response MLE
- Response MLE requires either `responseMlePrivateKey` object OR `responseMlePrivateKeyFilePath` (not both)
- The `responseMleKID` parameter behavior:
  - **Optional** when `responseMlePrivateKeyFilePath` points to a CyberSource-generated P12 file (SDK auto-fetches from P12)
  - **Required** when using PEM format files (`.pem`, `.key`, `.p8`)
  - **Required** when using `responseMlePrivateKey` object directly
  - When both auto-fetched and user-provided values exist, the user-provided value takes precedence
- **MetaKey (`useMetaKey=true`):** When Response MLE is used with MetaKey, the `responseMlePrivateKeyFilePath` (or `responseMlePrivateKey` object) and `responseMleKID` must belong to the **portfolio (parent account)** — not the transacting merchant. This is because in MetaKey mode the portfolio is the transaction submitter, and the response is encrypted using the portfolio's MLE certificate.
- If an API expects a mandatory MLE response but the map specifies non-MLE response, the API might return an error
- Both the private key object and file path approaches are mutually exclusive
- Password-protected private keys enhance security

### (iii) Backward Compatibility
- `useMLEGlobally` is **deprecated** but still supported as an alias for `enableRequestMLEForOptionalApisGlobally`
- If `useMLEGlobally` and `enableRequestMLEForOptionalApisGlobally` are provided with **different values**, it will cause an `InvalidArgumentException`
- `mleKeyAlias` is **deprecated** but still supported as an alias for `requestMleKeyAlias`
- Both deprecated and new parameters are synchronized via delegation pattern - setting either one updates both

### (iv) API-level Control Validation
- The `mapToControlMLEonAPI` values are validated for proper format
- Invalid formats (empty values, multiple separators, non-boolean values) will cause configuration errors
- Empty string after or before `::` separator will use global defaults

### (v) Configuration Validation
- The SDK performs comprehensive validation of MLE configuration parameters
- Conflicting values between new and deprecated parameters will result in `InvalidArgumentException`
- File path validation is performed for certificate and private key files
- Invalid boolean values in `mapToControlMLEonAPI` will cause parsing errors

<br/>

## 8. Error Handling

The SDK provides specific error messages for common MLE issues:
- Invalid private key for response decryption
- Missing certificates for request encryption
- Invalid file formats or paths
- Authentication type mismatches
- Configuration validation errors
- Conflicting parameter values between new and deprecated fields
- Invalid format in `mapToControlMLEonAPI` values

<br/>

## 9. Sample Code Repository

For comprehensive examples and sample implementations, please refer to:
[CyberSource PHP Sample Code Repository (on GitHub)](https://github.com/CyberSource/cybersource-rest-samples-php/tree/master/Samples/MLEFeature)

For MLE with JWT Shared Secret (HS256) authentication specifically, see:
- [JWT Shared Secret Auth Samples](https://github.com/CyberSource/cybersource-rest-samples-php/tree/master/Samples/JwtSharedSecretAuth) — includes a payment sample with MLE enabled
- [JwtSharedSecretConfiguration.php](https://github.com/CyberSource/cybersource-rest-samples-php/tree/master/Resources/JwtSharedSecretConfiguration.php) — configuration with MLE enabled

<br/>

## 10. Additional Information

### (i) API Support
- MLE is designed to support specific APIs that have been enabled for encryption
- Support can be extended to additional APIs based on requirements and updates

### (ii) Using the SDK
To use the MLE feature in the SDK, configure the `merchantConfig` object as shown above and pass it to the SDK initialization. The SDK will automatically handle encryption and decryption based on your configuration.

### (iii) Migration from Deprecated Parameters

If you're currently using deprecated parameters, here's how to migrate:

```php
// OLD (Deprecated)
$merchantConfig->setUseMLEGlobally(true);
$merchantConfig->setMleKeyAlias('Custom_Alias');

// NEW (Recommended)
$merchantConfig->setEnableRequestMLEForOptionalApisGlobally(true);
$merchantConfig->setRequestMleKeyAlias('Custom_Alias');
```

The deprecated parameters will continue to work but are not recommended for new implementations.

<br/>

## 11. Contact
For any issues or further assistance, please open an issue on the GitHub repository or contact our support team.
