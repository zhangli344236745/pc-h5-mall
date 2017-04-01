<?php
namespace app\home\controller;

use think\Controller;

class Shop extends Controller
{
    public function index()
    {
        $type = input('type', 1, 'intval');
        $tpl = $type == 1 ? 'grid' : 'list';
        return $this->fetch($tpl);
    }
}