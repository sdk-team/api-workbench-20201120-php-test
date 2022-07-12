<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Apiworkbench\V20201120\Models;

use AlibabaCloud\Tea\Model;

class SearchProductRequest extends Model {
    protected $_name = [
        'bizType' => 'BizType',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'query' => 'Query',
        'token' => 'Token',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return SearchProductRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['BizType'])){
            $model->bizType = $map['BizType'];
        }
        if(isset($map['Page'])){
            $model->page = $map['Page'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['Query'])){
            $model->query = $map['Query'];
        }
        if(isset($map['Token'])){
            $model->token = $map['Token'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $token;

}
