# Fastly\Api\TokensApi


```php
$apiInstance = new Fastly\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**bulkRevokeTokens()**](TokensApi.md#bulkRevokeTokens) | **DELETE** /tokens | Revoke multiple tokens
[**createToken()**](TokensApi.md#createToken) | **POST** /tokens | Create a token
[**getTokenCurrent()**](TokensApi.md#getTokenCurrent) | **GET** /tokens/self | Get the current token
[**listTokensCustomer()**](TokensApi.md#listTokensCustomer) | **GET** /customer/{customer_id}/tokens | List tokens for a customer
[**listTokensUser()**](TokensApi.md#listTokensUser) | **GET** /tokens | List tokens for the authenticated user
[**revokeToken()**](TokensApi.md#revokeToken) | **DELETE** /tokens/{token_id} | Revoke a token
[**revokeTokenCurrent()**](TokensApi.md#revokeTokenCurrent) | **DELETE** /tokens/self | Revoke the current token


## `bulkRevokeTokens()`

```php
bulkRevokeTokens($options) // Revoke multiple tokens
```

Revoke Tokens in bulk format. Users may only revoke their own tokens. Superusers may revoke tokens of others.

### Example
```php
try {
    $apiInstance->bulkRevokeTokens($options);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->bulkRevokeTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**body** | **object** |  | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `createToken()`

```php
createToken($options): \Fastly\Model\TokenCreatedResponse // Create a token
```

Create an API token. If two-factor authentication is enabled for your account, review [the instructions](/reference/api/auth/) for including a one-time password in the request.

### Example
```php
try {
    $result = $apiInstance->createToken($options);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->createToken: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\TokenCreatedResponse**](../Model/TokenCreatedResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getTokenCurrent()`

```php
getTokenCurrent($options): \Fastly\Model\TokenResponse // Get the current token
```

Get a single token based on the access_token used in the request.

### Example
```php
try {
    $result = $apiInstance->getTokenCurrent($options);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getTokenCurrent: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\TokenResponse**](../Model/TokenResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listTokensCustomer()`

```php
listTokensCustomer($options): \Fastly\Model\TokenResponse[] // List tokens for a customer
```

List all tokens belonging to a specific customer.

### Example
```php
try {
    $result = $apiInstance->listTokensCustomer($options);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->listTokensCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**customer_id** | **string** | Alphanumeric string identifying the customer. |

### Return type

[**\Fastly\Model\TokenResponse[]**](../Model/TokenResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listTokensUser()`

```php
listTokensUser($options): \Fastly\Model\TokenResponse[] // List tokens for the authenticated user
```

List all tokens belonging to the authenticated user.

### Example
```php
try {
    $result = $apiInstance->listTokensUser($options);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->listTokensUser: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

[**\Fastly\Model\TokenResponse[]**](../Model/TokenResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `revokeToken()`

```php
revokeToken($options) // Revoke a token
```

Revoke a specific token by its id.

### Example
```php
try {
    $apiInstance->revokeToken($options);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->revokeToken: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**token_id** | **string** | Alphanumeric string identifying a token. |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `revokeTokenCurrent()`

```php
revokeTokenCurrent($options) // Revoke the current token
```

Revoke a token that is used to authenticate the request.

### Example
```php
try {
    $apiInstance->revokeTokenCurrent($options);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->revokeTokenCurrent: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

This endpoint does not need any parameters.

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
