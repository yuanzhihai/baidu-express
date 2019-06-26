<?php

namespace Express;

use Curl\Curl;

class BDExpress
{

    /**
     * @var Curl
     */
    private $curl;

    /**
     * 查询地址
     * @var string
     */
    private $url = 'https://sp0.baidu.com/9_Q4sjW91Qh3otqbppnN2DJv/pae/channel/data/asyncqury';

    /**
     * BDExpress constructor.
     */
    private function __construct()
    {
        $this->curl = new Curl();

        $this->curl->setHeaders([
            'User-Agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:67.0) Gecko/20100101 Firefox/67.0',
        ]);

        $this->curl->get('https://www.baidu.com/');

        $this->curl->setCookies($this->curl->getResponseCookies());
    }

    /**
     * searchExpress
     * @param $number
     * @return array
     */
    public static function searchExpress($number)
    {
        static $instance;
        if( !$instance instanceof BDExpress ) {
            $instance = new BDExpress();
        }
        return $instance->search($number);
    }

    /**
     * search
     * @param $number
     * @return array
     */
    private function search($number)
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