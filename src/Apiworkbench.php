<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Apiworkbench\V20201120;

use Darabonba\OpenApi\OpenApiClient;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;

use AlibabaCloud\SDK\Apiworkbench\V20201120\Models\GetApiMetaRequest;
use AlibabaCloud\SDK\Apiworkbench\V20201120\Models\GetApiMetaResponse;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use AlibabaCloud\SDK\Apiworkbench\V20201120\Models\MakeCodeRequest;
use AlibabaCloud\SDK\Apiworkbench\V20201120\Models\MakeCodeResponse;
use AlibabaCloud\SDK\Apiworkbench\V20201120\Models\SearchProductRequest;
use AlibabaCloud\SDK\Apiworkbench\V20201120\Models\SearchProductResponse;
use AlibabaCloud\SDK\Apiworkbench\V20201120\Models\TestOpenApiRequestRequest;
use AlibabaCloud\SDK\Apiworkbench\V20201120\Models\TestOpenApiRequestResponse;

/**
 * *
 */
class Apiworkbench extends OpenApiClient {
    public function __construct($config){
        parent::__construct($config);
        $this->_endpointRule = "";
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint("api-workbench", $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param string[] $endpointMap
     * @param string $endpoint
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint){
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }
        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param GetApiMetaRequest $request
     * @return GetApiMetaResponse
     */
    public function getApiMeta($request){
        $runtime = new RuntimeOptions([]);
        $headers = [];
        return $this->getApiMetaWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetApiMetaRequest $request
     * @param string[] $headers
     * @param RuntimeOptions $runtime
     * @return GetApiMetaResponse
     */
    public function getApiMetaWithOptions($request, $headers, $runtime){
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiName)) {
            $query["apiName"] = $request->apiName;
        }
        if (!Utils::isUnset($request->productName)) {
            $query["productName"] = $request->productName;
        }
        if (!Utils::isUnset($request->version)) {
            $query["version"] = $request->version;
        }
        $req = new OpenApiRequest([
            "headers" => $headers,
            "query" => OpenApiUtilClient::query($query)
        ]);
        $params = new Params([
            "action" => "GetApiMeta",
            "version" => "2020-11-20",
            "protocol" => "HTTPS",
            "pathname" => "/openapi/product/apiInfo",
            "method" => "GET",
            "authType" => "AK",
            "style" => "ROA",
            "reqBodyType" => "json",
            "bodyType" => "json"
        ]);
        return GetApiMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MakeCodeRequest $request
     * @return MakeCodeResponse
     */
    public function makeCode($request){
        $runtime = new RuntimeOptions([]);
        $headers = [];
        return $this->makeCodeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param MakeCodeRequest $request
     * @param string[] $headers
     * @param RuntimeOptions $runtime
     * @return MakeCodeResponse
     */
    public function makeCodeWithOptions($request, $headers, $runtime){
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiName)) {
            $body["apiName"] = $request->apiName;
        }
        if (!Utils::isUnset($request->apiStyle)) {
            $body["apiStyle"] = $request->apiStyle;
        }
        if (!Utils::isUnset($request->apiVersion)) {
            $body["apiVersion"] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->endpoint)) {
            $body["endpoint"] = $request->endpoint;
        }
        if (!Utils::isUnset($request->meta)) {
            $body["meta"] = $request->meta;
        }
        if (!Utils::isUnset($request->params)) {
            $body["params"] = $request->params;
        }
        if (!Utils::isUnset($request->product)) {
            $body["product"] = $request->product;
        }
        if (!Utils::isUnset($request->sdkType)) {
            $body["sdkType"] = $request->sdkType;
        }
        $req = new OpenApiRequest([
            "headers" => $headers,
            "body" => OpenApiUtilClient::parseToMap($body)
        ]);
        $params = new Params([
            "action" => "MakeCode",
            "version" => "2020-11-20",
            "protocol" => "HTTPS",
            "pathname" => "/openapi/product/makeCode",
            "method" => "POST",
            "authType" => "AK",
            "style" => "ROA",
            "reqBodyType" => "json",
            "bodyType" => "json"
        ]);
        return MakeCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchProductRequest $request
     * @return SearchProductResponse
     */
    public function searchProduct($request){
        $runtime = new RuntimeOptions([]);
        $headers = [];
        return $this->searchProductWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SearchProductRequest $request
     * @param string[] $headers
     * @param RuntimeOptions $runtime
     * @return SearchProductResponse
     */
    public function searchProductWithOptions($request, $headers, $runtime){
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query["BizType"] = $request->bizType;
        }
        if (!Utils::isUnset($request->page)) {
            $query["Page"] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query["PageSize"] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query["Query"] = $request->query;
        }
        if (!Utils::isUnset($request->token)) {
            $query["Token"] = $request->token;
        }
        $req = new OpenApiRequest([
            "headers" => $headers,
            "query" => OpenApiUtilClient::query($query)
        ]);
        $params = new Params([
            "action" => "SearchProduct",
            "version" => "2020-11-20",
            "protocol" => "HTTPS",
            "pathname" => "/openapi/product/search",
            "method" => "GET",
            "authType" => "AK",
            "style" => "ROA",
            "reqBodyType" => "json",
            "bodyType" => "json"
        ]);
        return SearchProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TestOpenApiRequestRequest $request
     * @return TestOpenApiRequestResponse
     */
    public function testOpenApiRequest($request){
        $runtime = new RuntimeOptions([]);
        $headers = [];
        return $this->testOpenApiRequestWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TestOpenApiRequestRequest $request
     * @param string[] $headers
     * @param RuntimeOptions $runtime
     * @return TestOpenApiRequestResponse
     */
    public function testOpenApiRequestWithOptions($request, $headers, $runtime){
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiName)) {
            $body["apiName"] = $request->apiName;
        }
        if (!Utils::isUnset($request->apiVersion)) {
            $body["apiVersion"] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->meta)) {
            $body["meta"] = $request->meta;
        }
        if (!Utils::isUnset($request->params)) {
            $body["params"] = $request->params;
        }
        if (!Utils::isUnset($request->product)) {
            $body["product"] = $request->product;
        }
        $req = new OpenApiRequest([
            "headers" => $headers,
            "body" => OpenApiUtilClient::parseToMap($body)
        ]);
        $params = new Params([
            "action" => "TestOpenApiRequest",
            "version" => "2020-11-20",
            "protocol" => "HTTPS",
            "pathname" => "/openapi/product/openApiRequest",
            "method" => "POST",
            "authType" => "AK",
            "style" => "ROA",
            "reqBodyType" => "json",
            "bodyType" => "json"
        ]);
        return TestOpenApiRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
