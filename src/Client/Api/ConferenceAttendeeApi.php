<?php
/**
 * ConferenceAttendeeApi
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
 * ConferenceAttendeeApi Class Doc Comment
 *
 * @category Class
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConferenceAttendeeApi
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
     * Operation conferenceAttendeeCancel
     *
     * Removes an attendee from a conference registration
     *
     * @param  string $registration_id  (required)
     * @param  string $registration_sequence  (required)
     * @param  \Advantage\Client\Model\ConferenceAttendeeCancelRequest $request  (required)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function conferenceAttendeeCancel($registration_id, $registration_sequence, $request)
    {
        $this->conferenceAttendeeCancelWithHttpInfo($registration_id, $registration_sequence, $request);
    }

    /**
     * Operation conferenceAttendeeCancelWithHttpInfo
     *
     * Removes an attendee from a conference registration
     *
     * @param  string $registration_id  (required)
     * @param  string $registration_sequence  (required)
     * @param  \Advantage\Client\Model\ConferenceAttendeeCancelRequest $request  (required)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function conferenceAttendeeCancelWithHttpInfo($registration_id, $registration_sequence, $request)
    {
        $returnType = '';
        $request = $this->conferenceAttendeeCancelRequest($registration_id, $registration_sequence, $request);

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
     * Operation conferenceAttendeeCancelAsync
     *
     * Removes an attendee from a conference registration
     *
     * @param  string $registration_id  (required)
     * @param  string $registration_sequence  (required)
     * @param  \Advantage\Client\Model\ConferenceAttendeeCancelRequest $request  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function conferenceAttendeeCancelAsync($registration_id, $registration_sequence, $request)
    {
        return $this->conferenceAttendeeCancelAsyncWithHttpInfo($registration_id, $registration_sequence, $request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation conferenceAttendeeCancelAsyncWithHttpInfo
     *
     * Removes an attendee from a conference registration
     *
     * @param  string $registration_id  (required)
     * @param  string $registration_sequence  (required)
     * @param  \Advantage\Client\Model\ConferenceAttendeeCancelRequest $request  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function conferenceAttendeeCancelAsyncWithHttpInfo($registration_id, $registration_sequence, $request)
    {
        $returnType = '';
        $request = $this->conferenceAttendeeCancelRequest($registration_id, $registration_sequence, $request);

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
     * Create request for operation 'conferenceAttendeeCancel'
     *
     * @param  string $registration_id  (required)
     * @param  string $registration_sequence  (required)
     * @param  \Advantage\Client\Model\ConferenceAttendeeCancelRequest $request  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function conferenceAttendeeCancelRequest($registration_id, $registration_sequence, $request)
    {
        // verify the required parameter 'registration_id' is set
        if ($registration_id === null || (is_array($registration_id) && count($registration_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registration_id when calling conferenceAttendeeCancel'
            );
        }
        // verify the required parameter 'registration_sequence' is set
        if ($registration_sequence === null || (is_array($registration_sequence) && count($registration_sequence) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registration_sequence when calling conferenceAttendeeCancel'
            );
        }
        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling conferenceAttendeeCancel'
            );
        }

        $resourcePath = '/conference-registrations/{registrationId}/attendees/{registrationSequence}/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($registration_id !== null) {
            $resourcePath = str_replace(
                '{' . 'registrationId' . '}',
                ObjectSerializer::toPathValue($registration_id),
                $resourcePath
            );
        }
        // path params
        if ($registration_sequence !== null) {
            $resourcePath = str_replace(
                '{' . 'registrationSequence' . '}',
                ObjectSerializer::toPathValue($registration_sequence),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
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
     * Operation conferenceAttendeeGet
     *
     * Gets a specific conference attendee by ID and sequence
     *
     * @param  string $registration_id  (required)
     * @param  string $registration_sequence  (required)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Advantage\Client\Model\ConferenceAttendee
     */
    public function conferenceAttendeeGet($registration_id, $registration_sequence)
    {
        list($response) = $this->conferenceAttendeeGetWithHttpInfo($registration_id, $registration_sequence);
        return $response;
    }

    /**
     * Operation conferenceAttendeeGetWithHttpInfo
     *
     * Gets a specific conference attendee by ID and sequence
     *
     * @param  string $registration_id  (required)
     * @param  string $registration_sequence  (required)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Advantage\Client\Model\ConferenceAttendee, HTTP status code, HTTP response headers (array of strings)
     */
    public function conferenceAttendeeGetWithHttpInfo($registration_id, $registration_sequence)
    {
        $returnType = '\Advantage\Client\Model\ConferenceAttendee';
        $request = $this->conferenceAttendeeGetRequest($registration_id, $registration_sequence);

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
                        '\Advantage\Client\Model\ConferenceAttendee',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation conferenceAttendeeGetAsync
     *
     * Gets a specific conference attendee by ID and sequence
     *
     * @param  string $registration_id  (required)
     * @param  string $registration_sequence  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function conferenceAttendeeGetAsync($registration_id, $registration_sequence)
    {
        return $this->conferenceAttendeeGetAsyncWithHttpInfo($registration_id, $registration_sequence)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation conferenceAttendeeGetAsyncWithHttpInfo
     *
     * Gets a specific conference attendee by ID and sequence
     *
     * @param  string $registration_id  (required)
     * @param  string $registration_sequence  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function conferenceAttendeeGetAsyncWithHttpInfo($registration_id, $registration_sequence)
    {
        $returnType = '\Advantage\Client\Model\ConferenceAttendee';
        $request = $this->conferenceAttendeeGetRequest($registration_id, $registration_sequence);

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
     * Create request for operation 'conferenceAttendeeGet'
     *
     * @param  string $registration_id  (required)
     * @param  string $registration_sequence  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function conferenceAttendeeGetRequest($registration_id, $registration_sequence)
    {
        // verify the required parameter 'registration_id' is set
        if ($registration_id === null || (is_array($registration_id) && count($registration_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registration_id when calling conferenceAttendeeGet'
            );
        }
        // verify the required parameter 'registration_sequence' is set
        if ($registration_sequence === null || (is_array($registration_sequence) && count($registration_sequence) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registration_sequence when calling conferenceAttendeeGet'
            );
        }

        $resourcePath = '/conference-registrations/{registrationId}/attendees/{registrationSequence}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($registration_id !== null) {
            $resourcePath = str_replace(
                '{' . 'registrationId' . '}',
                ObjectSerializer::toPathValue($registration_id),
                $resourcePath
            );
        }
        // path params
        if ($registration_sequence !== null) {
            $resourcePath = str_replace(
                '{' . 'registrationSequence' . '}',
                ObjectSerializer::toPathValue($registration_sequence),
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
     * Operation conferenceAttendeeUpdate
     *
     * Updates the specified attendee on a conference registration
     *
     * @param  string $registration_id  (required)
     * @param  string $registration_sequence  (required)
     * @param  \Advantage\Client\Model\ConferenceAttendeeUpdateRequest $request  (required)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function conferenceAttendeeUpdate($registration_id, $registration_sequence, $request)
    {
        $this->conferenceAttendeeUpdateWithHttpInfo($registration_id, $registration_sequence, $request);
    }

    /**
     * Operation conferenceAttendeeUpdateWithHttpInfo
     *
     * Updates the specified attendee on a conference registration
     *
     * @param  string $registration_id  (required)
     * @param  string $registration_sequence  (required)
     * @param  \Advantage\Client\Model\ConferenceAttendeeUpdateRequest $request  (required)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function conferenceAttendeeUpdateWithHttpInfo($registration_id, $registration_sequence, $request)
    {
        $returnType = '';
        $request = $this->conferenceAttendeeUpdateRequest($registration_id, $registration_sequence, $request);

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
     * Operation conferenceAttendeeUpdateAsync
     *
     * Updates the specified attendee on a conference registration
     *
     * @param  string $registration_id  (required)
     * @param  string $registration_sequence  (required)
     * @param  \Advantage\Client\Model\ConferenceAttendeeUpdateRequest $request  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function conferenceAttendeeUpdateAsync($registration_id, $registration_sequence, $request)
    {
        return $this->conferenceAttendeeUpdateAsyncWithHttpInfo($registration_id, $registration_sequence, $request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation conferenceAttendeeUpdateAsyncWithHttpInfo
     *
     * Updates the specified attendee on a conference registration
     *
     * @param  string $registration_id  (required)
     * @param  string $registration_sequence  (required)
     * @param  \Advantage\Client\Model\ConferenceAttendeeUpdateRequest $request  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function conferenceAttendeeUpdateAsyncWithHttpInfo($registration_id, $registration_sequence, $request)
    {
        $returnType = '';
        $request = $this->conferenceAttendeeUpdateRequest($registration_id, $registration_sequence, $request);

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
     * Create request for operation 'conferenceAttendeeUpdate'
     *
     * @param  string $registration_id  (required)
     * @param  string $registration_sequence  (required)
     * @param  \Advantage\Client\Model\ConferenceAttendeeUpdateRequest $request  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function conferenceAttendeeUpdateRequest($registration_id, $registration_sequence, $request)
    {
        // verify the required parameter 'registration_id' is set
        if ($registration_id === null || (is_array($registration_id) && count($registration_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registration_id when calling conferenceAttendeeUpdate'
            );
        }
        // verify the required parameter 'registration_sequence' is set
        if ($registration_sequence === null || (is_array($registration_sequence) && count($registration_sequence) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registration_sequence when calling conferenceAttendeeUpdate'
            );
        }
        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling conferenceAttendeeUpdate'
            );
        }

        $resourcePath = '/conference-registrations/{registrationId}/attendees/{registrationSequence}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($registration_id !== null) {
            $resourcePath = str_replace(
                '{' . 'registrationId' . '}',
                ObjectSerializer::toPathValue($registration_id),
                $resourcePath
            );
        }
        // path params
        if ($registration_sequence !== null) {
            $resourcePath = str_replace(
                '{' . 'registrationSequence' . '}',
                ObjectSerializer::toPathValue($registration_sequence),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
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
