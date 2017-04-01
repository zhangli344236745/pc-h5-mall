<?php
namespace app\home\controller;

use think\Controller;

class Contact extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}