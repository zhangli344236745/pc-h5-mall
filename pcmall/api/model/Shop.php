<?php
namespace app\api\model;

class Shop
{

    public function product_list()
    {
        $api_url = config('api.url');
        return $api_url;
    }
}