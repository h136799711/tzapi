<?php

namespace Peter\TzApi;

use by\infrastructure\helper\CallResultHelper;

class UnionApi extends BaseApi
{

    public function createResume(ResumePo $po) {
        return $this->editResume(0, $po);
    }

    public function editResume($id, ResumePo $po) {
        return $this->wrapResult('/editresume', array_merge(['id' => $id], $po->toArray()));
    }

    public function applyjob($data = [
        'from' => 'net',
//        from	来源，值为net(网络),market(现场招聘会)
//resumeid	简历编号
//jobid	岗位编号
//marketid	招聘会编号
//content	应聘岗位留言，可为空
    ]) {
        return $this->wrapResult('/applyjob', $data);
    }

    public function getnetmarketjobs($data = [
        'page' => 1,
        'size' => 20,
        'marketid' => 0,
//        'compid' => '',
//        'jobid' => '',
        'key' => '',
        'supersort' => '',
    ]) {
        return $this->wrapResult('/getnetmarketjobs', $data, 'jobs');
    }

    /**
     * 招聘岗位详情
     * @param $id
     * @return \by\infrastructure\base\CallResult
     */
    public function getJobInfo($id) {
        return $this->wrapResult('/getjobinfo', ['id' => $id], 'job');
    }

    public function loginByMobile($data = ['mobile' => '', 'code' => '', 'day' => 1]) {
        return $this->wrapResult('/mobileandcode', $data, 'account');
    }

    public function logout()
    {
        return $this->wrapResult('/logout');
    }

    /**
     * 发送验证码
     * @param $mobile string 手机号
     * @return \by\infrastructure\base\CallResult
     */
    public function sendcode($mobile)
    {
        return $this->wrapResult('/sendcode', [
            'mobile' => $mobile
        ]);
    }

    /**
     * 读取用户信息
     * @param $userid
     * @param $token
     * @param int $day
     * @return \by\infrastructure\base\CallResult
     */
    public function userinfo($userid, $token, $day = 1)
    {
        $this->setToken($token);
        $this->setUserid($userid);
        return $this->wrapResult('/userinfo', [
            'day' => $day,
        ]);
    }

    public function isUserExist($mobile, $way = 'regist')
    {
        //way	手机号码查询必选，选项为worker（普工）,company（企业），person（个人），regist（注册），login（登录）
        return $this->wrapResult('/isuserexist', [
            'mobile' => $mobile,
            'way'    => $way
        ]);
    }

    /**
     * 信息访问记录查看
     * @param int[] $data
     * @return \by\infrastructure\base\CallResult
     */
    protected function visitlog($data = [
        'page' => 1,
        'size' => 20
    ])
    {
        //way	手机号码查询必选，选项为worker（普工）,company（企业），person（个人），regist（注册），login（登录）
        return $this->wrapResult('/visitlog', $data, 'data');
    }

    protected function wrapResult($service, $data = [], $checkSucKey = 'info')
    {
        $ret = $this->request($service, $data);
        if ($ret->isFail()) return $ret;
        $json = json_decode($ret->getData(), JSON_OBJECT_AS_ARRAY);
        if (is_array($json) && array_key_exists('msg', $json) && $json['msg'] == 'success') {
            if (array_key_exists($checkSucKey, $json)) {
                return CallResultHelper::success($json[$checkSucKey]);
            } else {
                return CallResultHelper::fail($service . '返回成功但没有' . $checkSucKey . '参数');
            }
        }
        return CallResultHelper::fail($json['info']);
    }


}
