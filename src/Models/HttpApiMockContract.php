<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class HttpApiMockContract extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $responseCode;

    /**
     * @var string
     */
    public $responseContent;
    protected $_name = [
        'enable' => 'enable',
        'responseCode' => 'responseCode',
        'responseContent' => 'responseContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->responseCode) {
            $res['responseCode'] = $this->responseCode;
        }

        if (null !== $this->responseContent) {
            $res['responseContent'] = $this->responseContent;
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
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['responseCode'])) {
            $model->responseCode = $map['responseCode'];
        }

        if (isset($map['responseContent'])) {
            $model->responseContent = $map['responseContent'];
        }

        return $model;
    }
}
