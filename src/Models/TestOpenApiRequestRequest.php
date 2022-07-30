<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Apiworkbench\V20201120\Models;

use AlibabaCloud\Tea\Model;

class TestOpenApiRequestRequest extends Model {
    protected $_name = [
        'apiName' => 'apiName',
        'apiVersion' => 'apiVersion',
        'meta' => 'meta',
        'params' => 'params',
        'product' => 'product',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->apiName) {
            $res['apiName'] = $this->apiName;
        }
        if (null !== $this->apiVersion) {
            $res['apiVersion'] = $this->apiVersion;
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
        return $res;
    }
    /**
     * @param array $map
     * @return TestOpenApiRequestRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['apiName'])){
            $model->apiName = $map['apiName'];
        }
        if(isset($map['apiVersion'])){
            $model->apiVersion = $map['apiVersion'];
        }
        if(isset($map['meta'])){
            $model->meta = $map['meta'];
        }
        if(isset($map['params'])){
            $model->params = $map['params'];
        }
        if(isset($map['product'])){
            $model->product = $map['product'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var string
     */
    public $meta;

    /**
     * @var mixed[]
     */
    public $params;

    /**
     * @var string
     */
    public $product;

}
