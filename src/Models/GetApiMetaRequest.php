<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apiworkbench\V20201120\Models;

use AlibabaCloud\Tea\Model;

class GetApiMetaRequest extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'apiName'     => 'apiName',
        'productName' => 'productName',
        'version'     => 'version',
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
        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApiMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiName'])) {
            $model->apiName = $map['apiName'];
        }
        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
