<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Apiworkbench\V20201120\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Apiworkbench\V20201120\Models\SearchProductResponseBody\data;

class SearchProductResponseBody extends Model {
    protected $_name = [
        'code' => 'code',
        'data' => 'data',
        'requestId' => 'requestId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SearchProductResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        if(isset($map['data'])){
            $model->data = data::fromMap($map['data']);
        }
        if(isset($map['requestId'])){
            $model->requestId = $map['requestId'];
        }
        return $model;
    }
    /**
     * @var int
     */
    public $code;

    /**
     * @var data
     */
    public $data;

    /**
     * @description Id of the request
     * @var string
     */
    public $requestId;

}
