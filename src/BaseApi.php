<?php

namespace PeterAsasi\TzApi;

use by\component\http\HttpRequest;
use by\infrastructure\helper\CallResultHelper;

abstract class BaseApi
{
    protected $uri = 'https://api.tzrc.cn/Open/Api';
    protected $config;
    protected $reqData = [];
    protected $userid;

    public function __construct(TzConfig $config)
    {
        $this->config = $config;
    }

    public function request($service, array $data, $method = 'post') {
        $apiUri = $this->uri.$service;
        $reqData = array_merge($this->getRequestDataArray(), $data);
        if ($method === 'post') {
            return $this->httpPost($apiUri, $reqData);
        } else {
            return $this->httpGet($apiUri, $reqData);
        }
    }

    public function httpPost($apiUri, $reqData) {
        $http = new HttpRequest();
        $resp = $http->post($apiUri, $reqData);
        if ($resp->success) {
            $body = $resp->getBody()->getContents();
            return CallResultHelper::success($body);
        }
        return CallResultHelper::fail($resp->getError());
    }

    public function httpGet($apiUri, $reqData) {
        $http = new HttpRequest();
        $resp = $http->get($apiUri, $reqData);
        if ($resp->success) {
            $body = $resp->getBody()->getContents();
            return CallResultHelper::success($body);
        }
        return CallResultHelper::fail($resp->getError());
    }

    public function getRequestDataArray() {
        $this->reqData = [
            'label'       => $this->config->getLabel(),
            'secret'      => $this->config->getSecret(),
            'token'       => $this->config->getToken(),
            'userid'      => $this->userid
        ];
        return $this->reqData;
    }

    public function getToken() {
        return $this->config->getToken();
    }

    public function setToken($token) {
        $this->config->setToken($token);
        return $this;
    }

    public function setUserid($userid) {
        $this->userid = $userid;
        return $this;
    }
}
