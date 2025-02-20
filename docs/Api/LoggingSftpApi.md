# Fastly\Api\LoggingSftpApi


```php
$apiInstance = new Fastly\Api\LoggingSftpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createLogSftp()**](LoggingSftpApi.md#createLogSftp) | **POST** /service/{service_id}/version/{version_id}/logging/sftp | Create an SFTP log endpoint
[**deleteLogSftp()**](LoggingSftpApi.md#deleteLogSftp) | **DELETE** /service/{service_id}/version/{version_id}/logging/sftp/{logging_sftp_name} | Delete an SFTP log endpoint
[**getLogSftp()**](LoggingSftpApi.md#getLogSftp) | **GET** /service/{service_id}/version/{version_id}/logging/sftp/{logging_sftp_name} | Get an SFTP log endpoint
[**listLogSftp()**](LoggingSftpApi.md#listLogSftp) | **GET** /service/{service_id}/version/{version_id}/logging/sftp | List SFTP log endpoints
[**updateLogSftp()**](LoggingSftpApi.md#updateLogSftp) | **PUT** /service/{service_id}/version/{version_id}/logging/sftp/{logging_sftp_name} | Update an SFTP log endpoint


## `createLogSftp()`

```php
createLogSftp($options): \Fastly\Model\LoggingSftpResponse // Create an SFTP log endpoint
```

Create a SFTP for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogSftp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSftpApi->createLogSftp: ', $e->getMessage(), PHP_EOL;
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
**address** | **string** | A hostname or IPv4 address. | [optional]
**port** | [**mixed**](../Model/mixed.md) | The port number. | [optional]
**password** | **string** | The password for the server. If both `password` and `secret_key` are passed, `secret_key` will be used in preference. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [defaults to 'null']
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']
**secret_key** | **string** | The SSH private key for the server. If both `password` and `secret_key` are passed, `secret_key` will be used in preference. | [optional] [defaults to 'null']
**ssh_known_hosts** | **string** | A list of host keys for all hosts we can connect to over SFTP. | [optional]
**user** | **string** | The username for the server. | [optional]

### Return type

[**\Fastly\Model\LoggingSftpResponse**](../Model/LoggingSftpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogSftp()`

```php
deleteLogSftp($options): object // Delete an SFTP log endpoint
```

Delete the SFTP for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogSftp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSftpApi->deleteLogSftp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_sftp_name** | **string** | The name for the real-time logging configuration. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogSftp()`

```php
getLogSftp($options): \Fastly\Model\LoggingSftpResponse // Get an SFTP log endpoint
```

Get the SFTP for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogSftp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSftpApi->getLogSftp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_sftp_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingSftpResponse**](../Model/LoggingSftpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogSftp()`

```php
listLogSftp($options): \Fastly\Model\LoggingSftpResponse[] // List SFTP log endpoints
```

List all of the SFTPs for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogSftp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSftpApi->listLogSftp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingSftpResponse[]**](../Model/LoggingSftpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogSftp()`

```php
updateLogSftp($options): \Fastly\Model\LoggingSftpResponse // Update an SFTP log endpoint
```

Update the SFTP for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogSftp($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingSftpApi->updateLogSftp: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_sftp_name** | **string** | The name for the real-time logging configuration. |
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
**address** | **string** | A hostname or IPv4 address. | [optional]
**port** | [**mixed**](../Model/mixed.md) | The port number. | [optional]
**password** | **string** | The password for the server. If both `password` and `secret_key` are passed, `secret_key` will be used in preference. | [optional]
**path** | **string** | The path to upload logs to. | [optional] [defaults to 'null']
**public_key** | **string** | A PGP public key that Fastly will use to encrypt your log files before writing them to disk. | [optional] [defaults to 'null']
**secret_key** | **string** | The SSH private key for the server. If both `password` and `secret_key` are passed, `secret_key` will be used in preference. | [optional] [defaults to 'null']
**ssh_known_hosts** | **string** | A list of host keys for all hosts we can connect to over SFTP. | [optional]
**user** | **string** | The username for the server. | [optional]

### Return type

[**\Fastly\Model\LoggingSftpResponse**](../Model/LoggingSftpResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
