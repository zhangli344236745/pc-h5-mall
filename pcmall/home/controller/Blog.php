<?php
namespace app\home\controller;

use think\Controller;

class Blog extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}