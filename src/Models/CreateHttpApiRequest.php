<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRequest\ingressConfig;
use AlibabaCloud\Tea\Model;

class CreateHttpApiRequest extends Model
{
    /**
     * @description The AI protocols list.
     *
     * @var string[]
     */
    public $aiProtocols;

    /**
     * @var AuthConfig
     */
    public $authConfig;

    /**
     * @description Base path of the API, which must start with a \\"/\\".
     *
     * @example /v1
     *
     * @var string
     */
    public $basePath;

    /**
     * @description The deploy configs.
     *
     * @var HttpApiDeployConfig[]
     */
    public $deployConfigs;

    /**
     * @description Description of the API.
     *
     * @example 测试专用API。
     *
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableAuth;

    /**
     * @description Configuration information for the HTTP Ingress API.
     *
     * @var ingressConfig
     */
    public $ingressConfig;

    /**
     * @description Name of the API.
     *
     * This parameter is required.
     *
     * @example test-api
     *
     * @var string
     */
    public $name;

    /**
     * @description List of API access protocols.
     *
     * @var string[]
     */
    public $protocols;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzgvmlotionbi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Type of the HTTP API.
     * - Http
     * - Rest
     * - WebSocket
     * - HttpIngress
     *
     * @example Http
     *
     * @var string
     */
    public $type;

    /**
     * @description Versioning configuration for the API.
     *
     * @var HttpApiVersionConfig
     */
    public $versionConfig;
    protected $_name = [
        'aiProtocols' => 'aiProtocols',
        'authConfig' => 'authConfig',
        'basePath' => 'basePath',
        'deployConfigs' => 'deployConfigs',
        'description' => 'description',
        'enableAuth' => 'enableAuth',
        'ingressConfig' => 'ingressConfig',
        'name' => 'name',
        'protocols' => 'protocols',
        'resourceGroupId' => 'resourceGroupId',
        'type' => 'type',
        'versionConfig' => 'versionConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiProtocols) {
            $res['aiProtocols'] = $this->aiProtocols;
        }
        if (null !== $this->authConfig) {
            $res['authConfig'] = null !== $this->authConfig ? $this->authConfig->toMap() : null;
        }
        if (null !== $this->basePath) {
            $res['basePath'] = $this->basePath;
        }
        if (null !== $this->deployConfigs) {
            $res['deployConfigs'] = [];
            if (null !== $this->deployConfigs && \is_array($this->deployConfigs)) {
                $n = 0;
                foreach ($this->deployConfigs as $item) {
                    $res['deployConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->enableAuth) {
            $res['enableAuth'] = $this->enableAuth;
        }
        if (null !== $this->ingressConfig) {
            $res['ingressConfig'] = null !== $this->ingressConfig ? $this->ingressConfig->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->protocols) {
            $res['protocols'] = $this->protocols;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->versionConfig) {
            $res['versionConfig'] = null !== $this->versionConfig ? $this->versionConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHttpApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aiProtocols'])) {
            if (!empty($map['aiProtocols'])) {
                $model->aiProtocols = $map['aiProtocols'];
            }
        }
        if (isset($map['authConfig'])) {
            $model->authConfig = AuthConfig::fromMap($map['authConfig']);
        }
        if (isset($map['basePath'])) {
            $model->basePath = $map['basePath'];
        }
        if (isset($map['deployConfigs'])) {
            if (!empty($map['deployConfigs'])) {
                $model->deployConfigs = [];
                $n = 0;
                foreach ($map['deployConfigs'] as $item) {
                    $model->deployConfigs[$n++] = null !== $item ? HttpApiDeployConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['enableAuth'])) {
            $model->enableAuth = $map['enableAuth'];
        }
        if (isset($map['ingressConfig'])) {
            $model->ingressConfig = ingressConfig::fromMap($map['ingressConfig']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['protocols'])) {
            if (!empty($map['protocols'])) {
                $model->protocols = $map['protocols'];
            }
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['versionConfig'])) {
            $model->versionConfig = HttpApiVersionConfig::fromMap($map['versionConfig']);
        }

        return $model;
    }
}
