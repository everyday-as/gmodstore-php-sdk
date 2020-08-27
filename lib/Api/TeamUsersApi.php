<?php
/**
 * TeamUsersApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * GmodStore
 *
 * Welcome to the GmodStore API! You can use our API to access Gmodstore API endpoints, which can be used interact with Gmodstore programmatically.
 *
 * The version of the OpenAPI document: 1.0.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: unset
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Everyday\GmodStore\Sdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Everyday\GmodStore\Sdk\ApiException;
use Everyday\GmodStore\Sdk\Configuration;
use Everyday\GmodStore\Sdk\HeaderSelector;
use Everyday\GmodStore\Sdk\ObjectSerializer;

/**
 * TeamUsersApi Class Doc Comment
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listTeamUsers
     *
     * Fetch all the users in the given team
     *
     * @param  int $teamId Id of the team (required)
     * @param  string[] $with The relations you want to fetch with the &#x60;TeamUser&#x60; (optional)
     *
     * @throws \Everyday\GmodStore\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Everyday\GmodStore\Sdk\Model\TeamUserListResponse|\Everyday\GmodStore\Sdk\Model\ErrorResponse|\Everyday\GmodStore\Sdk\Model\ErrorResponse
     */
    public function listTeamUsers($teamId, $with = null)
    {
        list($response) = $this->listTeamUsersWithHttpInfo($teamId, $with);
        return $response;
    }

    /**
     * Operation listTeamUsersWithHttpInfo
     *
     * Fetch all the users in the given team
     *
     * @param  int $teamId Id of the team (required)
     * @param  string[] $with The relations you want to fetch with the &#x60;TeamUser&#x60; (optional)
     *
     * @throws \Everyday\GmodStore\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Everyday\GmodStore\Sdk\Model\TeamUserListResponse|\Everyday\GmodStore\Sdk\Model\ErrorResponse|\Everyday\GmodStore\Sdk\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listTeamUsersWithHttpInfo($teamId, $with = null)
    {
        $request = $this->listTeamUsersRequest($teamId, $with);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
            switch($statusCode) {
                case 200:
                    if ('\Everyday\GmodStore\Sdk\Model\TeamUserListResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\TeamUserListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Everyday\GmodStore\Sdk\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Everyday\GmodStore\Sdk\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Everyday\GmodStore\Sdk\Model\TeamUserListResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\Everyday\GmodStore\Sdk\Model\TeamUserListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Everyday\GmodStore\Sdk\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Everyday\GmodStore\Sdk\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listTeamUsersAsync
     *
     * Fetch all the users in the given team
     *
     * @param  int $teamId Id of the team (required)
     * @param  string[] $with The relations you want to fetch with the &#x60;TeamUser&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTeamUsersAsync($teamId, $with = null)
    {
        return $this->listTeamUsersAsyncWithHttpInfo($teamId, $with)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listTeamUsersAsyncWithHttpInfo
     *
     * Fetch all the users in the given team
     *
     * @param  int $teamId Id of the team (required)
     * @param  string[] $with The relations you want to fetch with the &#x60;TeamUser&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTeamUsersAsyncWithHttpInfo($teamId, $with = null)
    {
        $returnType = '\Everyday\GmodStore\Sdk\Model\TeamUserListResponse';
        $request = $this->listTeamUsersRequest($teamId, $with);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'listTeamUsers'
     *
     * @param  int $teamId Id of the team (required)
     * @param  string[] $with The relations you want to fetch with the &#x60;TeamUser&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listTeamUsersRequest($teamId, $with = null)
    {
        // verify the required parameter 'teamId' is set
        if ($teamId === null || (is_array($teamId) && count($teamId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $teamId when calling listTeamUsers'
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
            $with = ObjectSerializer::serializeCollection($with, 'form', true);
        }
        if ($with !== null) {
            $queryParams['with'] = $with;
        }


        // path params
        if ($teamId !== null) {
            $resourcePath = str_replace(
                '{' . 'team_id' . '}',
                ObjectSerializer::toPathValue($teamId),
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
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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

        // this endpoint requires Bearer (API Key) authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
