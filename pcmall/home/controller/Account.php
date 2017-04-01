<?php
namespace app\home\controller;

use think\Controller;

class Account extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}