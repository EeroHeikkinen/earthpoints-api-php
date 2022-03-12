<?php
require_once('./vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration();
$config->setHost('https://uat.epoints.hakanonal.com');

$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$client_crendentials_dto = new \OpenAPI\Client\Model\ClientCredentialsDto(array(
    'client_id' => '[MY_CLIENT_ID]',
    'client_secret' => '[MY_CLIENT_SECRET]'
)); // \OpenAPI\Client\Model\CreatePointEventDto

try {
    $response = $apiInstance->appControllerLoginWithClientCredentials($client_crendentials_dto);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerCreate: ', $e->getMessage(), PHP_EOL;
}

$accessToken = $response['access_token'];
if(!$accessToken) {
    echo 'Authentication failed', PHP_EOL;
    exit(1);
}

$config->setAccessToken($accessToken);
$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    new GuzzleHttp\Client(),
    $config
);

$create_point_event_dto = new \OpenAPI\Client\Model\CreatePointEventDto(array(
    'hash_string' => 'created-pledge-page-1234567',
    'email' => 'my.user@gmail.com',
    'icon' => 'star',
    'verb' => 'created a',
    'platform' => 'pledge-page',
    'message' => 'You created a pledge page.',
    'is_burn' => false,
    'points' => 5,
    'timestamp' => '2022-03-11T14:20:20.546Z',
)); // \OpenAPI\Client\Model\CreatePointEventDto

try {
    $response = $apiInstance->appControllerCreate($create_point_event_dto);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appControllerCreate: ', $e->getMessage(), PHP_EOL;
}

print_r($response);

?>