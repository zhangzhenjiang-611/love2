<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return 'hello world';

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
