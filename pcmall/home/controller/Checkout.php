<?php
namespace app\home\controller;

use think\Controller;

class Checkout extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}