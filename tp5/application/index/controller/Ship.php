<?php
namespace app\index\controller;

use think\Controller;
use topthink\thinkCaptcha;
use think\Session;

class Ship extends Controller
{

    public function index()
    {
        Session::set('test_1', 'AAA');
        Session::set('test_2', 'aaa');
        Session::set('test_22', '_aaa');
        Session::set('test_33', '333');
        Session::set('test_1', 'CCC', 'gbk');
        Session::set('test_2', 'ddd', 'gbk');
        $all_session = Session::get();
        $all = Session::get();
        dump($all_session);
        dump($all);
        return '<h1>app index Ship index</h1>';
    }

    public function road()
    {
        // Session::prefix('gbk');
        $msg = Session::get('test_55');
        Session::flash('test_55', 'hhh');
        dump($msg);
        return '<h1>app index Ship road</h1>';
    }

    public function car()
    {
        // dump($_SESSION);
        return '<h1>app index Ship car</h1>';
    }

}
