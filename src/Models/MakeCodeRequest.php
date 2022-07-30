<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apiworkbench\V20201120\Models;

use AlibabaCloud\Tea\Model;

class MakeCodeRequest extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $apiStyle;

    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $meta;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $sdkType;
    protected $_name = [
        'apiName'    => 'apiName',
        'apiStyle'   => 'apiStyle',
        'apiVersion' => 'apiVersion',
        'endpoint'   => 'endpoint',
        'meta'       => 'meta',
        'params'     => 'params',
        'product'    => 'product',
        'sdkType'    => 'sdkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['apiName'] = $this->apiName;
        }
        if (null !== $this->apiStyle) {
            $res['apiStyle'] = $this->apiStyle;
        }
        if (null !== $this->apiVersion) {
            $res['apiVersion'] = $this->apiVersion;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->meta) {
            $res['meta'] = $this->meta;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->product) {
            $res['product'] = $this->product;
        }
        if (null !== $this->sdkType) {
            $res['sdkType'] = $this->sdkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MakeCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiName'])) {
            $model->apiName = $map['apiName'];
        }
        if (isset($map['apiStyle'])) {
            $model->apiStyle = $map['apiStyle'];
        }
        if (isset($map['apiVersion'])) {
            $model->apiVersion = $map['apiVersion'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['meta'])) {
            $model->meta = $map['meta'];
        }
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['product'])) {
            $model->product = $map['product'];
        }
        if (isset($map['sdkType'])) {
            $model->sdkType = $map['sdkType'];
        }

        return $model;
    }
}
