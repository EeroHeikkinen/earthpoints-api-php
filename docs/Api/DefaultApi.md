# OpenAPI\Client\DefaultApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**appControllerCreate()**](DefaultApi.md#appControllerCreate) | **POST** /point-event | 
[**appControllerDashboard()**](DefaultApi.md#appControllerDashboard) | **GET** / | 
[**appControllerFacebookConnect()**](DefaultApi.md#appControllerFacebookConnect) | **GET** /connect/facebook | 
[**appControllerFacebookConnectRedirect()**](DefaultApi.md#appControllerFacebookConnectRedirect) | **GET** /callback/facebook/connect | 
[**appControllerFacebookLogin()**](DefaultApi.md#appControllerFacebookLogin) | **GET** /login/facebook | 
[**appControllerFacebookLoginRedirect()**](DefaultApi.md#appControllerFacebookLoginRedirect) | **GET** /callback/facebook/login | 
[**appControllerInstagramConnect()**](DefaultApi.md#appControllerInstagramConnect) | **GET** /connect/instagram | 
[**appControllerInstagramConnectRedirect()**](DefaultApi.md#appControllerInstagramConnectRedirect) | **GET** /callback/instagram/connect | 
[**appControllerInstagramLogin()**](DefaultApi.md#appControllerInstagramLogin) | **GET** /login/instagram | 
[**appControllerInstagramLoginRedirect()**](DefaultApi.md#appControllerInstagramLoginRedirect) | **GET** /callback/instagram/login | 
[**appControllerLanding()**](DefaultApi.md#appControllerLanding) | **GET** /landing | 
[**appControllerLoginWithClientCredentials()**](DefaultApi.md#appControllerLoginWithClientCredentials) | **POST** /oauth/token | 
[**appControllerLogout()**](DefaultApi.md#appControllerLogout) | **GET** /logout | 
[**appControllerPointBadge()**](DefaultApi.md#appControllerPointBadge) | **GET** /point-badge | 
[**appControllerSse()**](DefaultApi.md#appControllerSse) | **GET** /sse | 
[**appControllerTwitterConnect()**](DefaultApi.md#appControllerTwitterConnect) | **GET** /connect/twitter | 
[**appControllerTwitterConnectRedirect()**](DefaultApi.md#appControllerTwitterConnectRedirect) | **GET** /callback/twitter/connect | 
[**appControllerTwitterLogin()**](DefaultApi.md#appControllerTwitterLogin) | **GET** /login/twitter | 
[**appControllerTwitterLoginRedirect()**](DefaultApi.md#appControllerTwitterLoginRedirect) | **GET** /callback/twitter/login | 
[**emailTemplateControllerCreate()**](DefaultApi.md#emailTemplateControllerCreate) | **POST** /email-template/{key} | 
[**emailTemplateControllerFindOne()**](DefaultApi.md#emailTemplateControllerFindOne) | **GET** /email-template/{key} | 
[**emailTemplateControllerIndex()**](DefaultApi.md#emailTemplateControllerIndex) | **GET** /email-template | 
[**emailTemplateControllerLoginForm()**](DefaultApi.md#emailTemplateControllerLoginForm) | **GET** /email-template/login | 
[**emailTemplateControllerProcessLogin()**](DefaultApi.md#emailTemplateControllerProcessLogin) | **POST** /email-template | 
[**platformConnectionControllerCreate()**](DefaultApi.md#platformConnectionControllerCreate) | **POST** /platform-connection | 
[**platformConnectionControllerFindAll()**](DefaultApi.md#platformConnectionControllerFindAll) | **GET** /platform-connection | 
[**platformConnectionControllerFindOne()**](DefaultApi.md#platformConnectionControllerFindOne) | **GET** /platform-connection/{id} | 
[**platformConnectionControllerRemove()**](DefaultApi.md#platformConnectionControllerRemove) | **DELETE** /platform-connection/{id} | 
[**platformConnectionControllerUpdate()**](DefaultApi.md#platformConnectionControllerUpdate) | **PATCH** /platform-connection/{id} | 
[**pointEventControllerFindAll()**](DefaultApi.md#pointEventControllerFindAll) | **GET** /point-event | 
[**pointEventControllerFindOne()**](DefaultApi.md#pointEventControllerFindOne) | **GET** /point-event/{id} | 
[**pointEventControllerRemove()**](DefaultApi.md#pointEventControllerRemove) | **DELETE** /point-event/{id} | 
[**pointEventControllerUpdate()**](DefaultApi.md#pointEventControllerUpdate) | **PATCH** /point-event/{id} | 
[**userControllerCreate()**](DefaultApi.md#userControllerCreate) | **POST** /user | 
[**userControllerFindOne()**](DefaultApi.md#userControllerFindOne) | **GET** /user/{id} | 
[**userControllerFindOneByEmail()**](DefaultApi.md#userControllerFindOneByEmail) | **GET** /user/byEmail/{email} | 
[**userControllerRemove()**](DefaultApi.md#userControllerRemove) | **DELETE** /user/{id} | 
[**userControllerUpdate()**](DefaultApi.md#userControllerUpdate) | **PATCH** /user/{id} | 


## `appControllerCreate()`

```php
appControllerCreate($create_point_event_dto): \OpenAPI\Client\Model\CreatePointEventResponseDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_point_event_dto = new \OpenAPI\Client\Model\CreatePointEventDto(); // \OpenAPI\Client\Model\CreatePointEventDto

try {
    $result = $apiInstance->appControllerCreate($create_point_event_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_point_event_dto** | [**\OpenAPI\Client\Model\CreatePointEventDto**](../Model/CreatePointEventDto.md)|  |

### Return type

[**\OpenAPI\Client\Model\CreatePointEventResponseDto**](../Model/CreatePointEventResponseDto.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerDashboard()`

```php
appControllerDashboard()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerDashboard();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerDashboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerFacebookConnect()`

```php
appControllerFacebookConnect()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerFacebookConnect();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerFacebookConnect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerFacebookConnectRedirect()`

```php
appControllerFacebookConnectRedirect()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerFacebookConnectRedirect();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerFacebookConnectRedirect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerFacebookLogin()`

```php
appControllerFacebookLogin()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerFacebookLogin();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerFacebookLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerFacebookLoginRedirect()`

```php
appControllerFacebookLoginRedirect()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerFacebookLoginRedirect();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerFacebookLoginRedirect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerInstagramConnect()`

```php
appControllerInstagramConnect()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerInstagramConnect();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerInstagramConnect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerInstagramConnectRedirect()`

```php
appControllerInstagramConnectRedirect()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerInstagramConnectRedirect();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerInstagramConnectRedirect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerInstagramLogin()`

```php
appControllerInstagramLogin()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerInstagramLogin();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerInstagramLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerInstagramLoginRedirect()`

```php
appControllerInstagramLoginRedirect()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerInstagramLoginRedirect();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerInstagramLoginRedirect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerLanding()`

```php
appControllerLanding()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerLanding();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerLanding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerLoginWithClientCredentials()`

```php
appControllerLoginWithClientCredentials($client_credentials_dto): \OpenAPI\Client\Model\ClientCredentialsResponseDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_credentials_dto = new \OpenAPI\Client\Model\ClientCredentialsDto(); // \OpenAPI\Client\Model\ClientCredentialsDto

try {
    $result = $apiInstance->appControllerLoginWithClientCredentials($client_credentials_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerLoginWithClientCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_credentials_dto** | [**\OpenAPI\Client\Model\ClientCredentialsDto**](../Model/ClientCredentialsDto.md)|  |

### Return type

[**\OpenAPI\Client\Model\ClientCredentialsResponseDto**](../Model/ClientCredentialsResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerLogout()`

```php
appControllerLogout()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerLogout();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerLogout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerPointBadge()`

```php
appControllerPointBadge()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerPointBadge();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerPointBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerSse()`

```php
appControllerSse()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerSse();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerSse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerTwitterConnect()`

```php
appControllerTwitterConnect()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerTwitterConnect();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerTwitterConnect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerTwitterConnectRedirect()`

```php
appControllerTwitterConnectRedirect()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerTwitterConnectRedirect();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerTwitterConnectRedirect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerTwitterLogin()`

```php
appControllerTwitterLogin()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerTwitterLogin();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerTwitterLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appControllerTwitterLoginRedirect()`

```php
appControllerTwitterLoginRedirect()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->appControllerTwitterLoginRedirect();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerTwitterLoginRedirect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailTemplateControllerCreate()`

```php
emailTemplateControllerCreate($key, $body)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->emailTemplateControllerCreate($key, $body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->emailTemplateControllerCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**|  |
 **body** | **object**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailTemplateControllerFindOne()`

```php
emailTemplateControllerFindOne($key)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string

try {
    $apiInstance->emailTemplateControllerFindOne($key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->emailTemplateControllerFindOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailTemplateControllerIndex()`

```php
emailTemplateControllerIndex()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->emailTemplateControllerIndex();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->emailTemplateControllerIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailTemplateControllerLoginForm()`

```php
emailTemplateControllerLoginForm()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->emailTemplateControllerLoginForm();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->emailTemplateControllerLoginForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailTemplateControllerProcessLogin()`

```php
emailTemplateControllerProcessLogin()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->emailTemplateControllerProcessLogin();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->emailTemplateControllerProcessLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `platformConnectionControllerCreate()`

```php
platformConnectionControllerCreate($body)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->platformConnectionControllerCreate($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->platformConnectionControllerCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `platformConnectionControllerFindAll()`

```php
platformConnectionControllerFindAll()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->platformConnectionControllerFindAll();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->platformConnectionControllerFindAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `platformConnectionControllerFindOne()`

```php
platformConnectionControllerFindOne($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->platformConnectionControllerFindOne($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->platformConnectionControllerFindOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `platformConnectionControllerRemove()`

```php
platformConnectionControllerRemove($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->platformConnectionControllerRemove($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->platformConnectionControllerRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `platformConnectionControllerUpdate()`

```php
platformConnectionControllerUpdate($id, $body)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->platformConnectionControllerUpdate($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->platformConnectionControllerUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pointEventControllerFindAll()`

```php
pointEventControllerFindAll()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->pointEventControllerFindAll();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->pointEventControllerFindAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pointEventControllerFindOne()`

```php
pointEventControllerFindOne($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->pointEventControllerFindOne($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->pointEventControllerFindOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pointEventControllerRemove()`

```php
pointEventControllerRemove($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->pointEventControllerRemove($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->pointEventControllerRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pointEventControllerUpdate()`

```php
pointEventControllerUpdate($id, $update_point_event_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$update_point_event_dto = new \OpenAPI\Client\Model\UpdatePointEventDto(); // \OpenAPI\Client\Model\UpdatePointEventDto

try {
    $apiInstance->pointEventControllerUpdate($id, $update_point_event_dto);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->pointEventControllerUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **update_point_event_dto** | [**\OpenAPI\Client\Model\UpdatePointEventDto**](../Model/UpdatePointEventDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userControllerCreate()`

```php
userControllerCreate($body)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->userControllerCreate($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->userControllerCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userControllerFindOne()`

```php
userControllerFindOne($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->userControllerFindOne($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->userControllerFindOne: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userControllerFindOneByEmail()`

```php
userControllerFindOneByEmail($email)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string

try {
    $apiInstance->userControllerFindOneByEmail($email);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->userControllerFindOneByEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userControllerRemove()`

```php
userControllerRemove($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $apiInstance->userControllerRemove($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->userControllerRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userControllerUpdate()`

```php
userControllerUpdate($id, $body)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->userControllerUpdate($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->userControllerUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | **object**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
