<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apiworkbench\V20201120\Models\SearchProductResponseBody;

use AlibabaCloud\SDK\Apiworkbench\V20201120\Models\SearchProductResponseBody\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var list_[]
     */
    public $list;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pages;

    /**
     * @var int
     */
    public $perPage;

    /**
     * @var int
     */
    public $realTotal;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'list'      => 'list',
        'page'      => 'page',
        'pages'     => 'pages',
        'perPage'   => 'perPage',
        'realTotal' => 'real_total',
        'requestId' => 'request_id',
        'total'     => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['list'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->pages) {
            $res['pages'] = $this->pages;
        }
        if (null !== $this->perPage) {
            $res['perPage'] = $this->perPage;
        }
        if (null !== $this->realTotal) {
            $res['real_total'] = $this->realTotal;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['list'])) {
            if (!empty($map['list'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['list'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['pages'])) {
            $model->pages = $map['pages'];
        }
        if (isset($map['perPage'])) {
            $model->perPage = $map['perPage'];
        }
        if (isset($map['real_total'])) {
            $model->realTotal = $map['real_total'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
