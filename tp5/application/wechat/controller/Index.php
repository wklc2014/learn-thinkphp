<?php
namespace app\wechat\controller;

use think\Controller;
use think\Request;
use think\Config;

class Index
{
    public function index(Request $request)
    {
        $token = 'wangkun30749';
        $timestamp = $request->get('timestamp');
        $nonce = $request->get('nonce');
        $signature = $request->get('signature');
        $echostr = $request->get('echostr');

        $temp_array = array($token, $timestamp, $nonce);
        sort($temp_array);
        $temp_string = sha1(implode('', $temp_array));

        if ($temp_string == $signature) {
          echo $echostr;
          exit;
        }
    }

    public function demo()
    {
        Config::load(CONF_PATH . '/wechat/extra/map.ini');
        Config::load(CONF_PATH . '/wechat/name.php');
        $config_content = '[wechat]
            wechat_demo_1=val
            wechat_demo_2=val';
        // Config::parse($config_content, 'ini');
        $config = Config::get();
        dump($config);
        return '<h1>demo</h1>';
    }

    public function hello()
    {
        $config = Config::get();
        dump($config);
        return '<h1>Hello</h1>';
    }
}
