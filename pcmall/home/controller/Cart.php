<?php
namespace app\home\controller;

use think\Controller;

class Cart extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}