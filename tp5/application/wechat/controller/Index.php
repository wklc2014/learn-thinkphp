<?php
namespace app\wechat\controller;

use think\Controller;
use think\Request;

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
        return '<h1>demo</h1>';
    }
}
