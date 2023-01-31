<?php
/**
 * InstructionsApi
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
 * OpenAPI Generator version: 6.2.1
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
 * InstructionsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InstructionsApi
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
        'listLanguageInstructions' => [
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
     * Operation listLanguageInstructions
     *
     * List Language Instructions
     *
     * @param  string $proj_id Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $env_id Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listLanguageInstructions'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\LanguageInstructions[]|\OpenAPI\Client\Model\HTTPValidationError
     */
    public function listLanguageInstructions($proj_id, $env_id, string $contentType = self::contentTypes['listLanguageInstructions'][0])
    {
        list($response) = $this->listLanguageInstructionsWithHttpInfo($proj_id, $env_id, $contentType);
        return $response;
    }

    /**
     * Operation listLanguageInstructionsWithHttpInfo
     *
     * List Language Instructions
     *
     * @param  string $proj_id Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $env_id Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listLanguageInstructions'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\LanguageInstructions[]|\OpenAPI\Client\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function listLanguageInstructionsWithHttpInfo($proj_id, $env_id, string $contentType = self::contentTypes['listLanguageInstructions'][0])
    {
        $request = $this->listLanguageInstructionsRequest($proj_id, $env_id, $contentType);

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
                    if ('\OpenAPI\Client\Model\LanguageInstructions[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\LanguageInstructions[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\LanguageInstructions[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\OpenAPI\Client\Model\HTTPValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\HTTPValidationError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\HTTPValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\LanguageInstructions[]';
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

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\LanguageInstructions[]',
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
     * Operation listLanguageInstructionsAsync
     *
     * List Language Instructions
     *
     * @param  string $proj_id Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $env_id Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listLanguageInstructions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listLanguageInstructionsAsync($proj_id, $env_id, string $contentType = self::contentTypes['listLanguageInstructions'][0])
    {
        return $this->listLanguageInstructionsAsyncWithHttpInfo($proj_id, $env_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listLanguageInstructionsAsyncWithHttpInfo
     *
     * List Language Instructions
     *
     * @param  string $proj_id Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $env_id Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listLanguageInstructions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listLanguageInstructionsAsyncWithHttpInfo($proj_id, $env_id, string $contentType = self::contentTypes['listLanguageInstructions'][0])
    {
        $returnType = '\OpenAPI\Client\Model\LanguageInstructions[]';
        $request = $this->listLanguageInstructionsRequest($proj_id, $env_id, $contentType);

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
     * Create request for operation 'listLanguageInstructions'
     *
     * @param  string $proj_id Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $env_id Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listLanguageInstructions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listLanguageInstructionsRequest($proj_id, $env_id, string $contentType = self::contentTypes['listLanguageInstructions'][0])
    {

        // verify the required parameter 'proj_id' is set
        if ($proj_id === null || (is_array($proj_id) && count($proj_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $proj_id when calling listLanguageInstructions'
            );
        }

        // verify the required parameter 'env_id' is set
        if ($env_id === null || (is_array($env_id) && count($env_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $env_id when calling listLanguageInstructions'
            );
        }


        $resourcePath = '/v2/{proj_id}/{env_id}/get_instructions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($proj_id !== null) {
            $resourcePath = str_replace(
                '{' . 'proj_id' . '}',
                ObjectSerializer::toPathValue($proj_id),
                $resourcePath
            );
        }
        // path params
        if ($env_id !== null) {
            $resourcePath = str_replace(
                '{' . 'env_id' . '}',
                ObjectSerializer::toPathValue($env_id),
                $resourcePath
            );
        }


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
                $httpBody = \GuzzleHttp\json_encode($formParams);
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