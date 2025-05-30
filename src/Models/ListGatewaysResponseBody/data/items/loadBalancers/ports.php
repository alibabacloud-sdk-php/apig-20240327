<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data\items\loadBalancers;

use AlibabaCloud\Dara\Model;

class ports extends Model
{
    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'port' => 'port',
        'protocol' => 'protocol',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
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
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        return $model;
    }
}
