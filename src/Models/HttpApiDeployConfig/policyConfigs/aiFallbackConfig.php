<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig\policyConfigs;

use AlibabaCloud\Tea\Model;

class aiFallbackConfig extends Model
{
    /**
     * @var string[]
     */
    public $serviceIds;
    protected $_name = [
        'serviceIds' => 'serviceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceIds) {
            $res['serviceIds'] = $this->serviceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aiFallbackConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceIds'])) {
            if (!empty($map['serviceIds'])) {
                $model->serviceIds = $map['serviceIds'];
            }
        }

        return $model;
    }
}