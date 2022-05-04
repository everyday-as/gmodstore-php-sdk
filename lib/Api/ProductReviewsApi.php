<?php
/**
 * ProductReviewsApi
 * PHP version 7.3
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * gmodstore
 *
 * Welcome to the GmodStore API! You can use our API to access GmodStore API endpoints, which can be used interact with GmodStore programmatically.  # Rate limits Every request you make to the GmodStore API will count against your rate limit, which at the time of writing this, is 60 requests / minute. An up-to-date value will always provided in the `X-RateLimit-Limit` header The number of requests you have remaining before you must wait is provided in the `X-RateLimit-Remaining` header.  # API SDKs For a list of available API SDKs check the README here: https://github.com/everyday-as/gmodstore-api-docs#client-libraries
 *
 * The version of the OpenAPI document: 3.0.0
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
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Everyday\GmodStore\Sdk\ApiException;
use Everyday\GmodStore\Sdk\Configuration;
use Everyday\GmodStore\Sdk\HeaderSelector;
use Everyday\GmodStore\Sdk\ObjectSerializer;

/**
 * ProductReviewsApi Class Doc Comment
 *
 * @category Class
 * @package  Everyday\GmodStore\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductReviewsApi
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
     * Operation getProductReview
     *
     * Show the specified review for a product
     *
     * @param  string $product product (required)
     * @param  string $review review (required)
     * @param  \Everyday\GmodStore\Sdk\Model\ProductReviewFilter $filter Filter the results (optional)
     *
     * @throws \Everyday\GmodStore\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Everyday\GmodStore\Sdk\Model\GetProductReviewResponse|Error|\Everyday\GmodStore\Sdk\Model\Error|\Everyday\GmodStore\Sdk\Model\Error|\Everyday\GmodStore\Sdk\Model\Error
     */
    public function getProductReview($product, $review, $filter = null)
    {
        list($response) = $this->getProductReviewWithHttpInfo($product, $review, $filter);
        return $response;
    }

    /**
     * Operation getProductReviewWithHttpInfo
     *
     * Show the specified review for a product
     *
     * @param  string $product (required)
     * @param  string $review (required)
     * @param  \Everyday\GmodStore\Sdk\Model\ProductReviewFilter $filter Filter the results (optional)
     *
     * @throws \Everyday\GmodStore\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Everyday\GmodStore\Sdk\Model\GetProductReviewResponse|Error|\Everyday\GmodStore\Sdk\Model\Error|\Everyday\GmodStore\Sdk\Model\Error|\Everyday\GmodStore\Sdk\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductReviewWithHttpInfo($product, $review, $filter = null)
    {
        $request = $this->getProductReviewRequest($product, $review, $filter);

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
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
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
                    if ('\Everyday\GmodStore\Sdk\Model\GetProductReviewResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\GetProductReviewResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Everyday\GmodStore\Sdk\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Everyday\GmodStore\Sdk\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Everyday\GmodStore\Sdk\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Everyday\GmodStore\Sdk\Model\GetProductReviewResponse';
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
                        '\Everyday\GmodStore\Sdk\Model\GetProductReviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Everyday\GmodStore\Sdk\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Everyday\GmodStore\Sdk\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Everyday\GmodStore\Sdk\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductReviewAsync
     *
     * Show the specified review for a product
     *
     * @param  string $product (required)
     * @param  string $review (required)
     * @param  \Everyday\GmodStore\Sdk\Model\ProductReviewFilter $filter Filter the results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductReviewAsync($product, $review, $filter = null)
    {
        return $this->getProductReviewAsyncWithHttpInfo($product, $review, $filter)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductReviewAsyncWithHttpInfo
     *
     * Show the specified review for a product
     *
     * @param  string $product (required)
     * @param  string $review (required)
     * @param  \Everyday\GmodStore\Sdk\Model\ProductReviewFilter $filter Filter the results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductReviewAsyncWithHttpInfo($product, $review, $filter = null)
    {
        $returnType = '\Everyday\GmodStore\Sdk\Model\GetProductReviewResponse';
        $request = $this->getProductReviewRequest($product, $review, $filter);

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
     * Create request for operation 'getProductReview'
     *
     * @param  string $product (required)
     * @param  string $review (required)
     * @param  \Everyday\GmodStore\Sdk\Model\ProductReviewFilter $filter Filter the results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProductReviewRequest($product, $review, $filter = null)
    {
        // verify the required parameter 'product' is set
        if ($product === null || (is_array($product) && count($product) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product when calling getProductReview'
            );
        }
        // verify the required parameter 'review' is set
        if ($review === null || (is_array($review) && count($review) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $review when calling getProductReview'
            );
        }

        $resourcePath = '/api/v3/products/{product}/reviews/{review}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter !== null) {
            if('form' === 'form' && is_array($filter)) {
                foreach($filter as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter'] = $filter;
            }
        }


        // path params
        if ($product !== null) {
            $resourcePath = str_replace(
                '{' . 'product' . '}',
                ObjectSerializer::toPathValue($product),
                $resourcePath
            );
        }
        // path params
        if ($review !== null) {
            $resourcePath = str_replace(
                '{' . 'review' . '}',
                ObjectSerializer::toPathValue($review),
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listProductReviews
     *
     * List all reviews for a product
     *
     * @param  string $product product (required)
     * @param  int $perPage perPage (optional, default to 24)
     * @param  string $cursor The cursor from which to return paginated results starting after (optional)
     * @param  \Everyday\GmodStore\Sdk\Model\ProductReviewFilter $filter Filter the results (optional)
     *
     * @throws \Everyday\GmodStore\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object|Error|\Everyday\GmodStore\Sdk\Model\Error|\Everyday\GmodStore\Sdk\Model\Error|\Everyday\GmodStore\Sdk\Model\Error
     */
    public function listProductReviews($product, $perPage = 24, $cursor = null, $filter = null)
    {
        list($response) = $this->listProductReviewsWithHttpInfo($product, $perPage, $cursor, $filter);
        return $response;
    }

    /**
     * Operation listProductReviewsWithHttpInfo
     *
     * List all reviews for a product
     *
     * @param  string $product (required)
     * @param  int $perPage (optional, default to 24)
     * @param  string $cursor The cursor from which to return paginated results starting after (optional)
     * @param  \Everyday\GmodStore\Sdk\Model\ProductReviewFilter $filter Filter the results (optional)
     *
     * @throws \Everyday\GmodStore\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object|Error|\Everyday\GmodStore\Sdk\Model\Error|\Everyday\GmodStore\Sdk\Model\Error|\Everyday\GmodStore\Sdk\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function listProductReviewsWithHttpInfo($product, $perPage = 24, $cursor = null, $filter = null)
    {
        $request = $this->listProductReviewsRequest($product, $perPage, $cursor, $filter);

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
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
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
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Everyday\GmodStore\Sdk\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Everyday\GmodStore\Sdk\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Everyday\GmodStore\Sdk\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Everyday\GmodStore\Sdk\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
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
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Everyday\GmodStore\Sdk\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Everyday\GmodStore\Sdk\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Everyday\GmodStore\Sdk\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listProductReviewsAsync
     *
     * List all reviews for a product
     *
     * @param  string $product (required)
     * @param  int $perPage (optional, default to 24)
     * @param  string $cursor The cursor from which to return paginated results starting after (optional)
     * @param  \Everyday\GmodStore\Sdk\Model\ProductReviewFilter $filter Filter the results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listProductReviewsAsync($product, $perPage = 24, $cursor = null, $filter = null)
    {
        return $this->listProductReviewsAsyncWithHttpInfo($product, $perPage, $cursor, $filter)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listProductReviewsAsyncWithHttpInfo
     *
     * List all reviews for a product
     *
     * @param  string $product (required)
     * @param  int $perPage (optional, default to 24)
     * @param  string $cursor The cursor from which to return paginated results starting after (optional)
     * @param  \Everyday\GmodStore\Sdk\Model\ProductReviewFilter $filter Filter the results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listProductReviewsAsyncWithHttpInfo($product, $perPage = 24, $cursor = null, $filter = null)
    {
        $returnType = 'object';
        $request = $this->listProductReviewsRequest($product, $perPage, $cursor, $filter);

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
     * Create request for operation 'listProductReviews'
     *
     * @param  string $product (required)
     * @param  int $perPage (optional, default to 24)
     * @param  string $cursor The cursor from which to return paginated results starting after (optional)
     * @param  \Everyday\GmodStore\Sdk\Model\ProductReviewFilter $filter Filter the results (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listProductReviewsRequest($product, $perPage = 24, $cursor = null, $filter = null)
    {
        // verify the required parameter 'product' is set
        if ($product === null || (is_array($product) && count($product) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product when calling listProductReviews'
            );
        }
        if ($perPage !== null && $perPage > 100) {
            throw new \InvalidArgumentException('invalid value for "$perPage" when calling ProductReviewsApi.listProductReviews, must be smaller than or equal to 100.');
        }
        if ($perPage !== null && $perPage < 1) {
            throw new \InvalidArgumentException('invalid value for "$perPage" when calling ProductReviewsApi.listProductReviews, must be bigger than or equal to 1.');
        }


        $resourcePath = '/api/v3/products/{product}/reviews';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($perPage !== null) {
            if('form' === 'form' && is_array($perPage)) {
                foreach($perPage as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['perPage'] = $perPage;
            }
        }
        // query params
        if ($cursor !== null) {
            if('form' === 'form' && is_array($cursor)) {
                foreach($cursor as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['cursor'] = $cursor;
            }
        }
        // query params
        if ($filter !== null) {
            if('form' === 'form' && is_array($filter)) {
                foreach($filter as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter'] = $filter;
            }
        }


        // path params
        if ($product !== null) {
            $resourcePath = str_replace(
                '{' . 'product' . '}',
                ObjectSerializer::toPathValue($product),
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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
