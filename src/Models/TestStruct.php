<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apiworkbench\V20201120\Models;

use AlibabaCloud\SDK\Apiworkbench\V20201120\Models\TestStruct\testString;
use AlibabaCloud\Tea\Model;

class TestStruct extends Model
{
    /**
     * @description sdfdsfsfd
     *
     * @var testString
     */
    public $testString;
    protected $_name = [
        'testString' => 'testString',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->testString) {
            $res['testString'] = null !== $this->testString ? $this->testString->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestStruct
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['testString'])) {
            $model->testString = testString::fromMap($map['testString']);
        }

        return $model;
    }
}
