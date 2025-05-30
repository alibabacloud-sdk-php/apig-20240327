<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class UpdateDomainRequest extends Model
{
    /**
     * @var string
     */
    public $caCertIdentifier;

    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var string
     */
    public $clientCACert;

    /**
     * @var bool
     */
    public $forceHttps;

    /**
     * @var string
     */
    public $http2Option;

    /**
     * @var bool
     */
    public $mTLSEnabled;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var TlsCipherSuitesConfig
     */
    public $tlsCipherSuitesConfig;

    /**
     * @var string
     */
    public $tlsMax;

    /**
     * @var string
     */
    public $tlsMin;
    protected $_name = [
        'caCertIdentifier' => 'caCertIdentifier',
        'certIdentifier' => 'certIdentifier',
        'clientCACert' => 'clientCACert',
        'forceHttps' => 'forceHttps',
        'http2Option' => 'http2Option',
        'mTLSEnabled' => 'mTLSEnabled',
        'protocol' => 'protocol',
        'tlsCipherSuitesConfig' => 'tlsCipherSuitesConfig',
        'tlsMax' => 'tlsMax',
        'tlsMin' => 'tlsMin',
    ];

    public function validate()
    {
        if (null !== $this->tlsCipherSuitesConfig) {
            $this->tlsCipherSuitesConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caCertIdentifier) {
            $res['caCertIdentifier'] = $this->caCertIdentifier;
        }

        if (null !== $this->certIdentifier) {
            $res['certIdentifier'] = $this->certIdentifier;
        }

        if (null !== $this->clientCACert) {
            $res['clientCACert'] = $this->clientCACert;
        }

        if (null !== $this->forceHttps) {
            $res['forceHttps'] = $this->forceHttps;
        }

        if (null !== $this->http2Option) {
            $res['http2Option'] = $this->http2Option;
        }

        if (null !== $this->mTLSEnabled) {
            $res['mTLSEnabled'] = $this->mTLSEnabled;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->tlsCipherSuitesConfig) {
            $res['tlsCipherSuitesConfig'] = null !== $this->tlsCipherSuitesConfig ? $this->tlsCipherSuitesConfig->toArray($noStream) : $this->tlsCipherSuitesConfig;
        }

        if (null !== $this->tlsMax) {
            $res['tlsMax'] = $this->tlsMax;
        }

        if (null !== $this->tlsMin) {
            $res['tlsMin'] = $this->tlsMin;
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
        if (isset($map['caCertIdentifier'])) {
            $model->caCertIdentifier = $map['caCertIdentifier'];
        }

        if (isset($map['certIdentifier'])) {
            $model->certIdentifier = $map['certIdentifier'];
        }

        if (isset($map['clientCACert'])) {
            $model->clientCACert = $map['clientCACert'];
        }

        if (isset($map['forceHttps'])) {
            $model->forceHttps = $map['forceHttps'];
        }

        if (isset($map['http2Option'])) {
            $model->http2Option = $map['http2Option'];
        }

        if (isset($map['mTLSEnabled'])) {
            $model->mTLSEnabled = $map['mTLSEnabled'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['tlsCipherSuitesConfig'])) {
            $model->tlsCipherSuitesConfig = TlsCipherSuitesConfig::fromMap($map['tlsCipherSuitesConfig']);
        }

        if (isset($map['tlsMax'])) {
            $model->tlsMax = $map['tlsMax'];
        }

        if (isset($map['tlsMin'])) {
            $model->tlsMin = $map['tlsMin'];
        }

        return $model;
    }
}
