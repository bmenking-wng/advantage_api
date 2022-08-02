<?php
/**
 * NoteApi
 * PHP version 5
 *
 * @category Class
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Advantage.Rest.Services
 *
 * No description provided (generated by Advantage Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Advantage Codegen version: 2.4.20
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Advantage\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Advantage\Client\ApiException;
use Advantage\Client\Configuration;
use Advantage\Client\HeaderSelector;
use Advantage\Client\ObjectSerializer;

/**
 * NoteApi Class Doc Comment
 *
 * @category Class
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NoteApi
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
     * Operation noteCreate
     *
     * Creates a note in Advantage from a NoteCreateRequest
     *
     * @param  \Advantage\Client\Model\NoteCreateRequest $note_create_request note_create_request (required)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function noteCreate($note_create_request)
    {
        $this->noteCreateWithHttpInfo($note_create_request);
    }

    /**
     * Operation noteCreateWithHttpInfo
     *
     * Creates a note in Advantage from a NoteCreateRequest
     *
     * @param  \Advantage\Client\Model\NoteCreateRequest $note_create_request (required)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function noteCreateWithHttpInfo($note_create_request)
    {
        $returnType = '';
        $request = $this->noteCreateRequest($note_create_request);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation noteCreateAsync
     *
     * Creates a note in Advantage from a NoteCreateRequest
     *
     * @param  \Advantage\Client\Model\NoteCreateRequest $note_create_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function noteCreateAsync($note_create_request)
    {
        return $this->noteCreateAsyncWithHttpInfo($note_create_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation noteCreateAsyncWithHttpInfo
     *
     * Creates a note in Advantage from a NoteCreateRequest
     *
     * @param  \Advantage\Client\Model\NoteCreateRequest $note_create_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function noteCreateAsyncWithHttpInfo($note_create_request)
    {
        $returnType = '';
        $request = $this->noteCreateRequest($note_create_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'noteCreate'
     *
     * @param  \Advantage\Client\Model\NoteCreateRequest $note_create_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function noteCreateRequest($note_create_request)
    {
        // verify the required parameter 'note_create_request' is set
        if ($note_create_request === null || (is_array($note_create_request) && count($note_create_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $note_create_request when calling noteCreate'
            );
        }

        $resourcePath = '/notes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($note_create_request)) {
            $_tempBody = $note_create_request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json', 'text/json', 'text/html', 'application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation noteGet
     *
     * Gets note information given
     *
     * @param  string $customer_number The customer number (required)
     * @param  bool $include_letters If true, get note letters. Set to false to omit. (optional)
     * @param  int $pager_skip The number of records to skip. (optional)
     * @param  int $pager_take The number of records to return. (optional)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Advantage\Client\Model\Note[]
     */
    public function noteGet($customer_number, $include_letters = null, $pager_skip = null, $pager_take = null)
    {
        list($response) = $this->noteGetWithHttpInfo($customer_number, $include_letters, $pager_skip, $pager_take);
        return $response;
    }

    /**
     * Operation noteGetWithHttpInfo
     *
     * Gets note information given
     *
     * @param  string $customer_number The customer number (required)
     * @param  bool $include_letters If true, get note letters. Set to false to omit. (optional)
     * @param  int $pager_skip The number of records to skip. (optional)
     * @param  int $pager_take The number of records to return. (optional)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Advantage\Client\Model\Note[], HTTP status code, HTTP response headers (array of strings)
     */
    public function noteGetWithHttpInfo($customer_number, $include_letters = null, $pager_skip = null, $pager_take = null)
    {
        $returnType = '\Advantage\Client\Model\Note[]';
        $request = $this->noteGetRequest($customer_number, $include_letters, $pager_skip, $pager_take);

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
                        '\Advantage\Client\Model\Note[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation noteGetAsync
     *
     * Gets note information given
     *
     * @param  string $customer_number The customer number (required)
     * @param  bool $include_letters If true, get note letters. Set to false to omit. (optional)
     * @param  int $pager_skip The number of records to skip. (optional)
     * @param  int $pager_take The number of records to return. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function noteGetAsync($customer_number, $include_letters = null, $pager_skip = null, $pager_take = null)
    {
        return $this->noteGetAsyncWithHttpInfo($customer_number, $include_letters, $pager_skip, $pager_take)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation noteGetAsyncWithHttpInfo
     *
     * Gets note information given
     *
     * @param  string $customer_number The customer number (required)
     * @param  bool $include_letters If true, get note letters. Set to false to omit. (optional)
     * @param  int $pager_skip The number of records to skip. (optional)
     * @param  int $pager_take The number of records to return. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function noteGetAsyncWithHttpInfo($customer_number, $include_letters = null, $pager_skip = null, $pager_take = null)
    {
        $returnType = '\Advantage\Client\Model\Note[]';
        $request = $this->noteGetRequest($customer_number, $include_letters, $pager_skip, $pager_take);

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
     * Create request for operation 'noteGet'
     *
     * @param  string $customer_number The customer number (required)
     * @param  bool $include_letters If true, get note letters. Set to false to omit. (optional)
     * @param  int $pager_skip The number of records to skip. (optional)
     * @param  int $pager_take The number of records to return. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function noteGetRequest($customer_number, $include_letters = null, $pager_skip = null, $pager_take = null)
    {
        // verify the required parameter 'customer_number' is set
        if ($customer_number === null || (is_array($customer_number) && count($customer_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer_number when calling noteGet'
            );
        }

        $resourcePath = '/notes/{customerNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include_letters !== null) {
            $queryParams['includeLetters'] = ObjectSerializer::toQueryValue($include_letters);
        }
        // query params
        if ($pager_skip !== null) {
            $queryParams['pager.skip'] = ObjectSerializer::toQueryValue($pager_skip);
        }
        // query params
        if ($pager_take !== null) {
            $queryParams['pager.take'] = ObjectSerializer::toQueryValue($pager_take);
        }

        // path params
        if ($customer_number !== null) {
            $resourcePath = str_replace(
                '{' . 'customerNumber' . '}',
                ObjectSerializer::toPathValue($customer_number),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'text/html']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'text/html'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
