<?php

namespace PeterAsasi\TzApi;

use by\infrastructure\helper\Object2DataArrayHelper;

class ResumePo
{

    protected $type; //简历类型，值0(普通简历),1(学生简历),2(高级简历)
    protected $name; //姓名，必填
    protected $sex; //性别，值为1(男),2(女)，必填
    protected $height; //身高(米)
    protected $weight; //体重(kg)
    protected $birthday; //出生日期
    protected $homearea; //户口所在地，值来自地区数据接口，必填
    protected $currentarea; //当前所在地，值来自地区数据接口，必填
    protected $marry; //婚姻状况，值来自婚姻状况数据接口
    protected $polit; //政治面貌，值来自政治面貌数据接口
    protected $edu; //学历，值来自学历数据接口，必填
    protected $school; //毕业院校，值来自院校数据接口，必填
    protected $schoolcode; //院校代码，值来自院校数据接口，必填
    protected $spec; //毕业专业，值来自专业数据接口，必填
    protected $speccode; //专业代码，值来自专业数据接口，必填
    protected $overedutime; //毕业日期
    protected $prof; //职称，值来自职称数据接口
    protected $currentwork; //当前工作，值来自岗位类型接口接口
    protected $worktime; //工作经验
    protected $mobile; //手机号码，若用户不存在，会根据手机号码创建新用户，必填
    protected $address; //联系地址
    protected $postal; //邮政编码
    protected $phone; //固定电话
    protected $email; //电子邮箱
    protected $qq; //QQ号码
    protected $weixin; //微信号码
    protected $worktype; //工作性质
    protected $needjob; //欲从事岗位，值来自岗位类型接口接口，必填
    protected $needjobname; //欲从事岗位名称，值来自岗位类型接口接口，必填
    protected $needarea; //意向地区，值来自地区数据接口，必填
    protected $needareaname; //意向地区名称，值来自地区数据接口，必填
    protected $minsalary; //最低薪资，必填
    protected $maxsalary; //最高薪资，必填
    protected $arrive; //到岗时间
    protected $needother; //其它要求
    protected $englishlevel; //英语水平
    protected $speaklevel; //英语口语
    protected $language; //其他语言
    protected $languagename; //其他语言情况
    protected $zwjs; //自我评价，必填
    protected $gzjl; //工作经历，必填
    protected $jyjl; //教育经历
    protected $pxjl; //培训经历
    protected $xmjy; //项目经验
    protected $sxjl; //实习经历
    protected $jxjqk; //奖学金情况
    protected $qtjl; //其他奖励
    protected $xndrzw; //校内担任职务
    protected $xnhd; //校内活动
    protected $shhd; //社会活动
    protected $zsqk; //证书情况
    protected $qtjn; //其他技能
    protected $grah; //个人爱好
    protected $fjxx; //附加信息

