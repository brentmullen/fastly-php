# Fastly\Api\LoggingDigitaloceanApi


```php
$apiInstance = new Fastly\Api\LoggingDigitaloceanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createLogDigocean()**](LoggingDigitaloceanApi.md#createLogDigocean) | **POST** /service/{service_id}/version/{version_id}/logging/digitalocean | Create a DigitalOcean Spaces log endpoint
[**deleteLogDigocean()**](LoggingDigitaloceanApi.md#deleteLogDigocean) | **DELETE** /service/{service_id}/version/{version_id}/logging/digitalocean/{logging_digitalocean_name} | Delete a DigitalOcean Spaces log endpoint
[**getLogDigocean()**](LoggingDigitaloceanApi.md#getLogDigocean) | **GET** /service/{service_id}/version/{version_id}/logging/digitalocean/{logging_digitalocean_name} | Get a DigitalOcean Spaces log endpoint
[**listLogDigocean()**](LoggingDigitaloceanApi.md#listLogDigocean) | **GET** /service/{service_id}/version/{version_id}/logging/digitalocean | List DigitalOcean Spaces log endpoints
[**updateLogDigocean()**](LoggingDigitaloceanApi.md#updateLogDigocean) | **PUT** /service/{service_id}/version/{version_id}/logging/digitalocean/{logging_digitalocean_name} | Update a DigitalOcean Spaces log endpoint


## `createLogDigocean()`

```php
createLogDigocean($options): \Fastly\Model\LoggingDigitaloceanResponse // Create a DigitalOcean Spaces log endpoint
```

Create a DigitalOcean Space for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogDigocean($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDigitaloceanApi->createLogDigocean: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'waf_debug', 'null']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**message_type** | **string** | How the message should be formatted. | [optional] [one of: 'classic', 'loggly', 'logplex', 'blank'] [defaults to 'classic']
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [defaults to 3600]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default `0`, no compression). If an explicit non-zero value is set, then `compression_codec` will default to \\\&quot;gzip.\\\&quot; Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [defaults to 0]
**compression_codec** | **string** | The codec used for compression of your logs. Valid values are `zstd`, `snappy`, and `gzip`. If the specified codec is \\\&quot;gzip\\\&quot;, `gzip_level` will default to 3. To specify a different level, leave `compression_codec` blank and explicitly set the level using `gzip_level`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [one of: 'zstd', 'snappy', 'gzip']
**bucket_name** | **string** | The name of the DigitalOcean Space. | [optional]
**access_key** | **string** | Your DigitalOcean Spaces account access key. | [optional]
**secret_key** | **string** | Your DigitalOcean Spaces account secret key. | [optional]
**domain** | **string** | The domain of the DigitalOcean Spaces endpoint. | [optional] [defaults to 'nyc3.digitaloceanspaces.com']
**path** | **string** | The path to upload logs to. | [optional] [defaults to 'null']
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']

### Return type

[**\Fastly\Model\LoggingDigitaloceanResponse**](../Model/LoggingDigitaloceanResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogDigocean()`

```php
deleteLogDigocean($options): object // Delete a DigitalOcean Spaces log endpoint
```

Delete the DigitalOcean Space for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogDigocean($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDigitaloceanApi->deleteLogDigocean: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_digitalocean_name** | **string** | The name for the real-time logging configuration. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogDigocean()`

```php
getLogDigocean($options): \Fastly\Model\LoggingDigitaloceanResponse // Get a DigitalOcean Spaces log endpoint
```

Get the DigitalOcean Space for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogDigocean($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDigitaloceanApi->getLogDigocean: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_digitalocean_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingDigitaloceanResponse**](../Model/LoggingDigitaloceanResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogDigocean()`

```php
listLogDigocean($options): \Fastly\Model\LoggingDigitaloceanResponse[] // List DigitalOcean Spaces log endpoints
```

List all of the DigitalOcean Spaces for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogDigocean($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDigitaloceanApi->listLogDigocean: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingDigitaloceanResponse[]**](../Model/LoggingDigitaloceanResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogDigocean()`

```php
updateLogDigocean($options): \Fastly\Model\LoggingDigitaloceanResponse // Update a DigitalOcean Spaces log endpoint
```

Update the DigitalOcean Space for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogDigocean($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingDigitaloceanApi->updateLogDigocean: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_digitalocean_name** | **string** | The name for the real-time logging configuration. |
**name** | **string** | The name for the real-time logging configuration. | [optional]
**placement** | **string** | Where in the generated VCL the logging call should be placed. If not set, endpoints with `format_version` of 2 are placed in `vcl_log` and those with `format_version` of 1 are placed in `vcl_deliver`. | [optional] [one of: 'none', 'waf_debug', 'null']
**format_version** | **int** | The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in `vcl_log` if `format_version` is set to `2` and in `vcl_deliver` if `format_version` is set to `1`. | [optional] [one of: 1, 2]
**response_condition** | **string** | The name of an existing condition in the configured endpoint, or leave blank to always execute. | [optional]
**format** | **string** | A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). | [optional] [defaults to '%h %l %u %t "%r" %&gt;s %b']
**message_type** | **string** | How the message should be formatted. | [optional] [one of: 'classic', 'loggly', 'logplex', 'blank'] [defaults to 'classic']
**timestamp_format** | **string** | Date and time in ISO 8601 format. | [optional]
**period** | **int** | How frequently log files are finalized so they can be available for reading (in seconds). | [optional] [defaults to 3600]
**gzip_level** | **int** | What level of gzip encoding to have when sending logs (default `0`, no compression). If an explicit non-zero value is set, then `compression_codec` will default to \\\&quot;gzip.\\\&quot; Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [defaults to 0]
**compression_codec** | **string** | The codec used for compression of your logs. Valid values are `zstd`, `snappy`, and `gzip`. If the specified codec is \\\&quot;gzip\\\&quot;, `gzip_level` will default to 3. To specify a different level, leave `compression_codec` blank and explicitly set the level using `gzip_level`. Specifying both `compression_codec` and `gzip_level` in the same API request will result in an error. | [optional] [one of: 'zstd', 'snappy', 'gzip']
**bucket_name** | **string** | The name of the DigitalOcean Space. | [optional]
**access_key** | **string** | Your DigitalOcean Spaces account access key. | [optional]
**secret_key** | **string** | Your DigitalOcean Spaces account secret key. | [optional]
**domain** | **string** | The domain of the DigitalOcean Spaces endpoint. | [optional] [defaults to 'nyc3.digitaloceanspaces.com']
**path** | **string** | The path to upload logs to. | [optional] [defaults to 'null']
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']

### Return type

[**\Fastly\Model\LoggingDigitaloceanResponse**](../Model/LoggingDigitaloceanResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
