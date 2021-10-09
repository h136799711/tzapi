<?php

namespace Peter\TzApi;
class UnionApi extends BaseApi
{
    public function logout() {
        $ret = $this->request('/logout', []);
        if ($ret->isFail()) return $ret;
        $ret->getData();
        return $ret;
    }
}
