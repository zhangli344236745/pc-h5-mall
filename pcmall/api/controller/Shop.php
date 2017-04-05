<?php
namespace app\api\controller;

class Shop
{
    public function product_list()
    {
        $api_url = config('api.url');
        $url = $api_url . '/shop/goods/list';
        $list = get_data($url);
        $list = json_decode($list, true);
        $list = $list['data'];

        return $list;
    }
}