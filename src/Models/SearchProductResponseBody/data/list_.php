<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apiworkbench\V20201120\Models\SearchProductResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $belongGroup;

    /**
     * @var string
     */
    public $defaultVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $locationCode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $searchSummary;

    /**
     * @var string
     */
    public $shortName;

    /**
     * @var string
     */
    public $showNameCn;

    /**
     * @var string
     */
    public $showNameEn;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'belongGroup'    => 'belong_group',
        'defaultVersion' => 'default_version',
        'description'    => 'description',
        'id'             => 'id',
        'locationCode'   => 'location_code',
        'name'           => 'name',
        'searchSummary'  => 'search_summary',
        'shortName'      => 'short_name',
        'showNameCn'     => 'show_name_cn',
        'showNameEn'     => 'show_name_en',
        'status'         => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->belongGroup) {
            $res['belong_group'] = $this->belongGroup;
        }
        if (null !== $this->defaultVersion) {
            $res['default_version'] = $this->defaultVersion;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->locationCode) {
            $res['location_code'] = $this->locationCode;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->searchSummary) {
            $res['search_summary'] = $this->searchSummary;
        }
        if (null !== $this->shortName) {
            $res['short_name'] = $this->shortName;
        }
        if (null !== $this->showNameCn) {
            $res['show_name_cn'] = $this->showNameCn;
        }
        if (null !== $this->showNameEn) {
            $res['show_name_en'] = $this->showNameEn;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['belong_group'])) {
            $model->belongGroup = $map['belong_group'];
        }
        if (isset($map['default_version'])) {
            $model->defaultVersion = $map['default_version'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['location_code'])) {
            $model->locationCode = $map['location_code'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['search_summary'])) {
            $model->searchSummary = $map['search_summary'];
        }
        if (isset($map['short_name'])) {
            $model->shortName = $map['short_name'];
        }
        if (isset($map['show_name_cn'])) {
            $model->showNameCn = $map['show_name_cn'];
        }
        if (isset($map['show_name_en'])) {
            $model->showNameEn = $map['show_name_en'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
