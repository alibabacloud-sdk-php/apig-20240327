<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GatewayLogConfig;

use AlibabaCloud\Tea\Model;

class slsConfig extends Model
{
    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'enable' => 'enable',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        return $model;
    }
}
