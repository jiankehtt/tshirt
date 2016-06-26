<?php
namespace weixin\accessToken;

/**
 * 处理accesstoken的工具类
 * 
 * @author peter
 *        
 */
class AccessTokenUtil
{

    const APP_ID = 'wx6ae6382d7e746eca';

    const APP_CECREAT = 'd4624c36b6795d1d99dcf0547af5443d';

    const TOKEN_URL = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s';

    /**
     * 获取accesstoken的工具方法
     *
     * {"access_token":"koYwLDCe7ElfIfa2zwtI4436q6P_tUGn9KOo9mZ4O3Rakv41v3oJJs1uH_-DI8OxeelGNjQ6tvB7ciIORhNjDW5EBjJBQ9zI6pXEIWFUGk3LhSoYCJUR2PFqoYxU24Q8CMPgAAAUEH","expires_in":7200}
     */
    public static function getAccessToken()
    {
        if (! $_SESSION['accessToken'] || time()- $_SESSION['expires_in'] > 7000) {
            $url = sprintf(AccessTokenUtil::TOKEN_URL, AccessTokenUtil::APP_ID, AccessTokenUtil::APP_CECREAT);
            $backData = http_get($url);
            
            $data = json_decode($backData, true);
            $_SESSION['accessToken'] = $data['access_token'];
            $_SESSION['expires_in'] = time();
        }     
        
        return $_SESSION['accessToken'];
    }
}

?>