<?php
namespace app\admin\controller;
use cmf\controller\AdminBaseController;
//基本设置
class BasicSetController extends AdminBaseController
{
     //班级信息
     public function class_info(){
         return $this->fetch();
     }
     //添加班级
     public function add_class(){
         return $this->fetch();
     }
     //添加班级提交
     public function addPost(){

     }
     //学年学期
     public function school_semester(){
         return $this->fetch();
     }
     //作息时间
     public function time_table(){
         return $this->fetch();
     }
     //添加节次
     public function add_node_time(){
         return $this->fetch();
     }
     //添加节次提交
     public function addNodePost(){

     }
     //课程信息
     public function course_info(){
         return $this->fetch();
     }
    //任教信息
    public function teach_info(){
         return $this->fetch();
    }


}