<?php
/**
 * ActivityLogEAPApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Permit.io API
 *
 * Authorization as a service
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * ActivityLogEAPApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ActivityLogEAPApi
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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'listActivityEvents' => [
            'application/json',
        ],
        'listActivityTypes' => [
            'application/json',
        ],
    ];

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
     * Operation listActivityEvents
     *
     * List Activity Events
     *
     * @param  string[] $actor_id Actor ID to search (optional)
     * @param  string $actor_display_name Actor display name to search (optional)
     * @param  string[] $actor_type Actor type to search (member, user, api_key) (optional)
     * @param  string[] $project_id Projects to include in search (optional)
     * @param  string[] $env_id Environments to include in search (optional)
     * @param  int $timestamp_from Retrieve only events after this timestamp (seconds since epoch) (optional)
     * @param  int $timestamp_until Retrieve only events before this timestamp (seconds since epoch) (optional)
     * @param  int $page Page number of the results to fetch, starting at 1. (optional, default to 1)
     * @param  int $per_page The number of results per page (max 100). (optional, default to 30)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listActivityEvents'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\LimitedPaginatedResultActivityLogEventRead|\OpenAPI\Client\Model\HTTPValidationError
     */
    public function listActivityEvents($actor_id = null, $actor_display_name = null, $actor_type = null, $project_id = null, $env_id = null, $timestamp_from = null, $timestamp_until = null, $page = 1, $per_page = 30, string $contentType = self::contentTypes['listActivityEvents'][0])
    {
        list($response) = $this->listActivityEventsWithHttpInfo($actor_id, $actor_display_name, $actor_type, $project_id, $env_id, $timestamp_from, $timestamp_until, $page, $per_page, $contentType);
        return $response;
    }

    /**
     * Operation listActivityEventsWithHttpInfo
     *
     * List Activity Events
     *
     * @param  string[] $actor_id Actor ID to search (optional)
     * @param  string $actor_display_name Actor display name to search (optional)
     * @param  string[] $actor_type Actor type to search (member, user, api_key) (optional)
     * @param  string[] $project_id Projects to include in search (optional)
     * @param  string[] $env_id Environments to include in search (optional)
     * @param  int $timestamp_from Retrieve only events after this timestamp (seconds since epoch) (optional)
     * @param  int $timestamp_until Retrieve only events before this timestamp (seconds since epoch) (optional)
     * @param  int $page Page number of the results to fetch, starting at 1. (optional, default to 1)
     * @param  int $per_page The number of results per page (max 100). (optional, default to 30)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listActivityEvents'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\LimitedPaginatedResultActivityLogEventRead|\OpenAPI\Client\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function listActivityEventsWithHttpInfo($actor_id = null, $actor_display_name = null, $actor_type = null, $project_id = null, $env_id = null, $timestamp_from = null, $timestamp_until = null, $page = 1, $per_page = 30, string $contentType = self::contentTypes['listActivityEvents'][0])
    {
        $request = $this->listActivityEventsRequest($actor_id, $actor_display_name, $actor_type, $project_id, $env_id, $timestamp_from, $timestamp_until, $page, $per_page, $contentType);

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
                    if ('\OpenAPI\Client\Model\LimitedPaginatedResultActivityLogEventRead' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\LimitedPaginatedResultActivityLogEventRead' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\LimitedPaginatedResultActivityLogEventRead', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\OpenAPI\Client\Model\HTTPValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\HTTPValidationError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\HTTPValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\LimitedPaginatedResultActivityLogEventRead';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        '\OpenAPI\Client\Model\LimitedPaginatedResultActivityLogEventRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\HTTPValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listActivityEventsAsync
     *
     * List Activity Events
     *
     * @param  string[] $actor_id Actor ID to search (optional)
     * @param  string $actor_display_name Actor display name to search (optional)
     * @param  string[] $actor_type Actor type to search (member, user, api_key) (optional)
     * @param  string[] $project_id Projects to include in search (optional)
     * @param  string[] $env_id Environments to include in search (optional)
     * @param  int $timestamp_from Retrieve only events after this timestamp (seconds since epoch) (optional)
     * @param  int $timestamp_until Retrieve only events before this timestamp (seconds since epoch) (optional)
     * @param  int $page Page number of the results to fetch, starting at 1. (optional, default to 1)
     * @param  int $per_page The number of results per page (max 100). (optional, default to 30)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listActivityEvents'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listActivityEventsAsync($actor_id = null, $actor_display_name = null, $actor_type = null, $project_id = null, $env_id = null, $timestamp_from = null, $timestamp_until = null, $page = 1, $per_page = 30, string $contentType = self::contentTypes['listActivityEvents'][0])
    {
        return $this->listActivityEventsAsyncWithHttpInfo($actor_id, $actor_display_name, $actor_type, $project_id, $env_id, $timestamp_from, $timestamp_until, $page, $per_page, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listActivityEventsAsyncWithHttpInfo
     *
     * List Activity Events
     *
     * @param  string[] $actor_id Actor ID to search (optional)
     * @param  string $actor_display_name Actor display name to search (optional)
     * @param  string[] $actor_type Actor type to search (member, user, api_key) (optional)
     * @param  string[] $project_id Projects to include in search (optional)
     * @param  string[] $env_id Environments to include in search (optional)
     * @param  int $timestamp_from Retrieve only events after this timestamp (seconds since epoch) (optional)
     * @param  int $timestamp_until Retrieve only events before this timestamp (seconds since epoch) (optional)
     * @param  int $page Page number of the results to fetch, starting at 1. (optional, default to 1)
     * @param  int $per_page The number of results per page (max 100). (optional, default to 30)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listActivityEvents'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listActivityEventsAsyncWithHttpInfo($actor_id = null, $actor_display_name = null, $actor_type = null, $project_id = null, $env_id = null, $timestamp_from = null, $timestamp_until = null, $page = 1, $per_page = 30, string $contentType = self::contentTypes['listActivityEvents'][0])
    {
        $returnType = '\OpenAPI\Client\Model\LimitedPaginatedResultActivityLogEventRead';
        $request = $this->listActivityEventsRequest($actor_id, $actor_display_name, $actor_type, $project_id, $env_id, $timestamp_from, $timestamp_until, $page, $per_page, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listActivityEvents'
     *
     * @param  string[] $actor_id Actor ID to search (optional)
     * @param  string $actor_display_name Actor display name to search (optional)
     * @param  string[] $actor_type Actor type to search (member, user, api_key) (optional)
     * @param  string[] $project_id Projects to include in search (optional)
     * @param  string[] $env_id Environments to include in search (optional)
     * @param  int $timestamp_from Retrieve only events after this timestamp (seconds since epoch) (optional)
     * @param  int $timestamp_until Retrieve only events before this timestamp (seconds since epoch) (optional)
     * @param  int $page Page number of the results to fetch, starting at 1. (optional, default to 1)
     * @param  int $per_page The number of results per page (max 100). (optional, default to 30)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listActivityEvents'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listActivityEventsRequest($actor_id = null, $actor_display_name = null, $actor_type = null, $project_id = null, $env_id = null, $timestamp_from = null, $timestamp_until = null, $page = 1, $per_page = 30, string $contentType = self::contentTypes['listActivityEvents'][0])
    {








        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling ActivityLogEAPApi.listActivityEvents, must be bigger than or equal to 1.');
        }
        
        if ($per_page !== null && $per_page > 100) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling ActivityLogEAPApi.listActivityEvents, must be smaller than or equal to 100.');
        }
        if ($per_page !== null && $per_page < 1) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling ActivityLogEAPApi.listActivityEvents, must be bigger than or equal to 1.');
        }
        

        $resourcePath = '/v2/opensearch/activity';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $actor_id,
            'actor_id', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $actor_display_name,
            'actor_display_name', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $actor_type,
            'actor_type', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $project_id,
            'project_id', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $env_id,
            'env_id', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timestamp_from,
            'timestamp_from', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timestamp_until,
            'timestamp_until', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $per_page,
            'per_page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listActivityTypes
     *
     * List Activity Types
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listActivityTypes'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return mixed|\OpenAPI\Client\Model\HTTPValidationError
     */
    public function listActivityTypes(string $contentType = self::contentTypes['listActivityTypes'][0])
    {
        list($response) = $this->listActivityTypesWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation listActivityTypesWithHttpInfo
     *
     * List Activity Types
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listActivityTypes'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of mixed|\OpenAPI\Client\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function listActivityTypesWithHttpInfo(string $contentType = self::contentTypes['listActivityTypes'][0])
    {
        $request = $this->listActivityTypesRequest($contentType);

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
                    if ('mixed' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('mixed' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'mixed', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\OpenAPI\Client\Model\HTTPValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\HTTPValidationError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\HTTPValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'mixed';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        'mixed',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\HTTPValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listActivityTypesAsync
     *
     * List Activity Types
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listActivityTypes'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listActivityTypesAsync(string $contentType = self::contentTypes['listActivityTypes'][0])
    {
        return $this->listActivityTypesAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listActivityTypesAsyncWithHttpInfo
     *
     * List Activity Types
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listActivityTypes'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listActivityTypesAsyncWithHttpInfo(string $contentType = self::contentTypes['listActivityTypes'][0])
    {
        $returnType = 'mixed';
        $request = $this->listActivityTypesRequest($contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listActivityTypes'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listActivityTypes'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listActivityTypesRequest(string $contentType = self::contentTypes['listActivityTypes'][0])
    {


        $resourcePath = '/v2/opensearch/activity/types';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
