<?php

namespace Peter\TzApi;

class TzConfig
{
    const USER_TYPE_ENTERPRISE = 1;
    const USER_TYPE_JOB_HUNTER = 2;

    protected $label;
    protected $secret;
    protected $machine;
    protected $token;
    protected $comefrom;


    /**
     * @param $comefrom
     */
    public function __construct($label, $secret, $comefrom = 'xixunyun')
    {
        $this->comefrom = $comefrom;
        $this->label = $label;
        $this->secret = $secret;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param mixed $secret
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
    }

    /**
     * @return mixed
     */
    public function getMachine()
    {
        return $this->machine;
    }

    /**
     * @param mixed $machine
     */
    public function setMachine($machine)
    {
        $this->machine = $machine;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return mixed|string
     */
    public function getComefrom()
    {
        return $this->comefrom;
    }

    /**
     * @param mixed|string $comefrom
     */
    public function setComefrom($comefrom)
    {
        $this->comefrom = $comefrom;
    }



}
