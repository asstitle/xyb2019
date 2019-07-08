<?php

namespace app\admin\controller;
use cmf\controller\AdminBaseController;
//班级课表
class GradeController extends AdminBaseController
{
    //原始课表
    public function origin_kb(){
        return $this->fetch();
    }
    //实时课表
    public function real_kb(){
        return $this->fetch();
    }
}