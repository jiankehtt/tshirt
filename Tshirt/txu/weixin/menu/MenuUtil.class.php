<?php
namespace weixin\menu;

use weixin\accessToken\AccessTokenUtil;
class MenuUtil
{

    const MENU_URL = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token=%s';


    /**
     * 创建微信菜单
     */
    public static function createMenu()
    {
        $menu = array(
            'button' => array(
                array(
                    'name' => urlencode('热门排行'),
                    'type' => 'view',
                    'url' => 'http://www.baidu.com'
                ), array(
                    'name' => urlencode('关于瞬创'),
                    'type' => 'view',
                    'url' => 'http://www.baidu.com'
                ), array(
                    'name' => urlencode('我'),
                    'type' => 'view',
                    'url' => 'http://www.baidu.com'
                )
            )
        );
        
        $url = sprintf(MenuUtil::MENU_URL,AccessTokenUtil::getAccessToken());
        $param = urldecode(json_encode($menu));
        $res =  http_post($url, $param);
        echo $res;
        
    }
}
