<?php


namespace Qinjd\Dingxiang;


class CaptchaService
{
    /**
     * @var $appId
     */
    protected $appId;

    /**
     * @var $appSecret
     */
    protected $appSecret;

    /**
     * @var $timeout
     */
    protected $timeout;

    /**
     * @var CaptchaClient
     */
    protected $client;

    public function __construct()
    {
        $this->appId = config('captcha.app_id');
        $this->appSecret = config('captcha.app_secret');
        $this->timeout = config('captcha.timeout');
        $this->client = new CaptchaClient($this->appId, $this->appSecret);
        $this->client->setTimeOut($this->timeout);      //设置超时时间
    }

    /**
     * Captcha check
     *
     * @param $value
     * @return bool
     */
    public function check($token)
    {
        $response = $this->client->verifyToken($token);

        if ($response->result) {
            return true;
        } else {
            return false;
        }
    }

}