# Fastly\Api\LoggingKafkaApi


```php
$apiInstance = new Fastly\Api\LoggingKafkaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
```

## Methods

Method | Fastly API endpoint | Description
------------- | ------------- | -------------
[**createLogKafka()**](LoggingKafkaApi.md#createLogKafka) | **POST** /service/{service_id}/version/{version_id}/logging/kafka | Create a Kafka log endpoint
[**deleteLogKafka()**](LoggingKafkaApi.md#deleteLogKafka) | **DELETE** /service/{service_id}/version/{version_id}/logging/kafka/{logging_kafka_name} | Delete the Kafka log endpoint
[**getLogKafka()**](LoggingKafkaApi.md#getLogKafka) | **GET** /service/{service_id}/version/{version_id}/logging/kafka/{logging_kafka_name} | Get a Kafka log endpoint
[**listLogKafka()**](LoggingKafkaApi.md#listLogKafka) | **GET** /service/{service_id}/version/{version_id}/logging/kafka | List Kafka log endpoints
[**updateLogKafka()**](LoggingKafkaApi.md#updateLogKafka) | **PUT** /service/{service_id}/version/{version_id}/logging/kafka/{logging_kafka_name} | Update the Kafka log endpoint


## `createLogKafka()`

```php
createLogKafka($options): \Fastly\Model\LoggingKafkaResponse // Create a Kafka log endpoint
```

Create a Kafka logging endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->createLogKafka($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKafkaApi->createLogKafka: ', $e->getMessage(), PHP_EOL;
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
**tls_ca_cert** | **string** | A secure certificate to authenticate a server with. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_cert** | **string** | The client certificate used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_client_key** | **string** | The client private key used to make authenticated requests. Must be in PEM format. | [optional] [defaults to 'null']
**tls_hostname** | **string** | The hostname to verify the server&#39;s certificate. This should be one of the Subject Alternative Name (SAN) fields for the certificate. Common Names (CN) are not supported. | [optional] [defaults to 'null']
**topic** | **string** | The Kafka topic to send logs to. Required. | [optional]
**brokers** | **string** | A comma-separated list of IP addresses or hostnames of Kafka brokers. Required. | [optional]
**compression_codec** | **string** | The codec used for compression of your logs. | [optional] [one of: 'gzip', 'snappy', 'lz4', 'null']
**required_acks** | **int** | The number of acknowledgements a leader must receive before a write is considered successful. | [optional] [one of: 1, 0, -1]
**request_max_bytes** | **int** | The maximum number of bytes sent in one request. Defaults `0` (no limit). | [optional] [defaults to 0]
**parse_log_keyvals** | **bool** | Enables parsing of key&#x3D;value tuples from the beginning of a logline, turning them into [record headers](https://cwiki.apache.org/confluence/display/KAFKA/KIP-82+-+Add+Record+Headers). | [optional]
**auth_method** | **string** | SASL authentication method. | [optional] [one of: 'plain', 'scram-sha-256', 'scram-sha-512']
**user** | **string** | SASL user. | [optional]
**password** | **string** | SASL password. | [optional]
**use_tls** | [**\Fastly\Model\LoggingUseTls**](../Model/LoggingUseTls.md) |  | [optional]

### Return type

[**\Fastly\Model\LoggingKafkaResponse**](../Model/LoggingKafkaResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `deleteLogKafka()`

```php
deleteLogKafka($options): object // Delete the Kafka log endpoint
```

Delete the Kafka logging endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->deleteLogKafka($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKafkaApi->deleteLogKafka: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_kafka_name** | **string** | The name for the real-time logging configuration. |

### Return type

**object**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `getLogKafka()`

```php
getLogKafka($options): \Fastly\Model\LoggingKafkaResponse // Get a Kafka log endpoint
```

Get the Kafka logging endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->getLogKafka($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKafkaApi->getLogKafka: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_kafka_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingKafkaResponse**](../Model/LoggingKafkaResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `listLogKafka()`

```php
listLogKafka($options): \Fastly\Model\LoggingKafkaResponse[] // List Kafka log endpoints
```

List all of the Kafka logging endpoints for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->listLogKafka($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKafkaApi->listLogKafka: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |

### Return type

[**\Fastly\Model\LoggingKafkaResponse[]**](../Model/LoggingKafkaResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)

## `updateLogKafka()`

```php
updateLogKafka($options): \Fastly\Model\LoggingKafkaResponse // Update the Kafka log endpoint
```

Update the Kafka logging endpoint for a particular service and version.

### Example
```php
try {
    $result = $apiInstance->updateLogKafka($options);
} catch (Exception $e) {
    echo 'Exception when calling LoggingKafkaApi->updateLogKafka: ', $e->getMessage(), PHP_EOL;
}
```

### Options

Note: the input parameter is an associative array with the keys listed below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**service_id** | **string** | Alphanumeric string identifying the service. |
**version_id** | **int** | Integer identifying a service version. |
**logging_kafka_name** | **string** | The name for the real-time logging configuration. |

### Return type

[**\Fastly\Model\LoggingKafkaResponse**](../Model/LoggingKafkaResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to README]](../../README.md)
