<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Apiworkbench\V20201120\Models;

use AlibabaCloud\Tea\Model;

class TestOpenApiRequestResponseBody extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'headers' => 'headers',
        'result' => 'result',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->headers) {
            $res['headers'] = $this->headers;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return TestOpenApiRequestResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['headers'])){
            $model->headers = $map['headers'];
        }
        if(isset($map['result'])){
            $model->result = $map['result'];
        }
        return $model;
    }
    /**
     * @description Id of the request
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $headers;

    /**
     * @var mixed[]
     */
    public $result;

}
