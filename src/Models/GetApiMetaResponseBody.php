<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apiworkbench\V20201120\Models;

use AlibabaCloud\Tea\Model;

class GetApiMetaResponseBody extends Model
{
    /**
     * @var string
     */
    public $api;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $errorCodes;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $request;

    /**
     * @var string
     */
    public $response;

    /**
     * @var string
     */
    public $responseDoc;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'api'         => 'api',
        'description' => 'description',
        'errorCodes'  => 'error_codes',
        'extraInfo'   => 'extraInfo',
        'method'      => 'method',
        'params'      => 'params',
        'path'        => 'path',
        'protocol'    => 'protocol',
        'request'     => 'request',
        'response'    => 'response',
        'responseDoc' => 'responseDoc',
        'summary'     => 'summary',
        'timeout'     => 'timeout',
        'title'       => 'title',
        'version'     => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->api) {
            $res['api'] = $this->api;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->errorCodes) {
            $res['error_codes'] = $this->errorCodes;
        }
        if (null !== $this->extraInfo) {
            $res['extraInfo'] = $this->extraInfo;
        }
        if (null !== $this->method) {
            $res['method'] = $this->method;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->request) {
            $res['request'] = $this->request;
        }
        if (null !== $this->response) {
            $res['response'] = $this->response;
        }
        if (null !== $this->responseDoc) {
            $res['responseDoc'] = $this->responseDoc;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApiMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['api'])) {
            $model->api = $map['api'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['error_codes'])) {
            $model->errorCodes = $map['error_codes'];
        }
        if (isset($map['extraInfo'])) {
            $model->extraInfo = $map['extraInfo'];
        }
        if (isset($map['method'])) {
            $model->method = $map['method'];
        }
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['request'])) {
            $model->request = $map['request'];
        }
        if (isset($map['response'])) {
            $model->response = $map['response'];
        }
        if (isset($map['responseDoc'])) {
            $model->responseDoc = $map['responseDoc'];
        }
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
