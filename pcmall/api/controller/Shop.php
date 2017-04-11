<?php
namespace app\api\controller;

class Shop
{
    public function product_list($page = 1, $pageSize = 10, $shopId = '', $categoryId = '', $recommendStatus = '')
    {
        $api_url = config('api.url');
        $url = $api_url . '/shop/goods/list/';
        $data = [
            'page' => $page,
            'pageSize' => $pageSize,
            'shopId' => $shopId,
            'categoryId' => $categoryId,
            'recommendStatus' => $recommendStatus
        ];
        $list = https_request($url, $data);
        $list = json_decode($list, true);
        $list = $list['data'];

        return $list;
    }
}