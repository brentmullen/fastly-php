# Fastly\Api\ResponseObjectApi


```php
$apiInstance = new Fastly\Api\ResponseObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createResponseObject()**](ResponseObjectApi.md#createResponseObject) | **POST** /service/{service_id}/version/{version_id}/response_object | Create a Response object
[**deleteResponseObject()**](ResponseObjectApi.md#deleteResponseObject) | **DELETE** /service/{service_id}/version/{version_id}/response_object/{response_object_name} | Delete a Response Object
[**getResponseObject()**](ResponseObjectApi.md#getResponseObject) | **GET** /service/{service_id}/version/{version_id}/response_object/{response_object_name} | Get a Response object
[**listResponseObjects()**](ResponseObjectApi.md#listResponseObjects) | **GET** /service/{service_id}/version/{version_id}/response_object | List Response objects
[**updateResponseObject()**](ResponseObjectApi.md#updateResponseObject) | **PUT** /service/{service_id}/version/{version_id}/response_object/{response_object_name} | Update a Response object


## `createResponseObject()`

```php
createResponseObject($options): \Fastly\Model\ResponseObjectResponse // Create a Response object
```

Creates a new Response Object.

### Example
```php
try {
    $result = $apiInstance->createResponseObject($options);
} catch (Exception $e) {
    echo 'Exception when calling ResponseObjectApi->createResponseObject: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\ResponseObjectResponse**](../Model/ResponseObjectResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteResponseObject()`

```php
deleteResponseObject($options): object // Delete a Response Object
```

Deletes the specified Response Object.

### Example
```php
try {
    $result = $apiInstance->deleteResponseObject($options);
} catch (Exception $e) {
    echo 'Exception when calling ResponseObjectApi->deleteResponseObject: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**response_object_name** | **string** | Name for the request settings. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getResponseObject()`

```php
getResponseObject($options): \Fastly\Model\ResponseObjectResponse // Get a Response object
```

Gets the specified Response Object.

### Example
```php
try {
    $result = $apiInstance->getResponseObject($options);
} catch (Exception $e) {
    echo 'Exception when calling ResponseObjectApi->getResponseObject: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**response_object_name** | **string** | Name for the request settings. |

### Return type

[**\Fastly\Model\ResponseObjectResponse**](../Model/ResponseObjectResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listResponseObjects()`

```php
listResponseObjects($options): \Fastly\Model\ResponseObjectResponse[] // List Response objects
```

Returns all Response Objects for the specified service and version.

### Example
```php
try {
    $result = $apiInstance->listResponseObjects($options);
} catch (Exception $e) {
    echo 'Exception when calling ResponseObjectApi->listResponseObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\ResponseObjectResponse[]**](../Model/ResponseObjectResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateResponseObject()`

```php
updateResponseObject($options): \Fastly\Model\ResponseObjectResponse // Update a Response object
```

Updates the specified Response Object.

### Example
```php
try {
    $result = $apiInstance->updateResponseObject($options);
} catch (Exception $e) {
    echo 'Exception when calling ResponseObjectApi->updateResponseObject: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**response_object_name** | **string** | Name for the request settings. |

### Return type

[**\Fastly\Model\ResponseObjectResponse**](../Model/ResponseObjectResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
