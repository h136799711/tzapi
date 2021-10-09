<?php

namespace PeterAsasi\TzApi;

use by\infrastructure\helper\CallResultHelper;

class UnionApi extends BaseApi
{
    static $dataCodeMethods = [
        'getmarrycode',
        'getpolitcode',
        'geteducode',
        //学历）
        'getschoolcode',
        //院校）
        'getspeccode',
        //专业）
        'getjobcode',
        //岗位类型）
        'getprofcode',
        //职称）
        'getworktypecode',
        //工作类型）
        'getworkstatuscode',
        //在职情况）
        'getarrivecode', //到岗时间）
        'getareacode', //地区）
        'getlangcode', //语言）
        'getlevelcode', //语言水平）
        'getenglishcode', //英语水平）
        'getspeakcode', //口语水平）
        'getindustrycode', //行业）
        'getcompanytypecode', //公司类型）
        'getwelfarecode',//福利）
    ];

    public function getareacode()
    {
        return $this->wrapResult('/getareacode');
    }
    public function getlangcode()
    {
        return $this->wrapResult('/getlangcode');
    }

    public function getlevelcode()
    {
        return $this->wrapResult('/getlevelcode');
    }

    public function getenglishcode()
    {
        return $this->wrapResult('/getenglishcode');
    }
    public function getspeakcode()
    {
        return $this->wrapResult('/getspeakcode');
    }
    public function getindustrycode()
    {
        return $this->wrapResult('/getindustrycode');
    }
    public function getcompanytypecode()
    {
        return $this->wrapResult('/getcompanytypecode');
    }
    public function getwelfarecode()
    {
        return $this->wrapResult('/getwelfarecode');
    }

    public function getarrivecode()
    {
        return $this->wrapResult('/getarrivecode');
    }

    public function getworkstatuscode()
    {
        return $this->wrapResult('/getworkstatuscode');
    }

    public function getworktypecode()
    {
        return $this->wrapResult('/getworktypecode');
    }

    public function getprofcode()
    {
        return $this->wrapResult('/getprofcode');
    }
    public function getjobcode()
    {
        return $this->wrapResult('/getjobcode');
    }

    public function getspeccode()
    {
        return $this->wrapResult('/getspeccode');
    }

    public function getschoolcode()
    {
        return $this->wrapResult('/getschoolcode');
    }

    public function geteducode()
    {
        return $this->wrapResult('/geteducode');
    }

    public function getpolitcode()
    {
        return $this->wrapResult('/getpolitcode');
    }

    public function getmarrycode()
    {
        return $this->wrapResult('/getmarrycode');
    }

    public function applyresume()
    {
        return $this->wrapResult('/applyresume', [], 'resume');
    }
    // （应聘信息）
    // 需userid和token参数，根据身份校验判断是企业还是个
    public function applydata($data = [], $page = 1, $size = 20)
    {
//        from	来源，值为net(网络),market(现场招聘会)
//key	关键词搜索
//type	数据类型，值为1(网络应聘),2(网络面试)
//marketid	现场招聘会编号
//orderid	现场招聘会预定编号
        $data['page'] = $page;
        $data['size'] = $size;
        return $this->wrapResult('/applydata', $data, 'resume');
    }

    public function queryResume($data = [
        'page' => 1,
        'size' => 20
    ])
    {
//        参数	说明
//resumeid	简历编号
//jobid	岗位编号，判断简历是否应聘此岗位
//area	意向地区搜索，值来自地区数据接口
//spec	专业关键词搜索
//edu	学历搜索，值来自学历数据接口
//worktime	工作经验搜索
//minsalary	最低薪资搜索
//maxsalary	最高薪资搜索
//key	关键字搜索
//size	单页数量，默认20
//page	第几页，默认1
        return $this->wrapResult('/getresume', $data, 'resume');
    }

    public function resumerefresh($id)
    {
        return $this->wrapResult('/resumerefresh', ['id' => $id]);
    }

    public function createResume(ResumePo $po)
    {
        return $this->editResume(0, $po);
    }

    public function editResume($id, ResumePo $po)
    {
        return $this->wrapResult('/editresume', array_merge(['id' => $id], $po->toArray()));
    }

    public function applyjob($data = [
        'from' => 'net',
        //        from	来源，值为net(网络),market(现场招聘会)
        //resumeid	简历编号
        //jobid	岗位编号
        //marketid	招聘会编号
        //content	应聘岗位留言，可为空
    ])
    {
        return $this->wrapResult('/applyjob', $data);
    }

    public function getnetmarketjobs($data = [
        'page'      => 1,
        'size'      => 20,
        'marketid'  => 0,
        //        'compid' => '',
        //        'jobid' => '',
        'key'       => '',
        'supersort' => '',
    ])
    {
        return $this->wrapResult('/getnetmarketjobs', $data, 'jobs');
    }

    /**
     * 招聘岗位详情
     * @param $id
     * @return \by\infrastructure\base\CallResult
     */
    public function getJobInfo($id)
    {
        return $this->wrapResult('/getjobinfo', ['id' => $id], 'job');
    }

    public function loginByMobile($data = [
        'mobile' => '',
        'code'   => '',
        'day'    => 1
    ])
    {
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
        if (array_key_exists('info', $json)) {
            return CallResultHelper::fail($json['info']);
        } else {
            if (in_array(ltrim($service, '/'), self::$dataCodeMethods)) {
                return CallResultHelper::success($json);
            }
            return CallResultHelper::fail($json);
        }
    }


}
