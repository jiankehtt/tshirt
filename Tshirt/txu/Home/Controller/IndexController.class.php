<?php
namespace Home\Controller;
use Think\Controller;
use weixin\menu\MenuUtil;
class IndexController extends Controller {
    public function index(){
        print_r(MenuUtil::createMenu());
    }
}