    public function toArray()
    {
        return Object2DataArrayHelper::getDataArrayFrom($this);
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getHomearea()
    {
        return $this->homearea;
    }

    /**
     * @param mixed $homearea
     */
    public function setHomearea($homearea)
    {
        $this->homearea = $homearea;
    }

    /**
     * @return mixed
     */
    public function getCurrentarea()
    {
        return $this->currentarea;
    }

    /**
     * @param mixed $currentarea
     */
    public function setCurrentarea($currentarea)
    {
        $this->currentarea = $currentarea;
    }

    /**
     * @return mixed
     */
    public function getMarry()
    {
        return $this->marry;
    }

    /**
     * @param mixed $marry
     */
    public function setMarry($marry)
    {
        $this->marry = $marry;
    }

    /**
     * @return mixed
     */
    public function getPolit()
    {
        return $this->polit;
    }

    /**
     * @param mixed $polit
     */
    public function setPolit($polit)
    {
        $this->polit = $polit;
    }

    /**
     * @return mixed
     */
    public function getEdu()
    {
        return $this->edu;
    }

    /**
     * @param mixed $edu
     */
    public function setEdu($edu)
    {
        $this->edu = $edu;
    }

    /**
     * @return mixed
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * @param mixed $school
     */
    public function setSchool($school)
    {
        $this->school = $school;
    }

    /**
     * @return mixed
     */
    public function getSchoolcode()
    {
        return $this->schoolcode;
    }

    /**
     * @param mixed $schoolcode
     */
    public function setSchoolcode($schoolcode)
    {
        $this->schoolcode = $schoolcode;
    }

    /**
     * @return mixed
     */
    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * @param mixed $spec
     */
    public function setSpec($spec)
    {
        $this->spec = $spec;
    }

    /**
     * @return mixed
     */
    public function getSpeccode()
    {
        return $this->speccode;
    }

    /**
     * @param mixed $speccode
     */
    public function setSpeccode($speccode)
    {
        $this->speccode = $speccode;
    }

    /**
     * @return mixed
     */
    public function getOveredutime()
    {
        return $this->overedutime;
    }

    /**
     * @param mixed $overedutime
     */
    public function setOveredutime($overedutime)
    {
        $this->overedutime = $overedutime;
    }

    /**
     * @return mixed
     */
    public function getProf()
    {
        return $this->prof;
    }

    /**
     * @param mixed $prof
     */
    public function setProf($prof)
    {
        $this->prof = $prof;
    }

    /**
     * @return mixed
     */
    public function getCurrentwork()
    {
        return $this->currentwork;
    }

    /**
     * @param mixed $currentwork
     */
    public function setCurrentwork($currentwork)
    {
        $this->currentwork = $currentwork;
    }

    /**
     * @return mixed
     */
    public function getWorktime()
    {
        return $this->worktime;
    }

    /**
     * @param mixed $worktime
     */
    public function setWorktime($worktime)
    {
        $this->worktime = $worktime;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPostal()
    {
        return $this->postal;
    }

    /**
     * @param mixed $postal
     */
    public function setPostal($postal)
    {
        $this->postal = $postal;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getQq()
    {
        return $this->qq;
    }

    /**
     * @param mixed $qq
     */
    public function setQq($qq)
    {
        $this->qq = $qq;
    }

    /**
     * @return mixed
     */
    public function getWeixin()
    {
        return $this->weixin;
    }

    /**
     * @param mixed $weixin
     */
    public function setWeixin($weixin)
    {
        $this->weixin = $weixin;
    }

    /**
     * @return mixed
     */
    public function getWorktype()
    {
        return $this->worktype;
    }

    /**
     * @param mixed $worktype
     */
    public function setWorktype($worktype)
    {
        $this->worktype = $worktype;
    }

    /**
     * @return mixed
     */
    public function getNeedjob()
    {
        return $this->needjob;
    }

    /**
     * @param mixed $needjob
     */
    public function setNeedjob($needjob)
    {
        $this->needjob = $needjob;
    }

    /**
     * @return mixed
     */
    public function getNeedjobname()
    {
        return $this->needjobname;
    }

    /**
     * @param mixed $needjobname
     */
    public function setNeedjobname($needjobname)
    {
        $this->needjobname = $needjobname;
    }

    /**
     * @return mixed
     */
    public function getNeedarea()
    {
        return $this->needarea;
    }

    /**
     * @param mixed $needarea
     */
    public function setNeedarea($needarea)
    {
        $this->needarea = $needarea;
    }

    /**
     * @return mixed
     */
    public function getNeedareaname()
    {
        return $this->needareaname;
    }

    /**
     * @param mixed $needareaname
     */
    public function setNeedareaname($needareaname)
    {
        $this->needareaname = $needareaname;
    }

    /**
     * @return mixed
     */
    public function getMinsalary()
    {
        return $this->minsalary;
    }

    /**
     * @param mixed $minsalary
     */
    public function setMinsalary($minsalary)
    {
        $this->minsalary = $minsalary;
    }

    /**
     * @return mixed
     */
    public function getMaxsalary()
    {
        return $this->maxsalary;
    }

    /**
     * @param mixed $maxsalary
     */
    public function setMaxsalary($maxsalary)
    {
        $this->maxsalary = $maxsalary;
    }

    /**
     * @return mixed
     */
    public function getArrive()
    {
        return $this->arrive;
    }

    /**
     * @param mixed $arrive
     */
    public function setArrive($arrive)
    {
        $this->arrive = $arrive;
    }

    /**
     * @return mixed
     */
    public function getNeedother()
    {
        return $this->needother;
    }

    /**
     * @param mixed $needother
     */
    public function setNeedother($needother)
    {
        $this->needother = $needother;
    }

    /**
     * @return mixed
     */
    public function getEnglishlevel()
    {
        return $this->englishlevel;
    }

    /**
     * @param mixed $englishlevel
     */
    public function setEnglishlevel($englishlevel)
    {
        $this->englishlevel = $englishlevel;
    }

    /**
     * @return mixed
     */
    public function getSpeaklevel()
    {
        return $this->speaklevel;
    }

    /**
     * @param mixed $speaklevel
     */
    public function setSpeaklevel($speaklevel)
    {
        $this->speaklevel = $speaklevel;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return mixed
     */
    public function getLanguagename()
    {
        return $this->languagename;
    }

    /**
     * @param mixed $languagename
     */
    public function setLanguagename($languagename)
    {
        $this->languagename = $languagename;
    }

    /**
     * @return mixed
     */
    public function getZwjs()
    {
        return $this->zwjs;
    }

    /**
     * @param mixed $zwjs
     */
    public function setZwjs($zwjs)
    {
        $this->zwjs = $zwjs;
    }

    /**
     * @return mixed
     */
    public function getGzjl()
    {
        return $this->gzjl;
    }

    /**
     * @param mixed $gzjl
     */
    public function setGzjl($gzjl)
    {
        $this->gzjl = $gzjl;
    }

    /**
     * @return mixed
     */
    public function getJyjl()
    {
        return $this->jyjl;
    }

    /**
     * @param mixed $jyjl
     */
    public function setJyjl($jyjl)
    {
        $this->jyjl = $jyjl;
    }

    /**
     * @return mixed
     */
    public function getPxjl()
    {
        return $this->pxjl;
    }

    /**
     * @param mixed $pxjl
     */
    public function setPxjl($pxjl)
    {
        $this->pxjl = $pxjl;
    }

    /**
     * @return mixed
     */
    public function getXmjy()
    {
        return $this->xmjy;
    }

    /**
     * @param mixed $xmjy
     */
    public function setXmjy($xmjy)
    {
        $this->xmjy = $xmjy;
    }

    /**
     * @return mixed
     */
    public function getSxjl()
    {
        return $this->sxjl;
    }

    /**
     * @param mixed $sxjl
     */
    public function setSxjl($sxjl)
    {
        $this->sxjl = $sxjl;
    }

    /**
     * @return mixed
     */
    public function getJxjqk()
    {
        return $this->jxjqk;
    }

    /**
     * @param mixed $jxjqk
     */
    public function setJxjqk($jxjqk)
    {
        $this->jxjqk = $jxjqk;
    }

    /**
     * @return mixed
     */
    public function getQtjl()
    {
        return $this->qtjl;
    }

    /**
     * @param mixed $qtjl
     */
    public function setQtjl($qtjl)
    {
        $this->qtjl = $qtjl;
    }

    /**
     * @return mixed
     */
    public function getXndrzw()
    {
        return $this->xndrzw;
    }

    /**
     * @param mixed $xndrzw
     */
    public function setXndrzw($xndrzw)
    {
        $this->xndrzw = $xndrzw;
    }

    /**
     * @return mixed
     */
    public function getXnhd()
    {
        return $this->xnhd;
    }

    /**
     * @param mixed $xnhd
     */
    public function setXnhd($xnhd)
    {
        $this->xnhd = $xnhd;
    }

    /**
     * @return mixed
     */
    public function getShhd()
    {
        return $this->shhd;
    }

    /**
     * @param mixed $shhd
     */
    public function setShhd($shhd)
    {
        $this->shhd = $shhd;
    }

    /**
     * @return mixed
     */
    public function getZsqk()
    {
        return $this->zsqk;
    }

    /**
     * @param mixed $zsqk
     */
    public function setZsqk($zsqk)
    {
        $this->zsqk = $zsqk;
    }

    /**
     * @return mixed
     */
    public function getQtjn()
    {
        return $this->qtjn;
    }

    /**
     * @param mixed $qtjn
     */
    public function setQtjn($qtjn)
    {
        $this->qtjn = $qtjn;
    }

    /**
     * @return mixed
     */
    public function getGrah()
    {
        return $this->grah;
    }

    /**
     * @param mixed $grah
     */
    public function setGrah($grah)
    {
        $this->grah = $grah;
    }

    /**
     * @return mixed
     */
    public function getFjxx()
    {
        return $this->fjxx;
    }

    /**
     * @param mixed $fjxx
     */
    public function setFjxx($fjxx)
    {
        $this->fjxx = $fjxx;
    }
}
