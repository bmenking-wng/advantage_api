<?php
/**
 * ContinuingEducationApi
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
 * ContinuingEducationApi Class Doc Comment
 *
 * @category Class
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContinuingEducationApi
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
     * Operation continuingEducationCreateCredit
     *
     * Creates a new continuing education credit for the specified customer in Advantage
     *
     * @param  string $customer_number The customer number (required)
     * @param  \Advantage\Client\Model\ContinuingEducationCreditCreateRequest $create_request Information for creating a continuing education credit (required)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function continuingEducationCreateCredit($customer_number, $create_request)
    {
        $this->continuingEducationCreateCreditWithHttpInfo($customer_number, $create_request);
    }

    /**
     * Operation continuingEducationCreateCreditWithHttpInfo
     *
     * Creates a new continuing education credit for the specified customer in Advantage
     *
     * @param  string $customer_number The customer number (required)
     * @param  \Advantage\Client\Model\ContinuingEducationCreditCreateRequest $create_request Information for creating a continuing education credit (required)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function continuingEducationCreateCreditWithHttpInfo($customer_number, $create_request)
    {
        $returnType = '';
        $request = $this->continuingEducationCreateCreditRequest($customer_number, $create_request);

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
     * Operation continuingEducationCreateCreditAsync
     *
     * Creates a new continuing education credit for the specified customer in Advantage
     *
     * @param  string $customer_number The customer number (required)
     * @param  \Advantage\Client\Model\ContinuingEducationCreditCreateRequest $create_request Information for creating a continuing education credit (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function continuingEducationCreateCreditAsync($customer_number, $create_request)
    {
        return $this->continuingEducationCreateCreditAsyncWithHttpInfo($customer_number, $create_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation continuingEducationCreateCreditAsyncWithHttpInfo
     *
     * Creates a new continuing education credit for the specified customer in Advantage
     *
     * @param  string $customer_number The customer number (required)
     * @param  \Advantage\Client\Model\ContinuingEducationCreditCreateRequest $create_request Information for creating a continuing education credit (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function continuingEducationCreateCreditAsyncWithHttpInfo($customer_number, $create_request)
    {
        $returnType = '';
        $request = $this->continuingEducationCreateCreditRequest($customer_number, $create_request);

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
     * Create request for operation 'continuingEducationCreateCredit'
     *
     * @param  string $customer_number The customer number (required)
     * @param  \Advantage\Client\Model\ContinuingEducationCreditCreateRequest $create_request Information for creating a continuing education credit (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function continuingEducationCreateCreditRequest($customer_number, $create_request)
    {
        // verify the required parameter 'customer_number' is set
        if ($customer_number === null || (is_array($customer_number) && count($customer_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer_number when calling continuingEducationCreateCredit'
            );
        }
        // verify the required parameter 'create_request' is set
        if ($create_request === null || (is_array($create_request) && count($create_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_request when calling continuingEducationCreateCredit'
            );
        }

        $resourcePath = '/customers/{customerNumber}/continuing-education-credits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


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
        if (isset($create_request)) {
            $_tempBody = $create_request;
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
     * Operation continuingEducationGet
     *
     * Retrieves the list of all continuing education providers
     *
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Advantage\Client\Model\SearchResultContinuingEducationProvider
     */
    public function continuingEducationGet()
    {
        list($response) = $this->continuingEducationGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation continuingEducationGetWithHttpInfo
     *
     * Retrieves the list of all continuing education providers
     *
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Advantage\Client\Model\SearchResultContinuingEducationProvider, HTTP status code, HTTP response headers (array of strings)
     */
    public function continuingEducationGetWithHttpInfo()
    {
        $returnType = '\Advantage\Client\Model\SearchResultContinuingEducationProvider';
        $request = $this->continuingEducationGetRequest();

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
                        '\Advantage\Client\Model\SearchResultContinuingEducationProvider',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation continuingEducationGetAsync
     *
     * Retrieves the list of all continuing education providers
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function continuingEducationGetAsync()
    {
        return $this->continuingEducationGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation continuingEducationGetAsyncWithHttpInfo
     *
     * Retrieves the list of all continuing education providers
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function continuingEducationGetAsyncWithHttpInfo()
    {
        $returnType = '\Advantage\Client\Model\SearchResultContinuingEducationProvider';
        $request = $this->continuingEducationGetRequest();

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
     * Create request for operation 'continuingEducationGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function continuingEducationGetRequest()
    {

        $resourcePath = '/continuing-education-providers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation continuingEducationGetCredits
     *
     * Retrieves the list of all credits earned by the specified customer
     *
     * @param  string $customer_number The customer number (required)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Advantage\Client\Model\SearchResultContinuingEducationCredit
     */
    public function continuingEducationGetCredits($customer_number)
    {
        list($response) = $this->continuingEducationGetCreditsWithHttpInfo($customer_number);
        return $response;
    }

    /**
     * Operation continuingEducationGetCreditsWithHttpInfo
     *
     * Retrieves the list of all credits earned by the specified customer
     *
     * @param  string $customer_number The customer number (required)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Advantage\Client\Model\SearchResultContinuingEducationCredit, HTTP status code, HTTP response headers (array of strings)
     */
    public function continuingEducationGetCreditsWithHttpInfo($customer_number)
    {
        $returnType = '\Advantage\Client\Model\SearchResultContinuingEducationCredit';
        $request = $this->continuingEducationGetCreditsRequest($customer_number);

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
                        '\Advantage\Client\Model\SearchResultContinuingEducationCredit',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation continuingEducationGetCreditsAsync
     *
     * Retrieves the list of all credits earned by the specified customer
     *
     * @param  string $customer_number The customer number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function continuingEducationGetCreditsAsync($customer_number)
    {
        return $this->continuingEducationGetCreditsAsyncWithHttpInfo($customer_number)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation continuingEducationGetCreditsAsyncWithHttpInfo
     *
     * Retrieves the list of all credits earned by the specified customer
     *
     * @param  string $customer_number The customer number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function continuingEducationGetCreditsAsyncWithHttpInfo($customer_number)
    {
        $returnType = '\Advantage\Client\Model\SearchResultContinuingEducationCredit';
        $request = $this->continuingEducationGetCreditsRequest($customer_number);

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
     * Create request for operation 'continuingEducationGetCredits'
     *
     * @param  string $customer_number The customer number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function continuingEducationGetCreditsRequest($customer_number)
    {
        // verify the required parameter 'customer_number' is set
        if ($customer_number === null || (is_array($customer_number) && count($customer_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer_number when calling continuingEducationGetCredits'
            );
        }

        $resourcePath = '/customers/{customerNumber}/continuing-education-credits';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


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
