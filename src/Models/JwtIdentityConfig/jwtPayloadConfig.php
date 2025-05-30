<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\JwtIdentityConfig;

use AlibabaCloud\Dara\Model;

class jwtPayloadConfig extends Model
{
    /**
     * @var string
     */
    public $payloadKeyName;

    /**
     * @var string
     */
    public $payloadKeyValue;
    protected $_name = [
        'payloadKeyName' => 'payloadKeyName',
        'payloadKeyValue' => 'payloadKeyValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->payloadKeyName) {
            $res['payloadKeyName'] = $this->payloadKeyName;
        }

        if (null !== $this->payloadKeyValue) {
            $res['payloadKeyValue'] = $this->payloadKeyValue;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['payloadKeyName'])) {
            $model->payloadKeyName = $map['payloadKeyName'];
        }

        if (isset($map['payloadKeyValue'])) {
            $model->payloadKeyValue = $map['payloadKeyValue'];
        }

        return $model;
    }
}
