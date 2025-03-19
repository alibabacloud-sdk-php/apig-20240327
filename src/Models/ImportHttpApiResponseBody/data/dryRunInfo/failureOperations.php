<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data\dryRunInfo;

use AlibabaCloud\Tea\Model;

class failureOperations extends Model
{
    /**
     * @description Error message
     *
     * @example 缺少响应定义。
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description API method.
     *
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @description API path.
     *
     * @example /v1/orders
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'method' => 'method',
        'path' => 'path',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->method) {
            $res['method'] = $this->method;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failureOperations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['method'])) {
            $model->method = $map['method'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        return $model;
    }
}
