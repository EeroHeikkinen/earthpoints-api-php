# OpenAPIClient-php

Earthpoints API description


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
    $apiInstance->appControllerCreate($create_point_event_dto);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerCreate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**appControllerCreate**](docs/Api/DefaultApi.md#appcontrollercreate) | **POST** /point-event | 
*DefaultApi* | [**appControllerDashboard**](docs/Api/DefaultApi.md#appcontrollerdashboard) | **GET** / | 
*DefaultApi* | [**appControllerFacebookConnect**](docs/Api/DefaultApi.md#appcontrollerfacebookconnect) | **GET** /connect/facebook | 
*DefaultApi* | [**appControllerFacebookConnectRedirect**](docs/Api/DefaultApi.md#appcontrollerfacebookconnectredirect) | **GET** /callback/facebook/connect | 
*DefaultApi* | [**appControllerFacebookLogin**](docs/Api/DefaultApi.md#appcontrollerfacebooklogin) | **GET** /login/facebook | 
*DefaultApi* | [**appControllerFacebookLoginRedirect**](docs/Api/DefaultApi.md#appcontrollerfacebookloginredirect) | **GET** /callback/facebook/login | 
*DefaultApi* | [**appControllerInstagramConnect**](docs/Api/DefaultApi.md#appcontrollerinstagramconnect) | **GET** /connect/instagram | 
*DefaultApi* | [**appControllerInstagramConnectRedirect**](docs/Api/DefaultApi.md#appcontrollerinstagramconnectredirect) | **GET** /callback/instagram/connect | 
*DefaultApi* | [**appControllerInstagramLogin**](docs/Api/DefaultApi.md#appcontrollerinstagramlogin) | **GET** /login/instagram | 
*DefaultApi* | [**appControllerInstagramLoginRedirect**](docs/Api/DefaultApi.md#appcontrollerinstagramloginredirect) | **GET** /callback/instagram/login | 
*DefaultApi* | [**appControllerLanding**](docs/Api/DefaultApi.md#appcontrollerlanding) | **GET** /landing | 
*DefaultApi* | [**appControllerLoginWithClientCredentials**](docs/Api/DefaultApi.md#appcontrollerloginwithclientcredentials) | **POST** /oauth/token | 
*DefaultApi* | [**appControllerLogout**](docs/Api/DefaultApi.md#appcontrollerlogout) | **GET** /logout | 
*DefaultApi* | [**appControllerPointBadge**](docs/Api/DefaultApi.md#appcontrollerpointbadge) | **GET** /point-badge | 
*DefaultApi* | [**appControllerSse**](docs/Api/DefaultApi.md#appcontrollersse) | **GET** /sse | 
*DefaultApi* | [**appControllerTwitterConnect**](docs/Api/DefaultApi.md#appcontrollertwitterconnect) | **GET** /connect/twitter | 
*DefaultApi* | [**appControllerTwitterConnectRedirect**](docs/Api/DefaultApi.md#appcontrollertwitterconnectredirect) | **GET** /callback/twitter/connect | 
*DefaultApi* | [**appControllerTwitterLogin**](docs/Api/DefaultApi.md#appcontrollertwitterlogin) | **GET** /login/twitter | 
*DefaultApi* | [**appControllerTwitterLoginRedirect**](docs/Api/DefaultApi.md#appcontrollertwitterloginredirect) | **GET** /callback/twitter/login | 
*DefaultApi* | [**emailTemplateControllerCreate**](docs/Api/DefaultApi.md#emailtemplatecontrollercreate) | **POST** /email-template/{key} | 
*DefaultApi* | [**emailTemplateControllerFindOne**](docs/Api/DefaultApi.md#emailtemplatecontrollerfindone) | **GET** /email-template/{key} | 
*DefaultApi* | [**emailTemplateControllerIndex**](docs/Api/DefaultApi.md#emailtemplatecontrollerindex) | **GET** /email-template | 
*DefaultApi* | [**emailTemplateControllerLoginForm**](docs/Api/DefaultApi.md#emailtemplatecontrollerloginform) | **GET** /email-template/login | 
*DefaultApi* | [**emailTemplateControllerProcessLogin**](docs/Api/DefaultApi.md#emailtemplatecontrollerprocesslogin) | **POST** /email-template | 
*DefaultApi* | [**platformConnectionControllerCreate**](docs/Api/DefaultApi.md#platformconnectioncontrollercreate) | **POST** /platform-connection | 
*DefaultApi* | [**platformConnectionControllerFindAll**](docs/Api/DefaultApi.md#platformconnectioncontrollerfindall) | **GET** /platform-connection | 
*DefaultApi* | [**platformConnectionControllerFindOne**](docs/Api/DefaultApi.md#platformconnectioncontrollerfindone) | **GET** /platform-connection/{id} | 
*DefaultApi* | [**platformConnectionControllerRemove**](docs/Api/DefaultApi.md#platformconnectioncontrollerremove) | **DELETE** /platform-connection/{id} | 
*DefaultApi* | [**platformConnectionControllerUpdate**](docs/Api/DefaultApi.md#platformconnectioncontrollerupdate) | **PATCH** /platform-connection/{id} | 
*DefaultApi* | [**pointEventControllerFindAll**](docs/Api/DefaultApi.md#pointeventcontrollerfindall) | **GET** /point-event | 
*DefaultApi* | [**pointEventControllerFindOne**](docs/Api/DefaultApi.md#pointeventcontrollerfindone) | **GET** /point-event/{id} | 
*DefaultApi* | [**pointEventControllerRemove**](docs/Api/DefaultApi.md#pointeventcontrollerremove) | **DELETE** /point-event/{id} | 
*DefaultApi* | [**pointEventControllerUpdate**](docs/Api/DefaultApi.md#pointeventcontrollerupdate) | **PATCH** /point-event/{id} | 
*DefaultApi* | [**userControllerCreate**](docs/Api/DefaultApi.md#usercontrollercreate) | **POST** /user | 
*DefaultApi* | [**userControllerFindOne**](docs/Api/DefaultApi.md#usercontrollerfindone) | **GET** /user/{id} | 
*DefaultApi* | [**userControllerFindOneByEmail**](docs/Api/DefaultApi.md#usercontrollerfindonebyemail) | **GET** /user/byEmail/{email} | 
*DefaultApi* | [**userControllerRemove**](docs/Api/DefaultApi.md#usercontrollerremove) | **DELETE** /user/{id} | 
*DefaultApi* | [**userControllerUpdate**](docs/Api/DefaultApi.md#usercontrollerupdate) | **PATCH** /user/{id} | 

## Models

- [ClientCredentialsDto](docs/Model/ClientCredentialsDto.md)
- [CreatePointEventDto](docs/Model/CreatePointEventDto.md)
- [UpdatePointEventDto](docs/Model/UpdatePointEventDto.md)

## Authorization

### oauth2

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
