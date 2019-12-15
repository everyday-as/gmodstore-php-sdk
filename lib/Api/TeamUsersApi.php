<?php
/**
 * TeamUsersApi
 * PHP version 5
 *
 * @category Class
 * @package  Everyday\GmodStoreSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GmodStore
 *
 * Welcome to the Gmodstore API! You can use our API to access Gmodstore API endpoints, which can be used interact with Gmodstore programmatically.
 *
 * GmodStore API spec version: 1.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Everyday\GmodStoreSDK\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Everyday\GmodStoreSDK\ApiException;
use Everyday\GmodStoreSDK\Configuration;
use Everyday\GmodStoreSDK\HeaderSelector;
use Everyday\GmodStoreSDK\ObjectSerializer;

/**
 * TeamUsersApi Class Doc Comment
 *
 * @category Class
 * @package  Everyday\GmodStoreSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TeamUsersApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation teamsTeamIdUsersGet
     *
     * Fetch all the users in the given team
     *
     * @param  int $team_id Id of the team (required)
     * @param  string[] $with The relations you want to fetch with the TeamUser schema (optional)
     *
     * @throws \Everyday\GmodStoreSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Everyday\GmodStoreSDK\Model\InlineResponse2009
     */
    public function teamsTeamIdUsersGet($team_id, $with = null)
    {
        list($response) = $this->teamsTeamIdUsersGetWithHttpInfo($team_id, $with);
        return $response;
    }

    /**
     * Operation teamsTeamIdUsersGetWithHttpInfo
     *
     * Fetch all the users in the given team
     *
     * @param  int $team_id Id of the team (required)
     * @param  string[] $with The relations you want to fetch with the TeamUser schema (optional)
     *
     * @throws \Everyday\GmodStoreSDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Everyday\GmodStoreSDK\Model\InlineResponse2009, HTTP status code, HTTP response headers (array of strings)
     */
    public function teamsTeamIdUsersGetWithHttpInfo($team_id, $with = null)
    {
        $returnType = '\Everyday\GmodStoreSDK\Model\InlineResponse2009';
        $request = $this->teamsTeamIdUsersGetRequest($team_id, $with);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Everyday\GmodStoreSDK\Model\InlineResponse2009',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Everyday\GmodStoreSDK\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation teamsTeamIdUsersGetAsync
     *
     * Fetch all the users in the given team
     *
     * @param  int $team_id Id of the team (required)
     * @param  string[] $with The relations you want to fetch with the TeamUser schema (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function teamsTeamIdUsersGetAsync($team_id, $with = null)
    {
        return $this->teamsTeamIdUsersGetAsyncWithHttpInfo($team_id, $with)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation teamsTeamIdUsersGetAsyncWithHttpInfo
     *
     * Fetch all the users in the given team
     *
     * @param  int $team_id Id of the team (required)
     * @param  string[] $with The relations you want to fetch with the TeamUser schema (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function teamsTeamIdUsersGetAsyncWithHttpInfo($team_id, $with = null)
    {
        $returnType = '\Everyday\GmodStoreSDK\Model\InlineResponse2009';
        $request = $this->teamsTeamIdUsersGetRequest($team_id, $with);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'teamsTeamIdUsersGet'
     *
     * @param  int $team_id Id of the team (required)
     * @param  string[] $with The relations you want to fetch with the TeamUser schema (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function teamsTeamIdUsersGetRequest($team_id, $with = null)
    {
        // verify the required parameter 'team_id' is set
        if ($team_id === null || (is_array($team_id) && count($team_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $team_id when calling teamsTeamIdUsersGet'
            );
        }

        $resourcePath = '/teams/{team_id}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($with)) {
            $with = ObjectSerializer::serializeCollection($with, 'csv', true);
        }
        if ($with !== null) {
            $queryParams['with'] = ObjectSerializer::toQueryValue($with);
        }

        // path params
        if ($team_id !== null) {
            $resourcePath = str_replace(
                '{' . 'team_id' . '}',
                ObjectSerializer::toPathValue($team_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
