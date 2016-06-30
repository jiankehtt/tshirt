<?php
namespace Home\Controller;
use Think\Controller;
use weixin\menu\MenuUtil;
class IndexController extends Controller {
    public function index(){
           //创建微信菜单
        print_r(MenuUtil::createMenu());
//         $this->display();
    }
}