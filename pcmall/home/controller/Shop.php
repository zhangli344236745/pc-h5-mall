<?php
namespace app\home\controller;

use think\Controller;

class Shop extends Controller
{
    public function index()
    {
        $type = input('type', 1, 'intval');
        $tpl = $type == 1 ? 'grid' : 'list';

        $list = controller('api/shop')->product_list();
        $this->assign('list', $list);
        return $this->fetch($tpl);
    }
}