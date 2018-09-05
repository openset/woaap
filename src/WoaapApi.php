<?php

namespace Openset;

/**
 * Woaap微信中控接口
 * Class WoaapApi.
 */
class WoaapApi
{
    // appid
    const APPID = '';
    // appkey
    const APPKEY = '';
    // 基础域名
    const API_BASE_URI = 'https://api.woaap.com/';
    // ackey地址
    const API_ACKEY_URI = 'api/ackey';
    // accesstoken地址
    const API_ACCESSTOKEN_URI = 'api/accesstoken';
    // jsticket地址
    const API_JSTICKET_URI = 'api/jsticket';
    // apiticket地址
    const API_APITICKET_URI = 'api/apiticket';
    // 客服接口地址
    const API_MESSAGE_CUSTOM_SEND_URI = 'api/message-custom-send';

    /**
     * get请求
     * @param       $url
     * @param array $query
     * @return bool|mixed
     */
    public static function getRequest($url, $query = [])
    {
        return HttpClient::parseJSON('get', [$url, compact('query')]);
    }

    /**
     * 获取ackey接口
     * @param $appid
     * @param $appkey
     * @return bool|mixed
     */
    public static function getAckey($appid, $appkey)
    {
        $_url = self::API_BASE_URI . self::API_ACKEY_URI;

        return self::getRequest($_url, compact('appid', 'appkey'));
    }

    /**
     * 获取Access_token
     * @param $ackey
     * @return bool|mixed
     */
    public static function getAccessToken($ackey)
    {
        $_url = self::API_BASE_URI . self::API_ACCESSTOKEN_URI;

        return self::getRequest($_url, compact('ackey'));
    }

    /**
     * 获取Js_ticket
     * @param $ackey
     * @return bool|mixed
     */
    public static function getJsTicket($ackey)
    {
        $_url = self::API_BASE_URI . self::API_JSTICKET_URI;

        return self::getRequest($_url, compact('ackey'));
    }

    /**
     * 获取Api_ticket
     * @param $ackey
     * @return bool|mixed
     */
    public static function getApiTicket($ackey)
    {
        $_url = self::API_BASE_URI . self::API_APITICKET_URI;

        return self::getRequest($_url, compact('ackey'));
    }

    /**
     * 客服接口-发消息
     * @param $ackey
     * @param $toUser
     * @param $msgType
     * @param $param
     * @return bool|mixed
     */
    public static function sendCustomMessage($ackey, $toUser, $msgType, $param)
    {
        $_url = self::API_BASE_URI . self::API_MESSAGE_CUSTOM_SEND_URI;

        $data = [
                'touser'  => $toUser,
                'msgtype' => $msgType,
            ] + $param;

        return HttpClient::parseJSON('json', [
            $_url,
            $data,
            compact('ackey'),
        ]);
    }

}
