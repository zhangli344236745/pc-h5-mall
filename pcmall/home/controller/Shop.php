<?php
namespace app\home\controller;

use think\Controller;

class Shop extends Controller
{
    public function index()
    {
        $type = input('type', 1, 'intval');
        $tpl = $type == 1 ? 'grid' : 'list';
        $p = input('p') ?: 1;
        $page_size = input('page_size') ?: 6;

        $list = controller('api/shop')->product_list($p, $page_size);
        $this->assign('list', $list);
        return $this->fetch($tpl);
    }
}