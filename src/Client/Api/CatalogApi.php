<?php
/**
 * CatalogApi
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
 * CatalogApi Class Doc Comment
 *
 * @category Class
 * @package  Advantage\Client
 * @author   Advantage Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogApi
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
     * Operation catalogGet
     *
     * Gets the catalog, starting at the root level.    A catalog is an organized as a multi-level collection of subjects and the products assigned to those subjects.
     *
     * @param  string $settings_include_products Include products in the response?  The default is to include products only at the leaf levels. (optional)
     * @param  int $settings_max_depth A catalog is a tree structure that may include many levels of nested subjects.  Use the MaxDepth setting to limit the child levels in the response to a maximum depth.  For example,   pass 1 to return only the first level of child subjects or zero to return no child subjects.  The default is to limit the response to a maximum of 50 child levels deep. (optional)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Advantage\Client\Model\SearchResultSubjectTreeLevel
     */
    public function catalogGet($settings_include_products = null, $settings_max_depth = null)
    {
        list($response) = $this->catalogGetWithHttpInfo($settings_include_products, $settings_max_depth);
        return $response;
    }

    /**
     * Operation catalogGetWithHttpInfo
     *
     * Gets the catalog, starting at the root level.    A catalog is an organized as a multi-level collection of subjects and the products assigned to those subjects.
     *
     * @param  string $settings_include_products Include products in the response?  The default is to include products only at the leaf levels. (optional)
     * @param  int $settings_max_depth A catalog is a tree structure that may include many levels of nested subjects.  Use the MaxDepth setting to limit the child levels in the response to a maximum depth.  For example,   pass 1 to return only the first level of child subjects or zero to return no child subjects.  The default is to limit the response to a maximum of 50 child levels deep. (optional)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Advantage\Client\Model\SearchResultSubjectTreeLevel, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogGetWithHttpInfo($settings_include_products = null, $settings_max_depth = null)
    {
        $returnType = '\Advantage\Client\Model\SearchResultSubjectTreeLevel';
        $request = $this->catalogGetRequest($settings_include_products, $settings_max_depth);

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
                        '\Advantage\Client\Model\SearchResultSubjectTreeLevel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation catalogGetAsync
     *
     * Gets the catalog, starting at the root level.    A catalog is an organized as a multi-level collection of subjects and the products assigned to those subjects.
     *
     * @param  string $settings_include_products Include products in the response?  The default is to include products only at the leaf levels. (optional)
     * @param  int $settings_max_depth A catalog is a tree structure that may include many levels of nested subjects.  Use the MaxDepth setting to limit the child levels in the response to a maximum depth.  For example,   pass 1 to return only the first level of child subjects or zero to return no child subjects.  The default is to limit the response to a maximum of 50 child levels deep. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogGetAsync($settings_include_products = null, $settings_max_depth = null)
    {
        return $this->catalogGetAsyncWithHttpInfo($settings_include_products, $settings_max_depth)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation catalogGetAsyncWithHttpInfo
     *
     * Gets the catalog, starting at the root level.    A catalog is an organized as a multi-level collection of subjects and the products assigned to those subjects.
     *
     * @param  string $settings_include_products Include products in the response?  The default is to include products only at the leaf levels. (optional)
     * @param  int $settings_max_depth A catalog is a tree structure that may include many levels of nested subjects.  Use the MaxDepth setting to limit the child levels in the response to a maximum depth.  For example,   pass 1 to return only the first level of child subjects or zero to return no child subjects.  The default is to limit the response to a maximum of 50 child levels deep. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogGetAsyncWithHttpInfo($settings_include_products = null, $settings_max_depth = null)
    {
        $returnType = '\Advantage\Client\Model\SearchResultSubjectTreeLevel';
        $request = $this->catalogGetRequest($settings_include_products, $settings_max_depth);

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
     * Create request for operation 'catalogGet'
     *
     * @param  string $settings_include_products Include products in the response?  The default is to include products only at the leaf levels. (optional)
     * @param  int $settings_max_depth A catalog is a tree structure that may include many levels of nested subjects.  Use the MaxDepth setting to limit the child levels in the response to a maximum depth.  For example,   pass 1 to return only the first level of child subjects or zero to return no child subjects.  The default is to limit the response to a maximum of 50 child levels deep. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function catalogGetRequest($settings_include_products = null, $settings_max_depth = null)
    {

        $resourcePath = '/product-catalogs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($settings_include_products !== null) {
            $queryParams['settings.includeProducts'] = ObjectSerializer::toQueryValue($settings_include_products);
        }
        // query params
        if ($settings_max_depth !== null) {
            $queryParams['settings.maxDepth'] = ObjectSerializer::toQueryValue($settings_max_depth);
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
     * Operation catalogGet_0
     *
     * Gets the catalog, starting at the given subject tree level.   A catalog is an organized as a multi-level collection of subjects and the products assigned to those subjects.
     *
     * @param  int $parent_id Level Id of the Parent Tree Level. The returned               collection will start with this subject tree level and return all child levels.               If no parent level is provided then the returned catalog will start with the top level subjects. (required)
     * @param  string $settings_include_products Include products in the response?  The default is to include products only at the leaf levels. (optional)
     * @param  int $settings_max_depth A catalog is a tree structure that may include many levels of nested subjects.  Use the MaxDepth setting to limit the child levels in the response to a maximum depth.  For example,   pass 1 to return only the first level of child subjects or zero to return no child subjects.  The default is to limit the response to a maximum of 50 child levels deep. (optional)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Advantage\Client\Model\SearchResultSubjectTreeLevel
     */
    public function catalogGet_0($parent_id, $settings_include_products = null, $settings_max_depth = null)
    {
        list($response) = $this->catalogGet_0WithHttpInfo($parent_id, $settings_include_products, $settings_max_depth);
        return $response;
    }

    /**
     * Operation catalogGet_0WithHttpInfo
     *
     * Gets the catalog, starting at the given subject tree level.   A catalog is an organized as a multi-level collection of subjects and the products assigned to those subjects.
     *
     * @param  int $parent_id Level Id of the Parent Tree Level. The returned               collection will start with this subject tree level and return all child levels.               If no parent level is provided then the returned catalog will start with the top level subjects. (required)
     * @param  string $settings_include_products Include products in the response?  The default is to include products only at the leaf levels. (optional)
     * @param  int $settings_max_depth A catalog is a tree structure that may include many levels of nested subjects.  Use the MaxDepth setting to limit the child levels in the response to a maximum depth.  For example,   pass 1 to return only the first level of child subjects or zero to return no child subjects.  The default is to limit the response to a maximum of 50 child levels deep. (optional)
     *
     * @throws \Advantage\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Advantage\Client\Model\SearchResultSubjectTreeLevel, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogGet_0WithHttpInfo($parent_id, $settings_include_products = null, $settings_max_depth = null)
    {
        $returnType = '\Advantage\Client\Model\SearchResultSubjectTreeLevel';
        $request = $this->catalogGet_0Request($parent_id, $settings_include_products, $settings_max_depth);

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
                        '\Advantage\Client\Model\SearchResultSubjectTreeLevel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation catalogGet_0Async
     *
     * Gets the catalog, starting at the given subject tree level.   A catalog is an organized as a multi-level collection of subjects and the products assigned to those subjects.
     *
     * @param  int $parent_id Level Id of the Parent Tree Level. The returned               collection will start with this subject tree level and return all child levels.               If no parent level is provided then the returned catalog will start with the top level subjects. (required)
     * @param  string $settings_include_products Include products in the response?  The default is to include products only at the leaf levels. (optional)
     * @param  int $settings_max_depth A catalog is a tree structure that may include many levels of nested subjects.  Use the MaxDepth setting to limit the child levels in the response to a maximum depth.  For example,   pass 1 to return only the first level of child subjects or zero to return no child subjects.  The default is to limit the response to a maximum of 50 child levels deep. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogGet_0Async($parent_id, $settings_include_products = null, $settings_max_depth = null)
    {
        return $this->catalogGet_0AsyncWithHttpInfo($parent_id, $settings_include_products, $settings_max_depth)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation catalogGet_0AsyncWithHttpInfo
     *
     * Gets the catalog, starting at the given subject tree level.   A catalog is an organized as a multi-level collection of subjects and the products assigned to those subjects.
     *
     * @param  int $parent_id Level Id of the Parent Tree Level. The returned               collection will start with this subject tree level and return all child levels.               If no parent level is provided then the returned catalog will start with the top level subjects. (required)
     * @param  string $settings_include_products Include products in the response?  The default is to include products only at the leaf levels. (optional)
     * @param  int $settings_max_depth A catalog is a tree structure that may include many levels of nested subjects.  Use the MaxDepth setting to limit the child levels in the response to a maximum depth.  For example,   pass 1 to return only the first level of child subjects or zero to return no child subjects.  The default is to limit the response to a maximum of 50 child levels deep. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function catalogGet_0AsyncWithHttpInfo($parent_id, $settings_include_products = null, $settings_max_depth = null)
    {
        $returnType = '\Advantage\Client\Model\SearchResultSubjectTreeLevel';
        $request = $this->catalogGet_0Request($parent_id, $settings_include_products, $settings_max_depth);

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
     * Create request for operation 'catalogGet_0'
     *
     * @param  int $parent_id Level Id of the Parent Tree Level. The returned               collection will start with this subject tree level and return all child levels.               If no parent level is provided then the returned catalog will start with the top level subjects. (required)
     * @param  string $settings_include_products Include products in the response?  The default is to include products only at the leaf levels. (optional)
     * @param  int $settings_max_depth A catalog is a tree structure that may include many levels of nested subjects.  Use the MaxDepth setting to limit the child levels in the response to a maximum depth.  For example,   pass 1 to return only the first level of child subjects or zero to return no child subjects.  The default is to limit the response to a maximum of 50 child levels deep. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function catalogGet_0Request($parent_id, $settings_include_products = null, $settings_max_depth = null)
    {
        // verify the required parameter 'parent_id' is set
        if ($parent_id === null || (is_array($parent_id) && count($parent_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $parent_id when calling catalogGet_0'
            );
        }

        $resourcePath = '/product-catalogs/{parentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($settings_include_products !== null) {
            $queryParams['settings.includeProducts'] = ObjectSerializer::toQueryValue($settings_include_products);
        }
        // query params
        if ($settings_max_depth !== null) {
            $queryParams['settings.maxDepth'] = ObjectSerializer::toQueryValue($settings_max_depth);
        }

        // path params
        if ($parent_id !== null) {
            $resourcePath = str_replace(
                '{' . 'parentId' . '}',
                ObjectSerializer::toPathValue($parent_id),
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
