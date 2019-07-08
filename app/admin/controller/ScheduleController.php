<?php

namespace app\admin\controller;


use cmf\controller\AdminBaseController;

class ScheduleController extends AdminBaseController
{
    //我的日程
    public function index(){
        return $this->fetch();
    }
}