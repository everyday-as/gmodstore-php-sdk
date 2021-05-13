<?php
/**
 * AddonReviewsApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * GmodStore API
 *
 * Welcome to the GmodStore API! You can use our API to access GmodStore API endpoints, which can be used interact with GmodStore programmatically.
 *
 * The version of the OpenAPI document: 1.1.0
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
 * AddonReviewsApi Class Doc Comment
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AddonReviewsApi
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
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
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
     * Operation getAddonReview
     *
     * Fetch a review of an addon
     *
     * @param  int $addonId Id of the addon (required)
     * @param  int $reviewId Id of the review (required)
     * @param  string[] $with The relations you want to fetch with the &#x60;AddonReview&#x60; (optional)
     *
     * @throws \Everyday\GmodStore\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Everyday\GmodStore\Sdk\Model\AddonReviewResponse|\Everyday\GmodStore\Sdk\Model\ErrorResponse|\Everyday\GmodStore\Sdk\Model\ErrorResponse
     */
    public function getAddonReview($addonId, $reviewId, $with = null)
    {
        list($response) = $this->getAddonReviewWithHttpInfo($addonId, $reviewId, $with);
        return $response;
    }

    /**
     * Operation getAddonReviewWithHttpInfo
     *
     * Fetch a review of an addon
     *
     * @param  int $addonId Id of the addon (required)
     * @param  int $reviewId Id of the review (required)
     * @param  string[] $with The relations you want to fetch with the &#x60;AddonReview&#x60; (optional)
     *
     * @throws \Everyday\GmodStore\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Everyday\GmodStore\Sdk\Model\AddonReviewResponse|\Everyday\GmodStore\Sdk\Model\ErrorResponse|\Everyday\GmodStore\Sdk\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAddonReviewWithHttpInfo($addonId, $reviewId, $with = null)
    {
        $request = $this->getAddonReviewRequest($addonId, $reviewId, $with);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
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
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Everyday\GmodStore\Sdk\Model\AddonReviewResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\AddonReviewResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Everyday\GmodStore\Sdk\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Everyday\GmodStore\Sdk\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Everyday\GmodStore\Sdk\Model\AddonReviewResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Everyday\GmodStore\Sdk\Model\AddonReviewResponse',
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
     * Operation getAddonReviewAsync
     *
     * Fetch a review of an addon
     *
     * @param  int $addonId Id of the addon (required)
     * @param  int $reviewId Id of the review (required)
     * @param  string[] $with The relations you want to fetch with the &#x60;AddonReview&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAddonReviewAsync($addonId, $reviewId, $with = null)
    {
        return $this->getAddonReviewAsyncWithHttpInfo($addonId, $reviewId, $with)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAddonReviewAsyncWithHttpInfo
     *
     * Fetch a review of an addon
     *
     * @param  int $addonId Id of the addon (required)
     * @param  int $reviewId Id of the review (required)
     * @param  string[] $with The relations you want to fetch with the &#x60;AddonReview&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAddonReviewAsyncWithHttpInfo($addonId, $reviewId, $with = null)
    {
        $returnType = '\Everyday\GmodStore\Sdk\Model\AddonReviewResponse';
        $request = $this->getAddonReviewRequest($addonId, $reviewId, $with);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAddonReview'
     *
     * @param  int $addonId Id of the addon (required)
     * @param  int $reviewId Id of the review (required)
     * @param  string[] $with The relations you want to fetch with the &#x60;AddonReview&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAddonReviewRequest($addonId, $reviewId, $with = null)
    {
        // verify the required parameter 'addonId' is set
        if ($addonId === null || (is_array($addonId) && count($addonId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $addonId when calling getAddonReview'
            );
        }
        // verify the required parameter 'reviewId' is set
        if ($reviewId === null || (is_array($reviewId) && count($reviewId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $reviewId when calling getAddonReview'
            );
        }


        $resourcePath = '/addons/{addon_id}/reviews/{review_id}';
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
        if ($addonId !== null) {
            $resourcePath = str_replace(
                '{' . 'addon_id' . '}',
                ObjectSerializer::toPathValue($addonId),
                $resourcePath
            );
        }
        // path params
        if ($reviewId !== null) {
            $resourcePath = str_replace(
                '{' . 'review_id' . '}',
                ObjectSerializer::toPathValue($reviewId),
                $resourcePath
            );
        }


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
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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
     * Operation listAddonReviews
     *
     * Fetch all the reviews of an addon
     *
     * @param  int $addonId Id of the addon (required)
     * @param  string[] $with The relations you want to fetch with the &#x60;AddonReview&#x60; (optional)
     *
     * @throws \Everyday\GmodStore\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Everyday\GmodStore\Sdk\Model\AddonReviewListResponse|\Everyday\GmodStore\Sdk\Model\ErrorResponse|\Everyday\GmodStore\Sdk\Model\ErrorResponse
     */
    public function listAddonReviews($addonId, $with = null)
    {
        list($response) = $this->listAddonReviewsWithHttpInfo($addonId, $with);
        return $response;
    }

    /**
     * Operation listAddonReviewsWithHttpInfo
     *
     * Fetch all the reviews of an addon
     *
     * @param  int $addonId Id of the addon (required)
     * @param  string[] $with The relations you want to fetch with the &#x60;AddonReview&#x60; (optional)
     *
     * @throws \Everyday\GmodStore\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Everyday\GmodStore\Sdk\Model\AddonReviewListResponse|\Everyday\GmodStore\Sdk\Model\ErrorResponse|\Everyday\GmodStore\Sdk\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listAddonReviewsWithHttpInfo($addonId, $with = null)
    {
        $request = $this->listAddonReviewsRequest($addonId, $with);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
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
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Everyday\GmodStore\Sdk\Model\AddonReviewListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\AddonReviewListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Everyday\GmodStore\Sdk\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Everyday\GmodStore\Sdk\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Everyday\GmodStore\Sdk\Model\AddonReviewListResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Everyday\GmodStore\Sdk\Model\AddonReviewListResponse',
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
     * Operation listAddonReviewsAsync
     *
     * Fetch all the reviews of an addon
     *
     * @param  int $addonId Id of the addon (required)
     * @param  string[] $with The relations you want to fetch with the &#x60;AddonReview&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAddonReviewsAsync($addonId, $with = null)
    {
        return $this->listAddonReviewsAsyncWithHttpInfo($addonId, $with)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listAddonReviewsAsyncWithHttpInfo
     *
     * Fetch all the reviews of an addon
     *
     * @param  int $addonId Id of the addon (required)
     * @param  string[] $with The relations you want to fetch with the &#x60;AddonReview&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAddonReviewsAsyncWithHttpInfo($addonId, $with = null)
    {
        $returnType = '\Everyday\GmodStore\Sdk\Model\AddonReviewListResponse';
        $request = $this->listAddonReviewsRequest($addonId, $with);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listAddonReviews'
     *
     * @param  int $addonId Id of the addon (required)
     * @param  string[] $with The relations you want to fetch with the &#x60;AddonReview&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listAddonReviewsRequest($addonId, $with = null)
    {
        // verify the required parameter 'addonId' is set
        if ($addonId === null || (is_array($addonId) && count($addonId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $addonId when calling listAddonReviews'
            );
        }


        $resourcePath = '/addons/{addon_id}/reviews';
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
        if ($addonId !== null) {
            $resourcePath = str_replace(
                '{' . 'addon_id' . '}',
                ObjectSerializer::toPathValue($addonId),
                $resourcePath
            );
        }


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
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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
