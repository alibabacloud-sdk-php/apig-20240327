<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayResponseBody\data\zones;

use AlibabaCloud\Tea\Model;

class vSwitch extends Model
{
    /**
     * @description Virtual switch name.
     *
     * @example 杭州VPC虚拟交换机
     *
     * @var string
     */
    public $name;

    /**
     * @description Virtual switch ID.
     *
     * @example vsw-bp1c7ggkj***
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'name' => 'name',
        'vSwitchId' => 'vSwitchId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vSwitch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }

        return $model;
    }
}
