<?php

namespace application\controllers;

use application\core\Config;
use application\core\Controller;
use application\core\Request;
use application\models\ModelCountry;
use application\models\ModelMain;

use \GuzzleHttp\Client as Client;
use GuzzleHttp\Exception\GuzzleException;

class ControllerMain extends Controller
{


    public function index()
    {
        $this->view->generate('form.php');
    }

    public function test()
    {
        $post = Request::post();
        $this->view->generate('test.php', ['post' => $post]);
    }


    public function p()
    {
        $data = Request::post();
        $this->parseCurl($data);
    }

    private function parseCurl($data)
    {
        $ch = curl_init($data['url']);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0');
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_PROXY, $data['proxy']);

        if ($data['type'] === 'post'){
            curl_setopt($ch, CURLOPT_POST, true);
            if ($data['postParams']){
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data['postParams']);
            }
        }

        if ($data['headers']) {
            $headers = explode("\n", $data['headers']);
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


        switch ($data['proxyType']){
            case 'socks5':
                curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
                break;

            case 'http':
                curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
                break;

            case 'https':
                curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTPS);
        }

        $html = curl_exec($ch);


        $fp = fopen('output/parse1.html', 'w+');
        fwrite($fp, $html);
        fclose($fp);

        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        echo json_encode([
            'code' => $http_code]);
        curl_close($ch);
    }

}