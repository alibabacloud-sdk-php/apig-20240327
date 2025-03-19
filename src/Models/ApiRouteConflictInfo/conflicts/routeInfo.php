<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts;

use AlibabaCloud\Tea\Model;

class routeInfo extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $routeId;
    protected $_name = [
        'name' => 'name',
        'routeId' => 'routeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->routeId) {
            $res['routeId'] = $this->routeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['routeId'])) {
            $model->routeId = $map['routeId'];
        }

        return $model;
    }
}
