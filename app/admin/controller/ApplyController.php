<?php
namespace app\admin\controller;


use cmf\controller\AdminBaseController;
//调代课申请
class ApplyController extends AdminBaseController
{
    //代课申请
    public function dk_apply(){
        return $this->fetch();
    }
    //调课申请
    public function tk_apply(){
        return $this->fetch();
    }

}