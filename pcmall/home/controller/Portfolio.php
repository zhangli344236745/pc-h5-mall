<?php
namespace app\home\controller;

use think\Controller;

class Portfolio extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}