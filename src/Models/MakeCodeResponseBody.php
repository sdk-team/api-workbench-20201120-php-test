<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Apiworkbench\V20201120\Models;

use AlibabaCloud\Tea\Model;

class MakeCodeResponseBody extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'sdkDemos' => 'sdkDemos',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sdkDemos) {
            $res['sdkDemos'] = $this->sdkDemos;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return MakeCodeResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['sdkDemos'])){
            $model->sdkDemos = $map['sdkDemos'];
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
    public $sdkDemos;

}
