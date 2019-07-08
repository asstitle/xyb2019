<?php

namespace app\admin\controller;


use cmf\controller\AdminBaseController;
//我的日程
class ScheduleController extends AdminBaseController
{
    //我的课表
    public function index(){
        return $this->fetch();
    }
    //我的调课情况
    public function adjustment(){
        return $this->fetch();
    }
}