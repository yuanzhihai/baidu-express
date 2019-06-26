<?php

namespace BDExpress;

use Curl\Curl;

class BDExpress
{

    /**
     * @var Curl
     */
    public $curl;

    /**
     * 查询地址
     * @var string
     */
    public $url = 'https://sp0.baidu.com/9_Q4sjW91Qh3otqbppnN2DJv/pae/channel/data/asyncqury';

    /**
     * BDExpress constructor.
     */
    public function __construct()
    {
        $this->curl = new Curl();

        $this->curl->setHeaders([
            'User-Agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:67.0) Gecko/20100101 Firefox/67.0',
        ]);

        $this->curl->get('https://www.baidu.com/');

        $this->curl->setCookies($this->curl->getResponseCookies());
    }

    /**
     * search
     * @param $number
     * @return array
     */
    public function search($number)
    {

        $this->curl->setDefaultJsonDecoder(1);

        $this->curl->get($this->url, [
            'appid' => 4001,
            'com'   => '',
            'nu'    => $number,
        ]);

        $response = $this->curl->response;

        if (!empty($response['data']['info'])) {

            return $response['data']['info'];

        }

        return [];
    }

}